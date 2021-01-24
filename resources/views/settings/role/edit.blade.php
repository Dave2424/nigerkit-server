@extends('layouts.app', ['activePage' => 'role-management', 'titlePage' => __('Role Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('role.update', $role->id) }}" autocomplete="off"
                    class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <div class="card ">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">{{ __('Edit Role') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="{{ route('role.index') }}"
                                        class="btn btn-sm btn-success">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                            
                            <div class="row" style="width: 100%">
                              <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                  <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                      <textarea class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                          name="name" id="input-details" type="text"
                                          placeholder="{{ __('Role name') }}" required="true"
                                          aria-required="true">{{ $role->name }}</textarea>
                                      @if ($errors->has('name'))
                                      <span id="details-error" class="error text-danger"
                                          for="input-details">{{ $errors->first('name') }}</span>
                                      @endif
                                  </div>
                              </div>
                          </div>
                          <div class="row" style="width: 100%">
                              <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                  <div class="form-group{{ $errors->has('details') ? ' has-danger' : '' }}">
                                      <textarea class="form-control{{ $errors->has('details') ? ' is-invalid' : '' }}"
                                          name="details" id="input-details" type="text" rows="5"
                                          placeholder="{{ __('Role details') }}" required="true"
                                          aria-required="true">{{ $role->details }}</textarea>
                                      @if ($errors->has('details'))
                                      <span id="details-error" class="error text-danger"
                                          for="input-details">{{ $errors->first('details') }}</span>
                                      @endif
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
