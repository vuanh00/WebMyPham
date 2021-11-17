<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangChu.php";
 ?>
 <div data-content-region="home_below_carousel"></div>

    <div class="container_page">
        
   

<div class="main full">
<section id="homeNewProducts" class="module-wrapper wow fadeIn">
   <div class="container">
      <h2 class="module-heading"><span>Sản phẩm mới nhất</span></h2>
      
      <section class="productCarousel owl-carousel"
    
    data-owl='{
        "nav": true,
        "dots": false,
        "items": 5,
        "margin": 30,
        "slideBy": 5,
        "responsive": {
         "0": {
            "items": 2,
            "slideBy": 2,
            "margin": 20
         },
         "480": {
            "items": 2,
            "slideBy": 2
         },
         "641": {
            "items": 3,
            "slideBy": 3
         },
         "768": {
            "items": 3,
            "slideBy": 3
         },
         "992": {
            "items": 4,
            "slideBy": 4,
            "margin": 30
         },
         "1200": {
            "items": 5,
            "slideBy": 5,
            "margin": 30
         }
      },
      "responsiveRefreshRate": 0
    }'>
    <?php 
      $hotProduct = $this->modelHotProduct();
   ?>
   <?php foreach($hotProduct as $rows): ?>
    <div class="prod-item wow fadeIn" data-wow-delay="5ms" data-product-id="70" >
        <article class="card " >
          <figure class="card-figure" >
              <div class="prod-image"style="position: relative;">
                  <a href="sample-mango-half-duff-black/index.html" >
                      <img class="card-image lazyload" data-sizes="auto" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive">
                  </a>
                  <div class="actions">
                      <a href="#" class="btnQV quickview" data-product-id="70" data-event-type="product-click">Quick view</a>
                  </div>
                  <div class="new-badge">NEW</div>
                  <div class="new-badge" style="top:25px"><?php echo $rows->discount;  ?>%</div>

              </div>
              
              <figcaption class="prod-desc" >

                  <!-- <p class="prod-brand" data-test-info-type="brandName">Mango</p> -->

                  <h4 class="prod-name">
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
                      <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yetassets/frontend.</p>
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
    
   <?php endforeach; ?>
    </section>
  </div>
</section>
    <div data-content-region="home_below_new_products"></div>

    
    
