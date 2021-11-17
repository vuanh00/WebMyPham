<?php 
	//load file layout.php vafod dây
	$this->fileLayout = "Layout.php";
 ?>
<?php 
        $conn = Connection::getInstance();
        $query = $conn->query("select * from customers where id = (select customer_id from orders where id = $id limit 0,1)");
         $query1 = $conn->query("select * from orderdetails where order_id = (select id from orders where id = $id limit 0,1)");
        $customer = $query->fetch();
        $quantity = $query1->fetch();
  ?>

 <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Thông tin đơn hàng</h3>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    
    <!-- <div class="panel-body">
        <table class="table table-hover table-center mb-0 datatable">
            <tr>
                <th style="width:150px;">Họ tên</th>
                <th><?php echo $customer->name; ?></th>
            </tr>
            <tr>
                <th style="width:150px;">Email</th>
                <th><?php echo $customer->email; ?></th>
            </tr>
            <tr>
                <th style="width:150px;">Địa chỉ</th>
                <th><?php echo $customer->address; ?></th>
            </tr>
            <tr>
                <th style="width:150px;">Điện thoại</th>
                <th><?php echo $customer->phone; ?></th>
            </tr>
        </table>            
    </div>
    <div class="panel-footer"><a href="#" onclick="history.go(-1);" class="btn btn-primary">Quay lại</a></div> -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                            
                            <tr>
                                <th style="width:150px;">Họ tên</th>
                                <th><?php echo $customer->name; ?></th>
                            </tr>
                            <tr>
                                <th style="width:150px;">Email</th>
                                <th><?php echo $customer->email; ?></th>
                            </tr>
                            <tr>
                                <th style="width:150px;">Địa chỉ</th>
                                <th><?php echo $customer->address; ?></th>
                            </tr>
                            <tr>
                                <th style="width:150px;">Điện thoại</th>
                                <th><?php echo $customer->phone; ?></th>
                            </tr>  
                            
                            
                        </table>
                        
                    </div>
                </div>
                 <div class="panel-footer"><a href="#" onclick="history.go(-1);" class="btn btn-primary">Quay lại</a></div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                            
                                <tr>
                                    <th style="width:120px;">Photo</th>
                                    <th>Name</th>
                                    <th style="width:120px;">Price</th>
                                    <th style="width:120px;">Discount</th>
                                    <th style="width:120px;">Quanlity</th>
                                </tr>
                            
                            <tbody>
                                <?php foreach ($data as $rows): ?>
                                <?php 
                                    $product = $this->modelGetProduct($rows->product_id);
                                 ?>
								<tr>
									<td>
                                        <?php if($product->photo != "" && file_exists("../assets/upload/products/".$product->photo)): ?>
                                        <img src="../assets/upload/products/<?php echo $product->photo; ?>" style="width:100px;">
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $product->name; ?></td>
                                  
                                    <td><?php echo number_format($product->price); ?></td>
                                    <td><?php echo $product->discount; ?></td>
                                    
                                    <td><?php echo $quantity->quantity; ?></td>
									
								</tr>
								<?php endforeach; ?>

                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
