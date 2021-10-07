<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="container">
    
<?php 
        $conn = Connection::getInstance();
        $query = $conn->query("select * from customers where id = (select customer_id from orders where id = $id limit 0,1)");
        $customer = $query->fetch();
  ?>
<div class="col-md-12">
    <div class="panel panel-default" style="margin-bottom:5px;">
        <div class="panel-heading" style="    margin-top: 30px;
    font-size: 21px;
    margin-bottom: 20px;
    background: #F5A623;
    width: 208px;
    border-radius: 23px;
    padding: 10px;
    color: white;
    text-shadow: 0 0 2px black;">Thông tin đơn hàng</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width:150px; background: white;">Họ tên</th>
                    <td style="background: white;"><?php echo $customer->name; ?></td>
                </tr>
                <tr>
                    <th style="width:150px; background: white;">Email</th>
                    <td style="background: white;"><?php echo $customer->email; ?></td>
                </tr>
                <tr>
                    <th style="width:150px; background: white;">Địa chỉ</th>
                    <td style="background: white;"><?php echo $customer->address; ?></td>
                </tr>
                <tr>
                    <th style="width:150px; background: white;">Điện thoại</th>
                    <td style="background: white;"><?php echo $customer->phone; ?></td>
                </tr>
            </table>            
        </div>
        <div class="panel-footer"><a href="#" onclick="history.go(-1);" class="btn" style="background: #3daf2f; color: white">Quay lại</a></div>
    </div>
    <div class="panel panel-primary" style="border-color: #F36A5A !important; border-radius: 5px;">
        <div class="panel-heading" style="
        margin-top: 69px;
    font-size: 21px;
    margin-bottom: 20px;
    background: #F5A623;
    width: 212px;
    border-radius: 23px;
    padding: 0 0 0 43px;
    color: white;
    text-shadow: 0 0 2px black;">List products</div>
        <div class="panel-body">
            <table style = "margin-bottom: 30px;" class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px; background: white;">Photo</th>
                    <th style="background: white;">Name</th>
                    <th style="width:80px; background: white;">Price</th>
                    <th style="width:80px; background: white;">Discount</th>
                </tr>
                <?php foreach ($data as $rows): ?>
                    <?php 
                        $product = $this->modelGetProduct($rows->product_id);
                     ?>
                <tr style="color: black; background: white;">
                    <td>
                        <?php if($product->photo != "" && file_exists("./assets/upload/products/".$product->photo)): ?>
                        <img src="./assets/upload/products/<?php echo $product->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $product->name; ?></td>
                    <td><?php echo number_format($product->price); ?></td>
                    <td style="text-align:center;"><?php echo $product->discount; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
</div>


