
   

@extends('main') <!-- Định nghĩa layout chung cho dashboard.blade.php -->

@section('content')
<title>{{ $title }}</title>
<style>
        body {
            margin-bottom: 0;
        }
        
        .logout-link {
            margin-left: -20px;
            margin-top: 10px;
            font-size: 16px;
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
            font-size: 16px;
        }
        .li_lienhe .sdt {
            margin-left: 10px;
        }


         #web_title {
        background: url(/template/images/bg_title.png) center bottom no-repeat;
        background-size: cover;
        padding-top: 60px;
        padding-bottom: 60px;
        margin-top: 11vh;
        }
    

    </style>

<link rel="stylesheet" href="./../css/base.css">
    <link rel="stylesheet" href="./../css/blog.css">
    <!-- <div class="container"> -->
    <section id="web_title">    
        <div class="grid">
            <div class="">
                <h1>Blog</h1>
                <div class="breadcrumbs">
                    <span>
                        <span>
                            <a href="#">Trang chủ</a> <span class="separator">/</span> <a href="./blog.html">Blog</a> 
                        </span>
                    </span>
                </div> 		
            </div>
        </div>
    </section>


    


    <div id="content">
    <div class="grid">
        <div class="archive">
            <div class="archive_content">
                <h3 class="archive_content-heading">Các bài viết tiêu biểu</h3>

                @foreach ($baiviets as $baiviet)
                <div class="archive_item">
                    <div class="archive_img">
                        <a href="{{ route('blog.details', ['mabv' => $baiviet->id_bv]) }}">
                            <img src="{{ asset('template/images/' . $baiviet->anhbv) }}" alt="{{ $baiviet->tenbv }}">
                        </a>
                    </div>

                    <div class="archive_heading">
                        <h3>
                            <a href="{{ route('blog.details', ['mabv' => $baiviet->id_bv]) }}">{{ $baiviet->tenbv }}</a>
                        </h3>
                        <span>{{ $baiviet->tinvt }}</span>
                    </div>

                    <a href="{{ route('blog.details', ['mabv' => $baiviet->id_bv]) }}" class="archive_chitiet">
                        Xem chi tiết
                    </a>
                </div>
                @endforeach

                <ul class="pagination home-product__pagination">
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                            <i class="pagination-item__icon fas fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="pagination-item pagination-item--active">
                        <a href="#" class="pagination-item__link ">1</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">2</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">3</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">4</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">5</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">...</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">8</a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                            <i class="pagination-item__icon fas fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
 
            <div class="archive_widget">
                <div class="archive_widget-all">
                    <h3 class="widget-title">BÀI VIẾT KHÁC</h3>
                    <ul>
                        @foreach ($baiviets as $baiviet)
                            <li class="wview_item">
                                <div class="wview_thumb">
                                    <img src="{{ asset('template/images/' . $baiviet->anhbv) }}" width="100%" alt="{{ $baiviet->tenbv }}">
                                </div>
                                <div class="wview_text">
                                    <h3><a href="{{ route('blog.details', ['mabv' => $baiviet->id_bv]) }}" title="{{ $baiviet->tenbv }}">{{ $baiviet->tenbv }}</a></h3>
                                    <span>{{ optional($baiviet->created_at)->format('d-m-Y') }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


    
    
@endsection
