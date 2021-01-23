@extends('layouts.app', ['activePage' => 'banner-management', 'titlePage' => __('User Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">{{ __('Banners') }}</h4>
                        <p class="card-category"> {{ __('Here you can manage banner') }}</p>
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
                                <a href="{{ route('banner.create') }}"
                                    class="btn btn-sm btn-success">{{ __('Add banner') }}</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>
                                        {{ __('Image') }}
                                    </th>
                                    <th style="width: 25em">
                                        {{ __('Title') }}
                                    </th>
                                    <th style="width: 25em">
                                        {{ __('Description') }}
                                    </th>
                                    <th class="text-center" style="max-width: 100px;">
                                      {{ __('Status') }}
                                    </th>
                                    <th class="text-center" style="width: 150px">
                                      {{ __('Creation date') }}
                                    </th>
                                    <th class="text-right" style="max-width: 200px">
                                        {{ __('Actions') }}
                                    </th>
                                </thead>
                                <tbody>
                                    @if(count($banners)> 0)
                                    @foreach($banners as $banner)
                                    <tr>
                                        <td style="width: 100px">
                                            <img src="{{ asset($banner->pictures) }}" width="100" alt="">
                                        </td>
                                        <td>
                                            {{ $banner->title }}
                                        </td>
                                        <td>
                                            {{ $banner->details }}
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('banner.update_status', $banner->id) }}" method="Post">
                                                @csrf
                                                <button type="button" class="text-center btn bg-{{ $banner->status==1 ? "success" : "danger" }}"
                                                    onclick="confirm('{{ __("Are you sure you want to update this banner status?") }}') ? this.parentElement.submit() : ''">
                                                {{ $banner->status==1 ? "Active" : "Inactive" }}
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center" style="width: 100px">
                                            {{ $banner->created_at->format('Y-m-d') }}
                                        </td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('banner.destroy', $banner) }}" method="Post">
                                                @csrf
                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="{{ route('banner.edit', $banner) }}">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link"
                                                    data-original-title="" title=""
                                                    onclick="confirm('{{ __("Are you sure you want to delete this banner?") }}') ? this.parentElement.submit() : ''">
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
                        {{ $banners->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
