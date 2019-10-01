@extends('layouts.login')

@section('content')

<style>
    .bg{
        background: #f12711;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #f5af19, #f12711);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #f5af19, #f12711); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
</style>

<div class="limiter">
    <div class="container-login100" style="background-image: url('/Login_v3/images/bg-01.jpg');">
        <div class="wrap-login100 bg">
                <span class="login100-form-logo">
                    <img src="{{ asset('logo.png')}}" width="70px" height="70px" alt="">
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                    {{ __('Verify Your Email Address') }}
                </span>

                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
        </div>
    </div>
</div>
@endsection



