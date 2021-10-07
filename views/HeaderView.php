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
                        <a style="color: #343a40!important; font-size: 15px;" href="index.php?controller=order&id=<?php echo $_SESSION['customer_id']; ?>"><?php echo $_SESSION['customer_name']; ?>
                        <?php else: ?>
                        <a class="nav-link text-dark text-uppercase" href="" style="display:inline-block">Tài
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
    
    <!-- thanh tieu de "danh muc sach" + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-md-3">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh mục sách</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
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

    <!-- noi dung danh muc sach(categories) + banner slider -->
    <section class="header bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="margin-right: -15px;">
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
                <!-- banner slider  -->
                <div class="col-md-9 px-0">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="nutcarousel carousel-indicators rounded-circle">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php
                                $conn = Connection::getInstance();
                                $query = $conn->query("select * from slide order by id desc limit 0,1");
                                $slide = $query->fetchAll();
                            ?>
                            <?php foreach($slide as $rows): ?>
                            <div class="carousel-item active">
                                <a href="#"><img src="assets/upload/slides/<?php echo $rows->photo; ?>" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="First slide"></a>
                            </div>
                            <?php
                                $conn = Connection::getInstance();
                                $query = $conn->query("select * from slide order by id desc limit 1,3");
                                $slides = $query->fetchAll();
                            ?>
                            <?php foreach($slides as $rows): ?>
                            <div class="carousel-item">
                                <a href="#"><img src="assets/upload/slides/<?php echo $rows->photo; ?>" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="Second slide"></a>
                            </div>
                            <?php endforeach; ?>
                            <?php endforeach; ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>