<?php 
	//load file layout.php vafod dây
	$this->fileLayout = "Layout.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from truelysell-admin.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jun 2021 14:21:50 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0" />
    
    

    <!-- Datatables CSS -->
    <link rel="stylesheet"
          href="../assets/admin/plugins/datatables/datatables.min.css" />



</head>
<body>
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Quản lý hoá đơn</h3>
            </div>

        </div>
    </div>
    <!-- /Page Header -->


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                           
                                <tr class="text-center">
                                    <th>Họ và tên</th>
                                    <th>Điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Ngày mua</th>
                                    <th>Giá</th>
                                    <th style="width:150px;">Trạng thái</th>
                                    <th style="width:150px;"></th>
                                </tr>
                           
                            <tbody class="text-center">
                                <?php foreach ($data as $rows): ?>
                                <?php 
                                    $customer = $this->modelGetCustomer($rows->customer_id);
                                 ?>
                            <tr>
                                <td><?php echo isset($customer->name)?$customer->name:"" ?></td>
                                <td><?php echo isset($customer->phone)?$customer->phone:"" ?></td>
                                <td><?php echo isset($customer->address)?$customer->address:"" ?></td>
                                <td><?php echo date("d/m/Y",strtotime($rows->date)); ?></td>
                                <td><?php echo number_format($rows->price); ?> VNĐ</td>
                                <td>
                                    <?php if($rows->status == 1): ?>
                                        <div class="">Đã giao hàng</div>
                                    <?php else: ?>
                                        <div class="">Chưa giao hàng</div>
                                    <?php endif; ?>
                                </td>
                                <td class="text-right">
                                    <?php if($rows->status == 0): ?>  &nbsp;&nbsp;
                                      <a href="index.php?controller=orders&action=delivery&id=<?php echo $rows->id; ?>" class="btn btn-sm bg-success-light mr-2">Giao hàng</a>
                                       <?php endif ?>
                                      <a class="btn btn-sm bg-success-light mr-2" href="index.php?controller=orders&action=detail&id=<?php echo $rows->id; ?>">Chi tiết</a>          
                                            
                                            
                                </td>
                            </tr>
                                <?php endforeach; ?>

                                    

                            </tbody>
                        </table>
                        <style type="text/css">
                            .pagination{padding:0px; margin:0px;}
                        </style>
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                            <?php for($i = 1; $i <= $numPage; $i++): ?>
                            <li class="page-item"><a href="index.php?controller=orders&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>