@extends('layouts.app', ['activePage' => 'category-management', 'titlePage' => __('Category Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('category.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-success">
                <h4 class="card-title">{{ __('Add Category') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('category.index') }}" class="btn btn-sm btn-success">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Category Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="input-name" type="text" placeholder="{{ __('Category Name') }}" value="{{ old('category') }}" required="true" aria-required="true"/>
                      @if ($errors->has('category'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('category') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-success">{{ __('Add Category') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection