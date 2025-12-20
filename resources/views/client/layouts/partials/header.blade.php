    <style>
        .logo-header .logo {
    max-height: 65px;      /* chuẩn đẹp cho desktop */
    width: auto;
    object-fit: contain;
    
}
.logo-header {
    background: #fff;
    padding: 6px 14px;
    border-radius: 8px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}
.logo-header {
    transition: all 0.3s ease;
}

.logo-header:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
}
.header-default .wrapper-header {
    align-items: center;
}
@media (max-width: 991px) {
    .logo-header {
        padding: 4px 10px;
    }

    .logo-header .logo {
        max-height: 45px;
    }
}
    </style>
    <div class="tf-topbar">
            <div class="container-full">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="topbar-left d-none d-xl-flex">
                            <div class="tf-languages">
                                <p class="text-caption-1 text_white">
                                          Hotline: 0986512929
                                            
                                        </p>
                            </div>
                            <div class="tf-currencies">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="wrapper-slider-topbar">
                            <div class="swiper tf-sw-top_bar" data-preview="1" data-space="0" data-loop="true"
                                data-speed="2000" data-auto-play="true" data-delay="2000">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <p class="text-caption-1 text_white">
                                          Đẳng cấp tạo lên sự khác biệt
                                            </p>
                                    </div>
                                    <div class="swiper-slide">
                                        <p class="text-caption-1 text_white">
                                            Miễn Phí Vận Chuyển Toàn Quốc
                                            <span class="text_primary"></span>
                                        </p>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <div class="navigation-topbar nav-next-topbar"><span class="icon icon-left"></span></div>
                            <div class="navigation-topbar nav-prev-topbar"><span class="icon icon-right"></span></div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="topbar-right justify-content-end d-none d-xl-flex">
                            <a href="{{ route('client.about') }}" class="text_white text-caption-1 link">Giới Thiệu</a>
                            <a href="{{ route('client.contact') }}" class="text_white text-caption-1 link">Liên Hệ</a>
                            <a href="store-list.html" class="text_white text-caption-1 link">Sản Phẩm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /topbar -->

        <!-- Header -->
        <header id="header" class="header-default">
            <div class="main-header">
                <div class="container-full">
                    <div class="row wrapper-header align-items-center">
                        <div class="col-xl-5 d-none d-xl-block">
                            <nav class="box-navigation text-center">
                                <ul class="box-nav-ul justify-content-start">
                                  
                                    <a href="/" class="item-link">Trang Chủ</a>
                                    <a href="{{ route('client.product') }}" class="item-link">Sản Phẩm </a>
                                        <a href="{{ route('client.about') }}" class="item-link">Giới Thiệu </a>
                                          <a href="{{ route('client.post') }}" class="item-link">Bài Viết </a>
                                        
                                 
                                    <li class="menu-item position-relative">
                                        <a href="#" class="item-link">Chính Sách <i class="icon icon-down"></i></a>
                                        <div class="sub-menu submenu-default">
                                            <ul class="menu-list">
                                               
                                                <li><a href="faqs.html" class="menu-link-text">Chính Sách Bảo Mật </a></li>
                                                <li><a href="store-list.html" class="menu-link-text">Đổi Trả & Hoàn Tiền</a></li>
                                                <li><a href="term-of-use.html" class="menu-link-text">Điều Khoản & Điều Kiện</a></li>
                                              
                                            </ul>
                                        </div>
                                    </li>
                                
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-4 col-2 d-xl-none">
                            <a href="#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas"
                                aria-controls="mobileMenu">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                                    <path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-8 text-center">
                            <a href="index-2.html" class="logo-header">
                                <img src="{{ asset('assets/client/images/logo/logoH.jpg') }}" alt="logo" class="logo">
                            </a>
                        </div>
                        <div class="col-xl-5 col-md-4 col-2">
                            <ul class="nav-icon">
                                <li class="nav-search">
                                    <a href="#search" data-bs-toggle="modal" class="nav-icon-item">
                                        <span class="icon icon-search"></span>
                                    </a>
                                </li>
                                <li class="nav-account">
                                    <a href="login.html" class="nav-icon-item">
                                        <span class="icon icon-user"></span>
                                    </a>
                                </li>
                                <li class="nav-wishlist">
                                    <a href="wish-list.html" class="nav-icon-item">
                                        <span class="icon icon-heart"></span>
                                    </a>
                                </li>
                                <li class="nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item">
                                    <span class="icon icon-cart"></span>
                                    <span class="count-box text-button-small">1</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /Header -->

        <!-- .silideshow  -->
        <div class="tf-slideshow style-2 slider-effect-fade slider-home2">
            <div dir="ltr" class="swiper slider-home2-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="thumbs-item">
                            <div class="image">
                                <img class="lazyload" data-src="{{ asset('assets/client/images/banner/1.png') }}" src="{{ asset('assets/client/images/banner/1.png') }}" alt="">
                            </div>
                            <div class="content">
                                <a href="product-detail.html" class="text-title title text_white">Ergonomic Chair Pro</a>
                                <div class="text-button text_white">$69.99</div>
                                <a href="#quickView" data-bs-toggle="modal" class="text-button-small link text_white text-decoration">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbs-item">
                            <div class="image">
                                <img class="lazyload" data-src="assets/client/images/slider/slider-home2-sub2.jpg" src="assets/client/images/slider/slider-home2-sub2.jpg" alt="">
                            </div>
                            <div class="content">
                                <a href="product-detail.html" class="text-title title text_white">Laptop Stand</a>
                                <div class="text-button text_white">$79.99</div>
                                <a href="#quickView" data-bs-toggle="modal" class="text-button-small link text_white text-decoration">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbs-item">
                            <div class="image">
                                <img class="lazyload" data-src="assets/client/images/slider/slider-home2-sub3.jpg" src="assets/client/images/slider/slider-home2-sub3.jpg" alt="">
                            </div>
                            <div class="content">
                                <a href="product-detail.html" class="text-title title text_white">Ergonomic Headrest</a>
                                <div class="text-button text_white">$79.99</div>
                                <a href="#quickView" data-bs-toggle="modal" class="text-button-small link text_white text-decoration">Quick View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div dir="ltr" class="swiper slider-home2-main slider-effect-fade">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="wrap-slider">
                            <div class="img-style">
                                <img class="lazyload" data-src="{{ asset('assets/client/images/banner/3.png') }}" src="{{ asset('assets/client/images/banner/3.png') }}" alt="banner-cls">
                            </div>
                            <div class="box-content">
                                <div class="box-title">
                                    <div class="text-white text-display fade-item fade-1">Chất Lượng <br> Đặt Lên Hàng Đầu
                                    </div>
                                    <p class="text-body-1 text_white fade-item fade-item-2">Liên hệ đặt hàng ngay để được tư vấn sớm nhất.</p>
                                </div>
                                <div class="fade-item fade-item-3">
                                    <a href="product-detail.html" class="tf-btn btn-white mx-auto ">Liên Hệ Đặt Hàng     <i class="icon-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wrap-slider">
                            <div class="img-style">
                                <img class="lazyload" data-src="{{ asset('assets/client/images/banner/2.jpg') }}" src="{{ asset('assets/client/images/banner/2.jpg') }}" alt="banner-cls">
                            </div>
                            <div class="box-content">
                                <div class="box-title">
                                    <div class="text-white text-display fade-item fade-1">Đẳng Cấp <br> Tạo Nên Sự Khác Biệt 
                                    </div>
                                    <p class="text-body-1 text_white fade-item fade-item-2">Liên hệ đặt hàng ngay để được tư vấn sớm nhất.</p>
                                </div>
                                <div class="fade-item fade-item-3">
                                    <a href="product-detail.html" class="tf-btn btn-white mx-auto ">Liên Hệ Đặt Hàng    <i class="icon-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wrap-slider">
                            <div class="img-style">
                                <img class="lazyload" data-src="{{ asset('assets/client/images/banner/1.png') }}" src="{{ asset('assets/client/images/banner/1.png') }}" alt="banner-cls">
                            </div>
                            <div class="box-content">
                                <div class="box-title">
                                    <div class="text-white text-display fade-item fade-1">Tư Vấn <br>
                                         Thiết Kế Phù Hợp
                                    </div>
                                    <p class="text-body-1 text_white fade-item fade-item-2">Liên hệ đặt hàng ngay để được tư vấn sớm nhất.</p>
                                </div>
                                <div class="fade-item fade-item-3">
                                    <a href="product-detail.html" class="tf-btn btn-white mx-auto ">Liên Hệ Đặt Hàng  <i class="icon-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-navigation">
                <div class="sw-button swiper-button-prev line-default slider-home2-prev"></div>
                <div class="sw-button swiper-button-next line-default slider-home2-next"></div>
            </div>
            <div class="sw-dots slider-home2-pagination type-circle no-border justify-content-center"></div>
        </div><!-- /.silideshow  -->
       