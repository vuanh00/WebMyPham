 <?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 
        <main itemscope itemtype="http://schema.org/Product" class="page-content col-sm-9">

            <div class="productView productView-1" >
    <div class="productViewTop">
        <section class="productView-images" data-image-gallery>
            <div class="new-badge">NEW</div>

            <div class="productView-image-wrap">
                <div class="productView-nav" data-slick='{
                    "arrows": false,
                    "dots": false,
                    "infinite": true,
                    "slidesToShow": 1,
                    "slidesToScroll": 1,
                    "asNavFor": ".productView .productView-for"
                }'>
                        <figure class="productView-image"
                            data-image-gallery-main
                            data-zoom-image="../s-tphjucml/images/stencil/1280x1280/products/73/277/big_4475-compressor__13848.15052874964847.jpg?c=2"
                            data-mfp-src="../s-tphjucml/images/stencil/1280x1280/products/73/277/big_4475-compressor__13848.15052874964847.jpg?c=2">
                            <a href="#">
                                <img class="productView-image--default"
                                     src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;">
                            </a>
                        </figure>
                        <!-- <figure class="productView-image"
                            data-image-gallery-main
                            data-zoom-image="../s-tphjucml/images/stencil/1280x1280/products/73/278/01-loreal-shampoo-compressor__60197.15052874964847.jpg?c=2"
                            data-mfp-src="../s-tphjucml/images/stencil/1280x1280/products/73/278/01-loreal-shampoo-compressor__60197.15052874964847.jpg?c=2">
                            <a href="#">
                                <img class="productView-image--default"
                                     src="../s-tphjucml/images/stencil/1280x1280/products/73/278/01-loreal-shampoo-compressor__60197.15052874964847.jpg?c=2"
                                     alt="" title="" data-main-image>
                            </a>
                        </figure>
                        <figure class="productView-image"
                            data-image-gallery-main
                            data-zoom-image="../s-tphjucml/images/stencil/1280x1280/products/73/279/cleanser-loreal-go-clean_300-compressor__72497.15052874964847.jpg?c=2"
                            data-mfp-src="../s-tphjucml/images/stencil/1280x1280/products/73/279/cleanser-loreal-go-clean_300-compressor__72497.15052874964847.jpg?c=2">
                            <a href="#">
                                <img class="productView-image--default"
                                     src="../s-tphjucml/images/stencil/1280x1280/products/73/279/cleanser-loreal-go-clean_300-compressor__72497.15052874964847.jpg?c=2"
                                     alt="" title="" data-main-image>
                            </a>
                        </figure> -->
                </div>
                <div class="productView-for" data-slick='{
                    "arrows": true,
                    "dots": false,
                    "infinite": true,
                    "focusOnSelect": true,
                    "slidesToShow": 4,
                    "slidesToScroll": 1,
                    "asNavFor": ".productView .productView-nav",
                    "nextArrow": "<div class=&apos;slick-next slick-arrow slick-arrow-custom&apos;></div>", 
                    "prevArrow": "<div class=&apos;slick-prev slick-arrow slick-arrow-custom&apos;></div>",
                    "responsive": [
                        {
                            "breakpoint": 1450,
                            "settings": {
                                "slidesToShow": 4,
                                "slidesToScroll": 1
                            }
                        },
                        {
                            "breakpoint": 381,
                            "settings": {
                                "slidesToShow": 3,
                                "slidesToScroll": 1
                            }
                        }
                    ]
                }'>
                        <div class="productView-thumbnail">
                            <a 
                                data-image-gallery-item
                                data-image-gallery-new-image-url="../s-tphjucml/images/stencil/1280x1280/products/73/277/big_4475-compressor__13848.15052874964847.jpg?c=2"
                                data-image-gallery-zoom-image-url="../s-tphjucml/images/stencil/1280x1280/products/73/277/big_4475-compressor__13848.15052874964847.jpg?c=2">
                                <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;">
                            </a>
                        </div>
                        <!-- <div class="productView-thumbnail">
                            <a 
                                data-image-gallery-item
                                data-image-gallery-new-image-url="../s-tphjucml/images/stencil/1280x1280/products/73/278/01-loreal-shampoo-compressor__60197.15052874964847.jpg?c=2"
                                data-image-gallery-zoom-image-url="../s-tphjucml/images/stencil/1280x1280/products/73/278/01-loreal-shampoo-compressor__60197.15052874964847.jpg?c=2">
                                <img src="../s-tphjucml/images/stencil/90x90/products/73/278/01-loreal-shampoo-compressor__60197.15052874964847.jpg?c=2" alt="[Sample] French Connection, Sunday bliss bag" title="[Sample] French Connection, Sunday bliss bag">
                            </a>
                        </div>
                        <div class="productView-thumbnail">
                            <a 
                                data-image-gallery-item
                                data-image-gallery-new-image-url="../s-tphjucml/images/stencil/1280x1280/products/73/279/cleanser-loreal-go-clean_300-compressor__72497.15052874964847.jpg?c=2"
                                data-image-gallery-zoom-image-url="../s-tphjucml/images/stencil/1280x1280/products/73/279/cleanser-loreal-go-clean_300-compressor__72497.15052874964847.jpg?c=2">
                                <img src="../s-tphjucml/images/stencil/90x90/products/73/279/cleanser-loreal-go-clean_300-compressor__72497.15052874964847.jpg?c=2" alt="[Sample] French Connection, Sunday bliss bag" title="[Sample] French Connection, Sunday bliss bag">
                            </a>
                        </div> -->
                </div>
            </div>
        </section>

        <section class="productView-details">
            <div class="productView-product">
                    <h2 class="productView-brand" itemprop="brand" itemscope itemtype="http://schema.org/Brand"><a href="../brands/French-Connection.html" itemprop="url"><span itemprop="name"><?php 
                        $category = $this->modelGetCategory($id);
                        echo isset($category->name) ? $category->name : "";
                     ?></span></a></h2>
                <h1 class="productView-title" itemprop="name" data-product-view-url="index.html"><?php echo $record->name; ?></h1>

                <div class="productView-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                <meta itemprop="ratingValue" content="3">
                                <meta itemprop="ratingCount" content="2">
                                <meta itemprop="reviewCount" content="2">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
