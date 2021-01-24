@extends('layouts.app', ['activePage' => 'permission-management', 'titlePage' => __('User Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">{{ __('Permissions') }}</h4>
                        <p class="card-category"> {{ __('Here you can manage permission') }}</p>
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
                                <a href="{{ route('permission.create') }}"
                                    class="btn btn-sm btn-success">{{ __('Add permission') }}</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th style="width: 25em">
                                        {{ __('Name') }}
                                    </th>
                                    <th>
                                        {{ __('Roles') }}
                                    </th>
                                    <th>
                                        {{ __('Users') }}
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
                                    @if(count($permissions)> 0)
                                    @foreach($permissions as $permission)
                                    <tr>
                                        <td>
                                            {{ $permission->name }}
                                        </td>
                                        <td>
                                            {{ $permission->roles->count() }}
                                        </td>
                                        <td>
                                            {{ $permission->admins->count() }}
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('permission.update_status', $permission->id) }}" method="Post">
                                                @csrf
                                                <button type="button" rel="tooltip" data-original-title="{{ $permission->status==1 ? "Deactivate" : "Activate" }} Permission" title="{{ $permission->status==1 ? "Deactivate" : "Activate" }} Permission"
                                                    class="text-center btn bg-{{ $permission->status==1 ? "success" : "danger" }}"
                                                    onclick="confirm('{{ __("Are you sure you want to update this permission status?") }}') ? this.parentElement.submit() : ''">
                                                    {{ $permission->status==1 ? "Active" : "Inactive" }}
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center" style="width: 100px">
                                            {{ $permission->created_at->format('Y-m-d') }}
                                        </td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('permission.destroy', $permission) }}" method="Post">
                                                @csrf
                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="{{ route('permission.edit', $permission->id) }}" data-original-title="Edit Permission"
                                                    title="Edit Permission">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button rel="tooltip" type="button" class="btn btn-danger btn-link"
                                                    data-original-title="Delete Permission" title="Delete Permission"
                                                    onclick="confirm('{{ __("Are you sure you want to delete this permission?") }}') ? this.parentElement.submit() : ''">
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
                        {{ $permissions->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
