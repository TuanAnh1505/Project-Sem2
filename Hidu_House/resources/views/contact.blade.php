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
        background: url(images/bg_title.png) center bottom no-repeat;
        background-size: cover;
        padding-top: 60px;
        padding-bottom: 60px;
        margin-top: 11vh;
        }
    

    </style>

<link rel="stylesheet" href="./../css/base.css">
    <link rel="stylesheet" href="./../css/contact.css">

    <section id="web_title">    
        <div class="grid">
            <div class="">
                <h1>Liên hệ</h1>
                <div class="breadcrumbs">
                    <span>
                        <span>
                            <a href="#">Trang chủ</a> <span class="separator">/</span>  <a href="./contact.html">Liên hệ</a>
                        </span>
                    </span>
                </div> 		
            </div>
        </div>
    </section>

    <section class="contact">
            <div class="grid">
                <div class="container">
                    <div class="container__sidebar">
                        <h3 class="container__sidebar-title">CÔNG TY TNHH HIDU HOUSE VIỆT NAM</h3>

                        <p class="container__sidebar-text">
                            <span>Để đặt bánh pizza, vui lòng liên hệ tổng đài số: <a href="024.36.888.777">024.36.888.777</a></span> <br>
                            <span>Để phản ánh chất lượng dịch vụ, vui lòng gọi số: <a href="0989.139.565">0989.139.565</a></span> <br>
                            <span>Email: Duongldph15278@gmail.com</span>
                        </p>

                        <h3 class="container__sidebar-title">CÁC CƠ SỞ Hidu House</h3>
                        <div class="result__wrap">
                            <article class="result__item result__item-active">
                                <div class="result__item-thumb">
                                    <img src="/template/images/so_01.png" alt="">
                                </div>

                                <div class="result__item-infor">
                                    <h3>Hidu House Ngọc Khánh</h3>
                                    <p>107 D3 Ngọc Khánh, Ba Đình</p>
                                    <a class="large_map"
                                        href="https://maps.google.com?saddr=Current+Location&amp;daddr=21.027807,105.817630"><i
                                            class="fas fa-location-arrow"></i>Xem trên bản đồ lớn</a>
                                </div>
                            </article>

                            <article class="result__item">
                                <div class="result__item-thumb">
                                    <img src="/template/images/so_02.png" alt="">
                                </div>

                                <div class="result__item-infor">
                                    <h3>Hidu House Nguyễn Trãi</h3>
                                    <p>Số 14 Ngõ 497 Nguyễn Trãi, Thanh Xuân</p>
                                    <a class="large_map"
                                        href="https://maps.google.com?saddr=Current+Location&amp;daddr=21.027807,105.817630"><i
                                            class="fas fa-location-arrow"></i>Xem trên bản đồ lớn</a>
                                </div>
                            </article>

                            <article class="result__item">
                                <div class="result__item-thumb">
                                    <img src="/template/images/so_03.png" alt="">
                                </div>

                                <div class="result__item-infor">
                                    <h3>Hidu House Mỹ Đình</h3>
                                    <p>6 Đồng Bát, Cầu Giấy</p>
                                    <a class="large_map"
                                        href="https://maps.google.com?saddr=Current+Location&amp;daddr=21.027807,105.817630"><i
                                            class="fas fa-location-arrow"></i>Xem trên bản đồ lớn</a>
                                </div>
                            </article>

                            <article class="result__item">
                                <div class="result__item-thumb">
                                    <img src="/template/images/so_04.png" alt="">
                                </div>

                                <div class="result__item-infor">
                                    <h3>Hidu House Hoàng Mai</h3>
                                    <p>52 Kim Đồng, Hoàng Mai</p>
                                    <a class="large_map"
                                        href="https://maps.google.com?saddr=Current+Location&amp;daddr=21.027807,105.817630"><i
                                            class="fas fa-location-arrow"></i>Xem trên bản đồ lớn</a>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638558814273!2d105.74459841478469!3d21.038132792834414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1637153598948!5m2!1svi!2s"
                            width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

    
   
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $("article").hover(
            function () {
                $(this).addClass('result__item-active');
            }, function () {
                $(this).removeClass('result__item-active');
            }
        );
    </script>

@endsection