<!-- snippet location product_rating -->
                        <span class="productView-reviewLink reviewLinkCount">
                                <a href="index.html#product-reviews">
                                    2 Customer Reviews
                                </a>
                        </span>
                        <span class="productView-reviewLink">
                            <a href="index.html"
                               data-reveal-id="modal-review-form">
                               Write a Review
                            </a>
                        </span>
                        <div id="modal-review-form" class="modal" data-reveal>
    <div class="modal-header">
        <h2 class="modal-header-title">Write a Review</h2>
        <a href="#" class="modal-close" aria-label="Close" role="button">
            <span aria-hidden="true"><svg><use xlink:href="#icon-close"></use></svg></span>
        </a>
    </div>
    <div class="modal-body">
        <div class="writeReview-productDetails">
            <div class="new-badge">NEW</div>
            <img src="../s-tphjucml/images/stencil/500x500/products/73/277/big_4475-compressor__13848.15052874964847.jpg?c=2">
            <h6 class="product-brand">French Connection</h6>
            <h5 class="product-title">[Sample] French Connection, Sunday bliss bag</h5>
        </div>
        <form class="form writeReview-form" action="https://keen-demo.mybigcommerce.com/postreview.php" method="post">
            <fieldset class="form-fieldset">
                <div class="form-field">
                    <label class="form-label" for="rating-rate">Rating
                        <small>Required</small>
                    </label>
                    <!-- Stars -->
                    <!-- TODO: Review Stars need to be componentised, both for display and input -->
                    <select id="rating-rate" class="form-select" name="revrating">
                        <option value="">Select Rating</option>
                                <option value="1">1 star (worst)</option>
                                <option value="2">2 stars</option>
                                <option value="3">3 stars (average)</option>
                                <option value="4">4 stars</option>
                                <option value="5">5 stars (best)</option>
                    </select>
                </div>

                <!-- Name -->
                    <div class="form-field" id="revfromname" data-validation="" >
    <label class="form-label" for="revfromname_input">Name
        
    </label>
    <input type="text" id="revfromname_input" data-label="Name" name="revfromname"  class="form-input" aria-required="" >
</div>


                <!-- Review Subject -->
                <div class="form-field" id="revtitle" data-validation="" >
    <label class="form-label" for="revtitle_input">Review Subject
        <small>Required</small>
    </label>
    <input type="text" id="revtitle_input" data-label="Review Subject" name="revtitle"  class="form-input" aria-required="true" >
</div>

                <!-- Comments -->
                <div class="form-field" id="revtext" data-validation="">
    <label class="form-label" for="revtext_input">Comments
            <small>Required</small>
    </label>
    <textarea name="revtext" id="revtext_input" data-label="Comments" rows="" aria-required="true" class="form-input" ></textarea>
</div>

                <div class="g-recaptcha" data-sitekey="6LcjX0sbAAAAACp92-MNpx66FT4pbIWh-FTDmkkz"></div><br/>

                <div class="form-field">
                    <input type="submit" class="btn btn-primary"
                           value="Submit Review">
                </div>
                <input type="hidden" name="product_id" value="73">
                <input type="hidden" name="action" value="post_review">
                
            </fieldset>
        </form>
    </div>
