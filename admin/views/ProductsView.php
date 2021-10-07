<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=products&action=create" class="btn" style="background: #F36A5A; color: white;"><i style="margin-right: 6px;" class="fas fa-plus"></i>Add product</a>
    </div>
    <div class="panel panel-primary" style="border-color: #F36A5A !important; border-radius: 5px;">
        <div class="panel-heading" style="background-color: #F36A5A; border-color: #F36A5A;">List products</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Photo</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th style="width:50px;">Hot</th>
                    <th style="width:80px;">Price</th>
                    <th style="width:80px;">Discount</th>
                    <th style="width:150px;">Category</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach ($data as $rows): ?>
                <tr style="color: black;">
                    <td>
                        <?php if($rows->photo != "" && file_exists("../assets/upload/products/".$rows->photo)): ?>
                        <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td><?php echo $rows->author; ?></td>
                    <td style="text-align:center;">
                        <?php if(isset($rows->hot) && $rows->hot == 1): ?>
                            <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo number_format($rows->price); ?></td>
                    <td><?php echo $rows->discount; ?></td>
                    <td>
                        <?php 
                            //co the truc tiep truy van csdl o view
                            $conn = Connection::getInstance();
                            $query = $conn->query("select name from categories where id=$rows->category_id");
                            //lay mot ban ghi
                            $category = $query->fetch();
                            echo isset($category->name) == true ? $category->name : "";
                         ?>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>"><i style="color: #F36A5A;" class="fas fa-edit"></i></a>&nbsp;
                        <a href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"><i style="color: #F36A5A;" class="fas fa-trash-alt"></i></a>
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
                <li class="page-item"><a style="color: #F36A5A;" href="index.php?controller=products&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>