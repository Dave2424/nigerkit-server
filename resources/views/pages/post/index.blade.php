@extends('layouts.app', ['activePage' => 'post-management', 'titlePage' => __('Post Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">{{ __('Posts') }}</h4>
                        <p class="card-category"> {{ __('Here you can manage post') }}</p>
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#viewPost" data-toggle="tab">
                                            <i class="material-icons">toc</i> View posts
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('post.create') }}">
                                            <i class="material-icons">playlist_add</i> Add post
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="#view_sku" data-toggle="tab">
                                            <i class="material-icons">tune</i> Sku No_
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
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
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th class="text-center" style="width: 50px;">
                                        {{ __('Image') }}
                                    </th>
                                    <th style="width: 25em">
                                        {{ __('Title') }}
                                    </th>
                                    <th style="width: 25em">
                                        {{ __('Description') }}
                                    </th>
                                    <th class="text-center" style="max-width: 100px;">
                                        {{ __('Categories') }}
                                    </th>
                                    <th class="text-center" style="max-width: 100px;">
                                        {{ __('Tags') }}
                                    </th>
                                    <th class="text-center" style="max-width: 100px;">
                                        {{ __('Status') }}
                                    </th>
                                    <th class="text-center" style="max-width: 150px">
                                        {{ __('Creation date') }}
                                    </th>
                                    <th class="text-right" style="max-width: 150px">
                                        {{ __('Actions') }}
                                    </th>
                                </thead>
                                <tbody>
                                    @if(count($posts)> 0)
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($post->image)}}" width="50">
                                        </td>
                                        <td>
                                            {{ $post->title }}
                                        </td>
                                        <td>
                                            {{ Str::limit(strip_tags($post->description), 150) }}
                                        </td>
                                        <td class="text-center">
                                            {{ $post->quantity }}
                                        </td>
                                        <td class="text-center">
                                            {{ $post->brand }}
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('post.update_status', $post->id) }}" method="Post">
                                                @csrf
                                                <button type="button" class="text-center btn bg-{{ $post->status==1 ? "success" : "danger" }}"
                                                    onclick="confirm('{{ __("Are you sure you want to update this post status?") }}') ? this.parentElement.submit() : ''">
                                                {{ $post->status==1 ? "Active" : "Inactive" }}
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center" style="max-width: 150px;">
                                            {{ $post->created_at->format('Y-m-d') }}
                                        </td>
                                        <td class="td-actions text-right" style="max-width: 150px;">
                                            <form action="{{ route('post.destroy', $post->id) }}" method="Post">
                                                @csrf

                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                    href="{{ route('post.edit', $post->id) }}" data-original-title=""
                                                    title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link"
                                                    onclick="confirm('{{ __("Are you sure you want to delete this post?") }}') ? this.parentElement.submit() : ''">
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
                        {{ $posts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
