@extends('layouts.login')

@section('title-website')
    Reset Password
@endsection
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
				<form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                @csrf  
                    <span class="login100-form-logo">
						<img src="{{ asset('logo.png')}}" width="70px" height="70px" alt="">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						{{ __('Reset Password') }}
                    </span>

                     @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div><br><br>
                    @endif

					<div class="wrap-input100 validate-input" data-validate = "{{ __('E-Mail Address') }}">
						<input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

					<div class="container-login100-form-btn">
						<button type="submit" class="btn btn-light btn-block btn-fla">
                          {{ __('Send Password Reset Link') }}
						</button>
                    </div>&nbsp
				</form>
			</div>
		</div>
	</div>
@endsection
