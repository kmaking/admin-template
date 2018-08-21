@extends('admin.layout.auth')

@section('content')

@if (session('status'))
    @alert(['type' => 'success'])
        {{ session('status') }}
    @endalert
@endif

<img src="{{ asset('vendors/images/forgot-password.png') }}" alt="login" class="login-img">
<h2 class="text-center mb-30">Forgot Password</h2>
<form method="POST" action="{{ route('admin.password.email') }}" aria-label="{{ __('Reset Password') }}">
@csrf
    <p>Enter your email address to reset your password</p>
    <div class="input-group custom input-group-lg">
        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email">
        <div class="input-group-append custom">
            <span class="input-group-text{{ $errors->has('email') ? ' text-danger' : '' }}">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </span>
        </div>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="input-group">
                <button class="btn btn-primary btn-lg btn-block">
                    Submit
                </button>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="forgot-password">
                <a href="{{ route('admin.login') }}" class="btn btn-outline-primary btn-lg btn-block">Sign In</a>
            </div>
        </div>
    </div>
</form>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection