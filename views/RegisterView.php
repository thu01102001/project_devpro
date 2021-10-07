<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>

 <div class="container" style="margin-top: 20px; background: white;border: 2px solid #e1e0e0; margin-bottom: 20px;">
   <div class="template-customer">
   <h1 style="font-size: 27px;text-align: center;
    margin-top: 20px; color:#CF111A;">ĐĂNG KÝ TÀI KHOẢN</h1>
    <p style="text-align: center;">Đăng ký tài khoản để nhận những ưu đãi hấp dẫn nhé!</p style="text-align: center;">
     <?php if(isset($_GET["notify"])&&$_GET["notify"]=="error"): ?>
     <p style="color:red;">Đăng ký chưa thành công, bạn hãy kiểm tra lại thông tin!</p>
     
     <?php endif; ?>
     
        <div class="modal-body" style="text-align: center; margin: 0 160px;">
          <form id="form-signup" class="form-signin mt-2" novalidate="novalidate" method='post' action="index.php?controller=account&action=registerPost">
              <div class="form-label-group">
                  <input type="text" class="form-control" placeholder="Nhập họ và tên" name="name" required="" autofocus="" aria-required="true">
              </div>
              <div class="form-label-group">
                  <input type="email" class="form-control" placeholder="Nhập email" name="email" required="" aria-required="true">
              </div>
              <div class="form-label-group">
                  <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address" required="" aria-required="true">
              </div>
              <div class="form-label-group">
                  <input type="number" class="form-control" placeholder="Nhập số điện thoại" name="phone" required="" aria-required="true">
              </div>
              <div class="form-label-group mb-4">
                  <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required="" aria-required="true">
              </div>
              <button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit" value="send" style="background: #F5A623; width: 160px; margin: auto;">Đăng ký</button>
              <hr class="mt-3 mb-2" style="border-top: none !important;">
              <div class="custom-control custom-checkbox" style="border-bottom: 1px solid rgba(0,0,0,.1);">
                  <p class="text-center">Bằng việc đăng ký, bạn đã đồng ý với DealBook về</p>
                  <p class="text-center">
                  <a href="#" class="text-decoration-none" style="color: #F5A623">Điều khoản dịch
                      vụ &amp; Chính sách bảo mật</a>
                  </p>
              </div>
          </form>
        </div>
       </div>
       <div>
        <div class="wrapper-form" style="margin-bottom: 30px;  text-align: center; margin: 0 160px;">
          <p class="title"><span style="font-weight: 500;">ĐĂNG NHẬP TÀI KHOẢN</span></p>
          <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
          <a href="index.php?controller=account&action=login" style="
          font-weight: bold;
          color: #CF111A;
          transition: all 0.2s;" class="button">ĐĂNG NHẬP</a> </div>
      </div>
     </div>
 </div>