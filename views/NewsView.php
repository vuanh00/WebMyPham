<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<h1 class="col-sm-9">Tin tức</h1>
<div  class="wrapper-blog col-sm-9"> 
  <div class="row">
    <!-- list news -->
    <?php foreach($data as $rows): ?>
    <div style="width: 50%;" class="col-md-6 article"> <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" style="width:100%;  overflow:hidden;" class="img-responsive"> </a>
      <h3><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
      <p class="desc"><?php echo $rows->description; ?></p>
    </div>
    <?php endforeach; ?>
    <!-- end list news --> 
  </div>
  <!-- <style type="text/css">
      .pagination{padding:0px; margin:0px;}
  </style>
  <ul class="pagination">
      <li class="page-item"><a href="#" class="page-link">Trang</a></li>
      <?php for($i = 1; $i <= $numPage; $i++): ?>
      <li class="page-item"><a href="index.php?controller=products&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
      <?php endfor; ?>
  </ul> -->

</div>