
<?php 
	//load file layout.php vafod dây
	$this->fileLayout = "Layout.php";
 ?>


 <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Quản lý danh mục</h3>
            </div>
            <div class="col-auto">
                <a href="index.php?controller=categories&action=create"
                   class="btn btn-primary ml-3">
                    <i class="fas fa-plus"></i> Thêm danh mục
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
                                    <th>Mã danh mục</th>
                                    <th>Tên danh mục</th>
                                    <!-- <th>Ngày chỉnh sửa</th> -->
                                    <th class="text-center"></th>
                                </tr>
                           
                            <tbody>
                            	<?php foreach ($data as $rows): ?>
								<tr>
									<td><?php echo $rows->id; ?></td>
									<td><?php echo $rows->name; ?></td>
									<!-- <td><?php echo $rows->ngay; ?></td> -->
									<td class="text-right">
                                            <a href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>"
                                               class="btn btn-sm bg-success-light mr-2">
                                                <i class="far fa-edit mr-1"></i> Sửa
                                            </a>
                                            <a data-id="40"
                                               href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"
                                               class="
                                                btn btn-sm
                                                bg-danger-light
                                                mr-2
                                                delete_review_comment
                                                "
                                               data-toggle="modal"
                                               data-target="#model-2">
                                                <i class="far fa-trash-alt mr-1"></i> Xoá
                                            </a>
                                    </td>
								</tr>
                                <?php $categoriesSub = $this->modelCategoriesSub($rows->id); ?>
                                 <?php foreach($categoriesSub as $rowsSub): ?>
                                    <tr>
                                        <td></td>
                                        <td style="padding-left:70px;"><?php echo $rowsSub->name; ?></td>
                                        <td class="text-right">
                                            <a href="index.php?controller=categories&action=update&id=<?php echo $rowsSub->id; ?>"
                                               class="btn btn-sm bg-success-light mr-2">
                                                <i class="far fa-edit mr-1"></i> Sửa
                                            </a>
                                            <a data-id="40"
                                               href="index.php?controller=categories&action=delete&id=<?php echo $rowsSub->id; ?>" onclick="return window.confirm('Are you sure?');"
                                               class="
                                                btn btn-sm
                                                bg-danger-light
                                                mr-2
                                                delete_review_comment
                                                "
                                               data-toggle="modal"
                                               data-target="#model-2">
                                                <i class="far fa-trash-alt mr-1"></i> Xoá
                                            </a>
                                    </td>
                                    </tr>
                                <?php endforeach; ?>
								<?php endforeach; ?>
                            </tbody>
                        </table>
                        <style type="text/css">
                            .pagination{padding:0px; margin:0px;}
                        </style>
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                            <?php for($i=1; $i <= $numPage; $i++): ?>
                            <li class="page-item"><a href="index.php?controller=categories&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


