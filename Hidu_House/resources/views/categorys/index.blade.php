<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HiduHouse')</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanhtoan.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-free-5.15.4-web/css/all.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    .modal-content {
        margin: 0 auto;
        width: 50%;
        position: relative;
        display: flex;
        flex-direction: column;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem;
        outline: 0;
    }
    .xo{
        color: black;
        text-decoration: none;
    }
</style>
<body>

    <header>
        <div class="pizzaex">
            <img style="width: 15%;" src="{{ asset('images/image/hidu 1.png') }}" alt="Pizza Image">
            <p>Pizza ngon - Giá rẻ - Vận chuyển tận nhà</p>
            <button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button>
        </div>

            <!-- Tài khoản -->
            <div class="header__acc">
                <a href="" class="header__acc-link">
                    <i class="fas fa-user header__acc-icon"></i> <br>
                </a>

                        <div class="validater">
                            <ul class="validater-list">
                            <?php
                include './web_1/db.php';
                    if(isset($_SESSION['tentk'])){
                        $tentk=$_SESSION['tentk'];
                        $sqltk="select * from tk where user='$tentk'";
                        $kqtk=$con->query($sqltk)->fetch();
                        if($kqtk['quyen']==1){
                                ?>
                                <li>
                                <a class="validater-item" href="admin/quanlysp.php">Quản Lý</a>
                                </li>

                                <?php
                        }

                        ?>
                                <li>
                                    <a href="./web_1/donhang.php?idtk=<?php echo $kqtk['id_tk'] ?>" class="validater-item">Đơn Hàng</a>
                                </li>
                                <li>
                                    <a href="./web_1/dangxuat.php" class="validater-item">Đăng Xuất</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                                <?php
                    }else{
                        ?>
                        <!-- <div class="validater">
                            <ul class="validater-list"> -->
                                <li>
                                    <a href="./web_1/validater-register.php" class="validater-item">Đăng Ký</a>
                                </li>
                                <li>
                                    <a href="./web_1/validater-login.php" class="validater-item">Đăng nhập</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                        <?php
                    }
                ?>


            <div id="myModal" class="modal">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Giỏ Hàng</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                    <?php
                    if (isset($_SESSION['tentk'])) {
                    $sqlgh="SELECT * FROM `gio_hang` as gh, tk as tkk, sanpham as sp, size as sz WHERE gh.id_s=sz.id_s AND gh.id_tk=tkk.id_tk AND gh.id_sp=sp.id_sp AND gh.trangthai='0' and tkk.user='$tentk'";
                    $kqgh=$con->query($sqlgh);
                    $total=0;
                    foreach($kqgh as $abc => $gh){
                        ?>
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column"><img width="50" src="./web_1/picture/<?php echo $gh['anhdd'] ?>" alt="">:<?php echo $gh['tensp'] ?></span>
                            <span class="cart-price cart-header cart-column">Số Lượng: <?php echo $gh['sl'] ?>
                                </span>
                            <span class="cart-quantity cart-header cart-column"><?php
                                    if($gh['id_dm']==1){
                                        ?>  size: <?php echo $gh['ten_size'] ?>
                                        <?php echo number_format($gh['gia_tien'],0,',','.') ?> VND
                                        <?php
                                    }else{
                                        ?>
                                            <?php echo number_format($gh['giasp'],0,',','.') ?> VND
                                        <?php
                                    }
                                ?></span>

                        </div>

                        <?php
                        if ($gh['id_dm']==1) {
                            $tong=$gh['gia_tien']*$gh['sl'];
                        }else {
                            $tong=$gh['giasp']*$gh['sl'];
                        }

                        $total += $tong;
                    }
                }else{
                    echo 'Mời bạn đăng nhập để thêm sản phẩm vào giỏ hàng của mình!';
                }
                ?>

                        <div class="cart-items">

                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">Tổng Cộng:</strong>
                            <?php
                                if (isset($_SESSION['tentk'])) {
                                    ?>
                                        <span class="cart-total-price"><?php echo number_format($total,0,',','.') ?>VND</span>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                        <button type="button" class="btn btn-primary order"><a class="xo" href="./web_1/giohang.php?idtk=<?php echo $kqtk['id_tk'] ?>">Thanh Toán</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php"><p>Trang Chủ</p></a></li>
                <li><a href="./web_1/blog.php"><p>Blog</p></a></li>
                <li><a href="./web_1/contact.php"><p>Liên hệ</p></a></li>
                <!-- <li><a href="#"><p>Trang Chủ</p></a></li>
                <li><a href="#"><p>Trang Chủ</p></a></li> -->
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
    </header>
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img height="400px" src="./web_1/image/banner1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img  height="400px" src="./web_1/image/Banner-Pizza-Web-18-9-2021.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img  height="400px" src="./web_1/image/Artboard-4-1.jpg" class="d-block w-100" alt="...">
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
    <div class="td_thucdon">
        <img src="./web_1/picture/line_title.png" alt="">
        <p>Thực Đơn</p>
        <img src="./web_1/picture/line_title.png" alt="">
    </div>
    <div class="thuc_don">
        <?php
            // include './web1/db.php';
            $sqldm="select * from danhmucsp";
            $kqdm=$con->query($sqldm);
            foreach($kqdm as $key => $value){
                ?>
                    <div class="thuc_don_pizza" style="margin-left: 40px;">
                        <a href="./web_1/dmsp.php?id_dm=<?php echo $value['id_dm'] ?>">
                            <img src="./web_1/picture/<?php echo $value['anhdm']?>" alt="">
                            <p><?php echo $value['ten_dm']?></p>
                        </a>
                    </div>
                <?php
            }
        ?>


    </div>
    <div class="container">
        <?php
            $sql="SELECT * FROM danhmucsp AS dm, sanpham as sp WHERE sp.id_dm=dm.id_dm and sp.id_dm='1'";
            $kq=$con->query($sql);
            foreach($kq as $do =>$sp){
                ?>
 <div class="contai">
            <div class="box">
                <img src="./web_1/picture/<?php echo $sp['anhdd'] ?>" alt="">
                <p style="text-transform: uppercase;"><?php echo $sp['tensp'] ?></p>
                <p style="color: #c00a27;" id="gia_sp"><?php echo number_format($sp['giasp'],0,',','.') ?> VND</p>
                <!-- <div class="size">
                    <span style="margin-left: 10px; margin-right: 10px;">Size</span>
                    <div class="chon_size" style="margin-right: 10px;">
                        <a onclick="Gia_spS()" id="color_a_S" onmouseover="">M</a>
                        <a onclick="Gia_spM()" id="color_a_M" onmouseover="">S</a>
                        <a onclick="Gia_spL()" id="color_a_L" onmouseover="">L</a>
                    </div>
                    <span style="margin-right: 10px;">Số Lượng</span>
                    <div class="buttons_added">
                        <input class="hiep" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" type='button' value='-' />
                    <input id='quantity' min='1' name='quantity' type='text' value='1' />
                    <input class="hiep" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' />
                    </div>
                </div> -->
                <button><a class="muahang" href="./web_1/chitietsp.php?ma=<?php echo $sp['id_sp'] ?>">Mua Hang</a></button>
            </div>
            <div class="box_white">
                <div class="tt_chi_tiet">
                    <p class="tensp">
                    <?php echo $sp['tensp'] ?>
                    </p>
                    <div class="thanh_phan">
                        <p>Thành Phần</p>
                        <span><?php echo $sp['ttsp'] ?></span>
                    </div>
                    <div class="kt_gia">
                        <div class="gia">
                            <img src="./web_1/picture/icon-P-S.png" alt="">
                            <span>Size S / 20cm / 90.000đ</span>
                        </div>
                        <div class="gia">
                            <img src="./web_1/picture/icon-P-M.png" alt="">
                            <span>Size M / 24cm / 110.000đ</span>
                        </div>
                        <div class="gia">
                            <img src="./web_1/picture/icon-P-L.png" alt="">
                            <span>Size L / 29cm / 150.000đ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <?php
            }
        ?>

        <!-- clear  -->

     </div>
    <div class="combo_sp">
        <div class="combo_container">
            <div class="combo_heading">
                <div class="combo_text">Siêu tiết kiệm </div>
            </div>

            <div class="combo_title-wrap ">
                <h2 class="combo_title">Combo siêu hấp dẫn</h2>
            </div>

            <!-- Sản phẩm -->
             <div class="combo_item-wrapper">
                <div class="combo_item-colum">
                    <?php
                        $sqlcb="select * from sanpham where id_dm='5'";
                        $kqcb=$con->query($sqlcb);
                        foreach($kqcb as $dong => $cb){
                            ?>
                            <div class="combo_item">
                        <div class="combo_thumb">
                            <img src="./web_1/picture/<?php echo $cb['anhdd'] ?>" alt="">
                        </div>

                        <div class="combo_title_addcart">
                            <h4><?php echo $cb['tensp'] ?></h4>
                            <a href="./web_1/chitietsp.php?ma=<?php echo $cb['id_sp'] ?>">Mua hàng</a>
                        </div>

                        <div class="combo_info_price">
                            <?php
                                if($cb['tensp']=='COMBO 01'){
                                    echo 'Cho 2 người';
                                }elseif($cb['tensp']=='COMBO 02'){
                                    echo 'Cho 3 người';
                                }
                                elseif($cb['tensp']=='COMBO 03'){
                                    echo 'Cho 4 người';
                                }
                                elseif($cb['tensp']=='COMBO 04'){
                                    echo 'Cho 6 người';
                                }
                            ?>
                            <span>
                                <?php echo number_format($cb['giasp'],0,',','.'); echo "đ" ?>
                            </span>
                        </div>

                        <div class="combo_desc"><?php echo $cb['ttsp'] ?></div>
                    </div>

                            <?php
                        }
                    ?>


                </div>
            </div>
        </div>
    </div>
    <footer>
        <img style="width:15%;" src="../pizza/web_1/image/hidu 1.png" alt="">
        <h4>CÔNG TY HiduHouse VIỆT NAM</h4>
        <p>Để đặt bánh pizza, vui lòng liên hệ tổng đài số: 0356424966</p>
        <p>Để phản ánh chất lượng dịch vụ, vui lòng gọi số: 113</p>
        <p>Email: hiduhouse@gmail.com</p>
        <p>Chính sách bảo mật thông tin cá nhân</p>
        <p>Chính sách đổi/trả sản phẩm và hoàn tiền</p>
        <p>Chính sách thanh toán</p>
        <img src="{{ asset('image/picture/footer_line.png') }}" alt="Image">
        <div class="dia_chi_lien_he">
            <div class="lien_he">
                <img src="./web_1/picture/so_01.png" alt="">
                <p>Thường Tín, Hà Nội</p>
                <a href="#">Xem trên bản đồ</a>
            </div>
            <div class="lien_he">
                <img src="./web_1/picture/so_02.png" alt="">
                <p>Ngõ 218, Lĩnh Nam, Hoàng Mai</p>
                <a href="#">Xem trên bản đồ</a>
            </div>
            <div class="lien_he">
                <img src="./web_1/picture/so_03.png" alt="">
                <p>Vincom Bà Triệu</p>
                <a href="#">Xem trên bản đồ</a>
            </div>
            <div class="lien_he">
                <img src="./web_1/picture/so_04.png" alt="">
                <p>Time City</p>
                <a href="#">Xem trên bản đồ</a>
            </div>
        </div>
        <img src="../pizza/assets/img/confirm.png" alt="" style="margin-top: 20px; margin-bottom: 20px;"/>
        <p>Công ty HiduHouse Việt Nam Số ĐKKD: 8386</p>
        <p>Địa Chỉ: Thường Tín, Hà Nội</p>
        <p>Số điện thoại: 012345678</p>
        <p style="padding-bottom: 50px;">Email: hiduhouse@gmail.com</p>
    </footer>
    <script src="./web_1/index.js"></script>
    <script src="./web_1/thanhtoan.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
