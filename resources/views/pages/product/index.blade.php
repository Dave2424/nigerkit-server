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
                                            <button ng-if="!model.trash" class="btn btn-sm" ng-click="model.showStockProduct(product)">Stock Up</button>
                                        </td>
                                        <td class="text-center">
                                            @{{ product.brand }}
                                        </td>
                                        <td class="text-center">
                                            @{{ product.price }}
                                        </td>
                                        <td class="text-center">
                                            <button type="button" rel="tooltip" data-original-title="@{{ product.status==1 ? 'Deactivate' : 'Activate' }} Product" title="@{{ product.status==1 ? 'Deactivate' : 'Activate' }} Product"
                                                ng-click="model.updateStatus(product)"
                                                class="text-center btn bg-@{{ product.status==1 ? 'success' : 'danger' }}">
                                                @{{ product.status==1 ? "Active" : "Inactive" }}
                                            </button>
                                        </td>
                                        <td class="text-center" style="max-width: 150px;">
                                            @{{ product.created_at | date:'mediumDate' }}
                                        </td>
                                        <td>
                                            <a ng-if="!model.trash" href="@{{'product/'+product.id+'/edit'}}" type="button"
                                                rel="tooltip" data-original-title="Edit Product" 
                                                title="View Product" class="btn btn-sm btn-success">
                                                <i class="material-icons">edit</i>
                                                Edit
                                                <div class="ripple-container"></div>
                                            </a>
                                            <button  ng-if="model.trash" ng-click="model.viewProduct(product, true)" type="button"
                                                rel="tooltip" data-original-title="Edit Product" 
                                                title="View Product" class="btn btn-sm btn-success">
                                                <i class="material-icons">edit</i>
                                                View
                                                <div class="ripple-container"></div>
                                            </button>
                                            <button ng-click="model.deleteProduct(product)"
                                                type="button"
                                                rel="tooltip" data-original-title="Delete Product" title="Delete Product"
                                                class="btn btn-sm btn-danger">
                                                <i class="material-icons">delete</i>
                                                Delete
                                                <div class="ripple-container"></div>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr ng-if="model.products.data == 0">
                                        <td colspan="10" class="text-center">Empty Record</td>
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

    <div class="modal fade" id="view-product-details" tabindex="-1" role="dialog"
        data-backdrop="static"
        aria-labelledby="productDetailTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productDetailTitle">Edit Product Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12 col-md-12">
                        <div class="row">
                            <div class="col-sm-10 ml-auto mr-auto">
                                <div class="form-group">
                                    <label for="name">Product name</label>
                                    <input class="form-control" ng-model="model.activeProduct.name" 
                                        id="name" type="text" required="true"
                                        aria-required="true" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 ml-auto mr-auto">
                                <div class="form-group">
                                    <label for="description">Describe the product</label>
                                    <textarea id="description" class="form-control"
                                        rows="2" ng-model="model.activeProduct.description"
                                        required="true" aria-required="true"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 ml-auto mr-auto">
                                <div class="form-group">
                                    <label for="brand">Product Brand</label>
                                    <input class="form-control"
                                        ng-model="model.activeProduct.brand" id="brand" type="text"
                                        required="true" aria-required="true" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 ml-auto mr-auto">
                                <div class="form-group">
                                    <label for="brand">Product SKU</label>
                                    <input class="form-control"
                                        ng-model="model.activeProduct.Sku" id="brand" type="text"
                                        required="true" aria-required="true" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button ng-if="model.trash" type="button" ng-click="model.restoreProduct()" class="btn btn-success">Restore</button>
                    <button type="button" ng-click="model.close('view-product-details')" class="btn btn-primary">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-stock-up" tabindex="-1" role="dialog"
        data-backdrop="static"
        aria-labelledby="productDetailTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productDetailTitle">Stock Up Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row  ml-auto mr-auto justify-content-center">
                        <div class="col-sm-12 col-md-9">
                            <div class="row">
                                <div class="col-sm-12 ml-auto mr-auto">
                                    <label for="input-name">{{ __('Product name') }}</label>
                                    <div class="form-group">
                                        <input class="form-control"
                                            ng-model="model.activeProduct.name" id="input-name" type="text"
                                            placeholder="{{ __('Product name') }}"readonly/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9">
                            <div class="row">
                                <div class="col-sm-12 ml-auto mr-auto">
                                    <label>{{ __('Invoice Number') }}</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" ng-model="model.stockUp.invoice_number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9">
                            <div class="row">
                                <div class="col-sm-12 ml-auto mr-auto">
                                    <label>{{ __('Invoice Amount') }}</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control" ng-model="model.stockUp.invoice_amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9">
                            <div class="row">
                                <div class="col-sm-12 ml-auto mr-auto">
                                    <label>{{ __('Stock Added') }}</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control" ng-model="model.stockUp.stock_added">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div ng-if="model.stockUpError" class="col-md-12 text-center text-danger text-uppercase">
                            @{{model.stockUpError}}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" ng-click="model.stockProduct()" class="btn btn-success">Stock Up</button>
                    <button type="button" ng-click="model.close('product-stock-up')" class="btn btn-primary">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete-product-details" tabindex="-1" role="dialog"
        data-backdrop="static"
        aria-labelledby="deleteRecordTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteRecordTitle">Delete Product Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">
                        Are you sure you want to delete this record?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" ng-click="model.close('delete-product-details')" class="btn btn-success">No</button>
                    <button type="button" ng-click="model.removeItem()" class="btn btn-danger">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer_js')
<script src="{{ asset('material') }}/js/custom/controllers/productController.js"></script>
@endsection
