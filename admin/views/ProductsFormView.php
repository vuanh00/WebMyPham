<?php 
    //load file Layout.php
    $this->fileLayout = "Layout.php";
 ?>                    

    <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Thông tin sản phẩm</h3>
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
                    <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
                            <!-- rows -->
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-2">Tên sản phẩm</div>
                                <div class="col-md-10">
                                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                                </div>
                            </div>
                            <!-- end rows -->
                            <!-- rows -->
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <input type="checkbox" <?php if(isset($record->hot)&&$record->hot==1): ?> checked <?php endif; ?> name="hot" id="hot"> <label for="hot">&nbsp;&nbsp;Sản phẩm nổi bật</label>
                                </div>
                            </div>
                            <!-- end rows -->
                            <!-- rows -->
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-2">Giá</div>
                                <div class="col-md-10">
                                    <input type="text" value="<?php echo isset($record->price)?$record->price:""; ?>" name="price" class="form-control" required>
                                </div>
                            </div>
                            <!-- end rows -->
                            <!-- rows -->
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-2">% Giảm giá</div>
                                <div class="col-md-10">
                                    <input type="text" value="<?php echo isset($record->discount)?$record->discount:""; ?>" name="discount" class="form-control" required>
                                </div>
                            </div>
                            <!-- end rows -->
                            <!-- rows -->
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-2">Danh mục</div>
                                <div class="col-md-10">
                                    <select name="category_id" class="form-control" style="width:200px;">
                                        <?php 
                                            $categories = $this->modelCategories();
                                         ?>
                                         <?php foreach($categories as $rows): ?>
                                            <option <?php if(isset($record->category_id) && $record->category_id == $rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                                                <?php 
                                                    $categoriesSub = $this->modelCategoriesSub($rows->id);
                                                 ?>
                                                     <?php foreach($categoriesSub as $rowsSub): ?>
                                                        <option <?php if(isset($record->category_id) && $record->category_id == $rowsSub->id): ?> selected <?php endif; ?> value="<?php echo $rowsSub->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowsSub->name; ?></option>
                                                    <?php endforeach; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <!-- end rows -->
                            <!-- rows -->
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-2">Giới thiệu</div>
                                <div class="col-md-10">
                                    <textarea name="description"><?php echo isset($record->description)?$record->description:""; ?></textarea>
                                    <script type="text/javascript">
                                        CKEDITOR.replace("description");
                                    </script>
                                </div>
                            </div>
                            <!-- end rows -->
                            <!-- rows -->
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-2">Chi tiết</div>
                                <div class="col-md-10">
                                    <textarea name="content"><?php echo isset($record->content)?$record->content:""; ?></textarea>
                                    <script type="text/javascript">
                                        CKEDITOR.replace("content");
                                    </script>
                                </div>
                            </div>
                            <!-- end rows -->
                            <!-- rows -->
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-2">Ảnh</div>
                                <div class="col-md-10">
                                    <input type="file" name="photo">
                                </div>
                            </div>
                            <!-- end rows -->
                            <?php if(isset($record->photo) && file_exists("../assets/upload/products/".$record->photo)): ?>
                            <!-- rows -->
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <input type='file' name="photo" onchange="readURL(this);" />
                                    <img src="../assets/upload/products/<?php echo $record->photo; ?>" style="width:100px;">
                                </div>
                            </div>
                            <!-- end rows -->
                            <?php endif; ?>
                            <!-- rows -->
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <input type="submit" value="Process" class="btn btn-primary">
                                </div>
                            </div>
                            <!-- end rows -->
                        </form>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>