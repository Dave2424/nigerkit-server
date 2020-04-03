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
                                                <table class="table table-hover">
                                                    <thead class=" text-secondary text-center">
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Description') }}</th>
                                                    <th>{{ __('Quantity') }}</th>
                                                    <th>{{__('Brand')}}</th>
                                                    <th>{{__('Sku No')}}</th>
                                                    <th>{{__('Content')}}</th>
                                                    <th>{{__('Files?')}}</th>
                                                    <th>{{ __('Actions') }}</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Sign</td>
                                                            <td>Sign contract for "What are conference</td>
                                                            <td>45</td>
                                                            <td>conference</td>
                                                            <td>78465991</td>
                                                            <td>What are conference</td>
                                                            <td>Yes</td>
                                                            <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit product" class="btn btn-info btn-link btn-sm">
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
                                    <div class="tab-pane" id="addProduct">
                                        <div class="container">
                                            <form method="post" action="{{ route('add-product') }}"
                                                  enctype="multipart/form-data"
                                                  autocomplete="off" class="form-horizontal">
                                                @csrf
                                                @method('post')
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-sm-10 ml-auto mr-auto">
                                                            <div class="form-group{{ $errors->has('product_name') ? ' has-danger' : '' }}">
                                                                <input class="form-control{{ $errors->has('product_name') ? ' is-invalid' : '' }}" name="product_name"
                                                                       id="input-name" type="text" placeholder="{{ __('Product name') }}"
                                                                       value="{{ old('product_name') }}" required="true" aria-required="true"/>
                                                                @if ($errors->has('product_name'))
                                                                    <span id="product-error" class="error text-danger" for="input-name">{{ $errors->first('product_name') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-10 ml-auto mr-auto">
                                                            <div class="form-group {{ $errors->has('description') ? ' has-danger' : '' }}">
                                                                <textarea id="input-description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                                         rows="2" placeholder="describe the product" name="description"></textarea>
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
                                                                          id="input-content" placeholder="Content of product if available" name="content"></textarea>
                                                                {{--@if ($errors->has('content'))--}}
                                                                    {{--<span id="content-error" class="error text-danger" for="input-content">{{ $errors->first('content') }}</span>--}}
                                                                {{--@endif--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-sm-10 ml-auto mr-auto">
                                                            <div class="form-group">
                                                                <select class="form-control selectpicker {{ $errors->has('category') ? ' has-danger' : '' }}"
                                                                        data-style="btn btn-link" name="category" id="input-category" selected={{ old('brand') }}"">
                                                                    <option disabled selected>Select product category</option>
                                                                    @if(count($categories) > 0)
                                                                        @foreach($categories as $category)
                                                                            <option value="{{$category->id}}">{{$category->category}}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    @if ($errors->has('category'))
                                                                        <option value="{{ old('brand') }}"></option>
                                                                        @endif
                                                                </select>
                                                                @if ($errors->has('category'))
                                                                    <span id="content-error" class="error text-danger" for="input-category">{{ $errors->first('category') }}</span>
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
                                                            <div class="form-group{{ $errors->has('sku') ? ' has-danger' : '' }}">
                                                                <input class="form-control{{ $errors->has('sku') ? ' is-invalid' : '' }}" name="sku"
                                                                       id="input-sku" type="text" placeholder="{{ __('Sku number') }}"
                                                                       value="{{ old('sku') }}" required="true" aria-required="true"/>
                                                                @if ($errors->has('sku'))
                                                                    <span id="sku-error" class="error text-danger" for="input-sku">{{ $errors->first('sku') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-file-upload form-file-multiple">
                                                        <input type="file" multiple class="inputFileHidden" name="product_file[]">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inputFileVisible"  placeholder="Product image(s)" multiple>
                                                            <span class="input-group-btn">
                                                                <button type="button" class="btn btn-fab btn-round btn-info">
                                                                    <i class="material-icons">attach_file</i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('product_file.*'))
                                                        <span id="p_file-error" style="margin-left: 10%" class="error text-danger" for="input-sku">{{ $errors->first('product_file.*') }}</span>
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
@endpush