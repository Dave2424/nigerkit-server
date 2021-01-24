@extends('layouts.app', ['activePage' => 'banner-management', 'titlePage' => __('Banner Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('banner.update', $banner->id) }}" autocomplete="off"
                    class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <div class="card ">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">{{ __('Edit Banner') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="{{ route('banner.index') }}"
                                        class="btn btn-sm btn-success">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                            
                            <div class="row" style="width: 100%">
                              <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                  <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                      <textarea class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                          name="title" id="input-details" type="text"
                                          placeholder="{{ __('Image banner title') }}" required="true"
                                          aria-required="true">{{ $banner->title }}</textarea>
                                      @if ($errors->has('title'))
                                      <span id="details-error" class="error text-danger"
                                          for="input-details">{{ $errors->first('title') }}</span>
                                      @endif
                                  </div>
                              </div>
                          </div>
                          <div class="row" style="width: 100%">
                              <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                  <div class="form-group{{ $errors->has('details') ? ' has-danger' : '' }}">
                                      <textarea class="form-control{{ $errors->has('details') ? ' is-invalid' : '' }}"
                                          name="details" id="input-details" type="text"
                                          placeholder="{{ __('Image banner details') }}" required="true"
                                          aria-required="true">{{ $banner->details }}</textarea>
                                      @if ($errors->has('details'))
                                      <span id="details-error" class="error text-danger"
                                          for="input-details">{{ $errors->first('details') }}</span>
                                      @endif
                                  </div>
                              </div>
                          </div>
                          <div class="form-group form-file-upload form-file-multiple {{ $errors->has('files') ? ' has-danger' : '' }}"
                              style="margin-left: auto;margin-right: auto;width: 50%;">
                              <input id="input-file" type="file" name="files" class="inputFileHidden" value="{{ $banner->pictures }}"
                                  aria-required="true">
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
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
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
