<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
 <div class="col-md-12"> 
    <div class="panel panel-primary" style="border-color: #F36A5A !important; border-radius: 5px;">
        <div class="panel-heading" style="background-color: #F36A5A; border-color: #F36A5A;">Add edit category</div>
        <div class="panel-body">
        <form method="post" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->  
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Category</div>
                <div class="col-md-10">
                    <select name="parent_id">
                        <option value="0"></option>
                        <?php 
                            $categories = $this->modelCategories();
                         ?>
                         <?php foreach($categories as $rows): ?>
                            <option <?php if(isset($record->parent_id)&&$record->parent_id==$rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->          
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