</div>
                </div>
                    <div class="productView-price">
                                    <div class="price-section price-section--withoutTax "  itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <meta itemprop="price" content="380">
                <meta itemprop="priceCurrency" content="USD">
                <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($record->price); ?></span> ₫ </span>
                <span class="special-price"> <span class="price product-price"> <?php echo number_format($record->price - ($record->price * $record->discount)/100); ?> </span>₫ </span>
        </div>
                    </div>
                <div data-content-region="product_below_price"></div>
                
                <dl class="productView-info">
                        <dt class="productView-info-name">SKU:</dt>
                        <dd class="productView-info-value" data-product-sku>FCSBB</dd>
                        <dt class="productView-info-name">Weight:</dt>
                        <dd class="productView-info-value" data-product-weight>2.00 LBS</dd>
                        <dt class="productView-info-name">Gift wrapping:</dt>
                        <dd class="productView-info-value">Options available</dd>
                                <dt class="productView-info-name">Shipping:</dt>
                                <dd class="productView-info-value">Free Shipping</dd>

                </dl>
                <div class="productView-summary">
                    
                </div>
            </div>

            <div class="productView-options">

                <form class="form" method="post" action="https://keen-demo.mybigcommerce.com/cart.php" enctype="multipart/form-data"
                      data-cart-item-add>
                    <input type="hidden" name="action" value="add">
                    <input type="hidden" name="product_id" value="73"/>


                    <div data-product-option-change style="display:none;">


                    </div>


                    <div class="form-field form-field--stock u-hiddenVisually">
                        <label class="form-label form-label--alternate">
                            Current Stock:
                            <span data-product-stock></span>
                        </label>

                    </div>

                        <div class="alertBox productAttributes-message" style="display:none">
  <div class="alertBox-column alertBox-icon">
      <icon glyph="ic-success" class="icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg></icon>
  </div>
  <p class="alertBox-column alertBox-message"></p>
</div>

<div class="qty-add-wrap">
  <div class="form-field form-field--increments">
      <label class="form-label form-label--alternate"
             for="qty[]">Quantity:</label>

      <div class="form-increment" data-quantity-change>
          <button class="button button--icon" data-action="dec">
              <span class="is-srOnly">Decrease Quantity:</span>
              <i class="fa fa-minus"></i>
          </button>
          <input class="form-input form-input--incrementTotal"
                 id="qty[]"
                 name="qty[]"
                 type="tel"
                 value="1"
                 data-quantity-min="0"
                 data-quantity-max="0"
                 min="1"
                 pattern="[0-9]*"
                 aria-live="polite">
          <button class="button button--icon" data-action="inc">
              <span class="is-srOnly">Increase Quantity:</span>
              <i class="fa fa-plus"></i>
          </button>
      </div>
  </div>
  <!-- <div class="form-action"> -->
       
     
        <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" id="form-action-addToCart" class="btn btn-primary" type="submit">Add to Cart</a>
  <!-- </div> -->
      <!-- snippet location product_addtocart -->
</div>
                   
                    

                </form>

                    <form class="form" method="post" action="https://keen-demo.mybigcommerce.com/wishlist.php?action=add&amp;product_id=73" data-wishlist-add>
                        <input type="hidden" name="variation_id" value="">
                        <button type="submit" class="btn btn-alt">
                            <i class="fa fa-heart"></i><span>Add to Wish list</span>
                        </button>
                    </form>
            </div>

            <div class="social-mediaBlock">
    <script type="text/javascript" src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-564d3080dd24d74d" async="async"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <div class="addthis_native_toolbox"></div>
</div>

            <!-- snippet location product_details -->
        </section>
    </div>
    <article class="responsive-tabs" itemprop="description">

        <input class="state" type="radio" name="tabs-state" id="tab-description" checked />
        <input class="state" type="radio" name="tabs-state" id="tab-reviews" />
        <input class="state" type="radio" name="tabs-state" id="tab-custom" />

        <div class="tabs flex-tabs">
            <label for="tab-description" id="tab-description-label" class="tab">Description</label>
            <label for="tab-reviews" id="tab-reviews-label" class="tab">Reviews (2) </label>

            <!-- BEGIN Custom Product Tab title -->
            <label for="tab-custom" id="tab-custom-label" class="tab">Shipping & Returns</label>
            <!-- END Custom Product Tab title -->

            <div id="tab-description-panel" class="panel active" >
              <p><strong>How to write product descriptions that sell</strong><br /><span>One of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.</span><br /><br /><span>Keep three things in mind:</span><br /><br /><strong>Think like a consumer</strong><br /><span>Think about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing features &mdash; try to limit each one to 5-8 words.</span><br /><br /><strong>Find differentiators</strong><br /><span>Pepper your features with details that show how the product stands out against similar offerings. For clothes: is it vintage or hard to find? For art: is the artist well known? For home d&eacute;cor: is it a certain style like mid-century modern? Unique product descriptions not only help you stand out, they improve your SEO.</span><br /><br /><strong>Keep it simple</strong><br /><span>Provide enough detail to help consumers make an informed decision, but don&rsquo;t overwhelm with a laundry list of features or flowery language. Densely pack your descriptions with useful information and watch products fly off the shelf.</span></p>
                <!-- snippet location product_description -->

            </div>
            <div id="tab-reviews-panel" class="panel">
                <section data-product-reviews>

    <a class="btn btn-alt" href="#" data-reveal-id="modal-review-form">Write a Review</a>

    <ul class="productReviews-list" id="productReviews-list">
        <li class="productReview">
            <article itemprop="review" itemscope itemtype="http://schema.org/Review">
                <header>
                    <h5 itemprop="name" class="productReview-title">kunnbbuuj</h5>
                    <span class="productReview-rating rating--small" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                        <!-- snippet location product_rating -->
                        <span class="productReview-ratingNumber" itemprop="ratingValue">1</span>
                    </span>
                        <meta itemprop="author" content="hygy">
                        <p class="productReview-author">
                            Posted by <strong>hygy</strong> on 12th Feb 2020
                        </p>
                </header>
                <p itemprop="reviewBody" class="productReview-body">n l lkklk kjkjnkjnmjnk bkn ih n h h</p>
            </article>
        </li>
        <li class="productReview">
            <article itemprop="review" itemscope itemtype="http://schema.org/Review">
                <header>
                    <h5 itemprop="name" class="productReview-title">Must have item</h5>
                    <span class="productReview-rating rating--small" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
