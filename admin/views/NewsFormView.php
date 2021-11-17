<?php 
    //load file Layout.php vào đây
    $this->fileLayout ="Layout.php";
 ?>
 <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Thông tin chi tiết</h3>
            </div>

        </div>
    </div>
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
                    <input type='file' name="photo" onchange="readURL(this);" />
                    <img id="blah" src="../assets/img/no-image-news.png" alt="" />
                </div>
            </div>
        <!-- end rows -->
        <?php if(isset($record->photo) && file_exists("../assets/upload/news/".$record->photo)): ?>
        <!-- rows -->
        <div class="row" style="margin-top:5px;">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <img src="../assets/upload/news/<?php echo $record->photo; ?>" style="width:100px;">
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