@extends('layouts.app', ['activePage' => 'post', 'titlePage' => __('Create a post')])

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('add-post') }}"
                          enctype="multipart/form-data"
                          autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('post')
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <div class="line" style="display: none"></div>
                                    <h4 class="card-title ">Post</h4>
                                    <p class="card-category">Create a post</p>
                                </div>
                                <div class="card-body">
                                    <div class="text-right">
                                        <a id="add_Category" href="{{route('viewPost')}}" class="btn btn-sm btn-success">
                                            <i class="material-icons">list </i>
                                            {{ __('View posts') }}</a>
                                    </div>
                                        @if (session('status'))
                                            <div class="row" style="display: none">
                                                <div class="col-sm-12">
                                                    <div class="alert alert-success">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                        <span>{{ session('status') }}</span>
                                                        <input type="text" id="success_post" value="{{ session('status') }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3"></div>
                                        <div class="col-sm-8 col-md-8 col-lg-8 ml-sm-auto mr-sm-auto">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title"
                                                               id="input-title" type="text" placeholder="{{ __('Post title') }}"
                                                               value="{{ old('title') }}" required="true" aria-required="true"/>
                                                        @if ($errors->has('title'))
                                                            <span id="title-error" class="error text-danger" for="input-name">{{ $errors->first('title') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group {{ $errors->has('body') ? ' is-invalid' : '' }}">
                                            <textarea id="post" class="form-control mr-auto ml-auto {{ $errors->has('body') ? ' is-invalid' : '' }}"
                                                      name="body"></textarea>
                                            </div>
                                        </div>
                                        @if ($errors->has('body'))
                                            <span id="title-error" class="error text-danger" for="input-post">{{ $errors->first('body') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="row" style="width:100%;">
                                        <div class="col-lg-4 col-md-4"></div>
                                        <div class="col-md-4 col-lg-4 col-sm-6 ml-sm-auto mr-sm-auto">
                                            <button type="submit" class="btn btn-success" style="width: 90%">
                                                <i class="material-icons">add</i> {{__('add product')}}
                                                <div class="ripple-container"></div>
                                            </button>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-lg-4"></div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
@push('post')
<script src="{{ asset('material') }}/js/custom/tinymce/tinymce.min.js"></script>
<script src="{{ asset('material') }}/js/custom/editor.init.js"></script>
<script src="{{ asset('material') }}/js/custom/post.js"></script>
@endpush