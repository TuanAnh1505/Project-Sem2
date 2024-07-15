@extends('layouts.app') <!-- Định nghĩa layout chung cho dashboard.blade.php -->

@section('content')
    <link rel="stylesheet" href="./../css/base.css">
    <!-- <link rel="stylesheet" href="./../css/blog.css"> -->
    <link rel="stylesheet" href="./../css/details-blog.css">
    <style>
        body {
            margin-bottom: 0;
        }
        
        .logout-link {
            margin-left: -40px;
            margin-top: 10px;
            font-size: 14px;
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
            font-size: 14px;
        }
        .li_lienhe .sdt {
            margin-left: 10px;
        }


         #web_title {
        background-image: url('/images/bg_title.png');
        background-size: cover;
        padding-top: 60px;
        padding-bottom: 60px;
        }
        /* .grid {
            text-align: center;
        }
        h1 {
            font-size: 2em;
            color: #fffc00; 
            margin-bottom: 10px; 
            font-style: italic;
        }
        .breadcrumbs {
            font-size: 0.9em;
            color: #666; 
            margin-top: 5px;
        }
        .breadcrumbs a {
            color: white;
            text-decoration: none;
        }
        .breadcrumbs a:hover {
            text-decoration: underline;
        }
        .breadcrumbs span.separator {
            color: #fff;
            margin: 0 5px; 
        }  */

    

    </style>


    <section id="web_title">
            <div class="grid">
                <div class="">
                    <h1>Blog</h1>
                    <div class="breadcrumbs">
                        <span>
                             <span>
                                 <a href="#">Trang chủ</a> / <a href="./blog.html">Liên hệ</a> / <a href="./details-blog.html">Lý Do Khiến Công Việc Của Người Thợ Làm Bánh Pizza Luôn Bền Vững</a>
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
                <h3 class="archive_content-title">{{ $baiviet->tenbv }}</h3>
                <div class="single_content">
                    <p><span style="font-weight: 400;">{{ $baiviet->tinvt }}</span></p>
                    <table style="width: 100%; border-collapse: collapse; background-color: #faefd7; border-color: #ff0000; margin-bottom: 10px;" border="1.5" cellpadding="5">
                        <tbody>
                            <tr>
                                <td style="width: 100%; text-align: center; padding: 5px 0;">
                                    <em>
                                        <span style="font-size: 14pt; color: #ff6600;">Để được miễn phí giao hàng, gọi ngay Hidu House
                                            <a style="color: rgb(96, 96, 255);" href="#">tại đây</a>
                                        </span>
                                    </em>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p><span style="font-weight: 400;">Trapizzino, một loại sandwich riêng pha trộn với phong cách bánh pizza. Các cẩm nang du lịch coi là một trong những món ăn đường phố nhất thiết du khách phải nếm khi đến Italy.</span></p>
                    <p><img src="{{ asset('images/' . $baiviet->anhbv) }}" alt="" width="100%"/></p>
                    <p><b>Hành Trình Ra Đời Của Chiếc Bánh Sandwich</b></p>
                    <p><span style="font-weight: 400;">{{ $baiviet->tinct }}</span></p>
                    <p><b>Tận Hưởng Những Chiếc Bánh Pizza Thơm Ngon Với Đặc Trưng Riêng</b></p>
                    <p><span style="font-weight: 400;">Hãy cùng đến Hidu House để trải nghiệm những món mới với những ƯU ĐÃI vô cùng lớn nhé. Chúng tôi luôn mong muốn gửi đến bạn những bữa ăn chất lượng với giá hợp lý nhất.</span></p>
                    <p><span style="font-weight: 400;">Pizza Capichi với giá hợp lý, phù hợp với mọi lứa tuổi của về giá cả và chất lượng. Với 3 tiêu chí một trong những thương hiệu Pizza Việt Nam. Tiên phong với tiêu chí Pizza Ngon, Giá hợp lý, Phục vụ tại nhà.&nbsp;</span></p>
                    <p><b>Hidu House Với 3 Tiêu Chí: Pizza ngon – Giá rẻ – Vận chuyển tận nhà</b></p>
                    <p><span style="font-weight: 400;">Hãy cùng đến Hidu House để trải nghiệm những món mới với những ƯU ĐÃI vô cùng lớn nhé. Hidu House chúng tôi luôn mong muốn gửi đến bạn những bữa ăn chất lượng với giá hợp lý nhất.</span></p>
                    <p><span style="font-weight: 400;">Hidu House với giá hợp lý, phù hợp với mọi lứa tuổi của về giá cả và chất lượng. Hidu House, một trong những thương hiệu Pizza Việt Nam. Tiên phong với tiêu chí Pizza Ngon, Giá hợp lý, Phục vụ tại nhà.</span></p>
                    <p><span style="font-weight: 400;">– Xem thêm thực đơn tại: </span>
                        <a href="#">
                            <span style="font-weight: 400;">Menu Hấp Dẫn Mỗi Ngày Của Hidu House</span>
                        </a>
                    </p>
                    <p><span style="font-weight: 400;">– Xem khuyến mại tại: </span>
                        <a href="#">
                            <span style="font-weight: 400;">Khuyến Mại Bất Ngờ Đón Chờ Bạn Click</span>
                        </a>
                    </p>
                    <p><span style="font-weight: 400;">– Cập nhật khuyến mại mới tại: </span>
                        <a href="#">
                            <span style="font-weight: 400;">365 Ngày Bất Ngờ Khác Biệt</span>
                        </a>
                    </p>
                    <p><span style="font-weight: 400;">Pizza Hut nghĩ rằng để giúp cho việc phục phụ được ngày một tốt hơn. Khách hàng đặt Pizza nên gọi điện đặt trước để nhà hàng có thể đem tới bạn những tư vấn và hỗ trợ đạt chuẩn dịch vụ 5*</span></p>
                    <p><span style="font-weight: 400;">═════════ Hidu House ═════════</span></p>
                    <p><b>👉 Hidu House HIỆN CÓ 4 CƠ SỞ TẠI HÀ NỘI:</b></p>
                    <p><b>🏪 CS1: Thường Tín, Hà Nội</b></p>
                    <p><b>🏪 CS2: Ngõ 218, Lĩnh Nam, Hoàng Mai</b></p>
                    <p><b>🏪 CS3: Vincom Bà Triệu</b></p>
                    <p><b>🏪 CS4: Time City</b></p>
                    <p>&nbsp;</p>
                </div>
            </div>
            <div class="archive_widget">
                <div class="archive_widget-all">
                    <h3 class="widget-title">BÀI VIẾT KHÁC</h3>
                    <ul>
                        @foreach ($otherBaiviets as $otherBaiviet)
                        <li class="wview_item">
                            <div class="wview_thumb">
                                <img width="100%" src="{{ asset('images/' . $otherBaiviet->anhbv) }}">
                            </div>
                            <div class="wview_text">
                                <h3><a href="{{ route('blog.details', ['mabv' => $otherBaiviet->id_bv]) }}" title="Pizza blog">{{ $otherBaiviet->tenbv }}</a></h3>
                                <span>05-11-2021</span>
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
                            <img src="{{ asset('images/footer_01.png') }}" alt="">
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
                            <img src="{{ asset('images/footer_02.png') }}" alt="">
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
                            <img src="{{ asset('images/footer_03.png') }}" alt="">
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
                            <img src="{{ asset('images/footer_04.png') }}" alt="">
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
                            <img src="/images/hidu 1.png" alt="">
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
                                        <img src="/images/so_01.png" alt="">
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
                                        <img src="/images/so_02.png" alt="">
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
                                        <img src="/images/so_03.png" alt="">
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
                                        <img src="/images/so_04.png" alt="">
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
                                    <img src="/images/dathongbao.png" alt="" width="150" height="57" />
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
@endsection
