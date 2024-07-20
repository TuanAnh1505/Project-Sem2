<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')
    <style type="text/css">
        body {
            background: #F8F9FA url('/template/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9); /* Màu nền cho card */
        }
    </style>
</head>
<body class="hold-transition login-page">
        <div class="login-box">
        <!-- <div class="login-logo">
            <a href="#"><b>Admin</b></a>
        </div> -->
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <div class="text-center mb-3">
                    <a href="#!">
                        <img src="/template/images/hidu 1.png" alt="BootstrapBrain Logo" width="250">
                    </a>
                </div>
                <p class="login-box-msg">Sign in to start your session</p>
                @include('admin.alert')
                <form action="/admin/users/login/store" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #f2931f; border-color: #f2931f;">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
<!-- /.login-box -->

    @include('admin.footer')
</body>
</html>
