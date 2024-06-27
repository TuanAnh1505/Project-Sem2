@extends('layouts.app')

@section('content')
<div class="container-fluid p-0" style="background-image: url('/images/background.jpg'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="col-md-4" style="background-color: #f7f7f7; border-radius: 10px; padding: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);">
        <div class="card border-0" style="background-color: transparent;">
            <div class="card-header text-center bg-transparent" style="font-family: Arial, sans-serif; font-size: 25px; color: #f2931f;"> 𝙇𝙤𝙜𝙞𝙣</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="email" class="col-form-label" style="font-family: Arial, sans-serif; font-size: 16px; color: #f2931f;">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="col-form-label" style="font-family: Arial, sans-serif; font-size: 16px; color: #f2931f;">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember" style="color: #f2931f; font-size: 15px;">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link p-0" href="{{ route('password.request') }}" style="text-decoration: none; color: #f2931f;">{{ __('Forgot Your Password?') }}</a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-0 text-center">
                        <button type="submit" class="btn btn-primary w-100" style="background-color: #f2931f; font-size: 18px; color: white;">{{ __('𝙇𝙤𝙜𝙞𝙣') }}</button>
                    </div>

                    <hr class="hr-text" data-content="Hoặc">

                    <div class="form-group mb-3" style="width: 100%; text-align: center;">
                        <span class="label-account" style="font-size: 16px;">Already have an account?</span>
                        <a href="{{ route('register') }}" class="btn-switch" style="text-decoration: none; color: #f2931f; font-size: 18px;">𝙍𝙚𝙜𝙞𝙨𝙩𝙚𝙧</a>
                    </div>                
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control:focus {
        border-color: #f2931f;
        box-shadow: none;

    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var inputs = document.querySelectorAll('.form-control');
        inputs.forEach(function(input) {
            input.addEventListener('input', function() {
                this.style.borderColor = '#f2931f';
            });
        });
    });
</script>
@endsection
