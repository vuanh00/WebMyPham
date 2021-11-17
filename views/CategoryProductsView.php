 <?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
  <main class="page-content col-sm-9">
            <div class="category-heading">
                <h1 class="page-heading">
                    <?php 
                        $category = $this->modelGetCategory($id);
                        echo isset($category->name) ? $category->name : "";
                     ?>
                </h1>
                <div data-content-region="category_below_header"></div>
            </div>
                    <div class="halo-sub-categories">
                        <h2 class="subCategories-heading">Sub Categories</h2>
                        <div class="sub-cate-col">
                                <div class="sub-cate-item">
                                    <div class="sub-cate-tab" style="width: 400px;">
                                        <?php $categoriesSub = $this->modelCategoriesSub($id); ?>
                                        <?php foreach($categoriesSub as $rowsSub): ?>
                                            <div class="sub-cate-img"><a href="lorem-de-dorus/index.html"><img src="assets/frontend/s-d8768tzdj/stencil/332cfbc0-23b8-0137-9598-0242ac110010/e/66f4f850-23b8-0137-de4a-0242ac110012/img/CategoryDefault.jpg" alt="Lorem De Dorus"></a></div>
                                            <div class="sub-cate-content" >
                                                <a class="sub-cat-name" href="lorem-de-dorus/index.html">
                                                    <?php echo $rowsSub->name; ?>
                                                </a>
                                                <div class="sub-cate-count">0  item  </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                
                                
                        </div>
                    </div>
            <div id="product-listing-container">
                <!-- snippet location categories -->

                    <div class="product-pagination top">
    <div class="view-mode-btn">
    <label class="view-as">VIEW AS</label>
    <div class="btn-group">
        <a href="javascript:void(0);" id="grid-view" title="Grid View" class=" current-view ">
            <div>
                <div class="icon-bar"></div>
                <div class="icon-bar"></div>
                <div class="icon-bar"></div>
            </div>
        </a>
        <a href="javascript:void(0);" id="list-view" title="List View" class="">
            <div>
                <div class="icon-bar"></div>
                <div class="icon-bar"></div>
                <div class="icon-bar"></div>
            </div>
        </a>
    </div>
</div>
    <form class="actionBar" method="get" data-sort-by>
    <fieldset class="form-fieldset actionBar-section">
    <div class="form-field">
        <label class="form-label" for="sort">Sort By</label>
        <select class="form-select form-select--small" name="sort" id="sort">
            <option value="featured" selected>Featured Items</option>
            <option value="newest" >Newest Items</option>
            <option value="bestselling" >Best Selling</option>
            <option value="alphaasc" >A to Z</option>
            <option value="alphadesc" >Z to A</option>
            <option value="avgcustomerreview" >By Review</option>
            <option value="priceasc" >Price: Ascending</option>
            <option value="pricedesc" >Price: Descending</option>
        </select>
    </div>
</fieldset>

</form>
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