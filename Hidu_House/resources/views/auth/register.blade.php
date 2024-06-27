@extends('layouts.app')

@section('content')
<div class="container-fluid p-0" style=" background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="col-md-4" style="background-color: #f7f7f7; border-radius: 10px; padding: 20px;  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);">
        <div class="card border-0" style="background-color: transparent;">
                <!-- <div class="card-header text-center bg-transparent p-3">
                    <img src="/logo.png" alt="Logo" style="width: 150px; height: 50px;">
                </div> -->
                <div class="card-header text-center bg-transparent" style="font-family: Arial, sans-serif; font-size: 25px; color: #f2931f;">𝙍𝙚𝙜𝙞𝙨𝙩𝙚𝙧</div>

                <div class="card-body p-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="UserName" class="col-form-label" style="font-family: Arial, sans-serif; font-size: 16px; color: #f2931f;">{{ __('Name') }}</label>
                            <input id="UserName" type="text" class="form-control w-100 @error('UserName') is-invalid @enderror" name="UserName" value="{{ old('UserName') }}" required autocomplete="UserName" autofocus>
                            @error('UserName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="col-form-label" style="font-family: Arial, sans-serif; font-size: 16px; color: #f2931f;">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control w-100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="Phone" class="col-form-label" style="font-family: Arial, sans-serif; font-size: 16px; color: #f2931f;">{{ __('Phone Number') }}</label>
                            <input id="Phone" type="text" class="form-control w-100 @error('Phone') is-invalid @enderror" name="Phone" value="{{ old('Phone') }}" required autocomplete="Phone">
                            @error('Phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="col-form-label" style="font-family: Arial, sans-serif; font-size: 16px; color: #f2931f;">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control w-100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password-confirm" class="col-form-label" style="font-family: Arial, sans-serif; font-size: 16px; color: #f2931f;">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control w-100" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group mt-4 text-center">
                            <!-- <button type="submit" class="btn btn-primary w-100">{{ __('Register') }}</button> -->
                            <button type="submit" class="btn btn-primary w-100" style="background-color: #f2931f;  border-color: #f2931f; font-size: 18px; color: white;">{{ __('𝙍𝙚𝙜𝙞𝙨𝙩𝙚𝙧') }}</button>
                        </div>

                        <hr class="hr-text" data-content="Hoặc">

                        <div class="form-group mb-3" style="width: 100%; text-align: center;">
                            <span class="label-account" style="font-size: 16px;">Already have an account?</span>
                            <a href="{{ route('login') }}" class="btn-switch" style="text-decoration: none; color: #f2931f; font-size: 18px;">𝙍𝙚𝙜𝙞𝙨𝙩𝙚𝙧</a>
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
