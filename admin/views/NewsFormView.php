<?php 
    //load file Layout.php
    $this->fileLayout = "Layout.php";
 ?>                    
<div class="col-md-12">  
    <div class="panel panel-primary" style="border-color: #F36A5A !important; border-radius: 5px;">
        <div class="panel-heading" style="background-color: #F36A5A; border-color: #F36A5A;">Add edit news</div>
        <div class="panel-body">
        <!-- muon upload file thi trong the form phai co thuoc tinh sau: enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Tiêu đề</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="checkbox" <?php if(isset($record->hot)&&$record->hot==1): ?> checked <?php endif; ?> name="hot" id="hot"> <label for="hot">&nbsp;&nbsp;Sản phẩm nổi bật</label>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Ngày đăng</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->date)?$record->date:""; ?>" name="date" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Giới thiệu</div>
                <div class="col-md-10">
                    <textarea name="description"><?php echo isset($record->description)?$record->description:""; ?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("description");
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Chi tiết</div>
                <div class="col-md-10">
                    <textarea name="content"><?php echo isset($record->content)?$record->content:""; ?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("content");
                    </script>
                </div>
            </div>
            <!-- end rows -->
            
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Ảnh</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            <?php if(isset($record->photo) && file_exists("../assets/upload/news/".$record->photo)): ?>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <img src="../assets/upload/news/<?php echo $record->photo; ?>" style="width:100px;">
                </div>
            </div>
            <!-- end rows -->
            <?php endif; ?>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn" style="background-color: #F36A5A; color: white">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>