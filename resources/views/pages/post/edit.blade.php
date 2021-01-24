@extends('layouts.app', ['activePage' => 'post-management', 'titlePage' => __('Post Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data"
                    autocomplete="off" class="form-horizontal">
                    @csrf

                    <div class="card ">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">{{ __('Edit Post') }}</h4>
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('post.index') }}">
                                                <i class="material-icons">toc</i> Posts List
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('post.create') }}">
                                                <i class="material-icons">playlist_add</i> Add New Post
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="{{ route('post.index') }}"
                                        class="btn btn-sm btn-success">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="row">
                                        <div class="col-sm-10 ml-auto mr-auto">
                                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                                    name="title" id="input-name" type="text"
                                                    placeholder="{{ __('Post title') }}"
                                                    value="{{ old('title', $post->title) }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('title'))
                                                <span id="post-error" class="error text-danger"
                                                    for="input-name">{{ $errors->first('title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 ml-auto mr-auto">
                                            <div class="form-group">
                                                <label>Post Tags (seperated by comma)</label>
                                                <textarea class="form-control" rows="2" id="input-content"
                                                    name="tags">{{ old('tags', $post->tags) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="row">
                                        <div class="col-sm-10 ml-auto mr-auto">
                                            <div class="form-group">
                                                <select
                                                    class="form-control selectpicker {{ $errors->has('category') ? ' has-danger' : '' }}"
                                                    data-style="btn btn-link" name="category_id" id="input-category"
                                                    required="true" aria-required="true">
                                                    <option disabled>Select post category</option>
                                                    @if(count($categories) > 0)
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}"
                                                        {{(old('category_id', $post->category_id)== $category->id)? "selected" : "" }}>
                                                        {{$category->category}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                                @if ($errors->has('category_id'))
                                                <span id="content-error" class="error text-danger"
                                                    for="input-category">{{ $errors->first('category_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 ml-auto mr-auto">
                                            <div class="form-group">
                                                <label>Other Categories (seperate with comma)</label>
                                                <textarea class="form-control" rows="2" id="input-content"
                                                    name="categories">{{ old('categories', $post->categories) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="form-group form-file-upload form-file-multiple {{ ($errors->has('files') || $errors->has('files.*')) ? ' has-error' : '' }}">
                                        <input id="input-file" type="file" multiple name="files"
                                            class="inputFileHidden" aria-required="true">
                                        <div class="input-group">
                                            <input type="text" class="form-control inputFileVisible"
                                                placeholder="Primary post image(s)"
                                                value="{{ $post->image }}">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-fab btn-round btn-info">
                                                    <i class="material-icons">attach_file</i>
                                                </button>
                                            </span>
                                        </div>
                                        <div class="text-right" style="color:red;letter-spacing: 1px;">
                                            <small>Uploading image will replaced the previous image.</small>
                                        </div>
                                    </div>
                                    @if ($errors->has('files'))
                                    <span id="p_file-error" style="margin-left: 10%" class="error text-danger"
                                        for="input-file">{{ $errors->first('files') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 ml-auto mr-auto">
                                    <div class="form-group">
                                        <label>Post Slug</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('slug') ? ' has-danger' : '' }}"
                                            name="slug" value="{{old('slug', $post->slug)}}">
                                        @if ($errors->has('slug'))
                                        <span id="sku-error" class="error text-danger"
                                            for="input-sku">{{ $errors->first('slug') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 ml-auto mr-auto">
                                    <div
                                        class="form-group {{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <label>Post Description</label>
                                        <textarea id="input-description"
                                            class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                                            rows="4" placeholder="describe the post" name="description"
                                            required="true"
                                            aria-required="true">{{ old('description', $post->description) }}</textarea>
                                        @if ($errors->has('description'))
                                        <span id="description-error" class="error text-danger"
                                            for="input-description">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row m-1">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group {{ $errors->has('body') ? ' is-invalid' : '' }}">
                                    <textarea id="post" class="form-control mr-auto ml-auto {{ $errors->has('body') ? ' is-invalid' : '' }}" name="body">{{ old('body', $post->body)}}</textarea>
                                    </div>
                                </div>
                                @if ($errors->has('body'))
                                    <span id="title-error" class="error text-danger" for="input-post">{{ $errors->first('body') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Save Update') }}</button>
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
