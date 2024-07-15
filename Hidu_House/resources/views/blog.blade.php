
   

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
                            <img src="{{ asset('images/' . $baiviet->anhbv) }}" alt="{{ $baiviet->tenbv }}">
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
                        <a href="#" class="pagination-item__link">14</a>
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
                                    <img src="{{ asset('images/' . $baiviet->anhbv) }}" width="100%" alt="{{ $baiviet->tenbv }}">
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
                            <p>Chú trọng khâu tuyển chọn đội ngũ đầu bếp chuyên nghiệp, thực đơn của Pizza Capichi luôn được đổi mới, đa dạng với pizza nhiều hương vị, sandwich, mỳ ý và các món ăn nhanh khác.</p>
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
                            <p>Để tăng cường sự tin tưởng và yên tâm với khách hàng, Pizza Capichi cam kết luôn giao hàng đúng giờ và chi phí giao hàng rẻ nhất để đảm bảo khách hàng có thể nhận bánh trong thời gian nhanh nhất.</p>
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
                            <p>Pizza Capichi cùng với đội ngũ nhân viên mang đầy sức trẻ và nhiệt huyết, chúng tôi luôn mong muốn đem lại cho khách hàng của mình chất lượng dịch vụ tốt nhất, luôn lắng nghe và chăm sóc những nhu cầu dù là nhỏ nhất của Quý khách.</p>
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
<!-- </div> -->
@endsection
