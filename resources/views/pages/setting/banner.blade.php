@extends('layouts.app', ['activePage' => 'banner', 'titlePage' => __('Setting::banner')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">Banners</h4>
                            <p class="card-category">Upload images for site.</p>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('add-banner') }}" enctype="multipart/form-data"
                                autocomplete="off" class="form-horizontal">
                                @csrf
                                @method('post')
                                <div class="row" id="banner">
                                    @if (session('status'))
                                        <div class="row" style="display: none">
                                            <div class="col-sm-12">
                                                <div class="alert alert-success">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                    <span>{{ session('status') }}</span>
                                                    <input type="text" id="success_banner"
                                                        value="{{ session('status') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="row" style="width: 100%">
                                        <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                            <div class="form-group{{ $errors->has('details') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control{{ $errors->has('details') ? ' is-invalid' : '' }}"
                                                    name="details" id="input-details" type="text"
                                                    placeholder="{{ __('Image banner details') }}"
                                                    value="{{ old('details') }}" required="true" aria-required="true" />
                                                @if ($errors->has('details'))
                                                    <span id="details-error" class="error text-danger"
                                                        for="input-details">{{ $errors->first('details') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-file-upload
                                          form-file-multiple {{ $errors->has('files') ? ' has-danger' : '' }}"
                                        style="margin-left: auto;margin-right: auto;width: 50%;">
                                        <input id="input-file" type="file" name="files" class="inputFileHidden"
                                            required="true" aria-required="true">
                                        <div class="input-group">
                                            <input type="text" class="form-control inputFileVisible"
                                                placeholder="Main banner image">
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

                                    <div class="row" style="width: 100%;">
                                        <div class="col-md-4 col-lg-4"></div>
                                        <div class="col-md-4 col-lg-4 col-sm-8 ml-sm-auto mr-sm-auto">
                                            <button type="submit" class="btn btn-success" style="width:90%">
                                                {{ __('Upload image') }}
                                                <div class="ripple-container"></div>
                                            </button>
                                        </div>
                                        <div class="col-md-4 col-lg-4"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">Other Banner</h4>
                            <p class="card-category">Upload banners for site.</p>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('add-banner_sr') }}" enctype="multipart/form-data"
                                autocomplete="off" class="form-horizontal">
                                @csrf
                                @method('post')
                                <div class="row" id="banner_sr">
                                    @if (session('status'))
                                        <div class="row" style="display: none">
                                            <div class="col-sm-12">
                                                <div class="alert alert-success">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                    <span>{{ session('status') }}</span>
                                                    <input type="text" id="success_banner_sr"
                                                        value="{{ session('status') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="row" style="width: 100%">
                                        <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                            <div class="form-group{{ $errors->has('details') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control{{ $errors->has('details') ? ' is-invalid' : '' }}"
                                                    name="details" id="input-details" type="text"
                                                    placeholder="{{ __('Image banner details') }}"
                                                    value="{{ old('details') }}" required="true" aria-required="true" />
                                                @if ($errors->has('details'))
                                                    <span id="details-error" class="error text-danger"
                                                        for="input-details">{{ $errors->first('details') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-file-upload
                                          form-file-multiple {{ $errors->has('files') ? ' has-danger' : '' }}"
                                        style="margin-left: auto;margin-right: auto;width: 50%;">
                                        <input id="input-file" type="file" name="files" class="inputFileHidden"
                                            required="true" aria-required="true">
                                        <div class="input-group">
                                            <input type="text" class="form-control inputFileVisible"
                                                placeholder="Banner image for other view">
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

                                    <div class="row" style="width: 100%;">
                                        <div class="col-md-4 col-lg-4"></div>
                                        <div class="col-md-4 col-lg-4 col-sm-8 ml-sm-auto mr-sm-auto">
                                            <button type="submit" class="btn btn-success" style="width:90%">
                                                {{ __('Upload image') }}
                                                <div class="ripple-container"></div>
                                            </button>
                                        </div>
                                        <div class="col-md-4 col-lg-4"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">Phone number</h4>
                            <p class="card-category">Phone number to be displayed</p>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('add-phone') }}"
                                autocomplete="off" class="form-horizontal">
                                @csrf
                                @method('post')
                                <div class="row" id="phone">
                                    @if (session('status'))
                                        <div class="row" style="display: none">
                                            <div class="col-sm-12">
                                                <div class="alert alert-success">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                    <span>{{ session('status') }}</span>
                                                    <input type="text" id="success_phone"
                                                        value="{{ session('status') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="row" style="width: 100%">
                                        <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                    name="phone" id="input-phone" type="text"
                                                    placeholder="{{ __('Phone number') }}"
                                                    value="{{ old('phone') }}" required="true" aria-required="true" />
                                                @if ($errors->has('phone'))
                                                    <span id="phone-error" class="error text-danger"
                                                        for="input-phone">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="width: 100%;">
                                        <div class="col-md-4 col-lg-4"></div>
                                        <div class="col-md-4 col-lg-4 col-sm-8 ml-sm-auto mr-sm-auto">
                                            <button type="submit" class="btn btn-success" style="width:90%">
                                                {{ __('Add phone') }}
                                                <div class="ripple-container"></div>
                                            </button>
                                        </div>
                                        <div class="col-md-4 col-lg-4"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('banner')
    <script src="{{ asset('material') }}/js/custom/banner.js"></script>
@endpush
