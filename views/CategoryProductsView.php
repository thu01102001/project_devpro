<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <!-- breadcrumb  -->
 <section class="breadcrumbbar">
    <div class="container">
        <ol class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="#">
            <?php
                $category = $this->modelGetCategory($id);
                echo isset($category->name) ? $category->name : "";
            ?>
            </a></li>
        </ol>
    </div>
</section>

<!-- ảnh banner  -->
<section class="banner">
    <div class="container">
        <a href="sach-moi-tuyen-chon.php"><img src="https://nxbhcm.com.vn/slider/data1/images/sach-moi-04-xu-uy-nam-bo.jpg" alt="banner-sach-ktkn"
                class="img-fluid"></a>
    </div>
</section>
<!-- thể loại sách: kinh tế chính trị nhân vật bài học kinh doanh ( từng ô vuông) -->
<section class="page-content my-3">
        <div class="container">
            <div>
                <h1 class="header text-uppercase">
                    <?php
                        $category = $this->modelGetCategory($id);
                        echo isset($category->name) ? $category->name : "";
                    ?>
                </h1>
            </div>
            <div class="the-loai-sach">
                <ul class="list-unstyled d-flex">
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="./assets/frontend/images/tls-kinh-te-chinh-tri.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Kinh tế - chính trị
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="./assets/frontend/images/tls-nhan-vat-bai-hoc-kinh-doanh.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Nhân vật - Bài học kinh doanh
                            </div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="./assets/frontend/images/tls-sach-khoi-nghiep.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách Khởi Nghiệp
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="./assets/frontend/images/tls-sach-quan-tri-lanh-dao.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách Quản trị - Lãnh đạo
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="./assets/frontend/images/tls-sach-tai-chinh-ke-toan.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách tài chính - kế toán
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="./assets/frontend/images/tls-sach-kinh-te-hoc.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách Kinh tế học
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="./assets/frontend/images/tls-sach-quan-tri-nhan-su.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách quản trị nhân sự
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="./assets/frontend/images/tls-sach-chung-khoan-bat-dong-san-dau-tu.png"
                                    alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách chứng khoán - bất động sản
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="./assets/frontend/images/tls-sach-ky-nang-lam-viec.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách kỹ năng làm việc
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="./assets/frontend/images/tls-sach-marketing-ban-hang.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách marketing - bán hàng
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <!-- khối sản phẩm  -->
    <section class="content my-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <!-- header của khối sản phẩm : tag(tác giả), bộ lọc và sắp xếp  -->
                <div class="header-khoi-sp d-flex">
                    <div class="container">
                        <div class="panel-body">
                            <div style="display: flex;">
                                <div>
                                    <li class="list-group-item" style="border:0px;">Từ &nbsp;&nbsp;
                                    <input type="number" min="0" value="0" id="fromPrice" class="form-control">
                                    </li>
                                </div>
                                <div>
                                    <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="number" min="0" value="0" id="toPrice" class="form-control">
                                    </li>
                                </div>
                                <div>
                                    <li class="list-group-item" style="border:0px; text-align:center;margin-top: 24px;">
                                    <input type="button" class="btn btn-warning" style="background: #F5A623; color: white;" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&amp;action=price&amp;fromPrice=' + document.getElementById('fromPrice').value + '&amp;toPrice=' + document.getElementById('toPrice').value;">
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sort d-flex ml-auto">
                        <div class="sap-xep">
                            <label for="sapxep-select" class="label-select">Sắp xếp</label>
                            <?php
                                $order = isset($_GET["order"]) ? $_GET["order"] : "";
                            ?>
                            <select class="sapxep-select" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $id; ?>&order='+this.value;">
                                <option value="0">Sắp xếp</option>
                                <option <?php if($order == "priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá: Thấp - Cao</option>
                                <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá: Cao - Thấp</option>
                                <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Tên: A - Z</option>
                                <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Tên: Z - A</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- các sản phẩm  -->
                <div class="items">
                    <div class="row">
                        <?php foreach($data as $rows): ?>
                            <div class="col-lg-3 col-md-4 col-xs-6 item DeanGraziosi">
                                <div class="card">
                                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="<?php echo $rows->name; ?>">
                                        <img class="card-img-top anh" src="assets/upload/products/<?php echo $rows->photo; ?>"
                                            alt="<?php echo $rows->name; ?>">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten"><?php echo $rows->name; ?></h6>
                                            <small class="tacgia text-muted"><?php echo $rows->author; ?></small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> ₫</div>
                                                <div class="giacu text-muted"><?php echo number_format($rows->price); ?></div>
                                                <div class="sale">-<?php echo $rows->discount; ?>%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                <li class="active"><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i class="fa fa-star"></a></i></li>
                                                <li class="active"><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><i class="fa fa-star"></a></i></li>
                                                <li class="active"><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><i class="fa fa-star"></a></i></li>
                                                <li class="active"><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><i class="fa fa-star"></a></i></li>
                                                <li class="active"><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><i class="fa fa-star"></a></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- pagination bar -->
                <div class="pagination-bar my-3">
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#">Trang</a></li>
                                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                                    <li class="page-item"><a class="page-link" href="index.php?controller=products&action=category&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php endfor; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!--het khoi san pham-->
            </div>
            <!--het div noidung-->
        </div>
        <!--het container-->
    </section>
    <!--het _1khoi-->