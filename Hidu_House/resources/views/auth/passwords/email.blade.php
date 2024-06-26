@extends('layouts.app')

@section('content')
<div class="container-fluid p-0" style=" background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="col-md-4" style="background-color: #f7f7f7; border-radius: 10px; padding: 20px;  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);">
        <div class="card border-0" style="background-color: transparent;">
                <!-- <div class="card-header text-center bg-transparent p-3">
                    <img src="/logo.png" alt="Logo" style="width: 150px; height: 50px;">
                </div> -->
                <div class="card-header text-center bg-transparent" style="font-family: Arial, sans-serif; font-size: 25px; color: #f2931f;">𝙍𝙚𝙨𝙚𝙩 𝙋𝙖𝙨𝙨𝙬𝙤𝙧𝙙</div>

                <div class="card-body" style="padding: 30px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" style="color: #155724; background-color: #d4edda; border-color: #c3e6cb; border-radius: 5px; padding: 10px;">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label" style="font-family: Arial, sans-serif; font-size: 16px; color: #f2931f;">{{ __('Email Address') }}</label>
                            <input 
                                id="email" 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required 
                                autocomplete="email" 
                                autofocus
                                style="border: 2px solid #F78F1E; border-radius: 5px; padding: 10px;"
                            >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        

                        <div class="mb-0 text-center">
                            <button type="submit" class="btn btn-primary w-100" style="background-color: #f2931f;  border-color: #f2931f; font-size: 18px; color: white;">
                                {{ __('𝙎𝙚𝙣𝙙 𝙋𝙖𝙨𝙨𝙬𝙤𝙧𝙙 𝙍𝙚𝙨𝙚𝙩 𝙇𝙞𝙣𝙠') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection