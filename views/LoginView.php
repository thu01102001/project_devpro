<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <div class="container"  style="margin-top: 20px; background: white; border: 2px solid #e1e0e0; margin-bottom: 20px;">
 
        <h1 style="font-size: 27px;text-align: center;
    margin-top: 20px; color:#CF111A;">ĐĂNG NHẬP TÀI KHOẢN</h1>
    <p style="text-align: center;">Nếu bạn đã có tài khoản, vui lòng đăng nhập</p style="text-align: center;">
     <div>
        <div class="modal-body" style="text-align: center; margin: 0 160px;">
          <form id="form-signin" class="form-signin mt-2" novalidate="novalidate" method='post' action="index.php?controller=account&action=loginPost">
              <div class="form-label-group">
                  <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email" required="" autofocus="" aria-required="true">
              </div>
  
              <div class="form-label-group">
                  <input style="margin: 38px 0;" type="password" class="form-control" placeholder="Mật khẩu" name="password" required="" aria-required="true">
              </div>
  
              <div class="custom-control custom-checkbox mb-3" style="text-align: -webkit-left;">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
                  <a href="#" class="float-right text-decoration-none" style="color: #F5A623">Quên mật
                      khẩu</a>
              </div>
  
              <button class="btn btn-lg btn-block btn-signin text-uppercase text-white" type="submit" style="background: #F5A623; width: 160px; margin: auto;">Đăng nhập</button>
              <hr class="my-4">
          </form>
        </div>
      </div>
      <div>
        <div class="wrapper-form" style="margin-bottom: 30px; text-align: center; margin: 0 160px;">
          <p class="title"><span style="font-weight: 500;">ĐĂNG KÝ TÀI KHOẢN</span></p>
          <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
          <a href="index.php?controller=account&action=register" style="
            font-weight: bold;  
            color: #CF111A;
            transition: all 0.2s;
          " class="button">ĐĂNG KÝ</a> </div>
      </div>
 </div>
</div>
