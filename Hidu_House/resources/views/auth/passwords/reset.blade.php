@extends('layouts.app')

@section('content')
<div class="container-fluid p-0" style="background-image: url('/images/background.jpg'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="col-md-4" style="background-color: #f7f7f7; border-radius: 10px; padding: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);">
        <div class="card border-0" style="background-color: transparent;">
            <div class="card-header text-center bg-transparent" style="font-family: Arial, sans-serif; font-size: 25px; color: #f2931f;"> 𝙍𝙚𝙨𝙚𝙩𝙋𝙖𝙨𝙨𝙬𝙤𝙧𝙙</div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">


                    <div class="form-group mb-3">
                        <label for="email" class="col-form-label" style="font-family: Arial, sans-serif; font-size: 16px; color: #f2931f;">{{ __('Email Address') }}</label>
                        <input id="email" type="Gmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="col-form-label" style="font-family: Arial, sans-serif; font-size: 16px; color: #f2931f;">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password-confirm"class="col-form-label" style="font-family: Arial, sans-serif; font-size: 16px; color: #f2931f;">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary w-100" style="background-color: #f2931f; border-color: #f2931f; font-size: 18px; color: white;">{{ __('𝙍𝙚𝙨𝙚𝙩𝙋𝙖𝙨𝙨𝙬𝙤𝙧𝙙') }}</button>
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