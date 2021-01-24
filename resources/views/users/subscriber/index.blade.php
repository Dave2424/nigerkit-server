@extends('layouts.app', ['activePage' => 'subscriber-management', 'titlePage' => __('User Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">{{ __('Subscribers') }}</h4>
                        <p class="card-category"> {{ __('Here you can manage subscriber') }}</p>
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
                                <a href="{{ route('subscriber.create') }}"
                                    class="btn btn-sm btn-success">{{ __('Add subscriber') }}</a>
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
                                    @if(count($subscribers)> 0)
                                    @foreach($subscribers as $subscriber)
                                    <tr>
                                        <td>
                                            {{ $subscriber->name }}
                                        </td>
                                        <td>
                                            {{ $subscriber->email }}
                                        </td>
                                        <td>
                                            {{ $subscriber->phone }}
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('subscriber.update_status', $subscriber->id) }}" method="Post">
                                                @csrf
                                                <button rel="tooltip" type="button"
                                                    class="btn bg-{{ $subscriber->status==1 ? "success" : "danger" }}"
                                                    data-original-title="{{ $subscriber->status==1 ? "Deactivate" : "Activate" }} Subscriber" title="{{ $subscriber->status==1 ? "Deactivate" : "Activate" }} Subscriber"
                                                    
                                                    onclick="confirm('{{ __("Are you sure you want to update this subscriber status?") }}') ? this.parentElement.submit() : ''">
                                                    {{ $subscriber->status==1 ? "Active" : "Inactive" }}
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            {{ $subscriber->created_at->format('Y-m-d') }}
                                        </td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('subscriber.destroy', $subscriber) }}" method="Post">
                                                @csrf

                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="{{ route('subscriber.edit', $subscriber) }}" data-original-title="Edit Subscriber"
                                                    title="Edit Subscriber">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button rel="tooltip" type="button" class="btn btn-danger btn-link"
                                                    data-original-title="Delete Subscriber" title="Delete Subscriber"
                                                    onclick="confirm('{{ __("Are you sure you want to delete this subscriber?") }}') ? this.parentElement.submit() : ''">
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
                        {{ $subscribers->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
