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
                                            <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="row">
                                                    <div class="col-sm-10 ml-auto mr-auto">
                                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                                                   id="input-name" type="text" placeholder="{{ __('Product name') }}"
                                                                   value="{{ old('name') }}" required="true" aria-required="true"/>
                                                            @if ($errors->has('name'))
                                                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="row">
                                                    <div class="col-sm-10 ml-auto mr-auto">
                                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                                                   id="input-name" type="text" placeholder="{{ __('Name') }}"
                                                                   value="{{ old('name') }}" required="true" aria-required="true"/>
                                                            @if ($errors->has('name'))
                                                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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