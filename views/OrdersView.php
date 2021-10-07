<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangTrong.php";
?>
<!-- nội dung của trang  -->
<section class="account-page my-3">
        <div class="container">
            <div class="page-content bg-white">
                <div class="account-page-tab-content m-4">
                    <!-- 2 tab: thông tin tài khoản, danh sách đơn hàng  -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-taikhoan-tab" data-toggle="tab" href="#nav-taikhoan" role="tab" aria-controls="nav-home" aria-selected="true">Danh sách đơn hàng của bạn</a>
                          <!-- <a class="nav-item nav-link" id="nav-donhang-tab" data-toggle="tab" href="#nav-donhang" role="tab" aria-controls="nav-profile" aria-selected="false">Danh sách đơn hàng</a> -->
                        </div>
                    </nav>

                    <!-- nội dung 2 tab -->
                    <div class="tab-content">

                        <!-- nội dung tab 1: thông tin tài khoản  -->
                        <div style="margin-top: 20px; padding: 0 !important" class="tab-pane fade show active pl-4 " id="nav-taikhoan" role="tabpanel" aria-labelledby="nav-taikhoan-tab">
                        <div class="donhang-table">
                                <table class="m-auto">
                                    <tr>
                                        <th>Tên khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ nhận hàng</th>
                                        <th>Ngày mua</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái đơn hàng</th>
                                        <th>Chi tiết đơn</th>
                                    </tr>
                                        <?php foreach ($data as $rows): ?>
                                        <?php
                                            $customer = $this->modelGetCustomer($rows->customer_id);    
                                        ?>
                                    <tr>
                                        <td><?php echo isset($customer->name)?$customer->name:""; ?></td>
                                        <td><?php echo isset($customer->address)?$customer->phone:""; ?></td>
                                        <td><?php echo isset($customer->phone)?$customer->address:""; ?></td>
                                        <td><?php echo date("d/m/Y",strtotime($rows->date)); ?></td>
                                        <td><?php echo number_format($rows->price); ?> VNĐ</td>
                                        <td>
                                            <?php if($rows->hot == 1 ): ?>
                                                <div>Đã nhận</div>
                                            <?php else: ?>
                                                <?php if($rows->status == 1): ?>
                                                <div>Đã giao hàng</div>
                                                <?php else: ?>
                                                <div>Chưa giao hàng</div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </td>
                                        <td style="text-align:center;">
                                                <?php if($rows->hot == 0): ?>
                                                    <a href="index.php?controller=orders&action=delivery1&id=<?php echo $rows->id; ?>" class="label label-info">Đã nhận</a>
                                                &nbsp;&nbsp;
                                                <?php endif; ?>
                                                <a href="index.php?controller=orders&action=detail&id=<?php echo $rows->id; ?>" class="label label-success">Chi tiết</a>
                                            </td>
                                        <?php endforeach; ?>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    