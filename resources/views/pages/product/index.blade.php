@extends('layouts.app', ['activePage' => 'product-management', 'titlePage' => __('Product Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">{{ __('Products') }}</h4>
                        <p class="card-category"> {{ __('Here you can manage product') }}</p>
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#viewProduct" data-toggle="tab">
                                            <i class="material-icons">toc</i> View products
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('product.create') }}">
                                            <i class="material-icons">playlist_add</i> Add product
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="#view_sku" data-toggle="tab">
                                            <i class="material-icons">tune</i> Sku No_
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('status') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th class="text-center" style="width: 50px;">
                                        {{ __('Image') }}
                                    </th>
                                    <th class="text-center" style="max-width: 100px;">
                                        {{ __('Sku No') }}
                                    </th>
                                    <th style="width: 25em">
                                        {{ __('Name') }}
                                    </th>
                                    <th style="width: 25em">
                                        {{ __('Description') }}
                                    </th>
                                    <th class="text-center" style="max-width: 100px;">
                                        {{ __('Quantity') }}
                                    </th>
                                    <th class="text-center" style="max-width: 100px;">
                                        {{ __('Brand') }}
                                    </th>
                                    <th class="text-center" style="max-width: 100px;">
                                        {{ __('Price') }}
                                    </th>
                                    <th class="text-center" style="max-width: 100px;">
                                        {{ __('Status') }}
                                    </th>
                                    <th class="text-center" style="max-width: 150px">
                                        {{ __('Creation date') }}
                                    </th>
                                    <th class="text-right" style="max-width: 150px">
                                        {{ __('Actions') }}
                                    </th>
                                </thead>
                                <tbody>
                                    @if(count($products)> 0)
                                    @foreach($products as $product)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($product->product_image)}}" width="50">
                                        </td>
                                        <td class="text-center" style="max-width: 100px;">
                                            {{ $product->Sku }}
                                        </td>
                                        <td>
                                            {{ $product->name }}
                                        </td>
                                        <td>
                                            {{ Str::limit(strip_tags($product->description), 150) }}
                                        </td>
                                        <td class="text-center">
                                            {{ $product->quantity }}
                                        </td>
                                        <td class="text-center">
                                            {{ $product->brand }}
                                        </td>
                                        <td class="text-center">
                                            {{ $product->price }}
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('product.update_status', $product->id) }}" method="Post">
                                                @csrf
                                                <button type="button" class="text-center btn bg-{{ $product->status==1 ? "success" : "danger" }}"
                                                    onclick="confirm('{{ __("Are you sure you want to update this product status?") }}') ? this.parentElement.submit() : ''">
                                                {{ $product->status==1 ? "Active" : "Inactive" }}
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center" style="max-width: 150px;">
                                            {{ $product->created_at->format('Y-m-d') }}
                                        </td>
                                        <td class="td-actions text-right" style="max-width: 150px;">
                                            <form action="{{ route('product.destroy', $product->id) }}" method="Post">
                                                @csrf

                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="{{ route('product.edit', $product->id) }}" data-original-title=""
                                                    title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link"
                                                    data-original-title="" title=""
                                                    onclick="confirm('{{ __("Are you sure you want to delete this product?") }}') ? this.parentElement.submit() : ''">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        {{ $products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
