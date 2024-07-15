@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="./../css/welcome.css">
<div class="container">
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
          
                <div class="carousel-item active">
                    <img height="400px" src="{{ asset('images/banner1.png') }}" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img height="400px" src="{{ asset('images/banner2.png') }}" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img height="400px" src="{{ asset('images/banner3.png') }}" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="title-section text-center">
        <img src="{{ asset('images/line_title.png') }}" alt="">
        <p class="bold-text">Thực Đơn</p>
        <img src="{{ asset('images/line_title.png') }}" alt="">
    </div>

    <div class="thuc_don">
        @foreach ($categories as $category)
            <div class="thuc_don_pizza">
                <a href="{{ route('menu.show', $category->CategoryID) }}">
                    <img src="{{ url('icon', [$category->anh_dm]) }}" alt="">
                    <p>{{ $category->Name }}</p>
                </a>
            </div>
        @endforeach
    </div>

    <div class="new-container">
            @foreach($products as $sp)
                <div class="contact-container ">
                    <div class="box">
                        <img src="{{ asset('picture/' . $sp->ImageProduct) }}" alt="">
                        <p style="text-transform: uppercase;">{{ $sp->ProductName }}</p>
                        <p style="color: #c00a27;" id="Price">{{ number_format($sp->Price, 0, ',', '.') }} VND</p>
                        <div class="size">
                        @if ($category->CategoryID == 1)
                            <div class="tensz">
                                Size
                            </div> <br>
                            <div class="chon_size" style="margin-left: 30px;">
                                <a onclick="Gia_spS()" id="color_a_S" onmouseover="">M</a>
                                <a onclick="Gia_spM()" id="color_a_M" onmouseover="">S</a>
                                <a onclick="Gia_spL()" id="color_a_L" onmouseover="">L</a>
                            </div>
                        @endif
                    </div>
                        <button><a class="muahang" href="{{ url('web_1/chitietsp', ['ma' => $sp->ProductID]) }}">Mua Hang</a></button>
                    </div>
                    <div class="box_white">
                        <div class="tt_chi_tiet">
                            <p class="ProductName">{{ $sp->ProductName }}</p>
                            <div class="thanh_phan">
                                <p>Thành Phần</p>
                                <span>{{ $sp->ttsp }}</span>
                            </div>
                            <div class="kt_gia">
                                <div class="gia">
                                    <img src="{{ asset('picture/icon-P-S.png') }}" alt="">
                                    <span>Size S / 20cm / 90.000đ</span>
                                </div>
                                <div class="gia">
                                    <img src="{{ asset('picture/icon-P-M.png') }}" alt="">
                                    <span>Size M / 24cm / 110.000đ</span>
                                </div>
                                <div class="gia">
                                    <img src="{{ asset('picture/icon-P-L.png') }}" alt="">
                                    <span>Size L / 29cm / 150.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="combo_sp" style="background-image: url('{{ asset('images/combo_bg.jpg') }}');max-width: 100%;">
            <div class="combo_container">
                <div class="combo_heading text-center">
                    <div class="combo_text">Siêu tiết kiệm</div>
                </div>

                <div class="combo_title-wrap text-center">
                    <h2 class="combo_title">Combo siêu hấp dẫn</h2>
                </div>

                <!-- Sản phẩm -->
                <div class="combo_item-wrapper">
                    @foreach ($products1 as $product)
                        <div class="combo_item">
                            <div class="combo_thumb">
                                <img src="{{ asset('images/' . $product->ImageProduct) }}" alt="">
                            </div>

                            <div class="combo_title_addcart">
                                <h4>{{ $product->ProductName }}</h4>
                                <div class="buy-now">
                                    <a href="{{ url('web_1/chitietsp.php?ma=' . $product->ProductID) }}">Mua hàng</a>
                                </div>
                            </div>

                            <img src="{{ asset('images/footer_line.png') }}" alt="">

                            <div class="combo_info_price">
                                <div class="combo_description">
                                    @if ($product->ProductName == 'COMBO 01')
                                        Cho 2 người
                                    @elseif ($product->ProductName == 'COMBO 02')
                                        Cho 3 người
                                    @elseif ($product->ProductName == 'COMBO 03')
                                        Cho 4 người
                                    @elseif ($product->ProductName == 'COMBO 04')
                                        Cho 6 người
                                    @endif
                                </div>
                                <div class="combo_price">
                                    <span>{{ number_format($product->Price, 0, ',', '.') }}đ</span>
                                </div>
                            </div>


                            <div class="combo_desc ">{{ $product->ttsp }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>





    <footer style="background-image:url('{{ asset('images/footer_bg.jpg') }}')">
        <img style="width:15%;" src="{{ asset('images/hidu 1.png') }}" alt="">
        <h4>CÔNG TY TNHH PIZZA HUT VIỆT NAM</h4>
        <p>Để đặt bánh pizza, vui lòng liên hệ tổng đài số: 0356424966</p>
        <p>Để phản ánh chất lượng dịch vụ, vui lòng gọi số: 113</p>
        <p>Email: pizzahut@gmail.com</p>
        <p>Chính sách bảo mật thông tin cá nhân</p>
        <p>Chính sách đổi/trả sản phẩm và hoàn tiền</p>
        <p>Chính sách thanh toán</p>
        <img src="images/footer_line.png" alt="">
        <div class="dia_chi_lien_he">
            <div class="lien_he">
                <img src="{{ asset('images/so_01.png') }}" alt="">
                <p>Thường Tín, Hà Nội</p>
                <a href="{{ url('/contact') }}">Xem trên bản đồ</a>
            </div>
            <div class="lien_he">
                <img src="{{ asset('images/so_02.png') }}" alt="">
                <p>Ngõ 218, Lĩnh Nam, Hoàng Mai</p>
                <a href="{{ url('/contact') }}">Xem trên bản đồ</a>
            </div>
            <div class="lien_he">
                <img src="{{ asset('images/so_03.png') }}" alt="">
                <p>Vincom Bà Triệu</p>
                <a href="{{ url('/contact') }}">Xem trên bản đồ</a>
            </div>
            <div class="lien_he">
                <img src="{{ asset('images/so_04.png') }}" alt="">
                <p>Time City</p>
                <a href="{{ url('/contact') }}">Xem trên bản đồ</a>
            </div>
        </div>
        <img src="{{ asset('images/dathongbao.png') }}" alt="" style="margin-top: 20px; margin-bottom: 20px;">
        <p>Công ty TNHH Pizza HUT Việt Nam Số ĐKKD: 8386</p>
        <p>Địa Chỉ: Thường Tín, Hà Nội</p>
        <p>Số điện thoại: 012345678</p>
        <p style="padding-bottom: 50px;">Email: pizzahut@gmail.com</p>
    </footer>

</div>
@endsection
