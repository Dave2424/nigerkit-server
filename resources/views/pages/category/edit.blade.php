@extends('layouts.app', ['activePage' => 'category-management', 'titlePage' => __('Category Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('category.update', $category->id) }}" autocomplete="off" class="form-horizontal">
            @csrf

            <div class="card ">
              <div class="card-header card-header-success">
                <h4 class="card-title">{{ __('Edit Category') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('category.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Category Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="input-name" type="text" placeholder="{{ __('Category Name') }}" value="{{ old('category', $category->category) }}" required="true" aria-required="true"/>
                      @if ($errors->has('category'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('category') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Category Slug') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('slug') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="slug" id="input-name" type="text" placeholder="{{ __('Slug') }}" value="{{ old('slug', $category->slug) }}" required="true" aria-required="true"/>
                      @if ($errors->has('slug'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('slug') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
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