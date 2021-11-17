<?php 
	//load file layout.php vafod dây
	$this->fileLayout = "Layout.php";
 ?>

 <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Quản lý sản phẩm</h3>
            </div>
            <div class="col-auto text-right">
                <a class="btn btn-white ml-3"
                   href="javascript:void(0);"
                   id="filter_search">
                    <i class="fas fa-filter"></i> Tìm kiếm
                </a>
                <a href="index.php?controller=products&action=create"
                   class="btn btn-primary ml-3">
                    <i class="fas fa-plus"></i> Thêm sản phẩm
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
    <!-- Search Filter -->
    <div class="card filter-card" id="filter_inputs">
        <div class="card-body pb-0">
            <form action="#" method="post">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input class="form-control" type="text" name="SearchString" />
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">
                                Lọc
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /Search Filter -->

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
                                    <th style="width:80px;">Price</th>
                                    <th style="width:80px;">Discount</th>
                                    <th style="width:150px;">Category</th>
                                    <th style="width:100px;"></th>
                                </tr>
                            
                            <tbody>
                                    <?php foreach ($data as $rows): ?>
								<tr>
									<td>
                                        <?php if($rows->photo != "" && file_exists("../assets/upload/products/".$rows->photo)): ?>
                                        <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width:100px;">
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $rows->name; ?></td>
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
									<td class="text-right">
                                            <a href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>"
                                               class="btn btn-sm bg-success-light mr-2">
                                                <i class="far fa-edit mr-1"></i> Sửa
                                            </a>
                                            <a data-id="40"
                                               href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"
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

                            </tbody>
                        </table>
                        <style type="text/css">
                            .pagination{padding:0px; margin:0px;}
                        </style>
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                            <?php for($i = 1; $i <= $numPage; $i++): ?>
                            <li class="page-item"><a href="index.php?controller=products&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
