@extends('client.layouts.master')
@section('content')
     <!-- .page-title -->
        <div class="page-title relative">
            <div class="paralaximg" data-parallax="scroll" data-image-src="images/page-title/page-title-9.jpg">
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="title">Shop</h3>
                            <ul class="breadcrumb">
                                <li><a href="index-2.html">Homepage</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.page-title -->

        <!-- Section product -->
        <section class="flat-spacing">
            <div class="container">
                <div class="tf-shop-control">
                    <div class="tf-control-filter">
                        <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="filterShop"
                            class="tf-btn-filter"><span class="icon icon-filter"></span><span
                                class="text">Filters</span></a>
                        <div class="d-none d-lg-flex shop-sale-text">
                            <i class="icon icon-checkcircle"></i>
                            <p class="text-caption-1">Shop sale items only</p>
                        </div>
                    </div>
                    <ul class="tf-control-layout">
                        <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                            <div class="item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818" />
                                    <rect x="7.5" y="3.5" width="12" height="5" rx="2.5" stroke="#181818" />
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818" />
                                    <rect x="7.5" y="11.5" width="12" height="5" rx="2.5" stroke="#181818" />
                                </svg>
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                            <div class="item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="14" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="6" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="14" cy="14" r="2.5" stroke="#181818" />
                                </svg>
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-3" data-value-layout="tf-col-3">
                            <div class="item">
                                <svg class="icon" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818" />
                                </svg>
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-4 active" data-value-layout="tf-col-4">
                            <div class="item">
                                <svg class="icon" width="30" height="20" viewBox="0 0 30 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="27" cy="6" r="2.5" stroke="#181818" />
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818" />
                                    <circle cx="27" cy="14" r="2.5" stroke="#181818" />
                                </svg>
                            </div>
                        </li>
                    </ul>
                    <div class="tf-control-sorting">
                        <p class="d-none d-lg-block text-caption-1">Sort by:</p>
                        <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                            <div class="btn-select">
                                <span class="text-sort-value">Best Selling</span>
                                <span class="icon icon-down"></span>
                            </div>
                            <div class="dropdown-menu">
                                <div class="select-item" data-sort-value="best-selling">
                                    <span class="text-value-item">Best selling</span>
                                </div>
                                <div class="select-item" data-sort-value="a-z">
                                    <span class="text-value-item">Alphabetically, A-Z</span>
                                </div>
                                <div class="select-item" data-sort-value="z-a">
                                    <span class="text-value-item">Alphabetically, Z-A</span>
                                </div>
                                <div class="select-item" data-sort-value="price-low-high">
                                    <span class="text-value-item">Price, low to high</span>
                                </div>
                                <div class="select-item" data-sort-value="price-high-low">
                                    <span class="text-value-item">Price, high to low</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-control-shop">
                    <div class="meta-filter-shop">
                        <div id="product-count-grid" class="count-text"></div>
                        <div id="product-count-list" class="count-text"></div>
                        <div id="applied-filters"></div>
                        <button id="remove-all" class="remove-all-filters text-btn-uppercase"
                            style="display: none;">REMOVE ALL <i class="icon icon-close"></i></button>
                    </div>
                    <div class="tf-list-layout wrapper-shop" id="listLayout">
                        <!-- card product list 1 -->
                        <div class="card-product style-list" data-availability="Out of stock" data-brand="adidas">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product" data-src="images/shop/product-1.jpg"
                                        src="images/shop/product-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/shop/product-1.1.jpg"
                                        src="images/shop/product-1.1.jpg" alt="image-product">
                                </a>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="text-title title link">Ergonomic Chair Pro</a>
                                <div class="price text-button">
                                    <span class="old-price">$98.00</span>
                                    <span class="current-price">$219.99</span>
                                </div>
                                <p class="description text_secondary text-body-default">Grounded in principles of
                                    simplicity and craftsmanship, Seoul’s clean lines and understated elegance pay
                                    homage to the timeless design traditions that have defined Danish design for
                                    generations.</p>
                                <div class="variant-wrap-list">
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="d-none text-capitalize color-filter">Light Brown</span>
                                            <span class="swatch-value bg-light-brown"></span>
                                            <img class="lazyload" data-src="images/shop/product-1.jpg"
                                                src="images/shop/product-1.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Light Bink</span>
                                            <span class="swatch-value bg-light-pink"></span>
                                            <img class="lazyload" data-src="images/shop/product-1.2.jpg"
                                                src="images/shop/product-2.1.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Light Grey</span>
                                            <span class="swatch-value bg-dark-grey-2"></span>
                                            <img class="lazyload" data-src="images/shop/product-1.3.jpg"
                                                src="images/shop/product-1.3.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                    <div class="list-product-btn">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
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
                                </div>
                            </div>
                        </div>
                        <!-- card product list 2 -->
                        <div class="card-product style-list" data-availability="Out of stock" data-brand="LV">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product" data-src="images/shop/product-7.jpg"
                                        src="images/shop/product-7.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/shop/product-7.1.jpg"
                                        src="images/shop/product-7.1.jpg" alt="image-product">
                                </a>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="text-title title link">Hybrid Laptop Sleeve</a>
                                <div class="price text-button"><span class="current-price">$59.99</span></div>
                                <p class="description text_secondary text-body-default">Grounded in principles of
                                    simplicity and craftsmanship, Seoul’s clean lines and understated elegance pay
                                    homage to the timeless design traditions that have defined Danish design for
                                    generations.</p>
                                <div class="variant-wrap-list">
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="d-none text-capitalize color-filter">Light Brown</span>
                                            <span class="swatch-value bg-light-brown"></span>
                                            <img class="lazyload" data-src="images/shop/product-7.jpg"
                                                src="images/shop/product-7.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Light Bink</span>
                                            <span class="swatch-value bg-light-pink"></span>
                                            <img class="lazyload" data-src="images/shop/product-7.2.jpg"
                                                src="images/shop/product-7.2.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Light Grey</span>
                                            <span class="swatch-value bg-dark-grey-2"></span>
                                            <img class="lazyload" data-src="images/shop/product-7.3.jpg"
                                                src="images/shop/product-7.3.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                    <div class="list-product-btn">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
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
                                </div>
                            </div>
                        </div>
                        <!-- card product list 3 -->
                        <div class="card-product style-list" data-availability="In stock" data-brand="nike">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product" data-src="images/shop/product-8.jpg"
                                        src="images/shop/product-8.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/shop/product-8.1.jpg"
                                        src="images/shop/product-8.1.jpg" alt="image-product">
                                </a>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="text-title title link">Wireless Charging Tray</a>
                                <div class="price text-button"><span class="current-price">$69.99</span></div>
                                <p class="description text_secondary text-body-default">Grounded in principles of
                                    simplicity and craftsmanship, Seoul’s clean lines and understated elegance pay
                                    homage to the timeless design traditions that have defined Danish design for
                                    generations.</p>
                                <div class="variant-wrap-list">
                                    <div class="wrap">
                                        <ul class="list-color-product mb_16">
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
                                        <div class="size-box list-product-btn">
                                            <span class="size-item box-icon">S</span>
                                            <span class="size-item box-icon">M</span>
                                            <span class="size-item box-icon">L</span>
                                            <span class="size-item box-icon">XL</span>
                                            <span class="size-item box-icon disable">XXL</span>
                                        </div>
                                    </div>
                                    <div class="list-product-btn">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
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
                                </div>
                            </div>
                        </div>
                        <!-- card product list 4 -->
                        <div class="card-product style-list" data-availability="In stock" data-brand="gucci">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product" data-src="images/shop/product-10.jpg"
                                        src="images/shop/product-10.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/shop/product-10.1.jpg"
                                        src="images/shop/product-10.1.jpg" alt="image-product">
                                </a>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="text-title title link">Double Standing Desk</a>
                                <div class="price text-button"><span class="current-price">$59.99</span></div>
                                <p class="description text_secondary text-body-default">Grounded in principles of
                                    simplicity and craftsmanship, Seoul’s clean lines and understated elegance pay
                                    homage to the timeless design traditions that have defined Danish design for
                                    generations.</p>
                                <div class="variant-wrap-list">
                                    <ul class="list-color-product">
                                        <li class="list-color-item color-swatch active">
                                            <span class="d-none text-capitalize color-filter">Light Brown</span>
                                            <span class="swatch-value bg-light-brown"></span>
                                            <img class="lazyload" data-src="images/shop/product-10.jpg"
                                                src="images/shop/product-10.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Light Bink</span>
                                            <span class="swatch-value bg-light-pink"></span>
                                            <img class="lazyload" data-src="images/shop/product-10.2.jpg"
                                                src="images/shop/product-10.2.jpg" alt="image-product">
                                        </li>
                                        <li class="list-color-item color-swatch">
                                            <span class="d-none text-capitalize color-filter">Light Grey</span>
                                            <span class="swatch-value bg-dark-grey-2"></span>
                                            <img class="lazyload" data-src="images/shop/product-10.3.jpg"
                                                src="images/shop/product-10.3.jpg" alt="image-product">
                                        </li>
                                    </ul>
                                    <div class="list-product-btn">
                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To
                                            cart</a>
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
                                </div>
                            </div>
                        </div>

                        <!-- pagination -->
                        <ul class="wg-pagination">
                            <li><a href="#" class="pagination-item text-button">1</a></li>
                            <li class="active">
                                <div class="pagination-item text-button">2</div>
                            </li>
                            <li><a href="#" class="pagination-item text-button">3</a></li>
                            <li><a href="#" class="pagination-item text-button"><i class="icon-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="tf-grid-layout wrapper-shop tf-col-4" id="gridLayout">
                        <!-- card product 1 -->
                        <div class="card-product style-2 grid" data-availability="Out of stock" data-brand="adidas">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product" data-src="images/shop/product-1.jpg"
                                        src="images/shop/product-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/shop/product-1.1.jpg"
                                        src="images/shop/product-1.1.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="#shoppingCart" data-bs-toggle="modal" aria-controls="shoppingCart"
                                        class="box-icon cart ">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add To Cart</span>
                                    </a>
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

                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Ergonomic Chair Pro</a>
                                <div class="price text-body-default ">
                                    <span class="text-caption-1 old-price">$98.00</span>
                                    <span class="current-price">$79.99</span>
                                </div>
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
                        <!-- card product 2 -->
                        <div class="card-product style-2 grid" data-availability="In stock" data-brand="nike">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" aria-controls="shoppingCart"
                                        class="box-icon cart ">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add To Cart</span>
                                    </a>
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

                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Open Box - Adjustable Laptop Stand</a>
                                <div class="price text-body-default ">
                                    <span class="text-caption-1 old-price">$98.00</span>
                                    <span class="current-price">$69.99</span>
                                </div>
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
                        <!-- card product 3 -->
                        <div class="card-product style-2 grid" data-availability="In stock" data-brand="LV">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" aria-controls="shoppingCart"
                                        class="box-icon cart ">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add To Cart</span>
                                    </a>
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

                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Laptop Stand</a>
                                <div class="price text-body-default ">
                                    <span class="text-caption-1 old-price">$98.00</span>
                                    <span class="current-price">$69.99</span>
                                </div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Orange</span>
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
                        <!-- card product 4 -->
                        <div class="card-product style-2 grid" data-availability="Out of stock" data-brand="gucci">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product" data-src="images/shop/product-4.jpg"
                                        src="images/shop/product-4.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/shop/product-4.1.jpg"
                                        src="images/shop/product-4.1.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="#shoppingCart" data-bs-toggle="modal" aria-controls="shoppingCart"
                                        class="box-icon cart ">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add To Cart</span>
                                    </a>
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

                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Double Standing Desk</a>
                                <div class="price text-body-default ">
                                    <span class="text-caption-1 old-price">$98.00</span>
                                    <span class="current-price">$79.99</span>
                                </div>
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
                        <!-- card product 5 -->
                        <div class="card-product style-2 grid" data-availability="Out of stock" data-brand="hermes">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" aria-controls="shoppingCart"
                                        class="box-icon cart ">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add To Cart</span>
                                    </a>
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

                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Wireless Charging Dock</a>
                                <div class="price text-body-default ">
                                    <span class="text-caption-1 old-price">$98.00</span>
                                    <span class="current-price">$79.99</span>
                                </div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Orange</span>
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
                        <!-- card product 6 -->
                        <div class="card-product style-2 grid" data-availability="In stock" data-brand="zalando">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product" data-src="images/shop/product-6.jpg"
                                        src="images/shop/product-6.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/shop/product-6.1.jpg"
                                        src="images/shop/product-6.1.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="#shoppingCart" data-bs-toggle="modal" aria-controls="shoppingCart"
                                        class="box-icon cart ">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add To Cart</span>
                                    </a>
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

                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Ergonomic Headrest</a>
                                <div class="price text-body-default ">
                                    <span class="text-caption-1 old-price">$98.00</span>
                                    <span class="current-price">$79.99</span>
                                </div>
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
                        <!-- card product 7 -->
                        <div class="card-product style-2 grid" data-availability="In stock" data-brand="nike">
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
                                    <a href="#shoppingCart" data-bs-toggle="modal" aria-controls="shoppingCart"
                                        class="box-icon cart ">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add To Cart</span>
                                    </a>
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

                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Hybrid Laptop Sleeve</a>
                                <div class="price text-body-default ">
                                    <span class="text-caption-1 old-price">$98.00</span>
                                    <span class="current-price">$69.99</span>
                                </div>
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
                        <!-- card product 8 -->
                        <div class="card-product style-2 grid" data-availability="In stock" data-brand="LV">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product" data-src="images/shop/product-8.jpg"
                                        src="images/shop/product-8.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/shop/product-8.1.jpg"
                                        src="images/shop/product-8.1.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="#shoppingCart" data-bs-toggle="modal" aria-controls="shoppingCart"
                                        class="box-icon cart ">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add To Cart</span>
                                    </a>
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

                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Wireless Charging Tray</a>
                                <div class="price text-body-default ">
                                    <span class="text-caption-1 old-price">$98.00</span>
                                    <span class="current-price">$79.99</span>
                                </div>
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
                        <!-- card product 9 -->
                        <div class="card-product style-2 grid" data-availability="In stock" data-brand="hermes">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product" data-src="images/shop/product-9.jpg"
                                        src="images/shop/product-9.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/shop/product-9.1.jpg"
                                        src="images/shop/product-9.1.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="#shoppingCart" data-bs-toggle="modal" aria-controls="shoppingCart"
                                        class="box-icon cart ">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add To Cart</span>
                                    </a>
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

                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Softside Chair</a>
                                <div class="price text-body-default ">
                                    <span class="text-caption-1 old-price">$98.00</span>
                                    <span class="current-price">$79.99</span>
                                </div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload" data-src="images/shop/product-9.2.jpg"
                                            src="images/shop/product-9.2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload" data-src="images/shop/product-9.3.jpg"
                                            src="images/shop/product-9.3.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 10 -->
                        <div class="card-product style-2 grid" data-availability="In stock" data-brand="gucci">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product" data-src="images/shop/product-10.jpg"
                                        src="images/shop/product-10.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/shop/product-10.1.jpg"
                                        src="images/shop/product-10.1.jpg" alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#shoppingCart" data-bs-toggle="modal" aria-controls="shoppingCart"
                                        class="box-icon cart ">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add To Cart</span>
                                    </a>
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

                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Double Standing Desk</a>
                                <div class="price text-body-default ">
                                    <span class="text-caption-1 old-price">$98.00</span>
                                    <span class="current-price">$79.99</span>
                                </div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue"></span>
                                        <img class="lazyload" data-src="images/shop/product-10.2.jpg"
                                            src="images/shop/product-10.2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Blue</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload" data-src="images/shop/product-10.3.jpg"
                                            src="images/shop/product-10.3.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 11 -->
                        <div class="card-product style-2 grid" data-availability="In stock" data-brand="zalando">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product" data-src="images/shop/product-11.jpg"
                                        src="images/shop/product-11.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/shop/product-11.1.jpg"
                                        src="images/shop/product-11.1.jpg" alt="image-product">
                                </a>
                                <div class="on-sale-wrap"><span class="on-sale-item">-25%</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#shoppingCart" data-bs-toggle="modal" aria-controls="shoppingCart"
                                        class="box-icon cart ">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add To Cart</span>
                                    </a>
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

                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Duo Standing Desk</a>
                                <div class="price text-body-default ">
                                    <span class="text-caption-1 old-price">$98.00</span>
                                    <span class="current-price">$69.99</span>
                                </div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Orange</span>
                                        <span class="swatch-value bg-light-orange"></span>
                                        <img class="lazyload" data-src="images/shop/product-11.2.jpg"
                                            src="images/shop/product-11.2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-light-grey"></span>
                                        <img class="lazyload" data-src="images/shop/product-11.3.jpg"
                                            src="images/shop/product-11.3.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 12 -->
                        <div class="card-product style-2 grid" data-availability="In stock" data-brand="adidas">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="image-wrap">
                                    <img class="lazyload img-product" data-src="images/shop/product-12.jpg"
                                        src="images/shop/product-12.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/shop/product-12.1.jpg"
                                        src="images/shop/product-12.1.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="#shoppingCart" data-bs-toggle="modal" aria-controls="shoppingCart"
                                        class="box-icon cart ">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add To Cart</span>
                                    </a>
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

                            </div>
                            <div class="card-product-info ">
                                <a href="product-detail.html" class="title link">Alumina Lamp</a>
                                <div class="price text-body-default ">
                                    <span class="text-caption-1 old-price">$98.00</span>
                                    <span class="current-price">$79.99</span>
                                </div>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="d-none text-capitalize color-filter">Light Brown</span>
                                        <span class="swatch-value bg-light-brown"></span>
                                        <img class="lazyload" data-src="images/shop/product-12.2.jpg"
                                            src="images/shop/product-12.2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Bink</span>
                                        <span class="swatch-value bg-light-pink"></span>
                                        <img class="lazyload" data-src="images/shop/product-12.3.jpg"
                                            src="images/shop/product-12.3.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="d-none text-capitalize color-filter">Light Grey</span>
                                        <span class="swatch-value bg-dark-grey-2"></span>
                                        <img class="lazyload" data-src="images/shop/product-12.4.jpg"
                                            src="images/shop/product-12.4.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- pagination -->
                        <ul class="wg-pagination justify-content-center">
                            <li><a href="#" class="pagination-item text-button">1</a></li>
                            <li class="active">
                                <div class="pagination-item text-button">2</div>
                            </li>
                            <li><a href="#" class="pagination-item text-button">3</a></li>
                            <li><a href="#" class="pagination-item text-button"><i class="icon-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section product -->
@endsection