<!-- snippet location product_rating -->
                        <span class="productReview-ratingNumber" itemprop="ratingValue">5</span>
                    </span>
                        <meta itemprop="author" content="Amiee">
                        <p class="productReview-author">
                            Posted by <strong>Amiee</strong> on 15th Oct 2019
                        </p>
                </header>
                <p itemprop="reviewBody" class="productReview-body">test</p>
            </article>
        </li>
    </ul>


</section>
<!-- snippet location reviews -->
            </div>
            <!-- BEGIN Custom Product Tab content -->
            <div id="tab-custom-panel" class="panel">
                <h5>Returns Policy</h5>
<p>You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).</p>

<p>You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).</p>

<p>If you need to return an item, simply login to your account, view the order using the "Complete Orders" link under the My Account menu and click the Return Item(s) button. We'll notify you via e-mail of your refund once we've received and processed the returned item.</p>

<h5>Shipping</h5>
<p>We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.</p>

<p>When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.</p>

<p>Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.</p>
            </div>
            <!-- END Custom Product Tab content -->
        </div>

    </article>
</div>

<div id="previewModal" class="modal modal--large" data-reveal>
    <a href="#" class="modal-close" aria-label="Close" role="button">
        <span aria-hidden="true"><svg><use xlink:href="#icon-close"></use></svg></span>
    </a>
    <div class="modal-content"></div>
    <div class="loadingOverlay"></div>
</div>

            <div data-content-region="product_below_content"></div>

            <div class="productViewBottom">
                <div id="relatedProducts" class="module-wrapper">
                    <h3 class="module-heading"><span>Related Products</span></h3>
                    <section class="productCarousel owl-carousel"
    
    data-owl='{
        "nav": true,
        "dots": false,
        "items": 4,
        "margin": 30,
        "slideBy": 4,
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
            "items": 2,
            "slideBy": 2
         },
         "992": {
            "items": 3,
            "slideBy": 3
         },
         "1200": {
            "items": 4,
            "slideBy": 4
         }
      },
      "responsiveRefreshRate": 0
    }'>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-paul-smith-t-time-bag-small/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/67/342/03-compressor__68414.1505288447.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/67/343/_pleasures-bloom_Product-Shot-on-white-background_ExpJuly2012-compressor__26570.1505288447.jpg?c=2"
                alt="[Sample] Paul Smith, t-time bag small" title="[Sample] Paul Smith, t-time bag small">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="67" data-event-type="product-click">Quick view</a>
            </div>

            <div class="new-badge">NEW</div>



        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">Paul Smith</p>

            <h4 class="prod-name">
                <a href="../sample-paul-smith-t-time-bag-small/index.html" >[Sample] Paul Smith, t-time bag small</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$290.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
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
                            <a href="../cart.html?action=add&amp;product_id=67" class="btn btn-primary btnATC themevale_btnATC" title="Add to Cart" data-product-id="67" data-event-type="product-click"><span>Add to Cart</span></a>

                <a href="../login2467.html?action=add&amp;product_id=67" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-sodling-black-leather-duffle-bag/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/68/338/kohl_pencil-compressor__02604.1505288402.png?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/68/336/YouthCode_3StepKit-compressor__40032.1505288395.jpg?c=2"
                alt="[Sample] Sodling, black leather duffle bag" title="[Sample] Sodling, black leather duffle bag">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="68" data-event-type="product-click">Quick view</a>
            </div>

            <div class="new-badge">NEW</div>



        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">Sodling</p>

            <h4 class="prod-name">
                <a href="../sample-sodling-black-leather-duffle-bag/index.html" >[Sample] Sodling, black leather duffle bag</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$390.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
            </div>

            <div class="rating">
                <div class="star-rating" data-test-info-type="productRating">
                    <div class="rating--small">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
