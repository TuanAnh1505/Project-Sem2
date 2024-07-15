<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hidu House</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin-bottom: 0;
        }
        .banner {
            margin-top: -1px;
        }



        .carousel-indicators [data-bs-target] {
            width: 10px;
            height: 10px;
            background-size: cover;
            background-position: center;
            border: none;
            border-radius: 10px;
            background-color: #cd4437;
        }
        



        .logout-link {
            margin-left: -40px;
            margin-top: 10px;
            border-radius: 10px;
        }
        /* .logout-link:active {
            background-color: #f2931f; 
        } */


        .title-section {
            text-align: center;
            margin-top: 20px;
        }
        
        .title-section p {
            display: inline-block;
            vertical-align: middle;
            color: #f2931f;
            font-size: 20px;
            font-family: Sriracha;
        }
        .title-section img {
            margin: 0 15px; 
        }
        .bold-text {
            font-weight: bold;
        }
        .col-md-11 {
            display: flex;
            align-items: center;
        }
        .col-md-11 a {
            margin-right: 10px; 
            text-decoration: none;
            color: #f2931f;
        }
        
        .col-md-2 a {
            text-decoration: none;
        }
        .menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            margin-top: 30px;
            margin-left: 20px;
            
        }
        .menu ul li {
            margin-right: 20px;
            
        }
        .menu ul li a {
            text-decoration: none;
        }
        .menu ul li a p {
            margin: 0;
            color: #f2931f;
            font-size: 16px;
            font-weight: bold;
        }
        .li_lienhe .lienhe {
            display: flex;
            align-items: center;
        }
        .li_lienhe .sdt {
            margin-left: 10px;
        }
        .navigation-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            white-space: nowrap;
        }
        .navigation-bar a {
            margin: 0 10px;
            text-align: center;
            margin-top: 20px;
            margin-right: 10px;

        }

        footer {
            padding: 20px;
            text-align: center;
            font-family: Arial, sans-serif;
            background-image: url('images/footer_bg.jpg');
            color: white;
           
        }
        footer img {
            max-width: 100%;
        }
        footer h4 {
            font-size: 1.5rem;
            margin-top: 10px;
            color: #f2931f;
        }
        footer p {
            margin: 5px 0;
            font-size: 13px;
        }
        .dia_chi_lien_he {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .lien_he {
            text-align: center;
            margin-bottom: 10px;
            padding-bottom: 5px;
        }
        .lien_he img {
            max-width: 50px;
            margin-bottom: 5px;
        }
        .lien_he p {
            margin-bottom: 5px;
        }
        .lien_he a {
            color: #f2931f;
            text-decoration: none;
        }
        li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header class="w-100" style="height: 100px;">
        <div class="row align-items-center">
            <div class="col-md-9 d-flex align-items-center">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="/images/hidu 1.png" alt="BootstrapBrain Logo" width="200" style="margin-left:80px; margin-top: 10px;">
                </a>
                <div class="menu">
                    <ul class="d-flex mb-0">
                        <li><a href="{{ url('/welcome') }}"><p>Trang Chủ</p></a></li>
                        <li><a href="{{ url('/blog') }}"><p>Blog</p></a></li>
                        <li><a href="{{ url('/contact') }}"><p>Liên hệ</p></a></li>
                        <li class="li_lienhe">
                            <div class="lienhe">
                                <div class="text_lienhe">
                                    <span>Gọi điện ngay - Ship liền tay (24/7)</span>
                                </div>
                                <div class="sdt">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>035642496</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="width: auto; margin-left: auto;">
                @if (Route::has('login'))
                <nav class="ml-auto navigation-bar">
                    @auth
                
                    <a class="dropdown-item logout-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <i class="fas fa-user" style="font-size: 24px;"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-link text-dark" style="text-decoration: none;">
                        Log in
                    </a>
                    <span class="separator" style="margin-top: 10px;">/</span>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-link text-dark" style="text-decoration: none;">
                        Register
                    </a>
                    @endif
                    @endauth
                </nav>
                @endif
            </div>
        </div>
    </header>

    <main>
        @yield('content') 
    </main>
  </body>
</html>
