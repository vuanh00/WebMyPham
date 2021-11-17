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
                <h3 class="page-title">Quản lý tin tức</h3>
            </div>
            <div class="col-auto text-right">
                <a href="index.php?controller=news&action=create"
                   class="btn btn-primary ml-3">
                    <i class="fas fa-plus"></i> Thêm tin
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
                                <th style="width:100px;">Photo</th>
                                <th>Name</th>
                                <th style="width:50px;">Hot</th>
                                <th style="width:100px;"></th>
                            </tr>
                                   
                            <tbody>
                               <?php foreach ($data as $rows): ?>
                                <tr>
                                  <td>
                                    <?php if($rows->photo != "" && file_exists("../assets/upload/news/".$rows->photo)): ?>
                                    <img src="../assets/upload/news/<?php echo $rows->photo; ?>" style="width:100px;">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $rows->name; ?></td>
                                <td>
                                    <?php if(isset($rows->hot) && $rows->hot == 1): ?>
                                        <span class="fa fa-check"></span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-right">
                                    <a href="index.php?controller=news&action=update&id=<?php echo $rows->id; ?>" class="btn btn-sm bg-success-light mr-2"><i class="far fa-edit mr-1"></i> Sửa</a>
                                            
                                     <a  href="index.php?controller=news&action=delete&id=<?php echo $rows->id; ?>"
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
                            <li class="page-item"><a href="index.php?controller=taikhoan&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
