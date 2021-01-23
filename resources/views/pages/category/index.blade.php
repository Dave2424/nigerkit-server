@extends('layouts.app', ['activePage' => 'category-management', 'titlePage' => __('Category Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-success">
                <h4 class="card-title ">{{ __('Categorys') }}</h4>
                <p class="card-category"> {{ __('Here you can manage category') }}</p>
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
                <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-success">{{ __('Add category') }}</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-dark">
                      <th>
                          {{ __('Name') }}
                      </th>
                      <th>
                        {{ __('Post Count') }}
                      </th>
                      <th>
                        {{ __('Product Count') }}
                      </th>
                      <th>
                        {{ __('Creation date') }}
                      </th>
                      <th class="text-right">
                        {{ __('Actions') }}
                      </th>
                    </thead>
                    <tbody>
                      @if(count($categories)> 0)
                      @foreach($categories as $category)
                        <tr>
                          <td>
                            {{ $category->category }}
                          </td>
                          <td>
                            {{ $category->posts()->count() }}
                          </td>
                          <td>
                            {{ $category->products()->count() }}
                          </td>
                          <td>
                            {{ $category->created_at->format('Y-m-d') }}
                          </td>
                          <td class="td-actions text-right">
                            <form action="{{ route('category.destroy', $category->id) }}" method="Post">
                                @csrf
                            
                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('category.edit', $category) }}" data-original-title="" title="">
                                  <i class="material-icons">edit</i>
                                  <div class="ripple-container"></div>
                                </a>
                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this category?") }}') ? this.parentElement.submit() : ''">
                                    <i class="material-icons">close</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection