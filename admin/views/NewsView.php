<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=news&action=create" class="btn" style="background: #F36A5A; color: white;"><i style="margin-right: 6px;" class="fas fa-plus"></i>Add new</a>
    </div>
    <div class="panel panel-primary" style="border-color: #F36A5A !important; border-radius: 5px;">
        <div class="panel-heading" style="background-color: #F36A5A; border-color: #F36A5A;">List news</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Photo</th>
                    <th>Name</th>
                    <th style="width:100px;">Date</th>
                    <th style="width:50px;">Hot</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach ($data as $rows): ?>
                <tr style="color: black;">
                    <td>
                        <?php if($rows->photo != "" && file_exists("../assets/upload/news/".$rows->photo)): ?>
                        <img src="../assets/upload/news/<?php echo $rows->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td><?php echo $rows->date; ?></td>
                    <td style="text-align:center;">
                        <?php if(isset($rows->hot) && $rows->hot == 1): ?>
                            <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=news&action=update&id=<?php echo $rows->id; ?>">
                            <i style="color: #F36A5A;" class="fas fa-edit"></i>
                        </a>&nbsp;
                        <a href="index.php?controller=news&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">
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
                <li class="page-item"><a style="color: #F36A5A;" href="index.php?controller=news&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>