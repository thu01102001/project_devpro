<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Dealbook-Mua sách trực tuyến giá rẻ nhất</title>
    <meta name="description"
        content="Mua sách online hay, giá tốt nhất, combo sách hot bán chạy, giảm giá cực khủng cùng với những ưu đãi như miễn phí giao hàng, quà tặng miễn phí, đổi trả nhanh chóng. Đa dạng sản phẩm, đáp ứng mọi nhu cầu.">
    <meta name="keywords" content="nhà sách online, mua sách hay, sách hot, sách bán chạy, sách giảm giá nhiều">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./assets/frontend/css/product-item.css">
    
    <script type="text/javascript" src="./assets/frontend/js/main.js"></script>
    <link rel="stylesheet" href="./assets/frontend/fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./assets/frontend/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/frontend/slick/slick-theme.css" />
    <script type="text/javascript" src="./assets/frontend/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/frontend/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/frontend/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/frontend/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="./assets/frontend/favicon_io/site.webmanifest">    
</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="6ZXTskPM"></script>
    <!-- header -->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <!-- logo  -->
            <a class="navbar-brand" href="index.php" style="color: #CF111A;"><b>DealBook</b>.com</a>
            <!-- navbar-toggler  -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <!-- form tìm kiếm  -->
                <!-- form tìm kiếm  -->
            <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                <div class="input-group" style="width: 520px;" style="position: relative;">
                    <input type="text" autocomplete="off" class="form-control" id="key" aria-label="Small"
                        placeholder="Nhập sách cần tìm kiếm...">
                    <div class="input-group-append">
                        <button type="button" class="btn" style="background-color: #CF111A; color: white;">
                            <i class="fa fa-search" id="btnSearch"></i>
                        </button>
                    </div>
                    <div class="smart-search">
                        <ul>
                            <li><img src="assets/upload/products/1629542725_troi-dem-huyen-dieu.jpg" alt=""><a href="#">Cuốn Sách Khám Phá: Trời Đêm Huyền Diệu</a></li>
                            <li><img src="assets/upload/products/1629542725_troi-dem-huyen-dieu.jpg" alt=""><a href="#">Cuốn Sách Khám Phá: Trời Đêm Huyền Diệu</a></li>
                            <li><img src="assets/upload/products/1629542725_troi-dem-huyen-dieu.jpg" alt=""><a href="#">Cuốn Sách Khám Phá: Trời Đêm Huyền Diệu</a></li>
                        </ul>
                    </div>
                </div>
            </form>
            <style>
                .smart-search {position: absolute; width: 100%; background: white; height: 350px; overflow: scroll; z-index: 1;top: 38px;display: none; box-shadow: 2px 3px 5px #504e4e;}
                .smart-search ul {padding: 0px; margin: 0px; list-style: none;}
                .smart-search ul li {border-bottom: 1px solid #dddddd; margin-top: 10px; padding-bottom: 10px; display: flex;}
                .smart-search img {width: 70px; margin-right: 5px;}
                .smart-search a {color: #000;}
                .smart-search a:hover {color: #F5A623; text-decoration: none;}
            </style>
            <script>
                $(document).ready(function(){
                    //bắt sự kiện click của id=btnSearch
                    $("#btnSearch").click(function(){
                        var key = $("#key").val();
                        //di chuyển đến url tìm kiếm
                        location.href = "index.php?controller=search&action=name&key="+key;
                    });
                    //--------------
                    $(".form-control").keyup(function(){
                        var strKey = $("#key").val();
                        if(strKey.trim() == "")
                            $(".smart-search").attr("style","display:none");
                        else{
                            $(".smart-search").attr("style","display:block");
                            //---
                            //sử dụng ajax để lấy duex liệu
                            $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
                                //clear các thẻ li bên trong thẻ ul
                                $(".smart-search ul").empty();
                                //thêm dữ liệu vừa lấy dc bằng ajax vào thẻ ul
                                $(".smart-search ul").append(data);
                            });
                            //---
                        }
                    });
                    //--------------
                });
            </script>

                <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
            <ul class="navbar-nav mb-1 ml-auto">
            <?php if(isset($_SESSION['customer_email'])): ?>
                <div class="dropdown" style="margin-top: 6px;">
                    <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                        <a href="#" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-user"></i>
                        </a>
                        <?php if(isset($_SESSION['customer_email'])): ?>
                        <a style="color: #343a40!important; font-size: 15px;" href="#"><?php echo $_SESSION['customer_name']; ?>
                        <?php else: ?>
                        <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">Tài
                            khoản</a>
                        <?php endif; ?>
                    </li>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php if(isset($_SESSION['customer_email'])): ?>
                        <a href="index.php?controller=account&action=logout" class="dropdown-item nutdangxuat text-center">Đăng xuất</a>
                        <?php else: ?>
                        <a class="dropdown-item nutdangnhap text-center" style="margin-bottom: 10px;" href="index.php?controller=account&action=login">Đăng nhập</a><a class="dropdown-item nutdangky text-center mb-2" href="index.php?controller=account&action=register">Đăng ký</a>
                        <?php endif; ?>
                    </div>
                </div>
                <li class="nav-item giohang">
                    <a href="index.php?controller=cart" class="btn btn-secondary rounded-circle" style="margin-right: 2px;">
                        <i class="fa fa-shopping-cart"></i>
                        <?php 
                            $ProductNumberInCart = 0;
                            if(isset($_SESSION['cart']) != NULL)
                                foreach($_SESSION['cart'] as $product)
                                    $ProductNumberInCart++;
                            else 
                                $ProductNumberInCart = 0;
                        ?>
                        <div class="cart-amount"><?php echo $ProductNumberInCart; ?></div>
                    </a>
                    <a class="nav-link text-dark giohang text-uppercase" href="index.php?controller=cart"
                        style="display:inline-block">Giỏ
                        Hàng</a>
                </li>
            <?php else: ?>
                <div class="dropdown">
                    <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                        <a href="#" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-user"></i>
                        </a>
                        <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">Tài
                            khoản</a>
                    </li>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item nutdangnhap text-center" style="margin-bottom: 10px;" href="index.php?controller=account&action=login">Đăng nhập</a><a class="dropdown-item nutdangky text-center mb-2" href="index.php?controller=account&action=register">Đăng ký</a>
                    </div>
                </div>
                <li class="nav-item giohang">
                    <a href="index.php?controller=cart" class="btn btn-secondary rounded-circle" style="margin-right: 2px;">
                        <i class="fa fa-shopping-cart"></i>
                        <?php 
                            $ProductNumberInCart = 0;
                            if(isset($_SESSION['cart']) != NULL)
                                foreach($_SESSION['cart'] as $product)
                                    $ProductNumberInCart++;
                            else 
                                $ProductNumberInCart = 0;
                        ?>
                        <div class="cart-amount"><?php echo $ProductNumberInCart; ?></div>
                    </a>
                    <a class="nav-link text-dark giohang text-uppercase" href="index.php?controller=cart"
                        style="display:inline-block">Giỏ
                        Hàng</a>
                </li>
            <?php endif; ?>
            </ul>
            </div>
        </div>
    </nav>
    
    <!-- thanh "danh muc sach" đã được ẩn bên trong + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-lg-3 col-md-5">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh mục sách</span>
                        </div>
                        <!-- CATEGORIES -->
                        <div class="categorycontent">
                        <ul>
                        <?php 
                        $conn = Connection::getInstance();
                        $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
                        $categories = $query->fetchAll();
                        ?> 
                        <?php foreach($categories as $rows): ?>
                        <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                            <i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                <?php 
                                  $conn = Connection::getInstance();
                                  $query = $conn->query("select * from categories order by id desc");
                                  $categories = $query->fetchAll();
                                ?>
                                    <li class="liheader"><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>" class="header text-uppercase"><?php echo $rows->name; ?></a></li>
                                    <?php
                                      $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
                                      $categoriesSub = $querySub->fetchAll();
                                    ?>
                                    <?php foreach ($categoriesSub as $rowsSub): ?>
                                    <div class="content trai" style="height: 35px;">
                                        <li><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name ?></a></li>
                                    </div>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ml-auto contact d-none d-md-block">
                    <div class="benphai float-right">
                        <div class="hotline">
                            <i class="fa fa-table"></i>
                            <a href="index.php?controller=orders"><span>Theo dõi <b>đơn hàng</b> </span></a>
                        </div>
                        <i class="fas fa-comments-dollar"></i>
                        <a href="index.php?controller=contact">Hỗ trợ trực tuyến </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <?php echo $this->view; ?>

    <!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->
    <section class="abovefooter text-white" style="background-color: #CF111A;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="./assets/frontend/images/icon-books.png" alt="icon-books">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">HƠN 14.000 TỰA SÁCH HAY</h6>
                            <p class="detail">Tuyển chọn bởi DealBooks</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="./assets/frontend/images/icon-ship.png" alt="icon-ship">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">MIỄN PHÍ GIAO HÀNG</h6>
                            <p class="detail">Từ 150.000đ ở TP.HCM</p>
                            <p class="detail">Từ 300.000đ ở tỉnh thành khác</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="./assets/frontend/images/icon-gift.png" alt="icon-gift">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">QUÀ TẶNG MIỄN PHÍ</h6>
                            <p class="detail">Tặng Bookmark</p>
                            <p class="detail">Bao sách miễn phí</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="./assets/frontend/images/icon-return.png" alt="icon-return">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">ĐỔI TRẢ NHANH CHÓNG</h6>
                            <p class="detail">Hàng bị lỗi được đổi trả nhanh chóng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <footer>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="gioithieu">
                        <h6 class="header text-uppercase font-weight-bold">Về DealBook</h6>
                        <a href="#">Giới thiệu về DealBook</a>
                        <a href="#">Tuyển dụng</a>
                        <div class="fb-like" data-href="https://www.facebook.com/DealBook-110745443947730/"
                            data-width="300px" data-layout="button" data-action="like" data-size="small"
                            data-share="true"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="hotrokh">
                        <h6 class="header text-uppercase font-weight-bold">HỖ TRỢ KHÁCH HÀNG</h6>
                        <a href="#">Hướng dẫn đặt hàng</a>
                        <a href="#">Phương thức thanh toán</a>
                        <a href="#">Phương thức vận chuyển</a>
                        <a href="#">Chính sách đổi trả</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h6 class="header text-uppercase font-weight-bold">HỢP TÁC VÀ LIÊN KẾT</h6>
                        <img src="./assets/frontend/images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h6 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h6>
                        <img src="./assets/frontend/images/visa-payment.jpg" alt="visa-payment">
                        <img src="./assets/frontend/images/master-card-payment.jpg" alt="master-card-payment">
                        <img src="./assets/frontend/images/jcb-payment.jpg" alt="jcb-payment">
                        <img src="./assets/frontend/images/atm-payment.jpg" alt="atm-payment">
                        <img src="./assets/frontend/images/cod-payment.jpg" alt="cod-payment">
                        <img src="./assets/frontend/images/payoo-payment.jpg" alt="payoo-payment">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" style="background: #CF111A;
    position: absolute;
    bottom: 100px;
    right: 34px;" id="backtotop" href="#"
            style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/613b5a3725797d7a89fe4ac0/1ff7tgrb7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>