<!-- snippet location product_rating -->
                    </div>
                </div>
            </div>

            <div class="buttons-wrapper">
                            <a href="../cart.html?action=add&amp;product_id=68" class="btn btn-primary btnATC themevale_btnATC" title="Add to Cart" data-product-id="68" data-event-type="product-click"><span>Add to Cart</span></a>

                <a href="../loginbdf7.html?action=add&amp;product_id=68" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-coco-lee-coins-are-kumis-brown-leather-bag/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/71/284/Maybelline-BB-White-_-Stick1-compressor__76880.1557344364.png?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/71/285/Loreal-Sublime-Bronze-Self-Tanning-Gel-Tinted--Shimmering-Medium-Skin-12460-compressor__93931.1557344365.jpg?c=2"
                alt="[Sample] Coco Lee, coins are Kumis brown leather bag" title="[Sample] Coco Lee, coins are Kumis brown leather bag">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="71" data-event-type="product-click">Quick view</a>
            </div>

            <div class="new-badge">NEW</div>



        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">Coco Lee</p>

            <h4 class="prod-name">
                <a href="../sample-coco-lee-coins-are-kumis-brown-leather-bag/index.html" >[Sample] Coco Lee, coins are Kumis brown leather bag</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$510.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
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
                            <a href="../cart.html?action=add&amp;product_id=71" class="btn btn-primary btnATC themevale_btnATC" title="Add to Cart" data-product-id="71" data-event-type="product-click"><span>Add to Cart</span></a>

                <a href="../login0aac.html?action=add&amp;product_id=71" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-coco-lee-gladiator-bag/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/72/280/url-compressor__71817.1557506085.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/72/281/yves_saint_laurent_mascara_singulier_nuit_blanche_1-compressor__80588.1557506086.png?c=2"
                alt="[Sample] Coco Lee, gladiator bag" title="[Sample] Coco Lee, gladiator bag">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="72" data-event-type="product-click">Quick view</a>
            </div>

            <div class="new-badge">NEW</div>



        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName"></p>

            <h4 class="prod-name">
                <a href="../sample-coco-lee-gladiator-bag/index.html" >[Sample] Coco Lee, gladiator bag</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$490.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
            </div>

            <div class="rating">
                <div class="star-rating" data-test-info-type="productRating">
                    <div class="rating--small">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star"></i>
<!-- snippet location product_rating -->
                    </div>
                </div>
            </div>

            <div class="buttons-wrapper">
                            <a href="../cart.html?action=add&amp;product_id=72" class="btn btn-primary btnATC themevale_btnATC" title="Add to Cart" data-product-id="72" data-event-type="product-click"><span>Add to Cart</span></a>

                <a href="../login2555.html?action=add&amp;product_id=72" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-french-connection-straw-bag/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/74/272/url23-compressor__78106.1557342150.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/74/273/loreal-youth-code-rejuvenating-eye-essence-compressor__81828.1557342150.jpg?c=2"
                alt="[Sample] French Connection, straw bag" title="[Sample] French Connection, straw bag">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="74" data-event-type="product-click">Quick view</a>
            </div>

            <div class="new-badge">NEW</div>



        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">French Connection</p>

            <h4 class="prod-name">
                <a href="../sample-french-connection-straw-bag/index.html" >[Sample] French Connection, straw bag</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$100.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
            </div>

            <div class="rating">
                <div class="star-rating" data-test-info-type="productRating">
                    <div class="rating--small">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
<!-- snippet location product_rating -->
                    </div>
                </div>
            </div>

            <div class="buttons-wrapper">
                            <a href="../sample-french-connection-straw-bag/index.html" class="btn btn-primary btnATC" data-product-id="74" title="Choose Options" data-event-type="product-click"><span>Choose Options</span></a>

                <a href="../login36bf.html?action=add&amp;product_id=74" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
</section>
                </div>
                <div id="similarByViews" class="module-wrapper">
                    <h3 class="module-heading"><span>Customers Also Viewed</span></h3>
                    <section class="productCarousel owl-carousel"
    data-owl='{
        "nav": true,
        "dots": false,
        "items": 4,
        "margin": 30,
        "slideBy": 4,
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
            "items": 2,
            "slideBy": 2
         },
         "992": {
            "items": 3,
            "slideBy": 3
         },
         "1200": {
            "items": 4,
            "slideBy": 4
         }
      },
      "responsiveRefreshRate": 0
    }'>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-french-connection-straw-bag/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/74/272/url23-compressor__78106.1557342150.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/74/273/loreal-youth-code-rejuvenating-eye-essence-compressor__81828.1557342150.jpg?c=2"
                alt="[Sample] French Connection, straw bag" title="[Sample] French Connection, straw bag">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="74" data-event-type="product-click">Quick view</a>
            </div>

            <div class="new-badge">NEW</div>



        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">French Connection</p>

            <h4 class="prod-name">
                <a href="../sample-french-connection-straw-bag/index.html" >[Sample] French Connection, straw bag</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$100.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
            </div>

            <div class="rating">
                <div class="star-rating" data-test-info-type="productRating">
                    <div class="rating--small">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
