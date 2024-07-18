<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiduHouse</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanhtoan.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
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
    color:black;
    text-decoration: none;
}
</style>
<body>
    <header>
        <div class="pizzaex">
        <img src="{{ asset('images/hidu1.png') }}" alt="Logo">
            <p>Pizza ngon - Giá rẻ - Vận chuyển tận nhà</p>
            <button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button>

            <!-- Tài khoản -->
            <div class="header__acc">
                <a href="" class="header__acc-link">
                    <i class="fas fa-user header__acc-icon"></i> <br>
                </a>

                        <div class="validater">
                            <ul class="validater-list">
                            <?php
                    if(isset($_SESSION['UserID'])){
                        $UserID=$_SESSION['UserID'];
                        $sqltk="select * from tk where user='$UserID'";
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
                        <span class="close">&times; </span>
                    </div>
                    <div class="modal-body">
                    <?php
                    if (isset($_SESSION['UserID'])) {
                    $sqlgh="SELECT * FROM `gio_hang` as gh, tk as tkk, sanpham as sp, size as sz WHERE gh.id_s=sz.id_s AND gh.id_tk=tkk.id_tk AND gh.id_sp=sp.id_sp AND gh.trangthai='0' and tkk.user='$UserID'";
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
                                if (isset($_SESSION['UserID'])) {
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
    <footer>
        <img style="width:15%;" src="../pizza/web_1/image/hidu 1.png" alt="">
        <h4>CÔNG TY HiduHouse VIỆT NAM</h4>
        <p>Để đặt bánh pizza, vui lòng liên hệ tổng đài số: 0356424966</p>
        <p>Để phản ánh chất lượng dịch vụ, vui lòng gọi số: 113</p>
        <p>Email: hiduhouse@gmail.com</p>
        <p>Chính sách bảo mật thông tin cá nhân</p>
        <p>Chính sách đổi/trả sản phẩm và hoàn tiền</p>
        <p>Chính sách thanh toán</p>
        <img src="{{ asset('images/hidu1.png') }}" alt="">
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

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
