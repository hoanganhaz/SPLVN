@extends('client.layouts.master')
@section('content')
       <!-- Section product -->
        <section class="flat-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tf-product-media-wrap sticky-top">
                            <div class="thumbs-slider">
                                <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom"
                                    data-direction="vertical">
                                    <div class="swiper-wrapper stagger-wrap">
                                        <div class="swiper-slide stagger-item" data-color="gray">
                                            <div class="item">
                                                <img class="lazyload" data-src="images/shop/product-1.jpg"
                                                    src="images/shop/product-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide stagger-item" data-color="grey">
                                            <div class="item">
                                                <img class="lazyload" data-src="images/shop/product-1.1.jpg"
                                                    src="images/shop/product-1.1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide stagger-item" data-color="beige">
                                            <div class="item">
                                                <img class="lazyload" data-src="images/shop/product-1.2.jpg"
                                                    src="images/shop/product-1.2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide stagger-item" data-color="beige">
                                            <div class="item">
                                                <img class="lazyload" data-src="images/shop/product-1.3.jpg"
                                                    src="images/shop/product-1.3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide stagger-item" data-color="beige">
                                            <div class="item">
                                                <img class="lazyload" data-src="images/shop/product-1.4.jpg"
                                                    src="images/shop/product-1.4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" data-color="gray">
                                            <a href="images/shop/product-1.jpg" target="_blank" class="item"
                                                data-pswp-width="600px" data-pswp-height="600px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="images/shop/product-1.jpg"
                                                    data-src="images/shop/product-1.jpg" src="images/shop/product-1.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="swiper-slide" data-color="grey">
                                            <a href="images/shop/product-1.1.jpg" target="_blank" class="item"
                                                data-pswp-width="600px" data-pswp-height="600px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="images/shop/product-1.1.jpg"
                                                    data-src="images/shop/product-1.1.jpg"
                                                    src="images/shop/product-1.1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="swiper-slide" data-color="beige">
                                            <a href="images/shop/product-1.2.jpg" target="_blank" class="item"
                                                data-pswp-width="600px" data-pswp-height="600px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="images/shop/product-1.2.jpg"
                                                    data-src="images/shop/product-1.2.jpg"
                                                    src="images/shop/product-1.2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="swiper-slide" data-color="beige">
                                            <a href="images/shop/product-1.3.jpg" target="_blank" class="item"
                                                data-pswp-width="600px" data-pswp-height="600px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="images/shop/product-1.3.jpg"
                                                    data-src="images/shop/product-1.3.jpg"
                                                    src="images/shop/product-1.3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="swiper-slide" data-color="beige">
                                            <a href="images/shop/product-1.4.jpg" target="_blank" class="item"
                                                data-pswp-width="600px" data-pswp-height="600px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="images/shop/product-1.4.jpg"
                                                    data-src="images/shop/product-1.4.jpg"
                                                    src="images/shop/product-1.4.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="sticky-top">
                            <div class="tf-product-info-wrap position-relative">
                                <div class="tf-zoom-main"></div>
                                <div class="tf-product-info-list other-image-zoom">
                                    <div class="tf-product-info-heading">
                                        <div class="tf-product-info-name">
                                            <h3 class="name">Ergonomic Chair Pro</h3>
                                            <div class="sub">
                                                <div class="tf-product-tag text-caption-1">
                                                    Best Seller
                                                </div>
                                                <div class="tf-product-info-rate">
                                                    <div class="list-star-default">
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                    </div>
                                                    <div class="text text-caption-1">(134 reviews)</div>
                                                </div>
                                                <div class="tf-product-info-sold">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.7076 9.80077L7.95759 19.1758C7.86487 19.2747 7.74247 19.3408 7.60888 19.3641C7.47528 19.3874 7.33773 19.3666 7.21699 19.3049C7.09625 19.2432 6.99886 19.1438 6.93953 19.0219C6.88019 18.8999 6.86213 18.762 6.88806 18.6289L8.03338 12.9L3.53103 11.2094C3.43434 11.1732 3.34811 11.1136 3.28005 11.036C3.21199 10.9584 3.16422 10.8651 3.14101 10.7645C3.11779 10.6639 3.11986 10.5591 3.14702 10.4595C3.17418 10.3599 3.22559 10.2686 3.29666 10.1937L12.0467 0.818744C12.1394 0.719788 12.2618 0.653675 12.3954 0.630383C12.529 0.60709 12.6665 0.627882 12.7873 0.68962C12.908 0.751359 13.0054 0.850694 13.0647 0.972636C13.1241 1.09458 13.1421 1.23251 13.1162 1.36562L11.9677 7.10077L16.4701 8.78906C16.5661 8.82547 16.6516 8.88496 16.7191 8.96228C16.7867 9.0396 16.8341 9.13236 16.8573 9.23237C16.8805 9.33237 16.8786 9.43655 16.852 9.53569C16.8253 9.63482 16.7747 9.72587 16.7045 9.80077H16.7076Z"
                                                            fill="#DC9056" />
                                                    </svg>

                                                    <div class="text text-caption-1">18 sold in last 32 hours</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tf-product-info-desc">
                                            <div class="tf-product-info-price">
                                                <h5 class="price-on-sale">$79.99</h5>
                                                <div class="compare-at-price">$98.99</div>
                                                <div class="badges-on-sale text-btn-uppercase">-25%
                                                </div>
                                            </div>
                                            <p>The garments labelled as Committed are products that have been
                                                produced using
                                                sustainable fibres or processes, reducing their environmental
                                                impact.</p>
                                            <div class="tf-product-info-liveview">
                                                <i class="icon icon-eye"></i>
                                                <p class="text-caption-1">
                                                    <span class="liveview-count">28</span>
                                                    people are viewing this right now
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-choose-option gap-19 ">
                                        <div class="variant-picker-item">
                                            <div class="variant-picker-label mb_12">
                                                Colors:<span class="text-title variant-picker-label-value value-currentColor">Gray</span>
                                            </div>
                                            <div class="variant-picker-values">
                                                <input id="values-beige" type="radio" name="color1">
                                                <label class="hover-tooltip tooltip-bot radius-60 color-btn" for="values-beige" data-value="Beige" data-color="beige">
                                                    <span class="btn-checkbox bg-color-beige1"></span>
                                                    <span class="tooltip">Beige</span>
                                                </label>
                                                <input id="values-gray" type="radio" name="color1" checked>
                                                <label class="hover-tooltip tooltip-bot radius-60 color-btn" data-price="79.99" for="values-gray" data-value="Gray" data-color="gray">
                                                    <span class="btn-checkbox bg-color-gray"></span>
                                                    <span class="tooltip">Gray</span>
                                                </label>
                                                <input id="values-grey" type="radio" name="color1">
                                                <label class="hover-tooltip tooltip-bot radius-60 color-btn" data-price="89.99" for="values-grey" data-value="Grey" data-color="grey">
                                                    <span class="btn-checkbox bg-color-grey"></span>
                                                    <span class="tooltip">Grey</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="variant-picker-item">
                                            <div class="d-flex justify-content-between mb_12">
                                                <div class="variant-picker-label">
                                                    Size:<span class="text-title variant-picker-label-value">Size c
                                                        -
                                                        Large</span>
                                                </div>
                                                <a class="size-guide text-title link show-size-guide">Find Your Size</a>
                                            </div>
                                            <div class="variant-picker-values gap12">
                                                <input type="radio" name="size2" id="values-s1">
                                                <label class="style-text size-btn" for="values-s1"
                                                    data-value="Size A - Small">
                                                    <span class="text-title">Size A - Small</span>
                                                </label>
                                                <input type="radio" name="size2" id="values-s2">
                                                <label class="style-text size-btn" for="values-s2" data-price="89.99"
                                                    data-value="Size B - Medium">
                                                    <span class="text-title">Size B - Medium</span>
                                                </label>
                                                <input type="radio" name="size2" id="values-s3">
                                                <label class="style-text size-btn" for="values-s3" data-price="99.99"
                                                    data-value="Size C - Large">
                                                    <span class="text-title">Size C - Large</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="tf-product-info-quantity">
                                            <div class="title mb_12">Quantity:</div>
                                            <div class="wg-quantity">
                                                <span class="btn-quantity btn-decrease">-</span>
                                                <input class="quantity-product" type="text" name="number" value="1">
                                                <span class="btn-quantity btn-increase">+</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="tf-product-info-by-btn mb_12">
                                                <a class="tf-btn btn-onsurface flex-grow-1   show-shopping-cart">
                                                    <span>Add to cart -&nbsp;</span>
                                                    <span class="tf-qty-price total-price">$79.99</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip compare  show-compare">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip text-caption-2">Compare</span>
                                                </a>
                                                <a href="javascript:void(0);"
                                                    class="box-icon hover-tooltip text-caption-2 wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip text-caption-2">Wishlist</span>
                                                </a>
                                            </div>
                                            <a href="#" class="tf-btn btn-primary w-full">Buy it now</a>
                                        </div>
                                        <div class="tf-product-info-help gap-12">
                                            <div class="wrap">
                                                <div class="dropdown dropdown-store-location">
                                                    <div class="dropdown-title dropdown-backdrop"
                                                        data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <div class="tf-product-info-view link">
                                                            <span>View Store Information</span>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <div class="dropdown-content">
                                                            <div class="dropdown-content-heading">
                                                                <h5>Store Location</h5>
                                                                <i class="icon icon-close"></i>
                                                            </div>
                                                            <div class="line-bt"></div>
                                                            <div>
                                                                <h6>Fashion GearO</h6>
                                                                <p>Pickup available. Usually ready in 24 hours</p>
                                                            </div>
                                                            <div>
                                                                <p>766 Rosalinda Forges Suite 044,</p>
                                                                <p>Gracielahaven, Oregon</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tf-product-info-time">
                                                <div class="icon">
                                                    <i class="icon-time"></i>
                                                </div>
                                                <p class="text-caption-1">Estimated Delivery:&nbsp;&nbsp;<span>12-26
                                                        days</span> (International), <span>3-6 days</span> (United
                                                    States)
                                                </p>
                                            </div>
                                            <div class="tf-product-info-return">
                                                <div class="icon">
                                                    <i class="icon-arrowclockwise"></i>
                                                </div>
                                                <p class="text-caption-1">Return within <span>45 days</span> of
                                                    purchase.
                                                    Duties &amp; taxes are non-refundable.</p>
                                            </div>
                                            <div class="tf-product-info-extra-link">
                                                <a href="#delivery_return" data-bs-toggle="modal"
                                                    class="tf-product-extra-icon">
                                                    <div class="icon">
                                                        <i class="icon-shipping"></i>
                                                    </div>
                                                    <p class="text-caption-1">Delivery &amp; Return</p>
                                                </a>
                                                <a href="#ask_question" data-bs-toggle="modal"
                                                    class="tf-product-extra-icon">
                                                    <div class="icon">
                                                        <i class="icon-question"></i>
                                                    </div>
                                                    <p class="text-caption-1">Ask A Question</p>
                                                </a>
                                                <a href="#share_social" data-bs-toggle="modal"
                                                    class="tf-product-extra-icon">
                                                    <div class="icon">
                                                        <i class="icon-share"></i>
                                                    </div>
                                                    <p class="text-caption-1">Share</p>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="tf-product-info-sku">
                                            <li>
                                                <p class="text-caption-1">SKU:</p>
                                                <p class="text-caption-1 text-1">4321234</p>
                                            </li>
                                            <li>
                                                <p class="text-caption-1">Vendor:</p>
                                                <p class="text-caption-1 text-1">GearO</p>
                                            </li>
                                            <li>
                                                <p class="text-caption-1">Available:</p>
                                                <p class="text-caption-1 text-1">Instock</p>
                                            </li>
                                            <li>
                                                <p class="text-caption-1">Categories:</p>
                                                <p class="text-caption-1"><a href="#" class="text-1 link">wood</a>,
                                                    <a href="#" class="text-1 link">chair</a>, <a href="#"
                                                        class="text-1 link">furniture</a>
                                                </p>
                                            </li>
                                        </ul>
                                        <div class="tf-product-info-guranteed">
                                            <div class="text-title">
                                                Guranteed safe checkout:
                                            </div>
                                            <div class="tf-payment d-flex">
                                                <a href="#">
                                                    <img src="images/payment/payment-1.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="images/payment/payment-2.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="images/payment/payment-3.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="images/payment/payment-4.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="images/payment/payment-5.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="images/payment/payment-6.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tf-sticky-btn-atc">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form class="form-sticky-atc">
                                <div class="tf-sticky-atc-product">
                                    <div class="image">
                                        <img class="lazyload" data-src="images/shop/product-1.jpg" alt="" src="images/shop/product-1.jpg">
                                    </div>
                                    <div class="content">
                                        <div class="text-title">
                                            Biker-style leggings
                                        </div>
                                        <div class="text-caption-1 text-secondary-2">Green, XS, Cotton</div>
                                        <div class="text-title">$68.00</div>
                                    </div>
                                </div>
                                <div class="tf-sticky-atc-infos">
                                    <div class="tf-sticky-atc-size d-flex gap-12 align-items-center">
                                        <div class="tf-sticky-atc-infos-title text-title">Size:</div>
                                        <div class="tf-dropdown-sort style-2" data-bs-toggle="dropdown">
                                            <div class="btn-select">
                                                <span class="text-sort-value font-2">M</span>
                                                <span class="icon icon-down"></span>
                                            </div>
                                            <div class="dropdown-menu">
                                                <div class="select-item">
                                                    <span class="text-value-item">S</span>
                                                </div>
                                                <div class="select-item active">
                                                    <span class="text-value-item">M</span>
                                                </div>
                                                <div class="select-item">
                                                    <span class="text-value-item">L</span>
                                                </div>
                                                <div class="select-item">
                                                    <span class="text-value-item">XL</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-sticky-atc-quantity d-flex gap-12 align-items-center">
                                        <div class="tf-sticky-atc-infos-title text-title">Quantity:</div>
                                        <div class="wg-quantity style-1">
                                            <span class="btn-quantity minus-btn">-</span>
                                            <input type="text" name="number" value="1">
                                            <span class="btn-quantity plus-btn">+</span>
                                        </div>
                                    </div>
                                    <div class="tf-sticky-atc-btns">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn btn-onsurface w-100 radius-4 btn-add-to-cart"><span class="text text-btn-uppercase">Add To Cart</span></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section product -->

        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="widget-tabs style-1">
                            <ul class="widget-menu-tab">
                                <li class="item-title active">
                                    <span class="inner">Description</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Customer Reviews</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Shipping & Returns</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Return Policies</span>
                                </li>
                            </ul>
                            <div class="widget-content-tab">
                                <div class="widget-content-inner active">
                                    <div class="tab-description">
                                        <div class="right">
                                            <h6 class=" mb_12">Product Features</h6>
                                            <p class="mb_8 text_secondary">Breathable suspension keeps you cool and
                                                comfortable.</p>
                                            <p class=" mb_8 text_secondary">Three chair sizes mean the most comfort to
                                                the largest range of users.</p>
                                            <p class="text_secondary">Adjustable PostureFit SL pads provide lumbar
                                                support and stabilize the base of the spine.</p>
                                        </div>
                                        <div class="left">
                                            <h6 class="mb_12">Dimensions and weights</h6>
                                            <ul class="">
                                                <li class="text-body-default mb_8">OVERALL: <span
                                                        class="text_secondary">64.5" w x 38.5"d x 35" h</span></li>
                                                <li class="text-body-default mb_8">INSIDESEATING: <span
                                                        class="text_secondary">50.5"wx22" w x 22" d x 19.5" h</span>
                                                </li>
                                                <li class="text-body-default mb_8">ARM: <span
                                                        class="text_secondary">7"wx38.5"dx22.5"h</span></li>
                                                <li class="text-body-default ">LEGS: <span
                                                        class="text_secondary">5.5"wx2"dx2"h</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-inner">
                                    <div class="tab-reviews  write-cancel-review-wrap">
                                        <div class="tab-reviews-heading">
                                            <div class="top">
                                                <div class="text-center">
                                                    <div class="number text-display">4.9</div>
                                                    <div class="list-star">
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                    </div>
                                                    <p>(168 Ratings)</p>
                                                </div>
                                                <div class="rating-score">
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">5</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: 94.67%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1">59</div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">4</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: 60%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1">46</div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">3</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: 0%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1">0</div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">2</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: 0%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1">0</div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">1</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: 0%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="tf-btn btn-white has-border radius-4 btn-comment-review btn-cancel-review">
                                                    Cancel Review</div>
                                                <div
                                                    class="tf-btn btn-white has-border radius-4 btn-comment-review btn-write-review">
                                                    Write a review</div>
                                            </div>
                                        </div>
                                        <div class="reply-comment style-1 cancel-review-wrap">
                                            <div
                                                class="d-flex mb_24 gap-20 align-items-center justify-content-between flex-wrap">
                                                <h4 class="">03 Comments</h4>
                                                <div class="d-flex align-items-center gap-12">
                                                    <div class="text-caption-1">Sort by:</div>
                                                    <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                                                        <div class="btn-select">
                                                            <span class="text-sort-value">Most Recent</span>
                                                            <span class="icon icon-down"></span>
                                                        </div>
                                                        <div class="dropdown-menu">
                                                            <div class="select-item active">
                                                                <span class="text-value-item">Most Recent</span>
                                                            </div>
                                                            <div class="select-item">
                                                                <span class="text-value-item">Oldest</span>
                                                            </div>
                                                            <div class="select-item">
                                                                <span class="text-value-item">Most Popular</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="reply-comment-wrap">
                                                <div class="reply-comment-item">
                                                    <div class="user">
                                                        <div class="image">
                                                            <img src="images/avatar/user-default.jpg" alt="">
                                                        </div>
                                                        <div>
                                                            <h6>
                                                                <a href="#" class="link">Superb quality apparel that
                                                                    exceeds expectations</a>
                                                            </h6>
                                                            <div class="day text-secondary-2 text-caption-1">1 days ago
                                                                &nbsp;&nbsp;&nbsp;-</div>
                                                        </div>
                                                    </div>
                                                    <p class="text-secondary">Great theme - we were looking for a theme
                                                        with lots of built in features and flexibility and this was
                                                        perfect. We expected to need to employ a developer to add a few
                                                        finishing touches. But we actually managed to do everything
                                                        ourselves. We did have one small query and the support given was
                                                        swift and helpful.</p>
                                                </div>
                                                <div class="reply-comment-item type-reply">
                                                    <div class="user">
                                                        <div class="image">
                                                            <img src="images/avatar/admin-default.jpg" alt="">
                                                        </div>
                                                        <div>
                                                            <h6>
                                                                <a href="#" class="link">Reply from GearO</a>
                                                            </h6>
                                                            <div class="day text-secondary-2 text-caption-1">1 days ago
                                                                &nbsp;&nbsp;&nbsp;-</div>
                                                        </div>
                                                    </div>
                                                    <p class="text-secondary">We love to hear it! Part of what we love
                                                        most about GearO is how much it empowers store owners like
                                                        yourself to build a beautiful website without having to hire a
                                                        developer :) Thank you for this fantastic review!</p>
                                                </div>
                                                <div class="reply-comment-item">
                                                    <div class="user">
                                                        <div class="image">
                                                            <img src="images/avatar/user-default.jpg" alt="">
                                                        </div>
                                                        <div>
                                                            <h6>
                                                                <a href="#" class="link">Superb quality apparel that
                                                                    exceeds expectations</a>
                                                            </h6>
                                                            <div class="day text-secondary-2 text-caption-1">1 days ago
                                                                &nbsp;&nbsp;&nbsp;-</div>
                                                        </div>
                                                    </div>
                                                    <p class="text-secondary">Great theme - we were looking for a theme
                                                        with lots of built in features and flexibility and this was
                                                        perfect. We expected to need to employ a developer to add a few
                                                        finishing touches. But we actually managed to do everything
                                                        ourselves. We did have one small query and the support given was
                                                        swift and helpful.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="form-write-review write-review-wrap">
                                            <div class="heading">
                                                <h4>Write a review:</h4>
                                                <div class="list-rating-check">
                                                    <input type="radio" id="star5" name="rate" value="5">
                                                    <label for="star5" title="text"></label>
                                                    <input type="radio" id="star4" name="rate" value="4">
                                                    <label for="star4" title="text"></label>
                                                    <input type="radio" id="star3" name="rate" value="3">
                                                    <label for="star3" title="text"></label>
                                                    <input type="radio" id="star2" name="rate" value="2">
                                                    <label for="star2" title="text"></label>
                                                    <input type="radio" id="star1" name="rate" value="1">
                                                    <label for="star1" title="text"></label>
                                                </div>
                                            </div>
                                            <div class="mb_32">
                                                <div class="mb_8">Review Title</div>
                                                <fieldset class="mb_20">
                                                    <input class="" type="text" placeholder="Give your review a title"
                                                        name="text" tabindex="2" value="" aria-required="true"
                                                        required="">
                                                </fieldset>
                                                <div class="mb_8">Review</div>
                                                <fieldset class="d-flex mb_20">
                                                    <textarea class="" rows="4" placeholder="Write your comment here"
                                                        tabindex="2" aria-required="true" required=""></textarea>
                                                </fieldset>
                                                <div class="cols mb_20">
                                                    <fieldset class="">
                                                        <input class="" type="text" placeholder="You Name (Public)"
                                                            name="text" tabindex="2" value="" aria-required="true"
                                                            required="">
                                                    </fieldset>
                                                    <fieldset class="">
                                                        <input class="" type="email" placeholder="Your email (private)"
                                                            name="email" tabindex="2" value="" aria-required="true"
                                                            required="">
                                                    </fieldset>
                                                </div>
                                                <div class="d-flex align-items-center check-save gap-12">
                                                    <input type="checkbox" name="availability" class="tf-check"
                                                        id="check1">
                                                    <label class="text-secondary text-caption-1" for="check1">Save my
                                                        name, email, and website in this browser for the next time I
                                                        comment.</label>
                                                </div>
                                            </div>
                                            <div class="button-submit">
                                                <button class="tf-btn btn-onsurface radius-4" type="submit">Submit
                                                    Reviews</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget-content-inner">
                                    <div class="tab-shipping">
                                        <div class="w-100">
                                            <h6 class="text-btn-uppercase mb_12">We've got your back</h6>
                                            <p class="mb_12">One delivery fee to most locations (check our Orders &
                                                Delivery page)</p>
                                            <p class="">Free returns within 14 days (excludes final sale and
                                                made-to-order items, face masks and certain products containing
                                                hazardous or flammable materials, such as fragrances and aerosols)</p>
                                        </div>
                                        <div class="w-100">
                                            <h6 class="text-btn-uppercase mb_12">Import duties information</h6>
                                            <p>Let us handle the legwork. Delivery duties are included in the item price
                                                when shipping to all EU countries (excluding the Canary Islands), plus
                                                The United Kingdom, USA, Canada, China Mainland, Australia, New Zealand,
                                                Puerto Rico, Switzerland, Singapore, Republic Of Korea, Kuwait, Mexico,
                                                Qatar, India, Norway, Saudi Arabia, Taiwan Region, Thailand, U.A.E.,
                                                Japan, Brazil, Isle of Man, San Marino, Colombia, Chile, Argentina,
                                                Egypt, Lebanon, Hong Kong SAR, Bahrain and Turkey. All import duties are
                                                included in your order – the price you see is the price you pay.</p>
                                        </div>
                                        <div class="w-100">
                                            <h6 class="text-btn-uppercase mb_12">Estimated delivery</h6>
                                            <p class="mb_6 font-2">Express: May 10 - May 17</p>
                                            <p class="font-2">Sending from USA</p>
                                        </div>
                                        <div class="w-100">
                                            <h6 class="text-btn-uppercase mb_12">Need more information?</h6>
                                            <div>
                                                <a href="#"
                                                    class="link text-secondary text-decoration-underline mb_6">Orders
                                                    & delivery</a>
                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="link text-secondary text-decoration-underline mb_6">Returns
                                                    & refunds</a>
                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="link text-secondary text-decoration-underline">Duties
                                                    & taxes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-inner">
                                    <div class="tab-policies">
                                        <h6 class=" mb_12">Return Policies</h6>
                                        <p class="mb_12 text_secondary">At GearO, we stand behind the quality of our
                                            products. If you're not completely satisfied with your purchase, we offer
                                            hassle-free returns within 30 days of delivery.</p>
                                        <h6 class=" mb_12">Easy Exchanges or Refunds</h6>
                                        <ul class="list-text type-disc mb_12 gap-6">
                                            <li class="text_secondary">Exchange your item for a different size, color,
                                                or style, or receive a full refund.</li>
                                            <li class="text_secondary">All returned items must be unworn, in their
                                                original packaging, and with tags attached.</li>
                                        </ul>
                                        <h6 class=" mb_12">Simple Process</h6>
                                        <ul class="list-text type-number">
                                            <li class="text_secondary">Initiate your return online or contact our
                                                customer service team for assistance.</li>
                                            <li class="text_secondary">Pack your item securely and include the original
                                                packing slip.</li>
                                            <li class="text_secondary">Ship your return back to us using our prepaid
                                                shipping label.</li>
                                            <li class="text_secondary">Once received, your refund will be processed
                                                promptly.</li>
                                        </ul>
                                        <p class="text_secondary">For any questions or concerns regarding returns, don't
                                            hesitate to reach out to our dedicated customer service team. Your
                                            satisfaction is our priority.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Products -->
        <section class="flat-spacing-7">
            <div class="container flat-animate-tab">
                <ul class="tab-product justify-content-center wow fadeInUp" data-wow-delay="0s" role="tablist">
                    <li class="nav-tab-item" role="presentation">
                        <a href="#relatedProducts" class="active h4" data-bs-toggle="tab">Related Products</a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#recentlyViewed" class="h4" data-bs-toggle="tab">Recently Viewed</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="relatedProducts" role="tabpanel">
                        <div dir="ltr" class="swiper tf-sw-latest" data-preview="4" data-tablet="3" data-mobile="2"
                            data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                            data-pagination-md="1" data-pagination-lg="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card-product style-1">
                                        <div class="card-product-wrapper">
                                            <a href="product-detail.html" class="image-wrap">
                                                <img class="lazyload img-product" data-src="images/shop/product-1.jpg"
                                                    src="images/shop/product-1.jpg" alt="image-product">
                                                <img class="lazyload img-hover" data-src="images/shop/product-1.1.jpg"
                                                    src="images/shop/product-1.1.jpg" alt="image-product">
                                            </a>
                                            <div class="list-product-btn">
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon compare ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                            <div class="list-btn-main">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                                    To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class="title link line-clamp-1">Ergonomic
                                                Chair Pro</a>
                                            <div class="price text-body-default "><span
                                                    class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                    <span class="swatch-value bg-light-blue"></span>
                                                    <img class="lazyload" data-src="images/shop/product-1.2.jpg"
                                                        src="images/shop/product-1.2.jpg" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                    <span class="swatch-value bg-light-blue-2"></span>
                                                    <img class="lazyload" data-src="images/shop/product-1.3.jpg"
                                                        src="images/shop/product-1.3.jpg" alt="image-product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product style-1">
                                        <div class="card-product-wrapper">
                                            <a href="product-detail.html" class="image-wrap">
                                                <img class="lazyload img-product" data-src="images/shop/product-2.jpg"
                                                    src="images/shop/product-2.jpg" alt="image-product">
                                                <img class="lazyload img-hover" data-src="images/shop/product-2.1.jpg"
                                                    src="images/shop/product-2.1.jpg" alt="image-product">
                                            </a>
                                            <div class="on-sale-wrap"><span class="on-sale-item">-25%</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="wish-list.html" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon compare ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                            <div class="list-btn-main">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                                    To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class="title link line-clamp-1">Open Box -
                                                Adjustable Laptop Stand</a>
                                            <div class="price text-body-default "><span
                                                    class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                    <span class="swatch-value bg-light-blue"></span>
                                                    <img class="lazyload" data-src="images/shop/product-2.jpg"
                                                        src="images/shop/product-2.jpg" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                    <span class="swatch-value bg-light-blue-2"></span>
                                                    <img class="lazyload" data-src="images/shop/product-2.2.jpg"
                                                        src="images/shop/product-2.2.jpg" alt="image-product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product style-1">
                                        <div class="card-product-wrapper">
                                            <a href="product-detail.html" class="image-wrap">
                                                <img class="lazyload img-product" data-src="images/shop/product-3.jpg"
                                                    src="images/shop/product-3.jpg" alt="image-product">
                                                <img class="lazyload img-hover" data-src="images/shop/product-3.1.jpg"
                                                    src="images/shop/product-3.1.jpg" alt="image-product">
                                            </a>
                                            <div class="on-sale-wrap"><span class="on-sale-item">-25%</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon compare ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                            <div class="list-btn-main">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                                    To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class="title link line-clamp-1">Laptop
                                                Stand</a>
                                            <div class="price text-body-default "><span
                                                    class="text-caption-1 old-price">$98.00</span>$89.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Orange</span>
                                                    <span class="swatch-value bg-light-orange"></span>
                                                    <img class="lazyload" data-src="images/shop/product-3.2.jpg"
                                                        src="images/shop/product-3.2.jpg" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light Grey</span>
                                                    <span class="swatch-value bg-light-grey"></span>
                                                    <img class="lazyload" data-src="images/shop/product-3.3.jpg"
                                                        src="images/shop/product-3.3.jpg" alt="image-product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product style-1">
                                        <div class="card-product-wrapper">
                                            <a href="product-detail.html" class="image-wrap">
                                                <img class="lazyload img-product" data-src="images/shop/product-4.jpg"
                                                    src="images/shop/product-4.jpg" alt="image-product">
                                                <img class="lazyload img-hover" data-src="images/shop/product-4.1.jpg"
                                                    src="images/shop/product-4.1.jpg" alt="image-product">
                                            </a>
                                            <div class="list-product-btn">
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon compare ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                            <div class="list-btn-main">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                                    To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class="title link line-clamp-1">Double
                                                Standing Desk</a>
                                            <div class="price text-body-default ">$69.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light Brown</span>
                                                    <span class="swatch-value bg-light-brown"></span>
                                                    <img class="lazyload" data-src="images/shop/product-4.2.jpg"
                                                        src="images/shop/product-4.2.jpg" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light Bink</span>
                                                    <span class="swatch-value bg-light-pink"></span>
                                                    <img class="lazyload" data-src="images/shop/product-4.3.jpg"
                                                        src="images/shop/product-4.3.jpg" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light Grey</span>
                                                    <span class="swatch-value bg-dark-grey-2"></span>
                                                    <img class="lazyload" data-src="images/shop/product-4.4.jpg"
                                                        src="images/shop/product-4.4.jpg" alt="image-product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-latest sw-dots type-circle justify-content-center"></div>
                        </div>
                    </div>
                    <div class="tab-pane" id="recentlyViewed" role="tabpanel">
                        <div dir="ltr" class="swiper tf-sw-recent" data-preview="4" data-tablet="3" data-mobile="2"
                            data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                            data-pagination-md="1" data-pagination-lg="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card-product style-1">
                                        <div class="card-product-wrapper">
                                            <a href="product-detail.html" class="image-wrap">
                                                <img class="lazyload img-product" data-src="images/shop/product-5.jpg"
                                                    src="images/shop/product-5.jpg" alt="image-product">
                                                <img class="lazyload img-hover" data-src="images/shop/product-5.1.jpg"
                                                    src="images/shop/product-5.1.jpg" alt="image-product">
                                            </a>
                                            <div class="on-sale-wrap"><span class="on-sale-item">-25%</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon compare ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                            <div class="list-btn-main">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                                    To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class="title link line-clamp-1">Wireless
                                                Charging Dock</a>
                                            <div class="price text-body-default "><span
                                                    class="text-caption-1 old-price">$98.00</span>$89.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light
                                                        Orange</span>
                                                    <span class="swatch-value bg-light-orange"></span>
                                                    <img class="lazyload" data-src="images/shop/product-5.2.jpg"
                                                        src="images/shop/product-5.2.jpg" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light Grey</span>
                                                    <span class="swatch-value bg-light-grey"></span>
                                                    <img class="lazyload" data-src="images/shop/product-5.3.jpg"
                                                        src="images/shop/product-5.3.jpg" alt="image-product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product style-1">
                                        <div class="card-product-wrapper">
                                            <a href="product-detail.html" class="image-wrap">
                                                <img class="lazyload img-product" data-src="images/shop/product-6.jpg"
                                                    src="images/shop/product-6.jpg" alt="image-product">
                                                <img class="lazyload img-hover" data-src="images/shop/product-6.1.jpg"
                                                    src="images/shop/product-6.1.jpg" alt="image-product">
                                            </a>
                                            <div class="list-product-btn">
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon compare ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                            <div class="list-btn-main">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                                    To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class="title link line-clamp-1">Ergonomic
                                                Headrest</a>
                                            <div class="price text-body-default "><span
                                                    class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                    <span class="swatch-value bg-light-blue"></span>
                                                    <img class="lazyload" data-src="images/shop/product-6.jpg"
                                                        src="images/shop/product-6.jpg" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                    <span class="swatch-value bg-light-blue-2"></span>
                                                    <img class="lazyload" data-src="images/shop/product-6.2.jpg"
                                                        src="images/shop/product-6.2.jpg" alt="image-product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product style-1">
                                        <div class="card-product-wrapper">
                                            <a href="product-detail.html" class="image-wrap">
                                                <img class="lazyload img-product" data-src="images/shop/product-7.jpg"
                                                    src="images/shop/product-7.jpg" alt="image-product">
                                                <img class="lazyload img-hover" data-src="images/shop/product-7.1.jpg"
                                                    src="images/shop/product-7.1.jpg" alt="image-product">
                                            </a>
                                            <div class="on-sale-wrap"><span class="on-sale-item">-25%</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon compare ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                            <div class="list-btn-main">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                                    To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class="title link line-clamp-1">Hybrid Laptop
                                                Sleeve</a>
                                            <div class="price text-body-default "><span
                                                    class="text-caption-1 old-price">$98.00</span>$79.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                    <span class="swatch-value bg-light-blue"></span>
                                                    <img class="lazyload" data-src="images/shop/product-7.2.jpg"
                                                        src="images/shop/product-7.2.jpg" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                    <span class="swatch-value bg-light-blue-2"></span>
                                                    <img class="lazyload" data-src="images/shop/product-7.3.jpg"
                                                        src="images/shop/product-7.3.jpg" alt="image-product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-product style-1">
                                        <div class="card-product-wrapper">
                                            <a href="product-detail.html" class="image-wrap">
                                                <img class="lazyload img-product" data-src="images/shop/product-8.jpg"
                                                    src="images/shop/product-8.jpg" alt="image-product">
                                                <img class="lazyload img-hover" data-src="images/shop/product-8.1.jpg"
                                                    src="images/shop/product-8.1.jpg" alt="image-product">
                                            </a>
                                            <div class="list-product-btn">
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon compare ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                            <div class="list-btn-main">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                                    To
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="card-product-info ">
                                            <a href="product-detail.html" class="title link line-clamp-1">Wireless
                                                Charging Tray</a>
                                            <div class="price text-body-default ">$69.99</div>
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light Brown</span>
                                                    <span class="swatch-value bg-light-brown"></span>
                                                    <img class="lazyload" data-src="images/shop/product-8.2.jpg"
                                                        src="images/shop/product-8.2.jpg" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light Bink</span>
                                                    <span class="swatch-value bg-light-pink"></span>
                                                    <img class="lazyload" data-src="images/shop/product-8.3.jpg"
                                                        src="images/shop/product-8.3.jpg" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light Grey</span>
                                                    <span class="swatch-value bg-dark-grey-2"></span>
                                                    <img class="lazyload" data-src="images/shop/product-8.4.jpg"
                                                        src="images/shop/product-8.4.jpg" alt="image-product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-recent sw-dots type-circle justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Related Products -->


@endsection