<!-- snippet location product_rating -->
                    </div>
                </div>
            </div>

            <div class="buttons-wrapper">
                            <a href="../sample-french-connection-straw-bag/index.html" class="btn btn-primary btnATC" data-product-id="74" title="Choose Options" data-event-type="product-click"><span>Choose Options</span></a>

                <a href="../login36bf.html?action=add&amp;product_id=74" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-gideon-canvas-espadrilles-multiple-colours/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/41/419/LOral-Paris-Youth-Code-Anti-Falten-Pflege-Tag-compressor__03440.1505290667.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/41/420/loreals-compressor__90315.1505290669.jpg?c=2"
                alt="[Sample] Gideon, canvas espadrilles (multiple colours)" title="[Sample] Gideon, canvas espadrilles (multiple colours)">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="41" data-event-type="product-click">Quick view</a>
            </div>



            <div class="soldout-badge">SOLD OUT</div>

        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">Gideon</p>

            <h4 class="prod-name">
                <a href="../sample-gideon-canvas-espadrilles-multiple-colours/index.html" >[Sample] Gideon, canvas espadrilles (multiple colours)</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$69.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
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
                            <a href="../sample-gideon-canvas-espadrilles-multiple-colours/index.html" class="btn btn-primary btnATC is-out-of-stock" data-product-id="41" data-event-type="product-click">Out of stock</a>

                <a href="../login4353.html?action=add&amp;product_id=41" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-mango-half-duff-black/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/70/332/best-beauty-products-0409-2-lg-16781937-compressor__78206.1557336504.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/70/330/14-thickbox_default-compressor__76002.1557336505.jpg?c=2"
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
                <a href="../sample-mango-half-duff-black/index.html" >[Sample] Mango, half duff black </a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$380.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
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
                            <a href="../cart.html?action=add&amp;product_id=70" class="btn btn-primary btnATC themevale_btnATC" title="Add to Cart" data-product-id="70" data-event-type="product-click"><span>Add to Cart</span></a>

                <a href="../login9340.html?action=add&amp;product_id=70" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-collette-alligator-clutch/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/69/289/Dior-Lipsticks-compressor__57213.1557507983.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/69/290/url-compressor__69997.1557507983.png?c=2"
                alt="[Sample] Collette, alligator clutch" title="[Sample] Collette, alligator clutch">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="69" data-event-type="product-click">Quick view</a>
            </div>

            <div class="new-badge">NEW</div>


            <div class="soldout-badge">SOLD OUT</div>

        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">Collette</p>

            <h4 class="prod-name">
                <a href="../sample-collette-alligator-clutch/index.html" >[Sample] Collette, alligator clutch</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$280.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
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
                            <a href="../sample-collette-alligator-clutch/index.html" class="btn btn-primary btnATC is-out-of-stock" data-product-id="69" data-event-type="product-click">Out of stock</a>

                <a href="../logind8d8.html?action=add&amp;product_id=69" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-coco-lee-gladiator-bag/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/72/280/url-compressor__71817.1557506085.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/72/281/yves_saint_laurent_mascara_singulier_nuit_blanche_1-compressor__80588.1557506086.png?c=2"
                alt="[Sample] Coco Lee, gladiator bag" title="[Sample] Coco Lee, gladiator bag">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="72" data-event-type="product-click">Quick view</a>
            </div>

            <div class="new-badge">NEW</div>



        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName"></p>

            <h4 class="prod-name">
                <a href="../sample-coco-lee-gladiator-bag/index.html" >[Sample] Coco Lee, gladiator bag</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$490.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
            </div>

            <div class="rating">
                <div class="star-rating" data-test-info-type="productRating">
                    <div class="rating--small">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star"></i>
