@extends('layouts.app', ['activePage' => 'orders', 'titlePage' => __('orders')])

@section('content')
<div class="content" ng-controller="orderController">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-success">
                <h4 class="card-title ">Recent orders</h4>
                <p class="card-category">All transaction orders</p>
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                                <a class="nav-link @{{model.trash == false ? 'active' : ''}}" href="#viewProduct"
                                    ng-click="model.showData()"
                                    data-toggle="tab">
                                    <i class="material-icons">toc</i> View Order List
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link @{{model.trash == true ? 'active' : ''}}" href="#viewProduct"
                                    ng-click="model.showTrashedData()"
                                    data-toggle="tab">
                                    <i class="material-icons">delete</i> View Trashed
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover" id="product_table" style="width: 100%;">
                                <thead class="text-secondary text-dark">
                                    <th>{{ __('SN') }}</th>
                                    <th>{{ __('IdentifierId') }}</th>
                                    <th>{{ __('Buyer\'s name') }}</th>
                                    <th>{{ __('Address') }}</th>
                                    <th>{{__('Phone')}}</th>
                                    <th>{{__('Amount')}}</th>
                                    <th>{{__('Date')}}</th>
                                    <th>{{__('Status')}}</th>
                                    <th>{{__('Action')}}</th>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="(index, order) in model.orders.data">
                                        <td>@{{ $index+1 }}</td>
                                        <td style="font-weight: bold">@{{order.identifier_id}}</td>
                                        <td>@{{order.buyer_name}}</td>
                                        <td>@{{order.buyer_address}}</td>
                                        <td style="font-weight: bold">@{{order.buyer_phone}}</td>
                                        <td>@{{order.amount | currency:"&#8358;":2}}</td>
                                        <td>@{{order.created_at | date:'mediumDate'}}</td>
                                        <td>
                                            <button ng-if="order.status == 'paid' && order.flag == 0"
                                                ng-click="model.viewTransaction(order)"
                                                class="btn btn-green btn-info btn-sm">
                                                Paid
                                            </button>
                                            <button ng-if="order.status != 'paid'"
                                                ng-click="model.viewTransaction(order)"
                                                class="btn btn-green btn-warning btn-sm">
                                                Not yet
                                            </button>
                                        </td>
                                        <td>
                                            <button ng-click="model.viewOrder(order)" type="button"
                                                rel="tooltip" data-original-title="View Order" 
                                                title="View Order" class="btn btn-sm btn-success">
                                                <i class="material-icons">point_of_sale</i>
                                                Process
                                                <div class="ripple-container"></div>
                                            </button>
                                            <button ng-click="model.deleteOrder(order)"
                                                type="button"
                                                rel="tooltip" data-original-title="Delete Order" title="Delete Order"
                                                class="btn btn-sm btn-danger">
                                                <i class="material-icons">delete</i>
                                                Delete
                                                <div class="ripple-container"></div>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr ng-if="model.orders.data == 0">
                                        <td colspan="9" class="text-center">No Transaction yet</td>
                                    </tr>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation" ng-if="model.orders.per_page" class="py-2">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a class="page-link" ng-click="model.prevPage()" href="#" tabindex="-1">Previous</a></li>
                                    <li class="page-item" ng-if="model.orders.current_page >= (model.orders.current_page - 4) && (model.orders.current_page - 4) > 0">
                                        <a class="page-link" href="#">...</a>
                                    </li>
                                    <li class="page-item" ng-if="model.orders.current_page >= (model.orders.current_page - 3) && (model.orders.current_page - 3) > 0"
                                        ng-click="model.getPage(model.orders.current_page - 3)">
                                        <a class="page-link" href="#">@{{ model.orders.current_page - 3 }}</a>
                                    </li>
                                    <li class="page-item" ng-if="model.orders.current_page >= (model.orders.current_page - 2) && (model.orders.current_page - 2) > 0"
                                        ng-click="model.getPage(model.orders.current_page - 2)">
                                        <a class="page-link" href="#">@{{ model.orders.current_page - 2 }}</a>
                                    </li>
                                    <li class="page-item" ng-if="model.orders.current_page >= (model.orders.current_page - 1) && (model.orders.current_page - 1) > 0"
                                        ng-click="model.getPage(model.orders.current_page - 1)">
                                        <a class="page-link" href="#">@{{ model.orders.current_page - 1 }}</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">@{{model.orders.current_page}}</a></li>
                                    <li class="page-item" ng-if="model.orders.last_page >= (model.orders.current_page + 1)"
                                        ng-click="model.getPage(model.orders.current_page + 1)">
                                        <a class="page-link" href="#">@{{ model.orders.current_page + 1 }}</a>
                                    </li>
                                    <li class="page-item" ng-if="model.orders.last_page >= (model.orders.current_page + 2)"
                                        ng-click="model.getPage(model.orders.current_page + 2)">
                                        <a class="page-link" href="#">@{{ model.orders.current_page + 2 }}</a>
                                    </li>
                                    <li class="page-item" ng-if="model.orders.last_page >= (model.orders.current_page + 3)"
                                        ng-click="model.getPage(model.orders.current_page + 3)">
                                        <a class="page-link" href="#">@{{ model.orders.current_page + 3 }}</a>
                                    </li>
                                    <li class="page-item" ng-if="model.orders.last_page >= (model.orders.current_page + 4)">
                                        <a class="page-link" href="#">...</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#" ng-click="model.nextPage()">Next</a></li>
                                </ul>
                                <div class="d-flex align-items-center text-right pull-right">
                                <span class="text-muted">
                                    Displaying @{{ model.orders.to ? model.orders.to : '0' }} of @{{ model.orders.total }} records</span>
    
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="view-payment-details" tabindex="-1" role="dialog"
        data-backdrop="static"
        aria-labelledby="orderDetailTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderDetailTitle">Payment Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <td>
                                Order ID
                            </td>
                            <th>
                                @{{ model.activeOrder.identifier_id}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Transaction Reference
                            </td>
                            <th>
                                @{{ model.transaction.reference}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Payment Method
                            </td>
                            <th class="text-uppercase">
                                @{{ model.transaction.data.channel}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Requested Amount
                            </td>
                            <th class="text-uppercase">
                                @{{ model.transaction.data.currency+" "+model.transaction.data.requested_amount}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Fees
                            </td>
                            <th class="text-uppercase">
                                @{{ model.transaction.data.currency+" "+model.transaction.data.fees}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Amount Paid
                            </td>
                            <th class="text-uppercase">
                                @{{ model.transaction.data.currency+" "+model.transaction.data.amount}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Payment Status
                            </td>
                            <th class="text-uppercase">
                                @{{ model.transaction.data.status}}
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Authorization
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Bank Name
                            </td>
                            <th class="text-uppercase">
                                @{{ model.transaction.data.authorization.bank}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Account Name
                            </td>
                            <th class="text-uppercase">
                                @{{ model.transaction.data.authorization.account_name}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Receiver Bank
                            </td>
                            <th class="text-uppercase">
                                @{{ model.transaction.data.authorization.receiver_bank}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Receiver Bank Account Number
                            </td>
                            <th class="text-uppercase">
                                @{{ model.transaction.data.authorization.receiver_bank_account_number}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Country Code
                            </td>
                            <th class="text-uppercase">
                                @{{ model.transaction.data.authorization.country_code}}
                            </th>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" ng-click="model.close('view-payment-details')" class="btn btn-success">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="view-order-details" tabindex="-1" role="dialog"
        data-backdrop="static"
        aria-labelledby="orderDetailTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderDetailTitle">Order Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <td>
                                Order ID
                            </td>
                            <th>
                                @{{ model.activeOrder.identifier_id}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Buyer Name
                            </td>
                            <th>
                                @{{ model.activeOrder.buyer_name}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Buyer Email
                            </td>
                            <th>
                                @{{ model.activeOrder.buyer_email}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Recivers Phone Number
                            </td>
                            <th>
                                @{{ model.activeOrder.buyer_phone}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Recivers Address
                            </td>
                            <th>
                                @{{ model.activeOrder.buyer_address}}
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Payment Status
                            </td>
                            <th>
                                <span class="button badge-@{{model.activeOrder.status == 'paid' ? "success" : "danger"}} bg-@{{model.activeOrder.status == 'paid' ? "success" : "danger" }} p-2 text-bold text-uppercase">
                                    @{{ model.activeOrder.status}}
                                </span>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Delivery Status
                            </td>
                            <th>
                                <span class="button badge-@{{model.activeOrder.status == 'paid' ? "success" : "danger"}} bg-@{{model.activeOrder.status == 'paid' ? "success" : "danger" }} p-2 text-bold text-uppercase">
                                    @{{ 
                                        model.activeOrder.delivery_status==0? "Canceled": 
                                        model.activeOrder.delivery_status==1? "Pending": 
                                        model.activeOrder.delivery_status==2? "Processing" :
                                        model.activeOrder.delivery_status==3? "Shipped":
                                        model.activeOrder.delivery_status==4? "Delivered": "Unknown"
                                    }}
                                </span>
                            </th>
                        </tr>
                    </table>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Item Name
                                </th>
                                <th>
                                    Qty
                                </th>
                                <th>
                                    Unit Price
                                </th>
                                <th style="width: 100px;">
                                    Total Price
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="(index, item) in model.activeOrder.user_invoice.items">
                                <td>
                                    @{{ $index+1}}
                                </td>
                                <td>
                                    @{{ item.product_name }}
                                </td>
                                <td>
                                    @{{ item.quantity }}
                                </td>
                                <td>
                                    @{{ item.unit_cost | currency:"&#8358;":2 }}
                                </td>
                                <th>
                                    @{{ (item.unit_cost+item.quantity)  | currency:"&#8358;":2}}
                                </th>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-right">
                                    Sub Total
                                </td>
                                <th>
                                    @{{ model.activeOrder.user_invoice.sub_total | currency:"&#8358;":2}}
                                </th>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-right">
                                    Total
                                </td>
                                <th>
                                    @{{ model.activeOrder.user_invoice.total | currency:"&#8358;":2}}
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button ng-if="model.trash" type="button" ng-click="model.restoreOrder()" class="btn btn-success">Restore</button>
                    <button ng-if="!model.trash" type="button" ng-click="model.shipOrder()" class="btn btn-success">Ship</button>
                    <button ng-if="!model.trash" type="button" ng-click="model.processOrder()" class="btn btn-info">Process</button>
                    <button type="button" ng-click="model.close('view-order-details')" class="btn btn-primary">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete-order-details" tabindex="-1" role="dialog"
        data-backdrop="static"
        aria-labelledby="deleteRecordTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteRecordTitle">Delete Order Record</h5>
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
                    <button type="button" ng-click="model.close('delete-order-details')" class="btn btn-success">No</button>
                    <button type="button" ng-click="model.removeItem()" class="btn btn-danger">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer_js')
<script src="{{ asset('material') }}/js/custom/controllers/orderController.js"></script>
@endsection
