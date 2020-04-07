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
                                        <span class="nav-tabs-title">Tasks:</span>
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
                                                <a class="nav-link" href="#setProduct" data-toggle="tab">
                                                    <i class="material-icons">settings</i> Set product
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
                                                    {{--@foreach($products as $product)--}}
                                                        {{--<tr><td class="text-center">{{$product->name}}</td>--}}
                                                            {{--<td class="text-center">{{$product->description}}</td>--}}
                                                            {{--<td class="text-center">{{$product->quantity}}</td>--}}
                                                            {{--<td class="text-center">{{$product->brand}}</td>--}}
                                                            {{--<td class="text-center">{{$product->Sku}}</td>--}}
                                                            {{--<td class="text-center">{{$product->content}}</td>--}}
                                                            {{--<td class="text-center">--}}
                                                                {{--<button type="button" rel="tooltip" title="View picture" class="btn btn-success btn-link btn-sm">--}}
                                                                    {{--<i class="material-icons">attachment</i>--}}
                                                                {{--</button>--}}
                                                            {{--</td>--}}
                                                        {{--@foreach($product->files as $file)--}}
                                                            {{--<img src="{{url($file)}}" />--}}
                                                        {{--@endforeach--}}
                                                            {{--<td class="td-actions text-center">--}}
                                                                {{--<button type="button" rel="tooltip" title="Edit product" class="btn btn-info btn-link btn-sm">--}}
                                                                    {{--<i class="material-icons">edit</i>--}}
                                                                {{--</button>--}}
                                                                {{--<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">--}}
                                                                    {{--<i class="material-icons">close</i>--}}
                                                                {{--</button>--}}
                                                            {{--</td>--}}
                                                    {{--@endforeach--}}
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
                                                                          id="input-content" required="true" aria-required="true"
                                                                          placeholder="Content of product if available" name="content"></textarea>
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
                                                            <div class="form-group{{ $errors->has('Sku') ? ' has-danger' : '' }}">
                                                                <input class="form-control{{ $errors->has('Sku') ? ' is-invalid' : '' }}" name="Sku"
                                                                       id="input-sku" type="text" placeholder="{{ __('Sku number') }}"
                                                                       value="{{ old('Sku') }}" required="true" aria-required="true"/>
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


                                    <div class="tab-pane" id="setProduct">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="" checked>
                                                            <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="" checked>
                                                            <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
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
    @endsection
@push('product')
<script src="{{ asset('material') }}/js/custom/product.js"></script>
<script src="{{ asset('material') }}/js/custom/mindmup-editabletable.js"></script>
@endpush