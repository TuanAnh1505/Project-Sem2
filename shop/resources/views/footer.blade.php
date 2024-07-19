<link rel="stylesheet" href="/css/base.css">
<!-- Footer -->
<style>
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
            margin-top: 40px;
            color: #f2931f;
            margin-bottom: 30px;
        }
        footer p {
            margin: 5px 0;
            font-size: 16px;
            color: #e3e0e0;
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

 <div class="footer-1">

        <div class="grid">
            <div class="wrap-column">
                <div class="footer__rate">
                    <div class="footer__rate-container">
                        <div class="footer__rate-img">
                            <img src="/template/images/footer_01.png" alt="">
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
                            <img src="/template/images/footer_02.png" alt="">
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
                            <img src="/template/images/footer_03.png" alt="">
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
                            <img src="/template/images/footer_04.png" alt="">
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
 
<footer style="background-image:url('{{ asset('template/images/footer_bg.jpg') }}')">
        <img style="width:15%;" src="{{ asset('template/images/hidu 1.png') }}" alt="">
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
                <img src="{{ asset('/template/images/so_01.png') }}" alt="">
                <p>Thường Tín, Hà Nội</p>
                <a href="{{ url('/contact') }}">Xem trên bản đồ</a>
            </div>
            <div class="lien_he">
                <img src="{{ asset('/template/images/so_02.png') }}" alt="">
                <p>Ngõ 218, Lĩnh Nam, Hoàng Mai</p>
                <a href="{{ url('/contact') }}">Xem trên bản đồ</a>
            </div>
            <div class="lien_he">
                <img src="{{ asset('/template/images/so_03.png') }}" alt="">
                <p>Vincom Bà Triệu</p>
                <a href="{{ url('/contact') }}">Xem trên bản đồ</a>
            </div>
            <div class="lien_he">
                <img src="{{ asset('/template/images/so_04.png') }}" alt="">
                <p>Time City</p>
                <a href="{{ url('/contact') }}">Xem trên bản đồ</a>
            </div>
        </div>
        <img src="{{ asset('/template/images/dathongbao.png') }}" alt="" style="margin-top: 20px; margin-bottom: 20px;">
        <p>Công ty TNHH Pizza HUT Việt Nam Số ĐKKD: 8386</p>
        <p>Địa Chỉ: Thường Tín, Hà Nội</p>
        <p>Số điện thoại: 012345678</p>
        <p style="padding-bottom: 50px;">Email: pizzahut@gmail.com</p>
    </footer>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>

<!-- Modal1 -->
<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
    <div class="overlay-modal1 js-hide-modal1"></div>

    <div class="container">
        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                <img src="images/icons/icon-close.png" alt="CLOSE">
            </button>

            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="images/product-detail-01.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="item-slick3" data-thumb="images/product-detail-02.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="item-slick3" data-thumb="images/product-detail-03.jpg">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            Lightweight Jacket
                        </h4>

                        <span class="mtext-106 cl2">
								$58.79
							</span>

                        <p class="stext-102 cl3 p-t-23">
                            Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
                        </p>

                        <!--  -->
                        <div class="p-t-33">
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
                                            <option>Choose an option</option>
                                            <option>Size S</option>
                                            <option>Size M</option>
                                            <option>Size L</option>
                                            <option>Size XL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
                                            <option>Choose an option</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>White</option>
                                            <option>Grey</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>

                                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                            <div class="flex-m bor9 p-r-10 m-r-11">
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                    <i class="zmdi zmdi-favorite"></i>
                                </a>
                            </div>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="/template/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/template/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/template/vendor/bootstrap/js/popper.js"></script>
<script src="/template/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/template/vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="/template/vendor/daterangepicker/moment.min.js"></script>
<script src="/template/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/template/vendor/slick/slick.min.js"></script>
<script src="/template/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="/template/vendor/parallax100/parallax100.js"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="/template/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>
<!--===============================================================================================-->
<script src="/template/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="/template/vendor/sweetalert/sweetalert.min.js"></script>
<script>
    $('.js-addwish-b2').on('click', function(e){
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function(){
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });
    });

</script>
<!--===============================================================================================-->
<script src="/template/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function(){
        $(this).css('position','relative');
        $(this).css('overflow','hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function(){
            ps.update();
        })
    });
</script>
<!--===============================================================================================-->
<script src="/template/js/main.js"></script>
<script src="/template/js/public.js"></script>
