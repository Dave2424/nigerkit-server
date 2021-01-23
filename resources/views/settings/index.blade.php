@extends('layouts.app', ['activePage' => 'settings-management', 'titlePage' => __('General Setting Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <form method="post" action="{{ route('settings.update') }}"
            class="form-horizontal">
            @csrf
            @if (session('status'))
            <div class="row" style="display: none">
                <div class="col-sm-12">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                        <input type="text" id="success_banner" value="{{ session('status') }}" />
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">General Information</h4>
                            <p class="card-category">Update infotrmations site.</p>
                        </div>
                        <div class="card-body">

                            <div class="row" id="banner">

                                <div class="row" style="width: 100%">
                                    <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                        <label class="label text-uppercase">Site Name</label>
                                        <div class="form-group">
                                            <input
                                                class="form-control"
                                                name="site_name" type="text"
                                                placeholder="{{ __('Site Title') }}"
                                                value="{{ $site_name }}"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                        <label class="label text-uppercase">Site Email</label>
                                        <div class="form-group">
                                            <input
                                                class="form-control"
                                                name="site_email" type="email"
                                                placeholder="{{ __('Site email') }}"
                                                value="{{ $site_email }}"/>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                        <label class="label text-uppercase">Contact Number</label>
                                        <div class="form-group">
                                            <input class="form-control"
                                                name="site_phone" type="phone"
                                                placeholder="{{ __('Customer Service Line') }}"
                                                value="{{ $site_phone }}"/>
                                        </div>
                                    </div>

                                    <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                        <label class="label text-uppercase">Store Address</label>
                                        <div class="form-group">
                                            <input class="form-control"
                                                name="address" type="text"
                                                placeholder="{{ __('Store Address') }}"
                                                value="{{ $address }}"/>
                                        </div>
                                    </div>

                                    <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                        <label class="label text-uppercase">OPENING HOURS</label>
                                        <div class="form-group">
                                            <textarea class="form-control"
                                                name="opening_hours" type="text" rows="4"
                                                placeholder="{{ __('OPENING HOURS') }}">{{ $opening_hours }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                        <label class="label text-uppercase">CONTACT MESSAGE</label>
                                        <div class="form-group">
                                            <textarea class="form-control"
                                                name="contact_message" type="text" rows="4"
                                                placeholder="{{ __('CONTACT MESSAGE') }}">{{ $contact_message }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-11  ml-auto mr-auto ">
                                        <label class="label text-uppercase">Store Web Address</label>
                                        <div class="form-group">
                                            <input class="form-control"
                                                name="base_url" type="text"
                                                placeholder="{{ __('Store url Address') }}"
                                                value="{{ $base_url }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-11  ml-auto mr-auto ">
                                        <label class="label text-uppercase">SITE DESCRIPTION</label>
                                        <div class="form-group">
                                            <textarea class="form-control"
                                                name="site_description" type="text"
                                                rows="5"
                                                placeholder="{{ __('Store descriptions') }}">{{ $site_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">Social Information</h4>
                            <p class="card-category">Update site social account infotrmation.</p>
                        </div>
                        <div class="card-body">

                            <div class="row" id="banner">

                                <div class="row" style="width: 100%">
                                    <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                        <label class="label text-uppercase">Facebook page</label>
                                        <div class="form-group">
                                            <input
                                                class="form-control"
                                                name="facebook" type="url"
                                                placeholder="{{ __('Facebook page url') }}"
                                                value="{{ $facebook }}"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                        <label class="label text-uppercase">Twitter page</label>
                                        <div class="form-group">
                                            <input
                                                class="form-control"
                                                name="twitter" type="url"
                                                placeholder="{{ __('Twitter page url') }}"
                                                value="{{ $twitter }}"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                        <label class="label text-uppercase">Instagram page</label>
                                        <div class="form-group">
                                            <input
                                                class="form-control"
                                                name="instagram" type="url"
                                                placeholder="{{ __('Instagram page url') }}"
                                                value="{{ $instagram }}"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                        <label class="label text-uppercase">Pinterest page</label>
                                        <div class="form-group">
                                            <input
                                                class="form-control"
                                                name="pinterest" type="url"
                                                placeholder="{{ __('Pinterest page url') }}"
                                                value="{{ $pinterest }}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <button type="submit" class="btn btn-success" style="width:100%">
                            UPDATE SETTINGS
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('banner')
<script src="{{ asset('material') }}/js/custom/banner.js"></script>
@endpush
