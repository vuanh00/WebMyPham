 <?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
  <main class="page-content col-sm-9">
    <div class="category-heading">
        <h1 class="page-heading" style="padding: 0;">
            Tìm kiếm sản phẩm
        </h1>
        <hr>
        <div data-content-region="category_below_header"></div>
    </div>
            

<form action="https://keen-demo.mybigcommerce.com/compare" method='POST'  data-product-compare>
            <div class="module-wrapper">
   <div class="productBlockContainer columns-4" data-columns="4">
       <?php foreach($data as $rows): ?>
       <div class="prod-item wow fadeIn" data-wow-delay="16ms">
           <article class="card " >
                <figure class="card-figure">
                    <div class="prod-image">
                        <a href="assets/frontend/sample-coco-lee-lulu/index.html" >
                            <img class="card-image lazyload" data-sizes="auto" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
                        </a>
                        <div class="actions">
                                    <a href="#" class="btnQV quickview" data-product-id="59" data-event-type="product-click">Quick view</a>
                        </div>

                        <div class="new-badge">NEW</div>
                        <div class="new-badge" style="top:25px"><?php echo $rows->discount;  ?>%</div>


                    </div>

                    <figcaption class="prod-desc" >

                        <!-- <p class="prod-brand" data-test-info-type="brandName">Coco Lee</p> -->

                        <h4 class="prod-name name">
                            <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                        </h4>

                        <div class="prod-price" data-test-info-type="price">
                            <div class="price-section price-section--withoutTax "  >
                                <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span>
                            </div>
                        </div>
                        <div class="prod-price" data-test-info-type="price">
                            <div class="price-section price-section--withoutTax "  >
                                <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> </span>₫ </span>
                            </div>
                        </div>
                        <div class="prod-summary">
                            <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potentialassets/frontend.</p>
                        </div>

                        <div class="rating">
                            <div class="star-rating" data-test-info-type="productRating">
                                <div class="rating--small">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <!-- snippet location product_rating -->
                                </div>
                            </div>
                        </div>

                        <div class="buttons-wrapper">
                            <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" id="form-action-addToCart" class="btn btn-primary btnATC" type="submit">Add to Cart</a>
                                        
                        </div>
                    </figcaption>
                </figure>
            </article>
       </div>
       <?php endforeach ?>
   </div>
</div>
</form>

<div class="product-pagination bottom">

    <div class="pagination">
    <ul class="pagination-list">
                <li class="pagination-item pagination-item--current">
                    <a class="pagination-link" href="index1bb6.html?sort=featured&amp;page=1" data-faceted-search-facet>1</a>
                </li>
                <li class="pagination-item">
                    <a class="pagination-link" href="indexf1d4.html?sort=featured&amp;page=2" data-faceted-search-facet>2</a>
                </li>
                <li class="pagination-item">
                    <a class="pagination-link" href="index36c2.html?sort=featured&amp;page=3" data-faceted-search-facet>3</a>
                </li>

            <li class="pagination-item pagination-item--next">
                <a class="pagination-link" href="indexf1d4.html?sort=featured&amp;page=2" data-faceted-search-facet>
                    <span>Next</span> <i class="fa fa-angle-right"></i>
                </a>
            </li>
    </ul>
</div>

    <div class="compare-link">
        <a class="btn btn-primary" href="assets/frontend/compare.html" data-compare-nav>Compare Selected<span class="countPill countPill--positive countPill--alt"></span></a>
    </div>

</div>
                <div data-content-region="category_below_content"></div>
            </div>
        </main>