@extends('layouts.app', ['activePage' => 'post', 'titlePage' => __('Create a post')])

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">Posts</h4>
                            <p class="card-category">List of posts</p>
                        </div>
                        <div class="card-body">
                            <div class="text-right mb-2">
                                <a id="add_Category" href="{{route('posts')}}" class="btn btn-sm btn-success">
                                    <i class="material-icons">create</i>
                                    {{ __('Create a post') }}</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" id="post_table"  style="width: 100%;">
                                    <thead class="text-secondary">
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Body') }}</th>
                                    <th>{{ __('Likes') }}</th>
                                    <th>{{__('Views')}}</th>
                                    <th>{{__('Time')}}</th>
                                    <th>{{__('Image')}}</th>
                                    <th>{{__('Video')}}</th>
                                    <th>{{__('Links')}}</th>
                                    <th class="text-center">{{ __('Actions') }}</th>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal delete post-->
    <div class="modal fade" id="post_delete" tabindex="-1" role="dialog" aria-labelledby="product_deleteTitle" aria-hidden="true">
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
                    <input type="text" id="post_id" hidden/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="delete_post">Delete</button>
                </div>
            </div>
        </div>
    </div>
    @endsection
@push('post')
<script src="{{ asset('material') }}/js/custom/post.js"></script>
@endpush