@extends('layouts.app', ['activePage' => 'product-management', 'titlePage' => __('Product Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data"
                    autocomplete="off" class="form-horizontal">
                    @csrf

                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Edit Product') }}</h4>
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('product.index') }}">
                                                <i class="material-icons">toc</i> Products List
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('product.create') }}">
                                                <i class="material-icons">playlist_add</i> Add New Product
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
                                    <a href="{{ route('product.index') }}"
                                        class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="row">
                                        <div class="col-sm-10 ml-auto mr-auto">
                                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                    name="name" id="input-name" type="text"
                                                    placeholder="{{ __('Product name') }}"
                                                    value="{{ old('name', $product->name) }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('name'))
                                                <span id="product-error" class="error text-danger"
                                                    for="input-name">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 ml-auto mr-auto">
                                            <div
                                                class="form-group {{ $errors->has('description') ? ' has-danger' : '' }}">
                                                <textarea id="input-description"
                                                    class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                    rows="2" placeholder="describe the product" name="description"
                                                    required="true"
                                                    aria-required="true">{{ old('description', $product->description) }}</textarea>
                                                @if ($errors->has('description'))
                                                <span id="description-error" class="error text-danger"
                                                    for="input-description">{{ $errors->first('description') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 ml-auto mr-auto">
                                            <div class="form-group{{ $errors->has('brand') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control{{ $errors->has('brand') ? ' is-invalid' : '' }}"
                                                    name="brand" id="input-brand" type="text"
                                                    placeholder="{{ __('Product Brand') }}"
                                                    value="{{ old('brand', $product->brand) }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('brand'))
                                                <span id="brand-error" class="error text-danger"
                                                    for="input-brand">{{ $errors->first('brand') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-10 ml-auto mr-auto">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="2" id="input-content"
                                                    placeholder="Content of product if available"
                                                    name="content">{{ old('content', $product->content) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 ml-auto mr-auto mb-lg-2">
                                            <div class="form-group">
                                                <select name="type" class="form-control selectpicker"
                                                    data-style="btn btn-link">
                                                    <option value="">Select product type</option>
                                                    <option value="special"
                                                        {{(old('type', $product->type)== "special")? "selected" : "" }}>
                                                        special</option>
                                                    <option value="bestSeller"
                                                        {{(old('type', $product->type)== "bestSeller")? "selected" : "" }}>
                                                        Best Seller</option>
                                                </select>
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
                                                    <option disabled>Select product category</option>
                                                    @if(count($categories) > 0)
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}"
                                                        {{(old('category_id', $product->category_id)== $category->id)? "selected" : "" }}>
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
                                            <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                                    name="price" id="input-price" type="text"
                                                    placeholder="{{ __('Product price') }}"
                                                    value="{{ old('price',$product->price) }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('price'))
                                                <span id="price-error" class="error text-danger"
                                                    for="input-price">{{ $errors->first('price') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 ml-auto mr-auto">
                                            <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}"
                                                    name="quantity" id="input-quantity" type="text"
                                                    placeholder="{{ __('Quantity') }}"
                                                    value="{{ old('quantity', $product->quantity) }}" required="true"
                                                    aria-required="true" />
                                                @if ($errors->has('quantity'))
                                                <span id="quantity-error" class="error text-danger"
                                                    for="input-quantity">{{ $errors->first('quantity') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 ml-auto mr-auto">
                                            <div class="form-group">
                                                <input type="text"
                                                    class="form-control {{ $errors->has('Sku') ? ' has-danger' : '' }}"
                                                    name="Sku" value="{{old('Sku', $product->Sku)}}">
                                                @if ($errors->has('Sku'))
                                                <span id="sku-error" class="error text-danger"
                                                    for="input-sku">{{ $errors->first('Sku') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="form-group form-file-upload form-file-multiple {{ ($errors->has('files') || $errors->has('files.*')) ? ' has-error' : '' }}">
                                        <input id="input-file" type="file" multiple name="files[]"
                                            class="inputFileHidden" aria-required="true">
                                        <div class="input-group">
                                            <input type="text" class="form-control inputFileVisible"
                                                placeholder="Primary product image(s)"
                                                value="{{ $product->product_image}}">
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
@push('banner')
<script src="{{ asset('material') }}/js/custom/banner.js"></script>
@endpush
