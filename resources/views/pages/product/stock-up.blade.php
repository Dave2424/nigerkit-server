@extends('layouts.app', ['activePage' => 'product-management', 'titlePage' => __('Product Stock Up')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('product_stock_up', $product->id) }}"
                    autocomplete="off" class="form-horizontal">
                    @csrf

                    <div class="card ">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="{{ route('product.index') }}"
                                        class="btn btn-sm btn-success">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                            <div class="row  ml-auto mr-auto justify-content-center">

                                <div class="col-sm-12 col-md-9">
                                    <div class="row">
                                        <div class="col-sm-12 ml-auto mr-auto">
                                            <label for="input-name">{{ __('Product name') }}</label>
                                            <div class="form-group">
                                                <input
                                                    class="form-control"
                                                    name="name" id="input-name" type="text"
                                                    placeholder="{{ __('Product name') }}"
                                                    value="{{ old('name', $product->name) }}" readonly/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-9">
                                    <div class="row">
                                        <div class="col-sm-12 ml-auto mr-auto">
                                            <label>{{ __('Invoice Number') }}</label>
                                            <div class="form-group">
                                                <input type="text"
                                                    class="form-control {{ $errors->has('invoice_number') ? ' has-danger' : '' }}"
                                                    name="invoice_number" value="{{old('invoice_number')}}">
                                                @if ($errors->has('invoice_number'))
                                                <span class="error text-danger">
                                                    {{ $errors->first('invoice_number') }}
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-9">
                                    <div class="row">
                                        <div class="col-sm-12 ml-auto mr-auto">
                                            <label>{{ __('Invoice Amount') }}</label>
                                            <div class="form-group">
                                                <input type="number"
                                                    class="form-control {{ $errors->has('invoice_amount') ? ' has-danger' : '' }}"
                                                    name="invoice_amount" value="{{old('invoice_amount')}}">
                                                @if ($errors->has('invoice_amount'))
                                                <span class="error text-danger">
                                                    {{ $errors->first('invoice_amount') }}
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-9">
                                    <div class="row">
                                        <div class="col-sm-12 ml-auto mr-auto">
                                            <label>{{ __('Stock Added') }}</label>
                                            <div class="form-group">
                                                <input type="number"
                                                    class="form-control {{ $errors->has('stock_added') ? ' has-danger' : '' }}"
                                                    name="stock_added" value="{{old('stock_added')}}">
                                                @if ($errors->has('stock_added'))
                                                <span class="error text-danger">
                                                    {{ $errors->first('stock_added') }}
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-success">{{ __('Stock Up') }}</button>
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