<!-- snippet location product_rating -->
                    </div>
                </div>
            </div>

            <div class="buttons-wrapper">
                            <a href="../cart.html?action=add&amp;product_id=72" class="btn btn-primary btnATC themevale_btnATC" title="Add to Cart" data-product-id="72" data-event-type="product-click"><span>Add to Cart</span></a>

                <a href="../login2555.html?action=add&amp;product_id=72" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-sodling-black-leather-duffle-bag/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/68/338/kohl_pencil-compressor__02604.1505288402.png?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/68/336/YouthCode_3StepKit-compressor__40032.1505288395.jpg?c=2"
                alt="[Sample] Sodling, black leather duffle bag" title="[Sample] Sodling, black leather duffle bag">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="68" data-event-type="product-click">Quick view</a>
            </div>

            <div class="new-badge">NEW</div>



        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">Sodling</p>

            <h4 class="prod-name">
                <a href="../sample-sodling-black-leather-duffle-bag/index.html" >[Sample] Sodling, black leather duffle bag</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$390.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
            </div>

            <div class="rating">
                <div class="star-rating" data-test-info-type="productRating">
                    <div class="rating--small">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
<!-- snippet location product_rating -->
                    </div>
                </div>
            </div>

            <div class="buttons-wrapper">
                            <a href="../cart.html?action=add&amp;product_id=68" class="btn btn-primary btnATC themevale_btnATC" title="Add to Cart" data-product-id="68" data-event-type="product-click"><span>Add to Cart</span></a>

                <a href="../loginbdf7.html?action=add&amp;product_id=68" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-collette-florentine-jungle-dress/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/54/306/300.LOrealSkinExpertiseYouthCodeMoisturizer-compressor__35739.1505287943.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/54/303/LOral-Paris-Youth-Code-Anti-Falten-Pflege-Tag-compressor__47876.1505287934.jpg?c=2"
                alt="[Sample] Collette, florentine jungle dress" title="[Sample] Collette, florentine jungle dress">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="54" data-event-type="product-click">Quick view</a>
            </div>




        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">Collette</p>

            <h4 class="prod-name">
                <a href="../sample-collette-florentine-jungle-dress/index.html" >[Sample] Collette, florentine jungle dress</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$99.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
            </div>

            <div class="rating">
                <div class="star-rating" data-test-info-type="productRating">
                    <div class="rating--small">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
<!-- snippet location product_rating -->
                    </div>
                </div>
            </div>

            <div class="buttons-wrapper">
                            <a href="../cart.html?action=add&amp;product_id=54" class="btn btn-primary btnATC themevale_btnATC" title="Add to Cart" data-product-id="54" data-event-type="product-click"><span>Add to Cart</span></a>

                <a href="../loginc621.html?action=add&amp;product_id=54" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-marc-retro-style-summer-mid-dress/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/52/310/10641200-1349275186-847258-compressor__39808.1505287995.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/52/307/90708339f543807e_loreal-compressor__57801.1505287991.jpg?c=2"
                alt="[Sample] Marc, retro style summer mid dress" title="[Sample] Marc, retro style summer mid dress">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="52" data-event-type="product-click">Quick view</a>
            </div>


            <div class="sale-badge">SALE</div>


        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">Marc</p>

            <h4 class="prod-name">
                <a href="../sample-marc-retro-style-summer-mid-dress/index.html" >[Sample] Marc, retro style summer mid dress</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
                <span data-product-rrp-without-tax class="price price--rrp">$179.00</span>
            <span data-product-price-without-tax class="price price--withoutTax">$150.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
            </div>

            <div class="rating">
                <div class="star-rating" data-test-info-type="productRating">
                    <div class="rating--small">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
<!-- snippet location product_rating -->
                    </div>
                </div>
            </div>

            <div class="buttons-wrapper">
                            <a href="../sample-marc-retro-style-summer-mid-dress/index.html" class="btn btn-primary btnATC" data-product-id="52" title="Choose Options" data-event-type="product-click"><span>Choose Options</span></a>

                <a href="../loginaac5.html?action=add&amp;product_id=52" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-coco-lee-coins-are-kumis-brown-leather-bag/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/71/284/Maybelline-BB-White-_-Stick1-compressor__76880.1557344364.png?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/71/285/Loreal-Sublime-Bronze-Self-Tanning-Gel-Tinted--Shimmering-Medium-Skin-12460-compressor__93931.1557344365.jpg?c=2"
                alt="[Sample] Coco Lee, coins are Kumis brown leather bag" title="[Sample] Coco Lee, coins are Kumis brown leather bag">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="71" data-event-type="product-click">Quick view</a>
            </div>

            <div class="new-badge">NEW</div>



        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">Coco Lee</p>

            <h4 class="prod-name">
                <a href="../sample-coco-lee-coins-are-kumis-brown-leather-bag/index.html" >[Sample] Coco Lee, coins are Kumis brown leather bag</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$510.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
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
                            <a href="../cart.html?action=add&amp;product_id=71" class="btn btn-primary btnATC themevale_btnATC" title="Add to Cart" data-product-id="71" data-event-type="product-click"><span>Add to Cart</span></a>

                <a href="../login0aac.html?action=add&amp;product_id=71" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-chanel-the-cheetah/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/75/268/LOreal-HIP-Metallic-Eyeshadow-Duo-New-Shades-Available-390x390-compressor__36859.1557341769.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/75/267/300.LOrealSkinExpertiseYouthCodeMoisturizer-compressor__87882.1557341769.jpg?c=2"
                alt="[Sample] Chanel, the cheetah" title="[Sample] Chanel, the cheetah">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="75" data-event-type="product-click">Quick view</a>
            </div>

            <div class="new-badge">NEW</div>

            <div class="sale-badge">SALE</div>

            <div class="soldout-badge">SOLD OUT</div>

        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">Chanel</p>

            <h4 class="prod-name">
                <a href="../sample-chanel-the-cheetah/index.html" >[Sample] Chanel, the cheetah</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
                <span data-product-rrp-without-tax class="price price--rrp">$340.00</span>
            <span data-product-price-without-tax class="price price--withoutTax">$320.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque, purus vitae danos vehicula cursus dui arcu molestie metus, sit amet rhoncus magna neque sit amet cosmodous. Maecenas rutrum...</p>
            </div>

            <div class="rating">
                <div class="star-rating" data-test-info-type="productRating">
                    <div class="rating--small">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
