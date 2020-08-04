@extends('layouts.app', [ 'activePage' => 'home', 'title' => __('Material
Dashboard')])

@include('layouts.navbars.navs.guest')
@section('content')
    <div class="container" style="height: auto;margin-top: 10%">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="card card-login mb-3 mt-3">
                    <div class="card-header card-header-success text-center">
                        <p class="card-title"><strong>{{ __('Verify Your Email Address') }}</strong></p>
                    </div>
                    <div class="card-body text-center">
                        <p>
                            {{ __('Click the button below to verify your email.') }}
                            <input type="text" value="{{ $data }}" class="form-control " disabled>

                                <form class="d-inline" method="POST" action="{{ route('confirm-email',['token' => $data, 'id' => $id]) }}">
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-success pull-right">{{ __('Verify') }}</button>.
                                </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
