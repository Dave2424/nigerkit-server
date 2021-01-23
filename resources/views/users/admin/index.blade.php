@extends('layouts.app', ['activePage' => 'admin-management', 'titlePage' => __('User Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">{{ __('Admins') }}</h4>
                        <p class="card-category"> {{ __('Here you can manage admin') }}</p>
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
                                <a href="{{ route('admin.create') }}"
                                    class="btn btn-sm btn-success">{{ __('Add admin') }}</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>
                                        {{ __('Name') }}
                                    </th>
                                    <th>
                                        {{ __('Email') }}
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
                                    @if(count($admins)> 0)
                                    @foreach($admins as $admin)
                                    <tr>
                                        <td>
                                            {{ $admin->name }}
                                        </td>
                                        <td>
                                            {{ $admin->email }}
                                        </td>
                                        @if ($admin->id == auth()->id())
                                        <td class="text-center">
                                            <span
                                                class="text-center btn bg-{{ $admin->status==1 ? "success" : "danger" }}">
                                                {{ $admin->status==1 ? "Active" : "Inactive" }}
                                            </span>
                                        </td>
                                        @else
                                        <td class="text-center">
                                            <form action="{{ route('admin.update_status', $admin->id) }}" method="Post">
                                                @csrf
                                                <button type="button"
                                                    class="text-center btn bg-{{ $admin->status==1 ? "success" : "danger" }}"
                                                    onclick="confirm('{{ __("Are you sure you want to update this admin status?") }}') ? this.parentElement.submit() : ''">
                                                    {{ $admin->status==1 ? "Active" : "Inactive" }}
                                                </button>
                                            </form>
                                        </td>
                                        @endif
                                        <td>
                                            {{ $admin->created_at->format('Y-m-d') }}
                                        </td>
                                        <td class="td-actions text-right">
                                            @if ($admin->id != auth()->id())
                                            <form action="{{ route('admin.destroy', $admin) }}" method="Post">
                                                @csrf

                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="{{ route('admin.edit', $admin) }}" data-original-title=""
                                                    title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link"
                                                    data-original-title="" title=""
                                                    onclick="confirm('{{ __("Are you sure you want to delete this admin?") }}') ? this.parentElement.submit() : ''">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </form>
                                            @else
                                            <a rel="tooltip" class="btn btn-success btn-link"
                                                href="{{ route('profile.edit') }}" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        {{ $admins->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