<!-- snippet location product_rating -->
                    </div>
                </div>
            </div>

            <div class="buttons-wrapper">
                            <a href="../sample-chanel-the-cheetah/index.html" class="btn btn-primary btnATC is-out-of-stock" data-product-id="75" data-event-type="product-click">Out of stock</a>

                <a href="../login18b2.html?action=add&amp;product_id=75" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-anna-multi-colored-bangles/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/33/323/10641200-1349275186-847258-compressor__73956.1505291196.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/33/322/90708339f543807e_loreal-compressor__12704.1505288176.jpg?c=2"
                alt="[Sample] Anna, multi-colored bangles" title="[Sample] Anna, multi-colored bangles">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="33" data-event-type="product-click">Quick view</a>
            </div>




        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">Anna</p>

            <h4 class="prod-name">
                <a href="../sample-anna-multi-colored-bangles/index.html" >[Sample] Anna, multi-colored bangles</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$59.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
            </div>

            <div class="rating">
                <div class="star-rating" data-test-info-type="productRating">
                    <div class="rating--small">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
<!-- snippet location product_rating -->
                    </div>
                </div>
            </div>

            <div class="buttons-wrapper">
                            <a href="../sample-anna-multi-colored-bangles/index.html" class="btn btn-primary btnATC" data-product-id="33" title="Choose Options" data-event-type="product-click"><span>Choose Options</span></a>

                <a href="../loginddfb.html?action=add&amp;product_id=33" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
    <div class="prod-item">
        <article class="card " >
    <figure class="card-figure">
        <div class="prod-image">
            <a href="../sample-anna-bright-single-bangles/index.html" >
                <img class="card-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-tphjucml/stencil/3cd4e730-d571-0139-7941-62e43660c985/e/38323d20-d594-0139-1e5d-3a208d481fb5/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/35/444/14-thickbox_default-compressor__75159.1505291311.jpg?c=2"
                data-src-swap="https://cdn11.bigcommerce.com/s-tphjucml/images/stencil/224x224/products/35/445/300.LOrealSkinExpertiseYouthCodeMoisturizer-compressor__84362.1505291310.jpg?c=2"
                alt="[Sample] Anna, bright single bangles" title="[Sample] Anna, bright single bangles">
            </a>
            <div class="actions">
                        <a href="#" class="btnQV quickview" data-product-id="35" data-event-type="product-click">Quick view</a>
            </div>




        </div>

        <figcaption class="prod-desc" >

            <p class="prod-brand" data-test-info-type="brandName">Anna</p>

            <h4 class="prod-name">
                <a href="../sample-anna-bright-single-bangles/index.html" >[Sample] Anna, bright single bangles</a>
            </h4>

            <div class="prod-price" data-test-info-type="price">
                                <div class="price-section price-section--withoutTax "  >
            <span data-product-price-without-tax class="price price--withoutTax">$29.00</span>
        </div>
            </div>

            <div class="prod-summary">
                <p>How to write product descriptions that sellOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet...</p>
            </div>

            <div class="rating">
                <div class="star-rating" data-test-info-type="productRating">
                    <div class="rating--small">
                                <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star color"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
<!-- snippet location product_rating -->
                    </div>
                </div>
            </div>

            <div class="buttons-wrapper">
                            <a href="../cart.html?action=add&amp;product_id=35" class="btn btn-primary btnATC themevale_btnATC" title="Add to Cart" data-product-id="35" data-event-type="product-click"><span>Add to Cart</span></a>

                <a href="../login8809.html?action=add&amp;product_id=35" class="btnWL" title="Add to Wish list"><i class="fa fa-heart"></i><span>Add to Wish list</span></a>

            </div>
        </figcaption>
    </figure>
</article>
    </div>
</section>
                </div>
            </div>
        </main>