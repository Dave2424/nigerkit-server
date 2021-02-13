@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">{{ __('Users') }}</h4>
                        <p class="card-category"> {{ __('Here you can manage user') }}</p>
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
                                <a href="{{ route('user.create') }}"
                                    class="btn btn-sm btn-success">{{ __('Add user') }}</a>
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
                                    <th>
                                        {{ __('Phone') }}
                                    </th>
                                    <th class="text-center" style="max-width: 100px;">
                                        {{ __('Email Verified') }}
                                    </th>
                                    <th class="text-center" style="max-width: 100px;">
                                        {{ __('Status') }}
                                    </th>
                                    <th class="text-center" style="max-width: 150px">
                                        {{ __('Creation date') }}
                                    </th>
                                    <th class="text-right" style="max-width: 200px">
                                        {{ __('Actions') }}
                                    </th>
                                </thead>
                                <tbody>
                                    @if(count($users)> 0)
                                    @foreach($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->fname." ".$user->lname }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            {{ $user->phone }}
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('user.update_email_status', $user->id) }}" method="Post">
                                                @csrf
                                                <button type="button" rel="tooltip" data-original-title="{{ !$user->email_verified_at ? "Verify" : "Reset" }} User" title="{{ !$user->email_verified_at ? "Verify" : "Reset" }} Email"
                                                    class="text-center btn bg-{{ $user->email_verified_at ? "success" : "danger" }}"
                                                    onclick="confirm('{{ __("Are you sure you want to update this user email status?") }}') ? this.parentElement.submit() : ''">
                                                    {{ $user->email_verified_at ? "Yes" : "No" }}
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('user.update_status', $user->id) }}" method="Post">
                                                @csrf
                                                <button type="button" rel="tooltip" data-original-title="{{ $user->status==1 ? "Deactivate" : "Activate" }} User" title="{{ $user->status==1 ? "Deactivate" : "Activate" }} User"
                                                    class="text-center btn bg-{{ $user->status==1 ? "success" : "danger" }}"
                                                    onclick="confirm('{{ __("Are you sure you want to update this user status?") }}') ? this.parentElement.submit() : ''">
                                                    {{ $user->status==1 ? "Active" : "Inactive" }}
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center" style="width: 150px">
                                            {{ $user->created_at->format('Y-m-d') }}
                                        </td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('user.destroy', $user) }}" method="Post">
                                                @csrf

                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="{{ route('user.edit', $user) }}" data-original-title="Edit User"
                                                    title="Edit User">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button rel="tooltip" type="button" class="btn btn-danger btn-link"
                                                    data-original-title="Delete User" title="Delete User"
                                                    onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
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
                        {{ $users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
