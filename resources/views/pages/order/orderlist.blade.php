@extends('layouts.app', ['activePage' => 'orders', 'titlePage' => __('orders')])

@section('content')
<div class="content" ng-controller="orderlistController">
    <div class="container-fluid">
        <div class="card">
        <div class="card-header card-header-success">
            <h4 class="card-title">Recent orders</h4>
            <h6 class="card-category">All transaction orders</h6>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="product_table"  style="width: 100%;">
                                <thead class="text-secondary text-dark">
                                <th>{{ __('IdentifierId') }}</th>
                                <th>{{ __('Buyer\'s name') }}</th>
                                <th>{{ __('Address') }}</th>
                                <th>{{__('Phone')}}</th>
                                <th>{{__('Amount')}}</th>
                                <th>{{__('Status')}}</th>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="order in model.orderlist.data">
                                    <td style="font-weight: bold">@{{order.identifier_id}}</td>
                                    <td>@{{order.buyer_name}}</td>
                                    <td>@{{order.buyer_address}}</td>
                                    <td  style="font-weight: bold">@{{order.buyer_phone}}</td>
                                    <td>@{{order.amount}}</td>
                                        <td ng-if="order.status == 'paid' && order.flag == 0">
                                            <span class="badge badge-green badge bg-success p-2 text-white text-bold"
                                            style="opacity: 0.7;letter-spacing: 1">Paid</span>
                                        </td>
                                        <td ng-if="order.status != 'paid' && order.flag != 0">
                                            <span class="badge badge-green badge bg-danger p-2 text-white text-bold"
                                            style="opacity: 0.7;letter-spacing: 1">Not yet</span>
                                        </td>
                                    </tr>
                                    <tr ng-if="model.orderlist.data  == 0">
                                        <td colspan="6" class="text-center">No Transaction yet</td>
                                    </tr>
                                </tbody>
                    </table>
                    <nav aria-label="Page navigation" ng-if="model.orderlist.total== model.orderlist.per_page" class="py-2">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                            <a class="page-link" ng-click="prevPage(model.orderlist)" href="#" tabindex="-1">Previous</a>
                            </li>
                                <li class="page-item active"><a class="page-link" href="#">@{{model.orderlist.current_page}}</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" ng-click="nextPage(model.orderlist)">Next</a>
                            </li>
                        </ul>
                        <div class="d-flex align-items-center text-right pull-right">
                        <span class="text-muted">Displaying @{{ model.orderlist.to }} of @{{ model.orderlist.total }} records</span>

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
@push('orderlist')
    <script src="{{ asset('material') }}/js/custom/orderlistController.js"></script>
@endpush