<section id="homeFeaturedProducts" class="module-wrapper wow fadeIn">
  <div class="container">
      <h2 class="module-heading"><span>sản phẩm khuyến mại</span></h2>
     
      <section class="productCarousel owl-carousel"
    data-list-name=""
    data-owl='{
        "nav": true,
        "dots": false,
        "items": 5,
        "margin": 30,
        "slideBy": 5,
        "responsive": {
         "0": {
            "items": 2,
            "slideBy": 2,
            "margin": 20
         },
         "480": {
            "items": 2,
            "slideBy": 2
         },
         "641": {
            "items": 3,
            "slideBy": 3
         },
         "768": {
            "items": 3,
            "slideBy": 3
         },
         "992": {
            "items": 4,
            "slideBy": 4,
            "margin": 30
         },
         "1200": {
            "items": 5,
            "slideBy": 5,
            "margin": 30
         }
      },
      "responsiveRefreshRate": 0
    }'>
    
    <!-- <div class="prod-item wow fadeIn" data-wow-delay="5ms" data-product-id="70">
        <article class="card " >
          <figure class="card-figure">
              <div class="prod-image">
                  <a href="sample-mango-half-duff-black/index.html" >
                      <img class="card-image lazyload" data-sizes="auto" src="assets/frontend/s-tphjucml/images/stencil/224x224/products/70/332/best-beauty-products-0409-2-lg-16781937-compressor__78206.15573365044847.jpg?c=2"
                      data-src-swap="assets/frontend/s-tphjucml/images/stencil/224x224/products/70/330/14-thickbox_default-compressor__76002.15573365054847.jpg?c=2"
                      alt="[Sample] Mango, half duff black " title="[Sample] Mango, half duff black ">
                  </a>
                  <div class="actions">
                      <a href="#" class="btnQV quickview" data-product-id="70" data-event-type="product-click">Quick view</a>
                  </div>
                  <div class="new-badge">NEW</div>

              </div>

              <figcaption class="prod-desc" >

                  <p class="prod-brand" data-test-info-type="brandName">Mango</p>

                  <h4 class="prod-name">
                      <a href="sample-mango-half-duff-black/index.html" >[Sample] Mango, half duff black </a>
                  </h4>

                  <div class="prod-price" data-test-info-type="price">
                      <div class="price-section price-section--withoutTax "  >
                        <span data-product-price-without-tax class="price price--withoutTax">$380.00</span>
                      </div>
                  </div>

                  <div class="prod-summary">
                      <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yetassets/frontend.</p>
                  </div>

                  <div class="rating">
                      <div class="star-rating" data-test-info-type="productRating">
                          <div class="rating--small">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
      snippet location product_rating
                          </div>
                      </div>
                  </div>

                  <div class="buttons-wrapper">
                      <a href="cart.html?action=add&amp;product_id=70" class="btn btn-primary btnATC themevale_btnATC" title="Add to Cart" data-product-id="70" data-event-type="product-click"><span>Add to Cart</span></a>

                      <a href="login9340.html?action=add&amp;product_id=70" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

                  </div>
              </figcaption>
          </figure>
        </article>
    </div> -->
    <?php 
      $hotProduct = $this->modelHotProduct();
   ?>
   <?php foreach($hotProduct as $rows): ?>
    <div class="prod-item wow fadeIn" data-wow-delay="5ms" data-product-id="70" >
        <article class="card " >
          <figure class="card-figure" >
              <div class="prod-image"style="position: relative;">
                  <a href="sample-mango-half-duff-black/index.html" >
                      <img class="card-image lazyload" data-sizes="auto" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive">
                  </a>
                  <div class="actions">
                      <a href="#" class="btnQV quickview" data-product-id="70" data-event-type="product-click">Quick view</a>
                  </div>
                  <div class="new-badge">NEW</div>
                  <div class="new-badge" style="top:25px"><?php echo $rows->discount;  ?>%</div>

              </div>
              
              <figcaption class="prod-desc" >

                  <!-- <p class="prod-brand" data-test-info-type="brandName">Mango</p> -->

                  <h4 class="prod-name">
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
                      <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yetassets/frontend.</p>
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
    
   <?php endforeach; ?>
  </section>
  </div>
</section>
    <div data-content-region="home_below_featured_products"></div>

    
    <div data-content-region="home_below_top_products"></div>

    <!-- BEGIN Home Custom CMS Blocks -->
        <section id="homeFromOurBlog" class="module-wrapper wow fadeIn">
    <div class="container">
        <h2 class="module-heading"><span>From Our Blog</span></h2>
        <div class="blog-items row">

        <div class="blog-item col-sm-6">
            <a href="blog/pellentesque-posuere-morci-lobortis-scelerisque-de-blandit/index.html">
                <img class="lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/585x440/uploaded_images/beautica-blog-image1-compressor.jpg?t=1506305018" alt="Pellentesque posuere morci. lobortis  scelerisque de blandit.">
            </a>
            <div class="posted-by">Posted by ThemeVale on 31st Aug 2017</div>
            <a class="blog-title" href="blog/pellentesque-posuere-morci-lobortis-scelerisque-de-blandit/index.html">Pellentesque posuere morci. …</a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis risus leo, elementum in malesuada an darius ut augue. Cras sit amet lectus et justo feugiat euismod sed non erat. Nulla noassets/frontend.</p>
            <a href="blog/pellentesque-posuere-morci-lobortis-scelerisque-de-blandit/index.html" class="btn btn-primary">Read More</a>
        </div>
        <div class="blog-item col-sm-6">
            <a href="blog/loremous-cosmopolis/index.html">
                <img class="lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/585x440/uploaded_images/beautica-blog-image2-compressor.jpg?t=1506305031" alt="Loremous Cosmopolis">
            </a>
            <div class="posted-by">Posted by ThemeVale on 5th Jul 2017</div>
            <a class="blog-title" href="blog/loremous-cosmopolis/index.html">Loremous Cosmopolis</a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis risus leo, elementum in malesuada an darius ut augue. Cras sit amet lectus et justo feugiat euismod sed non erat. Nullaassets/frontend.</p>
            <a href="blog/loremous-cosmopolis/index.html" class="btn btn-primary">Read More</a>
        </div>

        </div>
    </div>
</section>
    <!-- END Home Custom CMS Blocks -->

    
   

</div>

    </div>