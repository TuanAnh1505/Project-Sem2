<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 11 Custom User Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style type="text/css">
        body {
            background: #F8F9FA url('/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9);
        }
    </style>
</head>
<body>
<section class="py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card border border-light-subtle rounded-3 shadow-sm">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="text-center mb-3">
                            <a href="#!">
                                <img src="/images/hidu 1.png" alt="BootstrapBrain Logo" width="250">
                            </a>
                        </div>
                        <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign up to your account</h2>
                        <form method="POST" action="{{ route('register.post') }}">
                            @csrf

                            {{--              @session('error')--}}
                            {{--                  <div class="alert alert-danger" role="alert"> --}}
                            {{--                      {{ $value }}--}}
                            {{--                  </div>--}}
                            {{--              @endsession--}}
                            @if(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif


                            <div class="row gy-2 overflow-hidden">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('UserName') is-invalid @enderror" name="UserName" id="UserName" placeholder="name@example.com" required>
                                        <label for="UserName" class="form-label">{{ __('Name') }}</label>
                                    </div>
                                    @error('UserName')
                                    <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required>
                                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    </div>
                                    @error('email')
                                    <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('Phone') is-invalid @enderror" name="Phone" id="Phone" placeholder="Phone Number" value="{{ old('Phone') }}" required>
                                        <label for="Phone" class="form-label">{{ __('Phone Number') }}</label>
                                    </div>
                                    @error('Phone')
                                    <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>


                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="Password" required>
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                    </div>
                                    @error('password')
                                    <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" value="" placeholder="password_confirmation" required>
                                        <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                                    </div>
                                    @error('password_confirmation')
                                    <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="d-grid my-3">
                                        <button class="btn btn-primary btn-lg" style="background-color: #f2931f; border-color: #f2931f; font-size: 18px; color: white;">{{ __('Register') }}</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="m-0 text-secondary text-center">Have an account? <a href="{{ route('login') }}" class="link-primary text-decoration-none" style="color: #f2931f;">Sign in</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

