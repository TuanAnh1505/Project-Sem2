<header>
<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        position: absolute;
        background-color: #f9f9f9;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        right: 0;
        top: 40px; /* Adjust this value to position the dropdown below the icon */
        min-width: 160px;
        padding: 12px 16px;
        border-radius: 4px;
    }

    .dropdown-content a {
        display: block;
        padding: 6px 0;
        color: black;
        text-decoration: none;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .main-menu li a {
        font-size: 22px;
        
    }

    .menu-desktop .main-menu li a {
        color: #f2931f;
        font-weight: bold;
        
    }

    .menu-desktop {
        text-align: center;
        /* margin-left: 14vh; */
    }

  

</style>
    @php $menusHtml = \App\Helpers\Helper::menus($menus); @endphp
    <!-- Header desktop -->
    <div class="container-menu-desktop">

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="#" class="logo">
                    <img src="/template/images/hidu 1.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu"><a href="/">Trang Chủ</a> </li>

                        {!! $menusHtml !!}

                        
    
                       <!-- <li>
                            <a href="{{ route('carts.customer')}}">don hang</a>
                       </li> -->
                        <li>
                            <a href="{{ route('blog') }}">Blog</a>
                        </li>

                        <li>
                            <a href="{{ route('contact') }}">Liên hệ</a>
                        </li>
                    </ul>
                </div>

                

                <!-- Icon header -->
                
                   

                    <div style="width: auto; margin-left: auto;">
                        <nav class="ml-auto navigation-bar">
                            <div class="dropdown">
                                <a class="dropdown-item logout-link" href="#" onclick="toggleLoginRegister(event)">
                                    <i class="zmdi zmdi-account" style="font-size: 30px; border-radius: 5px;"></i>
                                </a>

                                <div id="login-register-links" class="dropdown-content" style="display: none; text-align: center;">
                                    <!-- This section is hidden by default -->
                                    @auth
                                    <!-- If user is authenticated, show logout link -->
                                    <a class="dropdown-item logout-link" href="{{ route('auth.logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Log out
                                    </a>
                                    <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @else
                                    <!-- If user is not authenticated, show login and register links -->
                                    <a href="{{ route('auth.login') }}" class="dropdown-item text-dark" style="text-decoration: none;">
                                        Log in
                                    </a>
                                    <a href="{{ route('auth.register') }}" class="dropdown-item text-dark" style="text-decoration: none;">
                                        Register
                                    </a>
                                    @endauth
                                </div>
                            </div>
                        </nav>
                    </div>

                    <script>
                        function toggleLoginRegister(event) {
                            event.preventDefault();
                            var loginRegisterLinks = document.getElementById('login-register-links');
                            if (loginRegisterLinks.style.display === 'none') {
                                loginRegisterLinks.style.display = 'block';
                            } else {
                                loginRegisterLinks.style.display = 'none';
                            }
                        }
                    </script>

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" 
                         data-notify="{{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                
            </nav>
        </div>
    </div>


    

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="/template/images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div> -->

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" style="background:#f2931f;" data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li class="active-menu"><a href="/">Trang Chủ</a> </li>

            {!! $menusHtml !!}
            <li>
                <a href="{{ route('blog') }}">Blog</a>
            </li>

            <li>
                <a href="{{ route('contact') }}">Liên Hệ</a>
            </li>

        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="/template/images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
