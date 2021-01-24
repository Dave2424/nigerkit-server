@extends('layouts.app', ['activePage' => 'role-management', 'titlePage' => __('User Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">{{ __('Roles') }}</h4>
                        <p class="card-category"> {{ __('Here you can manage role') }}</p>
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
                                <a href="{{ route('role.create') }}"
                                    class="btn btn-sm btn-success">{{ __('Add role') }}</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th style="width: 25em">
                                        {{ __('Name') }}
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
                                    @if(count($roles)> 0)
                                    @foreach($roles as $role)
                                    <tr>
                                        <td>
                                            {{ $role->name }}
                                        </td>
                                        <td>
                                            {{ $role->details }}
                                        </td>
                                        @if($role->isLocked != 1)
                                        <td class="text-center">
                                            <form action="{{ route('role.update_status', $role->id) }}" method="Post">
                                                @csrf
                                                <button type="button" rel="tooltip" data-original-title="{{ $role->status==1 ? "Deactivate" : "Activate" }} Role" title="{{ $role->status==1 ? "Deactivate" : "Activate" }} Role"
                                                    class="text-center btn bg-{{ $role->status==1 ? "success" : "danger" }}"
                                                    onclick="confirm('{{ __("Are you sure you want to update this role status?") }}') ? this.parentElement.submit() : ''">
                                                    {{ $role->status==1 ? "Active" : "Inactive" }}
                                                </button>
                                            </form>
                                        </td>
                                        @else
                                        <td class="text-center">
                                            <button type="button" rel="tooltip" data-original-title="{{ $role->status==1 ? "Deactivate" : "Activate" }} Role" title="{{ $role->status==1 ? "Deactivate" : "Activate" }} Role"
                                                class="text-center btn bg-{{ $role->status==1 ? "success" : "danger" }}">
                                                {{ $role->status==1 ? "Active" : "Inactive" }}
                                            </button>
                                        </td>
                                        @endif
                                        <td class="text-center" style="width: 100px">
                                            {{ $role->created_at->format('Y-m-d') }}
                                        </td>
                                        <td class="td-actions text-right">
                                            
                                            @if($role->isLocked != 1)
                                            <form action="{{ route('role.destroy', $role) }}" method="Post">
                                                @csrf
                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="{{ route('role.edit_permission', $role->id) }}" data-original-title="Edit Role Permissions"
                                                    title="Edit Role Permissions">
                                                    <i class="material-icons">bubble_chart</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="{{ route('role.edit', $role->id) }}" data-original-title="Edit Role"
                                                    title="Edit Role">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button rel="tooltip" type="button" class="btn btn-danger btn-link"
                                                    data-original-title="Delete Role" title="Delete Role"
                                                    onclick="confirm('{{ __("Are you sure you want to delete this role?") }}') ? this.parentElement.submit() : ''">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        {{ $roles->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
