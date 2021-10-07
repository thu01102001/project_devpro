<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>

<div class="container">
<section class="breadcrumbbar">
    <div class="container">
        <ol class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="#">Tin tức</a></li>
            <li class="breadcrumb-item active"><a href="#">
            <?php
                $new = $this->modelGetNew($id);
                echo isset($new->name) ? $new->name : "";
            ?></a></li>
        </ol>
    </div>
</section>
<!-- chi tiet -->
  <h3><?php echo $record->name; ?></h3>
    <p><?php echo $record->description; ?></p>
    <p><?php echo $record->content; ?></p>
    <!-- chi tiet -->
</div>
    