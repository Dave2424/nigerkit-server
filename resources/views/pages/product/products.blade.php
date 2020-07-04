@extends('layouts.app', ['activePage' => 'product', 'titlePage' => __('Products')])

@section('content')
    <div class="content">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-header card-header-tabs card-header-success">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">Activities:</span>
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#viewProduct" data-toggle="tab">
                                                    <i class="material-icons">toc</i> View products
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#addProduct" data-toggle="tab">
                                                    <i class="material-icons">playlist_add</i> Add product
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#view_sku" data-toggle="tab">
                                                    <i class="material-icons">tune</i> Sku No_
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="viewProduct">
                                            <div class="table-responsive">
                                                <table class="table table-hover" id="product_table"  style="width: 100%;">
                                                    <thead class=" text-secondary">
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Description') }}</th>
                                                    <th>{{ __('Quantity') }}</th>
                                                    <th>{{__('Brand')}}</th>
                                                    <th>{{__('Price')}}</th>
                                                    <th>{{__('Sku No')}}</th>
                                                    <th>{{__('Content')}}</th>
                                                    <th>{{__('Files')}}</th>
                                                    <th class="text-center">{{ __('Actions') }}</th>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                        </table>
                                    </div>
                                    </div>

                                    <div class="tab-pane" id="addProduct">
                                        <div class="container">
                                            <form method="post" action="{{ route('add-product') }}"
                                                  enctype="multipart/form-data"
                                                  autocomplete="off" class="form-horizontal">
                                                @csrf
                                                @method('post')
                                            <div class="row">
                                                @if (session('status'))
                                                    <div class="row" style="display: none">
                                                        <div class="col-sm-12">
                                                            <div class="alert alert-success">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                                <span>{{ session('status') }}</span>
                                                                <input type="text" id="success_product" value="{{ session('status') }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-sm-10 ml-auto mr-auto">
                                                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                                                       id="input-name" type="text" placeholder="{{ __('Product name') }}"
                                                                       value="{{ old('name') }}" required="true" aria-required="true"/>
                                                                @if ($errors->has('name'))
                                                                    <span id="product-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-10 ml-auto mr-auto">
                                                            <div class="form-group {{ $errors->has('description') ? ' has-danger' : '' }}">
                                                                <textarea id="input-description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                                         rows="2" placeholder="describe the product" name="description" required="true" aria-required="true"></textarea>
                                                                @if ($errors->has('description'))
                                                                    <span id="description-error" class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-10 ml-auto mr-auto">
                                                            <div class="form-group{{ $errors->has('brand') ? ' has-danger' : '' }}">
                                                                <input class="form-control{{ $errors->has('brand') ? ' is-invalid' : '' }}" name="brand"
                                                                       id="input-brand" type="text" placeholder="{{ __('Product Brand') }}"
                                                                       value="{{ old('brand') }}" required="true" aria-required="true"/>
                                                                @if ($errors->has('brand'))
                                                                    <span id="brand-error" class="error text-danger" for="input-brand">{{ $errors->first('brand') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-10 ml-auto mr-auto">
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="2"
                                                                        id="input-content"
                                                                        placeholder="Content of product if available" name="content"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-10 ml-auto mr-auto mb-lg-2">
                                                            <div class="form-group">
                                                                <select name="type" class="form-control selectpicker" data-style="btn btn-link">
                                                                    <option value="" selected>Select product type</option>
                                                                    <option value="special">special</option>
                                                                    <option value="bestSeller">Best Seller</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-sm-10 ml-auto mr-auto">
                                                            <div class="form-group">
                                                                <select class="form-control selectpicker {{ $errors->has('category') ? ' has-danger' : '' }}"
                                                                        data-style="btn btn-link" name="category_id" id="input-category"
                                                                        required="true" aria-required="true" >
                                                                    <option disabled selected>Select product category</option>
                                                                    @if(count($categories) > 0)
                                                                        @foreach($categories as $category)
                                                                            <option value="{{$category->id}}">{{$category->category}}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    @if ($errors->has('category_id'))
                                                                        <option value="{{ old('category_id') }}"></option>
                                                                        @endif
                                                                </select>
                                                                @if ($errors->has('category_id'))
                                                                    <span id="content-error" class="error text-danger" for="input-category">{{ $errors->first('category_id') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-10 ml-auto mr-auto">
                                                            <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                                                <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price"
                                                                       id="input-price" type="text" placeholder="{{ __('Product price') }}"
                                                                       value="{{ old('price') }}" required="true" aria-required="true"/>
                                                                @if ($errors->has('price'))
                                                                    <span id="price-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-10 ml-auto mr-auto">
                                                            <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                                                <input class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity"
                                                                       id="input-quantity" type="text" placeholder="{{ __('Quantity') }}"
                                                                       value="{{ old('quantity') }}" required="true" aria-required="true"/>
                                                                @if ($errors->has('quantity'))
                                                                    <span id="quantity-error" class="error text-danger" for="input-quantity">{{ $errors->first('quantity') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-10 ml-auto mr-auto">
                                                            <div class="form-group">
                                                                <select class="form-control selectpicker {{ $errors->has('Sku') ? ' has-danger' : '' }}"
                                                                        data-style="btn btn-link" name="Sku" id="input-sku"
                                                                        required="true" aria-required="true" >
                                                                    <option disabled selected>Select product Sku no</option>
                                                                    @if(count($Sku) > 0)
                                                                        @foreach($Sku as $sku_num)
                                                                            @if($sku_num->isvalid == 1)
                                                                                <option value="{{$sku_num->id}}">{{$sku_num->sku_no}}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                    @if ($errors->has('Sku'))
                                                                        <option value="{{ old('Sku') }}"></option>
                                                                    @endif
                                                                </select>
                                                                @if ($errors->has('Sku'))
                                                                    <span id="sku-error" class="error text-danger" for="input-sku">{{ $errors->first('Sku') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-file-upload
                                                            form-file-multiple {{ ($errors->has('files') || $errors->has('files.*')) ? ' has-error' : '' }}">
                                                        <input id="input-file" type="file" multiple name="files[]"
                                                               class="inputFileHidden" required="true" aria-required="true">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inputFileVisible"
                                                                   placeholder="Product image(s)">
                                                            <span class="input-group-btn">
                                                                <button type="button" class="btn btn-fab btn-round btn-info">
                                                                    <i class="material-icons">attach_file</i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('files'))
                                                        <span id="p_file-error" style="margin-left: 10%" class="error text-danger"
                                                              for="input-file">{{ $errors->first('files') }}</span>
                                                    @endif
                                                    @if ($errors->has('files.*'))
                                                        <span id="p_file-error" style="margin-left: 10%" class="error text-danger"
                                                              for="input-file">{{ $errors->first('files.*') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 col-lg-4"></div>
                                                <div class="col-md-4 col-lg-4 col-sm-8 ml-sm-auto mr-sm-auto">
                                                    <button type="submit" class="btn btn-success" style="width:90%">
                                                        <i class="material-icons">add</i> {{__('add product')}}
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                </div>
                                                <div class="col-md-4 col-lg-4"></div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="view_sku">

                                        <div class="text-right mb-2">
                                            <a href="{{route('generate')}}"  class="btn btn-sm btn-success">
                                                <i class="material-icons">create</i>
                                                {{ __('Generate sku') }}</a>
                                        </div>
                                        <table class="table table-hover" id="my-table">
                                            <thead>
                                            <tr>
                                                <th>{{__('Sku No_')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($sku as $sku_single)
                                                <tr>
                                                    <td>{{$sku_single->sku_no}}</td>
                                                </tr>
                                                @endforeach
                                            {{ $sku->links() }}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>


    <!-- Modal delete product-->
    <div class="modal fade" id="product_delete" tabindex="-1" role="dialog" aria-labelledby="product_deleteTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="product_delete">Notice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete?
                    <input type="text" id="product_id" hidden/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="delete_product">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!--Carousel for product files-->
    <div class="modal product_Viewtable" id="productFileModal" tabindex="-1" role="dialog"
         aria-labelledby="productFileModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title modal_text" id="productFileModal"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="productFiles" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators" id="carousel_indactor">
                        </ol>
                        <div class="carousel-inner" id="carousel_img">
                        </div>
                        <a class="carousel-control-prev" href="#productFiles" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#productFiles" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--Modal editing product--->
    <div class="modal fade" id="product_edit" tabindex="-1" role="dialog" aria-labelledby="product_edit" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="product_editH5">Edit product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h6 style="color:red;letter-spacing: 1px"><small>Uploading image will replaced the previous image.</small></h6>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="row">
                                    <div class="col-sm-10 ml-auto mr-auto">
                                        <div class="form-group">
                                            <input class="form-control" name="edit_name"
                                                   id="input-edit_name" type="text" placeholder="{{ __('Product name') }}"
                                                    required="true" aria-required="true"/>
                                                <span id="edit_product-error" class="error text-danger text-error" for="input-edit_name"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 ml-auto mr-auto">
                                        <div class="form-group">
                                                                <textarea id="input-edit_description" class="form-control"
                                                                          rows="2" placeholder="describe the product" name="edit_description" required="true" aria-required="true"></textarea>
                                                <span id="edit_description-error" class="error text-danger text-error" for="input-edit_description"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 ml-auto mr-auto">
                                        <div class="form-group">
                                            <input class="form-control" name="edit_brand"
                                                   id="input-edit_brand" type="text" placeholder="{{ __('Product Brand') }}"
                                                   required="true" aria-required="true"/>
                                                <span id="edit_brand-error" class="error text-danger text-error" for="input-edit_brand"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-10 ml-auto mr-auto">
                                        <div class="form-group">
                                                                <textarea class="form-control" rows="2"
                                                                          id="input-edit_content" required="true" aria-required="true"
                                                                          placeholder="Content of product if available" name="edit_content"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="row">
                                    <div class="col-sm-10 ml-auto mr-auto">
                                        <div class="form-group">
                                            <select class="form-control selectpicker"
                                                    data-style="btn btn-link" name="edit_category_id" id="input-edit_category"
                                                    required="true" aria-required="true" >
                                                <option disabled selected>Select product category</option>
                                                @if(count($categories) > 0)
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->category}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                                <span id="edit_category-error" class="error text-danger text-error" for="input-edit_category"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-10 ml-auto mr-auto">
                                        <div class="form-group">
                                            <input class="form-control" name="edit_price"
                                                   id="input-edit_price" type="text" placeholder="{{ __('Product price') }}"
                                                    required="true" aria-required="true"/>
                                                <span id="edit_price-error" class="error text-danger text-error" for="input-edit_price"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 ml-auto mr-auto">
                                        <div class="form-group">
                                            <input class="form-control" name="edit_quantity"
                                                   id="input-edit_quantity" type="text" placeholder="{{ __('Quantity') }}"
                                                   required="true" aria-required="true"/>
                                                <span id="edit_quantity-error" class="error text-danger text-error" for="input-edit_quantity"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10 ml-auto mr-auto">
                                        <div class="form-group">
                                            <select class="form-control selectpicker {{ $errors->has('Sku') ? ' has-danger' : '' }}"
                                                    data-style="btn btn-link" name="edit_Sku" id="input-edit_sku"
                                                    required="true" aria-required="true" >
                                                <option disabled selected>Select product Sku no</option>
                                                @if(count($Sku) > 0)
                                                    @foreach($Sku as $sku_num)
                                                        @if($sku_num->isvalid == 0)
                                                            <option disabled value="{{$sku_num->id}}">{{$sku_num->sku_no}}</option>
                                                        @else
                                                            <option value="{{$sku_num->id}}">{{$sku_num->sku_no}}</option>
                                                        @endif
                                                    @endforeach
                                                @endif
                                                @if ($errors->has('Sku'))
                                                    <option value="{{ old('Sku') }}"></option>
                                                @endif
                                                <input type="text" hidden id="old_sku_value"/>
                                            </select>
                                            @if ($errors->has('Sku'))
                                                <span id="edit_sku-error" class="error text-danger" for="input-sku">{{ $errors->first('Sku') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-file-upload
                                                            form-file-multiple">
                                    <input id="input-edit_file" type="file" multiple name="edit_files[]"
                                           class="inputFileHidden" required="true" aria-required="true">
                                    <div class="input-group">
                                        <input type="text" class="form-control inputFileVisible"
                                               placeholder="Product image(s)">
                                        <span class="input-group-btn">
                                                                <button type="button" class="btn btn-fab btn-round btn-info">
                                                                    <i class="material-icons">attach_file</i>
                                                                </button>
                                                            </span>
                                    </div>
                                </div>
                                    <span id="edit_p_file-error" style="margin-left: 10%" class="error text-danger text-error"
                                          for="input-edit_file"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="text" id="editProductID" hidden />
                    <button type="button" id="edit_closebtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="edit_product" class="btn btn-info">
                        Edit
                        </button>
                </div>
            </div>
        </div>
    </div>
    @endsection
@push('product')
<script src="{{ asset('material') }}/js/custom/jquery.tabledit.js"></script>
<script src="{{ asset('material') }}/js/custom/product.js"></script>
@endpush