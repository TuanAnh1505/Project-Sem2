@extends('main') <!-- Định nghĩa layout chung cho dashboard.blade.php -->

@section('content')
<title>{{ $title }}</title>
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
        background-image: url('/template/images/bg_title.png');
        background-size: cover;
        padding-top: 60px;
        padding-bottom: 60px;
        margin-top: 11vh;
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
                    <p><img src="{{ asset('template/images/' . $baiviet->anhbv) }}" alt="" width="100%"/></p>
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
                                <img width="100%" src="{{ asset('template/images/' . $otherBaiviet->anhbv) }}">
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



   


@endsection
