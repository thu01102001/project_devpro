<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=slides&action=create" class="btn" style="background: #F36A5A; color: white;"><i style="margin-right: 6px;" class="fas fa-plus"></i>Add new</a>
    </div>
    <div class="panel panel-primary" style="border-color: #F36A5A !important; border-radius: 5px;">
        <div class="panel-heading" style="background-color: #F36A5A; border-color: #F36A5A;">List slides</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Photo</th>
                    <th>Name</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach ($data as $rows): ?>
                <tr style="color: black;">
                    <td>
                        <?php if($rows->photo != "" && file_exists("../assets/upload/slides/".$rows->photo)): ?>
                        <img src="../assets/upload/slides/<?php echo $rows->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=slides&action=update&id=<?php echo $rows->id; ?>">
                            <i style="color: #F36A5A;" class="fas fa-edit"></i>
                        </a>&nbsp;
                        <a href="index.php?controller=slides&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">
                            <i style="color: #F36A5A;" class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a style="color: #F36A5A;" href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a style="color: #F36A5A;" href="index.php?controller=slides&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>