<?php 
    //load file Layout.php vào đây
    $this->fileLayout ="Layout.php";
 ?>
 <div class="content container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Thông tin danh mục</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="card">
                <div class="card-body">
                    <!-- Form -->
                    <form method="post" action="<?php echo $action; ?>">
                        <input name="__RequestVerificationToken" type="hidden" value="sDJ6vM-MRKd6XtALXKlGenINVqFL_nhrsj5ebKalve-_TDiqgiCGiU27_NiZpTRlV9CbHmWMcD2bHhWQnQAbDjlv7qlqltt63-kPnM-7UQE1" />
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input class="form-control text-box single-line" id="name" name="name" type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" required/>
                            <span class="field-validation-valid text-danger" data-valmsg-for="name" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label>Danh mục</label>
                            
                            <select name="parent_id" class="form-control text-box single-line">
                                <option value="0"></option>
                                <?php
                                    $categories = $this->modelCategories(); 
                                 ?>
                                 <?php foreach($categories as $rows): ?>
                                    <option <?php if(isset($record->parent_id)&&$record->parent_id==$rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="field-validation-valid text-danger" data-valmsg-for="category_name" data-valmsg-replace="true"></span>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-primary" type="submit">
                                Thêm
                            </button>
                            <a href="index.php?controller=categories" class="btn btn-link">Huỷ</a>
                        </div>
                    </form>
                    <!-- Form -->
                </div>
            </div>
        </div>
    </div>
</div>