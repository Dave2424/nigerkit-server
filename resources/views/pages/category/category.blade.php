@extends('layouts.app', ['activePage' => 'category', 'titlePage' => __('Category')])

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <div class="line" style="display: none"></div>
                            <h4 class="card-title ">Categories</h4>
                            <p class="card-category">display of categories for different products</p>
                        </div>
                        <div class="card-body">
                            <div class="row" id="category" style="display: none">
                                <div class="offset-md-2 col-sm-6 col-md-6">
                                    <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('category') ? ' invalid' : '' }}" name="name"
                                               id="input-category" type="text" placeholder="{{ __('Enter category') }}"
                                               required="true" aria-required="true"/>
                                        <span id="name-error" class="error text-danger"
                                              style="display: none"
                                              for="input-category">Input for category cannot be empty</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 text-right">
                                    <a id="add_Category" href="#" class="btn btn-sm btn-success">
                                        <i class="material-icons">add_circle</i>
                                        {{ __('Add') }}</a>
                                    <a id="cancelCategory" href="#" class="btn btn-sm btn-danger">
                                        <i class="material-icons">cancel</i>
                                        {{ __('Cancel') }}</a>
                                </div>
                            </div>
                            <div class="row" id="updatecategory" style="display: none">
                                <div class="offset-md-2 col-sm-6 col-md-6">
                                    <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('category') ? ' invalid' : '' }}" name="name"
                                               id="update-category" type="text" placeholder="{{ __('Enter category') }}"
                                               required="true" aria-required="true"/>
                                        <span id="uname-error" class="error text-danger"
                                              style="display: none"
                                              for="input-category">Input for category cannot be empty</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 text-right">
                                    <a id="update_Category" href="#" class="btn btn-sm btn-success">
                                        <i class="material-icons">add_circle</i>
                                        {{ __('Add') }}</a>
                                    <a id="update_cancelCategory" href="#" class="btn btn-sm btn-danger">
                                        <i class="material-icons">cancel</i>
                                        {{ __('Cancel') }}</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 text-right">
                                    <a id="addcategory" href="#" class="btn btn-sm btn-success">
                                        <i class="material-icons">add_circle</i>
                                        {{ __('Add category') }}</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" id="q">
                                    <thead class=" text-secondary text-center">
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Category') }}</th>
                                    <th>
                                        {{ __('Actions') }}
                                    </th>
                                    </thead>
                                    <tbody id="category_table">
                                    @if (count($categories) > 0)
                                        <p style="display: none">{{$n = 0}}</p>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td class="text-center">{{$n += 1}}</td>
                                                <td class="text-center">{{$category->category}}</td>
                                                <td class="td-actions text-center">
                                                    <button class="btn btn-info btn-link edit" id="{{$category->id}}"
                                                            rel="tooltip" title="Edit category" data-cate="{{$category->category}}">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                    <button type="button" title="Delete"
                                                            rel="tooltip" class="btn btn-danger btn-link delete" id="{{$category->id}}">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                        {{ $categories->links() }}
                                        </tfoot>
                                    @else
                                        <tr>
                                            <th></th>
                                            <th class="text-center">No data found</th>
                                            <th></th>
                                        </tr>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal delete product-->
    <div class="modal fade" id="category_delete" tabindex="-1" role="dialog" aria-labelledby="category_deleteTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categ_delete">Notice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete?
                    <input type="text" id="category_id" hidden/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="delete_category">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('category')
<script src="{{ asset('material') }}/js/custom/category.js"></script>
@endpush