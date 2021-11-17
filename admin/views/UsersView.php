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
                <h3 class="page-title">Quản lý tài khoản</h3>
            </div>
            <div class="col-auto text-right">
                <a href="index.php?controller=users&action=create"
                   class="btn btn-primary ml-3">
                    <i class="fas fa-plus"></i> Thêm tài khoản
                </a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    <!-- Start alert -->
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div style="display: none" id="deletee" class="alert alert-danger text-center" role="alert"></div>
        </div>
        <div class="col-4"></div>
    </div>
    <!-- End alert -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                            
                            <tr>
                                
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Họ tên</th>
                                <th class="text-right"></th>
                            </tr>
                       
                            <tbody>
                               <?php foreach ($data as $rows): ?>
                                <tr>
                                  <td><?php echo $rows->email; ?></td>
                                  <td><?php echo $rows->phone; ?></td>
                                  <td><?php echo $rows->name; ?></td>
                                  
                                  <td class="text-right">
                                    <a href="index.php?controller=users&action=update&id=<?php echo $rows->id; ?>" class="btn btn-sm bg-success-light mr-2"><i class="far fa-edit mr-1"></i> Sửa</a>
                                            
                                     <a  href="index.php?controller=users&action=delete&id=<?php echo $rows->id; ?>"
                                     onclick="return window.confirm('Are you sure?');" class=" btn btn-sm bg-danger-light mr-2 delete_review_comment " > <i class="far fa-trash-alt mr-1"></i> Xoá </a>
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
                            <?php for($i=1; $i <= $numPage; $i++): ?>
                            <li class="page-item"><a href="index.php?controller=users&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
