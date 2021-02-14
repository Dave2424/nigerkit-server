@extends('layouts.app', ['activePage' => 'product-management', 'titlePage' => __('Product Management')])

@section('content')
<div class="content" ng-controller="productController">
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
                                        <a class="nav-link @{{model.trash == false ? 'active' : ''}}" href="#viewProduct"
                                            ng-click="model.showData()"
                                            data-toggle="tab">
                                            <i class="material-icons">toc</i> View Products
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a  class="nav-link @{{model.trash == true ? 'active' : ''}}" href="#viewProduct"
                                            ng-click="model.showTrashedData()"
                                            data-toggle="tab">
                                            <i class="material-icons">delete</i> View Trashed Products
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
                                        {{ __('Stock') }}
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
                                    <tr ng-repeat="(index, product) in model.products.data">
                                        <td>
                                            <img src="@{{ product.product_image }}" width="50">
                                        </td>
                                        <td class="text-center" style="max-width: 100px;">
                                            @{{ product.Sku }}
                                        </td>
                                        <td>
                                            @{{ product.name }}
                                        </td>
                                        <td>
                                            @{{ product.description }}
                                        </td>
                                        <td class="text-center">
                                            @{{ product.stock }}
                                            <button class="btn btn-sm" >Stock Up</button>
                                        </td>
                                        <td class="text-center">
                                            @{{ product.brand }}
                                        </td>
                                        <td class="text-center">
                                            @{{ product.price }}
                                        </td>
                                        <td class="text-center">
                                            <button type="button" rel="tooltip" data-original-title="@{{ product.status==1 ? "Deactivate" : "Activate" }} Product" title="@{{ product.status==1 ? "Deactivate" : "Activate" }} Product"
                                                class="text-center btn bg-@{{ product.status==1 ? "success" : "danger" }}"
                                                onclick="confirm('{{ __("Are you sure you want to update this product status?") }}') ? this.parentElement.submit() : ''">
                                                @{{ product.status==1 ? "Active" : "Inactive" }}
                                            </button>
                                        </td>
                                        <td class="text-center" style="max-width: 150px;">
                                            @{{ product.created_at }}
                                        </td>
                                        <td class="td-actions text-right" style="max-width: 150px;">
                                            <a rel="tooltip" class="btn btn-success btn-link"
                                                data-original-title="Edit Product"
                                                title="Edit Product">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-link"
                                                    rel="tooltip" data-original-title="Delete Product" title="Delete Product">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation" ng-if="model.products.per_page" class="py-2">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a class="page-link" ng-click="model.prevPage()" href="#" tabindex="-1">Previous</a></li>
                                    <li class="page-item" ng-if="model.products.current_page >= (model.products.current_page - 4) && (model.products.current_page - 4) > 0">
                                        <a class="page-link" href="#">...</a>
                                    </li>
                                    <li class="page-item" ng-if="model.products.current_page >= (model.products.current_page - 3) && (model.products.current_page - 3) > 0"
                                        ng-click="model.getPage(model.products.current_page - 3)">
                                        <a class="page-link" href="#">@{{ model.products.current_page - 3 }}</a>
                                    </li>
                                    <li class="page-item" ng-if="model.products.current_page >= (model.products.current_page - 2) && (model.products.current_page - 2) > 0"
                                        ng-click="model.getPage(model.products.current_page - 2)">
                                        <a class="page-link" href="#">@{{ model.products.current_page - 2 }}</a>
                                    </li>
                                    <li class="page-item" ng-if="model.products.current_page >= (model.products.current_page - 1) && (model.products.current_page - 1) > 0"
                                        ng-click="model.getPage(model.products.current_page - 1)">
                                        <a class="page-link" href="#">@{{ model.products.current_page - 1 }}</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">@{{model.products.current_page}}</a></li>
                                    <li class="page-item" ng-if="model.products.last_page >= (model.products.current_page + 1)"
                                        ng-click="model.getPage(model.products.current_page + 1)">
                                        <a class="page-link" href="#">@{{ model.products.current_page + 1 }}</a>
                                    </li>
                                    <li class="page-item" ng-if="model.products.last_page >= (model.products.current_page + 2)"
                                        ng-click="model.getPage(model.products.current_page + 2)">
                                        <a class="page-link" href="#">@{{ model.products.current_page + 2 }}</a>
                                    </li>
                                    <li class="page-item" ng-if="model.products.last_page >= (model.products.current_page + 3)"
                                        ng-click="model.getPage(model.products.current_page + 3)">
                                        <a class="page-link" href="#">@{{ model.products.current_page + 3 }}</a>
                                    </li>
                                    <li class="page-item" ng-if="model.products.last_page >= (model.products.current_page + 4)">
                                        <a class="page-link" href="#">...</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#" ng-click="model.nextPage()">Next</a></li>
                                </ul>
                                <div class="d-flex align-items-center text-right pull-right">
                                <span class="text-muted">
                                    Displaying @{{ model.products.to ? model.products.to : '0' }} of @{{ model.products.total }} records</span>
    
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer_js')
<script src="{{ asset('material') }}/js/custom/controllers/productController.js"></script>
@endsection
