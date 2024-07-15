@extends('layouts.app') <!-- Định nghĩa layout chung cho dashboard.blade.php -->

@section('content')
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
                                    <img src="images/so_01.png" alt="">
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
                                    <img src="images/so_02.png" alt="">
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
                                    <img src="images/so_03.png" alt="">
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
                                    <img src="images/so_04.png" alt="">
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

    
    <div class="footer-1">
        <div class="grid">
            <div class="wrap-column">
                <div class="footer__rate">
                    <div class="footer__rate-container">
                        <div class="footer__rate-img">
                            <img src="images/footer_01.png" alt="">
                        </div>

                        <div class="footer__rate-title">
                            <h3>CHÂT LƯỢNG HÀNG ĐẦU</h3>
                        </div>

                        <div class="footer__rate-text">
                            <p>Chú trọng khâu tuyển chọn đội ngũ đầu bếp chuyên nghiệp, thực đơn của Hidu House luôn được đổi mới, đa dạng với pizza nhiều hương vị, sandwich, mỳ ý và các món ăn nhanh khác.</p>
                        </div>
                    </div>
                </div>

                <div class="footer__rate">
                    <div class="footer__rate-container">
                        <div class="footer__rate-img">
                            <img src="images/footer_02.png" alt="">
                        </div>

                        <div class="footer__rate-title">
                            <h3>GIAO HÀNG ĐÚNG GIỜ</h3>
                        </div>

                        <div class="footer__rate-text">
                            <p>Để tăng cường sự tin tưởng và yên tâm với khách hàng, Hidu House cam kết luôn giao hàng đúng giờ và chi phí giao hàng rẻ nhất để đảm bảo khách hàng có thể nhận bánh trong thời gian nhanh nhất.</p>
                        </div>
                    </div>
                </div>

                <div class="footer__rate">
                    <div class="footer__rate-container">
                        <div class="footer__rate-img">
                            <img src="images/footer_03.png" alt="">
                        </div>

                        <div class="footer__rate-title">
                            <h3>PiZZA TAKE AWAY</h3>
                        </div>

                        <div class="footer__rate-text">
                            <p>Lựa chọn cho mình một hướng đi mới để tạo nên sự khác biệt, mô hình Pizza take away - pizza mang đi giúp khách hàng tiết kiệm thời gian, đem đến sự tiện lợi tối ưu trong việc lựa chọn, thanh toán, đóng gói và nhận hàng.</p>
                        </div>
                    </div>
                </div>

                <div class="footer__rate">
                    <div class="footer__rate-container">
                        <div class="footer__rate-img">
                            <img src="images/footer_04.png" alt="">
                        </div>

                        <div class="footer__rate-title">
                            <h3>PHỤC VỤ CHUYÊN NGHIỆP</h3>
                        </div>

                        <div class="footer__rate-text">
                            <p>Hidu House cùng với đội ngũ nhân viên mang đầy sức trẻ và nhiệt huyết, chúng tôi luôn mong muốn đem lại cho khách hàng của mình chất lượng dịch vụ tốt nhất, luôn lắng nghe và chăm sóc những nhu cầu dù là nhỏ nhất của Quý khách.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-2">
                <div class="grid ">
                    <div class="footer-info">
                        <div class="footer-info__logo">
                            <img src="images/hidu 1.png" alt="">
                        </div>

                        <div class="footer-info__title">
                            <h4>Công ty TNHH Pizza Hut Việt Nam</h4>
                        </div>

                        <div class="footer-info__text">
                            <p>Để đặt bánh pizza, vui lòng liên hệ tổng đài số: 024.36.888.777 <br>

                                Để phản ánh chất lượng dịch vụ, vui lòng gọi số: 0989.139.565 <br>

                                Email: pizzahut@gmail.com <br>

                                Chính sách bảo mật thông tin cá nhân <br>

                                Chính sách đổi/trả sản phẩm và hoàn tiền <br>

                                Chính sách thanh toán</p>
                        </div>

                        <div class="footer-info__line">
                            <img src="images/footer_line.png" alt="">
                        </div>

                        <div class="footer-info__inner">
                            <div class="footer-info__inner-container">
                                <div class="footer-info__inner-content">
                                    <div class="footer-info__inner-img">
                                        <img src="images/so_01.png" alt="">
                                    </div>
                                    <div class="footer-info__inner-title">
                                        <p>107 D3 Ngọc Khánh, Ba Đình</p>
                                    </div>
                                    <div class="footer-info__inner-button">
                                        <a href="{{ url('/contact') }}"> <i class="fas fa-location-arrow"></i> Xem
                                            trên bản đồ </a>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-info__inner-container">
                                <div class="footer-info__inner-content">
                                    <div class="footer-info__inner-img">
                                        <img src="images/so_02.png" alt="">
                                    </div>
                                    <div class="footer-info__inner-title">
                                        <p>14 Ngõ 497 Nguyễn Trãi, Thanh Xuân</p>
                                    </div>
                                    <div class="footer-info__inner-button">
                                        <a href="{{ url('/contact') }}"> <i class="fas fa-location-arrow"></i> Xem
                                            trên bản đồ </a>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-info__inner-container">
                                <div class="footer-info__inner-content">
                                    <div class="footer-info__inner-img">
                                        <img src="images/so_03.png" alt="">
                                    </div>
                                    <div class="footer-info__inner-title">
                                        <p>6 Đồng Bát, Cầu Giấy</p>
                                    </div>
                                    <div class="footer-info__inner-button">
                                        <a href="{{ url('/contact') }}"> <i class="fas fa-location-arrow"></i> Xem
                                            trên bản đồ </a>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-info__inner-container">
                                <div class="footer-info__inner-content">
                                    <div class="footer-info__inner-img">
                                        <img src="images/so_04.png" alt="">
                                    </div>
                                    <div class="footer-info__inner-title">
                                        <p>52 Kim Đồng, Hoàng Ma</p>
                                    </div>
                                    <div class="footer-info__inner-button">
                                        <a href="{{ url('/contact') }}"> <i class="fas fa-location-arrow"></i> Xem
                                            trên bản đồ </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer-info__confirm">
                            <p style="text-align: center; margin: 30px 0 10px 0;">
                                <a href="">
                                    <img src="images/dathongbao.png" alt="" width="150" height="57" />
                                </a>
                            </p>
                            <p style="text-align: center; color: #aaa; line-height: 2rem;">
                                <span style="font-size: 1.2rem; margin: 5px 0;">Công ty TNHH Pizza Capichi Việt
                                    Nam</span><br>
                                <span style="font-size: 1.2rem; margin: 5px 0;">Địa Chỉ: Tòa nhà FPT Polytechnic, Phố
                                    Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</span><br>
                                <span style="font-size: 1.2rem; margin: 5px 0;">Số điện thoại: 0374069452<br>
                                    Email:&nbsp;
                                    <a style="color: #aaa;" href="">duongldph15278@gmail.com</a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
