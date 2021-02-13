@extends('layouts.app', ['activePage' => 'admin-management', 'titlePage' => __('Role Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('admin.update_permission', $admin->id) }}" autocomplete="off"
                    class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <div class="card ">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">{{ __('Edit '.$admin->name.' Permissions') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="{{ route('admin.index') }}"
                                        class="btn btn-sm btn-success">{{ __('Back to list') }}</a>
                                </div>
                            </div>

                            <div class="row">
                                @if(count($permissions)>0)
                                    @foreach($permissions as $permission)
                                    <div class="ml-auto mr-auto col-md-2 col-sm-3 text-center">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <label>
                                                <input type="checkbox" class="form-control"
                                                    name="{{ $permission->key }}" id="input-details" {{ $permission->isActive == true ? "checked" : "" }}>
                                                    {{ $permission->name }}
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                <div class="col-sm-10 ml-auto mr-auto col-lg-5 col-md-8">
                                    <div class="form-group text-center">
                                        <h3>No Permissions to assign to {{ $role->name }}</h3>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                       
                        @if(count($permissions)>0 && auth('admin')->user()->hasPermissionTo("Update_Role_Permission"))
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-success">{{ __('Save Update') }}</button>
                            </div>
                        @else
                            @if(auth('admin')->user()->hasPermissionTo("Create_Permission"))
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('permission.create') }}" class="btn btn-success">{{ __('Save Update') }}</a>
                            </div>
                            @else
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('role.index') }}" class="btn btn-success">{{ __('Return Back') }}</a>
                            </div>
                            @endif
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
