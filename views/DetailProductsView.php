<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<!-- breadcrumb  -->
<section class="breadcrumbbar">
    <div class="container">
        <ol class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="index.php?controller=products&action=category&id=<?php echo $record->category_id; ?>">
            <?php
                $category = $this->modelGetCategory($record->category_id);
                echo isset($category->name) ? $category->name : "";
            ?>
            </a></li>
            <li class="breadcrumb-item active"><a href="#">
            <?php
                $product = $this->modelGetProduct($id);
                echo isset($product->name) ? $product->name : "";
            ?>
            </a></li>
        </ol>
    </div>
</section>

<!-- nội dung của trang  -->
<section class="product-page mb-4">
    <div class="container">
        <!-- chi tiết 1 sản phẩm -->
        <div class="product-detail bg-white p-4">
            <div class="row">
                <!-- ảnh  -->
                <div class="col-md-5 khoianh">
                    <div class="anhto mb-4">
                        <a class="active" href="<?php echo $record->name; ?>" data-fancybox="thumb-img">
                            <img class="product-image" src="assets/upload/products/<?php echo $record->photo; ?>" alt="<?php echo $record->name; ?>" style="width: 100%;">
                        </a>
                    </div>
                    <div class="list-anhchitiet d-flex mb-4" style="margin-left: 2rem;">
                        <img class="thumb-img thumb1 mr-3" src="assets/upload/products/<?php echo $record->photo; ?>" alt="<?php echo $record->name; ?>">
                        <img class="thumb-img thumb2 vienvang" src="assets/upload/products/<?php echo $record->photo1; ?>" alt="<?php echo $record->name; ?>">
                    </div>
                </div>
                <!-- thông tin sản phẩm: tên, giá bìa giá bán tiết kiệm, các khuyến mãi, nút chọn mua.... -->
                <div class="col-md-7 khoithongtin">
                    <div class="row">
                        <div class="col-md-12 header">
                            <h4 class="ten"><?php echo $record->name; ?></h4>
                            <div class="rate">
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star "></i>
                                </div>
                            <hr>
                        </div>
                        <div class="col-md-7">
                            <div class="gia">
                                <div class="giabia">Giá bìa:<span class="giacu ml-2"><?php echo number_format($record->price); ?> ₫</span></div>
                                <div class="giaban">Giá bán tại DealBooks: <span
                                        class="giamoi font-weight-bold"><?php echo number_format($record->price - ($record->price * $record->discount)/100); ?> </span><span class="donvitien">₫</span></div>
                                <div class="tietkiem">Tiết kiệm: <b><?php echo number_format($record->price * $record->discount/100); ?>₫</b> <span class="sale">-20%</span>
                                </div>
                            </div>
                            <div class="uudai my-3">
                                <h6 class="header font-weight-bold">Khuyến mãi & Ưu đãi tại DealBook:</h6>
                                <ul>
                                    <li><b>Miễn phí giao hàng </b>cho đơn hàng từ 150.000đ ở TP.HCM và 300.000đ ở
                                        Tỉnh/Thành khác <a href="#">>> Chi tiết</a></li>
                                    <li><b>Combo sách HOT - GIẢM 25% </b><a href="#">>>Xem ngay</a></li>
                                    <li>Tặng Bookmark cho mỗi đơn hàng</li>
                                    <li>Bao sách miễn phí (theo yêu cầu)</li>
                                </ul>
                            </div>
                            <div class="soluong d-flex">
                                <label class="font-weight-bold">Số lượng: </label>
                                <div class="input-number input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text btn-spin btn-dec">-</span>
                                    </div>
                                    <input type="text" value="1" class="soluongsp text-center">
                                    <div class="input-group-append">
                                        <span class="input-group-text btn-spin btn-inc">+</span>
                                    </div>
                                </div>
                            </div>
                            <a class="chonmua" href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" class="button">
                                <div class="nutmua btn w-100 text-uppercase">CHỌN MUA</div>
                            </a>
                            <a class="huongdanmuahang text-decoration-none" href="#">(Vui lòng xem hướng dẫn mua
                                hàng)</a>
                            
                            <div class="fb-like" data-href="https://www.facebook.com/DealBook-110745443947730/"
                                data-width="300px" data-layout="button" data-action="like" data-size="small"
                                data-share="true"></div>
                        </div>
                        <div class="col-md-5">
                            <div class="thongtinsach">
                                <ul>
                                    <li>Tác giả: <a href="#" class="tacgia"><?php echo $record->author; ?></a></li>
                                    <li>Kích thước: <b>20.5 x 13.5 cm</b></li>
                                    <li>Nhà xuất bản: Nhà Xuất Bản Thanh Niên</li>
                                    <li>Hình thức bìa: <b>Bìa mềm</b></li>
                                    <li>Số trang: <b>336</b></li>
                                    <li>Cân nặng: <b>0</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-description">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active text-uppercase" id="nav-gioithieu-tab"
                            data-toggle="tab" href="#nav-gioithieu" role="tab" aria-controls="nav-gioithieu"
                            aria-selected="true">Giới thiệu</a>
                        <a class="nav-item nav-link text-uppercase" id="nav-danhgia-tab" data-toggle="tab"
                            href="#nav-danhgia" role="tab" aria-controls="nav-danhgia"
                            aria-selected="false">Đánh
                            giá của độc giả</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active ml-3" id="nav-gioithieu" role="tabpanel"
                        aria-labelledby="nav-gioithieu-tab">
                        <h6 class="tieude font-weight-bold">Sách Hay Nên Đọc</h6>
                        <p>
                            <span>
                                <?php echo $record->description; ?>
                                <?php echo $record->content; ?>
                            </span>
                        </p>
                        
                    </div>
                    <div class="tab-pane fade" id="nav-danhgia" role="tabpanel" aria-labelledby="nav-danhgia-tab">
                            <div class="row">
                                <div class="tiledanhgia text-center col-md-4">
                                    <div class="motthanh d-flex align-items-center">5 <i style="color: #f3ce04;" class="fa fa-star"></i>
                                        <div class="progress mx-2"  style="background: #5cb85c;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span style="width: 48px;"> <?php echo $this->modelGetStar($record->id,5); ?> vote</span>
                                    </div>
                                    <div class="motthanh d-flex align-items-center">4 <i style="color: #f3ce04;" class="fa fa-star"></i>
                                        <div class="progress mx-2" style="background: #5bc0de;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span style="width: 48px;"> <?php echo $this->modelGetStar($record->id,4); ?> vote</span>
                                    </div>
                                    <div class="motthanh d-flex align-items-center">3 <i style="color: #f3ce04;" class="fa fa-star"></i>
                                        <div class="progress mx-2" style="background: #d9534f;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span style="width: 48px;"> <?php echo $this->modelGetStar($record->id,3); ?> vote</span>
                                    </div>
                                    <div class="motthanh d-flex align-items-center">2 <i style="color: #f3ce04;" class="fa fa-star"></i>
                                        <div class="progress mx-2" style="background: #f0ad4e;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> <span style="width: 48px;"> <?php echo $this->modelGetStar($record->id,2); ?> vote</span>
                                    </div>
                                    <div class="motthanh d-flex align-items-center">1 <i style="color: #f3ce04;" class="fa fa-star"></i>
                                        <div class="progress mx-2" style="background: #337ab7;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> <span style="width: 48px;"> <?php echo $this->modelGetStar($record->id,1); ?> vote</span>
                                    </div>
                                    <div class="btn vietdanhgia mt-3">Viết đánh giá của bạn</div>
                                </div>
                                <!-- nội dung của form đánh giá  -->
                                <div class="formdanhgia col-md-8">
                                    <h6 class="tieude text-uppercase" style="text-align: center;">GỬI ĐÁNH GIÁ CỦA BẠN</h6>
                                    
                                    <div class="form-group" style="text-align: center;">
                                    <div class="fb-comments" data-href="https://devpro.edu.vn" data-width="" data-numposts="1"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
 <!-- khối sản phẩm tương tự -->
 <section class="_1khoi sachmoi">
    <div class="container">
        <div class="noidung bg-white" style=" width: 100%;">
            <div class="row">
                <!--header-->
                <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light pt-4">
                    <h5 class="header text-uppercase" style="font-weight: 400;">SẢN PHẨM TƯƠNG TỰ</h5>
                    <a href="sach-moi-tuyen-chon.html" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                </div>
            </div>
            <div class="khoisanpham" style="padding-bottom: 2rem;">
                <!-- 1 sp -->
                <?php 
                    $sameProduct = $this->modelSameProduct();
                ?>
                <?php foreach($sameProduct as $rows): ?>
                <div class="card">
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip"
                        data-placement="bottom" title="<?php echo $rows->name; ?>">
                        <img class="card-img-top anh" src="assets/upload/products/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>">
                        <div class="card-body noidungsp mt-3">
                            <h6 class="card-title ten"><?php echo $rows->name; ?></h6>
                            <small class="tacgia text-muted"><?php echo $rows->athour; ?></small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> ₫</div>
                                <div class="giacu text-muted"><?php echo number_format($rows->price); ?> ₫</div>
                                <div class="sale">-<?php echo $rows->discount; ?>%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section class="_1khoi sachmoi">
    <div class="container">
        <div class="noidung bg-white" style=" width: 100%;">
            <div class="row">
                <!--header-->
                <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light pt-4">
                    <h5 class="header text-uppercase" style="font-weight: 400;">CÓ THỂ BẠN ĐÃ XEM</h5>
                    <a href="sach-moi-tuyen-chon.html" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                </div>
            </div>
            <div class="khoisanpham" style="padding-bottom: 2rem;">
                <!-- 1 sp -->
                <?php 
                    $seenProduct = $this->modelSeenProduct();
                ?>
                <?php foreach($seenProduct as $rows): ?>
                <div class="card">
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip"
                        data-placement="bottom" title="<?php echo $rows->name; ?>">
                        <img class="card-img-top anh" src="assets/upload/products/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>">
                        <div class="card-body noidungsp mt-3">
                            <h6 class="card-title ten"><?php echo $rows->name; ?></h6>
                            <small class="tacgia text-muted"><?php echo $rows->athour; ?></small>
                            <div class="gia d-flex align-items-baseline">
                                <div class="giamoi"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> ₫</div>
                                <div class="giacu text-muted"><?php echo number_format($rows->price); ?> ₫</div>
                                <div class="sale">-<?php echo $rows->discount; ?>%</div>
                            </div>
                            <div class="danhgia">
                                <ul class="d-flex" style="list-style: none;">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span class="text-muted">0 nhận xét</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>