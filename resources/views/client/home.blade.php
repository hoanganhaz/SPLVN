@extends('client.layouts.master')
@section(section: 'content')
    <section class="flat-spacing-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- .silideshow  -->
                    <div class="tf-slideshow style-2 slider-effect-fade slider-home2">
                        <div dir="ltr" class="swiper slider-home2-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                   
                                </div>
                                <div class="swiper-slide">
                                    
                                </div>
                                <div class="swiper-slide">
                                 
                                </div>
                            </div>
                        </div>
                        <div dir="ltr" class="swiper slider-home2-main slider-effect-fade">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="wrap-slider">
                                        <div class="img-style">
                                            <img class="lazyload"
                                                data-src="{{ asset('assets/client/images/banner/3.png') }}"
                                                src="{{ asset('assets/client/images/banner/3.png') }}" alt="banner-cls">
                                        </div>
                                        <div class="box-content">
                                            <div class="box-title">
                                                <div class="text-white text-display fade-item fade-1">Chất Lượng <br> Đặt
                                                    Lên Hàng Đầu
                                                </div>
                                                <p class="text-body-1 text_white fade-item fade-item-2">Liên hệ đặt hàng
                                                    ngay để được tư vấn sớm nhất.</p>
                                            </div>
                                            <div class="fade-item fade-item-3">
                                                <a href="product-detail.html" class="tf-btn btn-white mx-auto ">Liên Hệ Đặt
                                                    Hàng <i class="icon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wrap-slider">
                                        <div class="img-style">
                                            <img class="lazyload"
                                                data-src="{{ asset('assets/client/images/banner/2.jpg') }}"
                                                src="{{ asset('assets/client/images/banner/2.jpg') }}" alt="banner-cls">
                                        </div>
                                        <div class="box-content">
                                            <div class="box-title">
                                                <div class="text-white text-display fade-item fade-1">Đẳng Cấp <br> Tạo Nên
                                                    Sự Khác Biệt
                                                </div>
                                                <p class="text-body-1 text_white fade-item fade-item-2">Liên hệ đặt hàng
                                                    ngay để được tư vấn sớm nhất.</p>
                                            </div>
                                            <div class="fade-item fade-item-3">
                                                <a href="product-detail.html" class="tf-btn btn-white mx-auto ">Liên Hệ Đặt
                                                    Hàng <i class="icon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wrap-slider">
                                        <div class="img-style">
                                            <img class="lazyload"
                                                data-src="{{ asset('assets/client/images/banner/1.png') }}"
                                                src="{{ asset('assets/client/images/banner/1.png') }}" alt="banner-cls">
                                        </div>
                                        <div class="box-content">
                                            <div class="box-title">
                                                <div class="text-white text-display fade-item fade-1">Tư Vấn <br>
                                                    Thiết Kế Phù Hợp
                                                </div>
                                                <p class="text-body-1 text_white fade-item fade-item-2">Liên hệ đặt hàng
                                                    ngay để được tư vấn sớm nhất.</p>
                                            </div>
                                            <div class="fade-item fade-item-3">
                                                <a href="product-detail.html" class="tf-btn btn-white mx-auto ">Liên Hệ Đặt
                                                    Hàng <i class="icon-arrow-up-right"></i></a>
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
                    </div>
                    <br>
                    <br><!-- /.silideshow  -->
                    <div class="heading-section text-center">
                        <h3 class="wow fadeInUp">Danh mục sản phảm</h3>
                        <p class="text-body-default text_secondary wow fadeInUp" data-wow-delay="0.1s">Những mẫu mới hot
                            được
                            cập nhật sớm nhất.</p>
                    </div>
                    <div class="wrap-categories overflow-x-auto style-2 has-boxshadow">
                        @forelse($categories as $index => $category)
                            <div class="categories-item wow fadeInUp" data-wow-delay="{{ $index * 0.1 }}s">
                                <div class="icon">
                                    @if (!empty($category->icon))
                                        <i class="{{ $category->icon }}"></i>
                                    @else
                                        <i class="icon-frame-4"></i>
                                    @endif
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        <a href="{{ route('client.product', $category->id) }}" class="link">
                                            {{ $category->name }}
                                        </a>
                                    </h5>
                                    <p class="text-body-default text_secondary">
                                        {{ $category->products_count }} items
                                    </p>
                                </div>
                            </div>
                        @empty
                            <p class="text-center">Chưa có danh mục nào</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.categories -->


    <!-- .collection  -->
    <!-- .collection  -->
    <section class="flat-spacing-2 pt-0">
        <div class="container">
            <div class="swiper tf-sw-mobile" data-screen="767" data-preview="1" data-space="15">
                <div class="swiper-wrapper grid-cls-v2">
                    <div class="swiper-slide item1">
                        <div class="collection-position style-2">
                            <a href="product-detail.html" class="img-style">
                                <img class="lazyload effect-paralax"
                                    data-src="{{ asset('assets/client/images/shop/3.jpg') }}"
                                    src="{{ asset('assets/client/images/shop/3.jpg') }}" alt="banner-cls"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </a>
                            <div class="content cls-content">
                                <div class="cls-heading">
                                    <h3 class="text_white wow fadeInUp" data-wow-delay="0s">
                                        Những sản phẩm<br>đang khuyến mãi
                                    </h3>
                                    <p class="text_white wow fadeInUp" data-wow-delay="0.1s">
                                        Mua nhanh để được giá tốt
                                    </p>
                                </div>
                                <a href="{{ route('client.product') }}" class="tf-btn btn-white wow fadeInUp"
                                    data-wow-delay="0.2s">
                                    Xem sản phẩm<i class="icon-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide item2">
                        <div class="collection-position style-2 spacing-1">
                            <a href="{{ route('client.product') }}" class="img-style">
                                <img class="lazyload effect-paralax"
                                    data-src="{{ asset('assets/client/images/shop/5.jpg') }}"
                                    src="{{ asset('assets/client/images/shop/5.jpg') }}" alt="banner-cls"
                                    style="width: 150%; height: 150%; object-fit: cover;">
                            </a>
                            <div class="content cls-content">
                                <div class="cls-heading">
                                    <h4 class="text_white wow fadeInUp" data-wow-delay="0s">
                                        Các Sản Phẩm<br>phù hợp với bạn
                                    </h4>
                                    <p class="text_white wow fadeInUp" data-wow-delay="0.1s">
                                        Mua nhanh để được giá tốt
                                    </p>
                                </div>
                                <a href="{{ route('client.product') }}" class="btn-line btn-line-white wow fadeInUp"
                                    data-wow-delay="0.2s">
                                    <span>Xem sản phẩm</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide item3">
                        <div class="collection-position style-2 spacing-1">
                            <a href="product-detail.html" class="img-style">
                                <img class="lazyload effect-paralax"
                                    data-src="{{ asset('assets/client/images/banner/3.png') }}"
                                    src="{{ asset('assets/client/images/banner/3.png') }}" alt="banner-cls"
                                    style="width: 190%; height: 190%; object-fit: cover;">
                            </a>
                            <div class="content cls-content">
                                <div class="cls-heading">
                                    <h4 class="text_white wow fadeInUp" data-wow-delay="0s">
                                        Nâng tầm<br>không gian của bạn
                                    </h4>
                                    <p class="text_white wow fadeInUp" data-wow-delay="0.1s">
                                        Trang trí đẳng cấp
                                    </p>
                                </div>
                                <a href="" class="btn-line btn-line-white wow fadeInUp" data-wow-delay="0.2s">
                                    <span>Khám phá ngay</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-pagination-mb sw-dots type-circle justify-content-center d-md-none d-flex"></div>
            </div>
        </div>
        <br>
        <br>
        <br>

        <!-- .top-pick -->
        <section class="flat-spacing-5  pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-section text-center">
                            <h3 class="wow fadeInUp">Danh Sách Sản Phẩm Mới</h3>
                            <p class="text-body-default text_secondary wow fadeInUp" data-wow-delay="0.1s">Những mẫu mới
                                nhất vừa về! Nâng tầm phong cách của bạn.</p>
                        </div>
                        <div class="tf-grid-layout tf-col-2 lg-col-4 ">

                            @foreach ($products as $product)
                                <div class="card-product style-2 wow fadeInUp" data-wow-delay="0s">
                                    <div class="card-product-wrapper">
                                        <a href="{{ route('client.productDetail', $product) }}" class="image-wrap">
                                            <img class="lazyload img-product"
                                                data-src="{{ Storage::url($product->image) }}"
                                                src="{{ Storage::url($product->image) }}" alt="image-product">
                                        </a>

                                    </div>
                                    <div class="card-product-info ">
                                        <a href="product-detail.html" class="text-title  link">{{ $product->name }}</a>
                                        <div class="price text-body-default "><span
                                                class="text-caption-1 old-price">{{ $product->price }}</span>{{ $product->sale_price }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.top-pick -->

        <!-- .collection -->
        <section>
            <div class="flat-img-with-text-5">
                <div class="collection-position hover-img style-6">
                    <div class="img-style ">
                        <img class="" data-src="{{ asset('assets/client/images/shop/2.jpg') }}"
                            src="{{ asset('assets/client/images/shop/2.jpg') }}" alt="banner-cls">
                    </div>
                    <div class="content cls-content w-full">
                        <div class="cls-heading gap-8 mb_22">
                            <h3 class=""> <a href="{{ route('client.product') }}"
                                    class="link text_white wow fadeInUp"> Cửa thép vân gỗ SLP</a></h3>
                            <p class="text_white text-body-default wow fadeInUp" data-wow-delay="0.1s">Mua sớm nhất để
                                được giá tốt.</p>
                        </div>
                        <a href="{{ route('client.product') }}" class="tf-btn btn-white  mx-auto">Mua Ngay <i
                                class="icon-arrow-up-right"></i></a>
                    </div>
                </div>
                <div class="collection-position hover-img style-6">
                    <div class="img-style ">
                        <img class="" data-src="{{ asset('assets/client/images/shop/1.jpg') }}"
                            src="{{ asset('assets/client/images/shop/1.jpg') }}" alt="banner-cls">
                    </div>
                    <div class="content cls-content w-full">
                        <div class="cls-heading gap-8 mb_22">
                            <h3 class=""> <a href="{{ route('client.product') }}"
                                    class="link text_white wow fadeInUp">Cửa gỗ nhựa Composite</a></h3>
                            <p class="text_white text-body-default wow fadeInUp" data-wow-delay="0.1s">Mua sớm nhất để
                                được giá tốt.</p>
                        </div>
                        <a href="{{ route('client.product') }}" class="tf-btn btn-white  mx-auto"><span>Mua Ngay</span><i
                                class="icon-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </section> <!-- .collection -->

        <!-- .top-sale -->
        <br><br>

        <!-- /.lookbook -->
        @if ($saleProducts->count() > 0)
            <section class="flat-spacing-2 pt-0">
                <div class="container">
                    <div class="row flat-with-text-lookbook wrap-lookbook-hover align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="banner-img">
                                <img class="lazyload" data-src="{{ asset('assets/client/images/banner/2.jpg') }}"
                                    src="{{ asset('assets/client/images/banner/2.jpg') }}" alt="banner">

                                @foreach ($saleProducts as $index => $product)
                                    <div class="tf-pin-btn pin-{{ $index + 1 }} bundle-pin-item swiper-button"
                                        data-slide="{{ $index }}" id="pin{{ $index + 1 }}">
                                        <span>{{ $index + 1 }}</span>
                                        <div class="loobook-product-wrap">
                                            <div class="loobook-product">
                                                <div class="img-style">
                                                    <img src="{{ asset('storage/' . $product->image) }}"
                                                        alt="{{ $product->name }}">
                                                </div>
                                                <div class="content">
                                                    <div class="info">
                                                        <a href="{{ route('client.productDetail', $product->id) }}"
                                                            class="text-title text-line-clamp-1 link">
                                                            {{ $product->name }}
                                                        </a>
                                                        <div class="price text-button">
                                                            <span class="text-decoration-line-through text-secondary">
                                                                {{ number_format($product->price, 0, ',', '.') }}đ
                                                            </span>
                                                            <span class="text-danger ms-2">
                                                                {{ number_format($product->sale_price, 0, ',', '.') }}đ
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a href="#shoppingCart" data-bs-toggle="modal"
                                                        class="btn-lookbook btn-line">
                                                        Thêm vào giỏ
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="lookbook-content">
                                <div class="box-title">
                                    <h3 class="title wow fadeInUp">
                                        Tận hưởng những ưu đãi tiết kiệm tuyệt vời với các gói khuyến mãi của chúng tôi!
                                    </h3>
                                    <p class="sub-desc text-secondary wow fadeInUp" data-wow-delay="0.1s">
                                        Tận hưởng ưu đãi đặc biệt.
                                    </p>
                                </div>

                                <div class="wrap-cart-item bundle-hover-wrap mb_40">
                                    @foreach ($saleProducts as $index => $product)
                                        <div class="cart-item bundle-hover-item pin{{ $index + 1 }}">
                                            <h6 class="number">{{ $index + 1 }}</h6>
                                            <div class="image-cart">
                                                <img src="{{ asset('storage/' . $product->image) }}"
                                                    alt="{{ $product->name }}">
                                            </div>
                                            <div class="info">
                                                <h6 class="name">
                                                    <a href="{{ route('client.productDetail', $product->id) }}"
                                                        class="link">
                                                        {{ $product->name }}
                                                    </a>
                                                </h6>
                                                <h6 class="price">
                                                    <span class="text-decoration-line-through text-secondary me-2">
                                                        {{ number_format($product->price, 0, ',', '.') }}đ
                                                    </span>
                                                    <span class="text-danger">
                                                        {{ number_format($product->sale_price, 0, ',', '.') }}đ
                                                    </span>
                                                </h6>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="total-lb">
                                    <a href="{{ route('client.product') }}" class="tf-btn btn-onsurface">
                                        <span>Xem Thêm Sản Phẩm</span>
                                        <div class="discount">
                                            <span class="text-button-small text-decoration-line-through">
                                                {{ number_format($saleProducts->sum('price'), 0, ',', '.') }}đ
                                            </span>
                                            <span class="text-body-default text-danger ms-2">
                                                {{ number_format($saleProducts->sum('sale_price'), 0, ',', '.') }}đ
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- /.benefit -->
        <section class="flat-spacing-2 line-top-container">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div dir="ltr" class="swiper tf-sw-iconbox" data-preview="4" data-tablet="3"
                            data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15"
                            data-pagination="1" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tf-box-icon">
                                        <div class="icon">
                                            <i class="icon-package"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Giao hàng miễn phí và nhanh chóng</h5>
                                            <p>Không phát sinh thêm chi phí nào, chỉ có giá như đã niêm yết.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tf-box-icon">
                                        <div class="icon">
                                            <i class="icon-arrow-down-left"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Chính Sách Đổi Trả</h5>
                                            <p>Mua sắm không rủi ro với chính sách đổi trả dễ dàng.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tf-box-icon">
                                        <div class="icon">
                                            <i class="icon-lifebuoy"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Hỗ Trợ 24/7</h5>
                                            <p>Hỗ trợ tận tình 24/7</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tf-box-icon">
                                        <div class="icon">
                                            <i class="icon-sealpercent"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Giảm Giá Khi Mua lần Đầu</h5>
                                            <p>Ưu đãi được biệt cho khách hàng thân thiết.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-iconbox sw-dots type-circle d-flex justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.benefit -->

        <!-- .testimonials -->
        <section class="flat-spacing-2  section-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-section text-center">
                            <h3 class="wow fadeInUp" style="color: #000000 !important;">Đánh giá của khách hàng</h3>
                            <p class="text-body-default text_secondary wow fadeInUp" data-wow-delay="0.1s">Khách hàng của
                                chúng tôi rất yêu thích sản phẩm của chúng tôi, và chúng tôi luôn nỗ lực để làm hài lòng họ.
                            </p>
                        </div>
                        <div class="swiper tf-sw-testimonial" data-preview="3" data-tablet="2" data-mobile="1"
                            data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                            data-pagination-md="1" data-pagination-lg="1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item hover-img style-2">
                                        <div class="content">
                                            <div class="content-top">
                                                <div class="box-author align-items-center d-flex gap-6">
                                                    <div class="text-title author"><a href="#" class="link"style="color: #000000 !important;">Hoàng
                                                            Anh</a>
                                                    </div>
                                                    <svg class="icon" width="20" height="21"
                                                        viewBox="0 0 20 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_15758_14563)">
                                                            <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549"
                                                                stroke="#3DAB25" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                                stroke="#3DAB25" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                        <defs>
                                                            <clipPath>
                                                                <rect width="20" height="20" fill="white"
                                                                    transform="translate(0 0.684082)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <div class="text-caption-2 text_secondary">Đánh giá của khách hàng
                                                    </div>
                                                </div>
                                                <div class="list-star-default">
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <p class="text-secondary">Cửa bên SPLVN làm nhìn rất sang, đóng mở êm, thợ
                                                    lắp
                                                    đặt làm việc cẩn thận, sạch sẽ sau khi xong.
                                                    Mua hàng bên SPLVN thấy yên tâm từ khâu tư vấn đến thi công, giao đúng
                                                    hẹn,
                                                    không phát sinh chi phí.
                                                    Trải nghiệm mua cửa bên SPLVN khá tốt, cửa đúng mẫu đã chọn, gia đình
                                                    mình
                                                    ai cũng ưng, sẽ giới thiệu cho người quen.</p>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item hover-img style-2">
                                        <div class="content">
                                            <div class="content-top">
                                                <div class="box-author align-items-center d-flex gap-6">
                                                    <div class="text-title author"><a href="#"
                                                            class="link"style="color: #000000 !important;">BáchBV</a>
                                                    </div>
                                                    <svg class="icon" width="20" height="21"
                                                        viewBox="0 0 20 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_15758_14563)">
                                                            <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549"
                                                                stroke="#3DAB25" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                                stroke="#3DAB25" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                        <defs>
                                                            <clipPath>
                                                                <rect width="20" height="20" fill="white"
                                                                    transform="translate(0 0.684082)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <div class="text-caption-2 text_secondary">Đánh giá của khách hàng
                                                    </div>
                                                </div>
                                                <div class="list-star-default">
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <p class="text-secondary">"Mình mua cửa bên SPLVN cho nhà mới xây và thật
                                                    sự
                                                    rất hài lòng.
                                                    Từ lúc tư vấn đến lúc lắp đặt đều làm việc rõ ràng, chuyên nghiệp.
                                                    Cửa chắc chắn, mẫu mã đúng như đã chọn ban đầu.
                                                    Thợ lắp đặt làm cẩn thận, gọn gàng, không làm ảnh hưởng xung quanh.
                                                    Giá cả hợp lý so với chất lượng, cảm thấy rất đáng tiền.
                                                    Sau khi lắp xong còn được hướng dẫn sử dụng và bảo quản kỹ. "</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item hover-img style-2">
                                        <div class="content">
                                            <div class="content-top">
                                                <div class="box-author align-items-center d-flex gap-6">
                                                    <div class="text-title author"><a href="#" class="link"style="color: #000000 !important;">Lê
                                                            Văn
                                                            Đông</a>
                                                    </div>
                                                    <svg class="icon" width="20" height="21"
                                                        viewBox="0 0 20 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_15758_14563)">
                                                            <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549"
                                                                stroke="#3DAB25" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                                stroke="#3DAB25" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                        <defs>
                                                            <clipPath>
                                                                <rect width="20" height="20" fill="white"
                                                                    transform="translate(0 0.684082)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <div class="text-caption-2 text_secondary">Đánh giá của khách hàng
                                                    </div>
                                                </div>
                                                <div class="list-star-default">
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <p class="text-secondary">"Mình là người khá kỹ tính nhưng mua cửa bên
                                                    SPLVN
                                                    thấy rất yên tâm.
                                                    Nhân viên tư vấn nhiệt tình, giải thích dễ hiểu, không ép mua.
                                                    Cửa hoàn thiện nhìn đẹp, đóng mở êm và chắc tay.
                                                    Quá trình thi công đúng tiến độ như đã hẹn.
                                                    Không có phát sinh thêm chi phí ngoài báo giá ban đầu.
                                                    Gia đình mình ai cũng hài lòng với lựa chọn này. "</p>
                                            </div>
                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item hover-img style-2">
                                        <div class="content">
                                            <div class="content-top">
                                                <div class="box-author align-items-center d-flex gap-6">
                                                    <div class="text-title author"><a href="#"
                                                            class="link" style="color: #000000 !important;">Nguyễn
                                                            Tuấn Anh</a>
                                                    </div>
                                                    <svg class="icon" width="20" height="21"
                                                        viewBox="0 0 20 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_15758_14563)">
                                                            <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549"
                                                                stroke="#3DAB25" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z"
                                                                stroke="#3DAB25" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                        <defs>
                                                            <clipPath>
                                                                <rect width="20" height="20" fill="white"
                                                                    transform="translate(0 0.684082)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <div class="text-caption-2 text_secondary">Đánh giá của khách hàng
                                                    </div>
                                                </div>
                                                <div class="list-star-default">
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <p class="text-secondary">"Đã tham khảo nhiều shop bán cửa khác nhau trước
                                                    khi
                                                    chọn SPLVN.
                                                    Ấn tượng đầu tiên là cách tư vấn rất có tâm và rõ ràng.
                                                    Cửa làm xong đúng mẫu, đúng màu, chất lượng tốt.
                                                    Thợ lắp đặt làm việc nhanh nhưng vẫn rất kỹ.
                                                    Sau khi lắp xong dọn dẹp sạch sẽ, gọn gàng.
                                                    Nếu có nhu cầu làm thêm cửa mình vẫn sẽ chọn SPLVN. "</p>
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-testimonial sw-dots type-circle d-flex justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- .testimonials -->

        <!-- News Insight -->
        @if ($featuredPost || ($posts ?? collect())->count() > 0)
            <section class="flat-spacing-2 section-news-insight">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section">
                                <h3 class="wow fadeInUp">Bài Viết</h3>
                                <p class="text-body-default text_secondary wow fadeInUp" data-wow-delay="0.1s">Khám phá
                                    những mẹo hoặc cách bảo quản cửa luôn được mới</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if ($featuredPost)
                            <div class="col-lg-6 col-xl-7">
                                <div class="collection-position style-2 spacing-2 has-over">
                                    <a href="#" class="img-style no-opacity w-100">
                                        <img class="lazyload"
                                            data-src="{{ asset('storage/' . $featuredPost->thumbnail) }}"
                                            src="{{ asset('storage/' . $featuredPost->thumbnail) }}"
                                            alt="{{ $featuredPost->title }}">
                                    </a>
                                    <div class="content cls-content">
                                        <div class="cls-heading">
                                            <ul class="meta mb-0">
                                                <li class="text-button-small"><a href="#"
                                                        class="link text-white">{{ $featuredPost->formatted_date }}</a>
                                                </li>
                                                <li class="text-button-small text-white">by <a href="#"
                                                        class="link text-white">Admin</a></li>
                                            </ul>
                                            <div>
                                                <h4 class="mb_8">
                                                    <a href="#"
                                                        class="link text_white">{{ $featuredPost->title }}</a>
                                                </h4>
                                                <p class="text_white">
                                                    {{ Str::limit($featuredPost->description ?? strip_tags($featuredPost->content), 120) }}
                                                </p>
                                            </div>
                                        </div>
                                        <a href="{{ route('client.show', $featuredPost->slug) }}"
                                            class="link text-white text-button">Đọc Thêm</a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (($posts ?? collect())->count() > 0)
                            <div class="col-lg-6 col-xl-5">
                                <div class="relatest-post">
                                    @foreach ($posts as $post)
                                        <div class="relatest-post-item style-2 style-row hover-image">
                                            <div class="image">
                                                <a href="#">
                                                    <img class="lazyload"
                                                        data-src="{{ asset('storage/' . $post->thumbnail) }}"
                                                        src="{{ asset('storage/' . $post->thumbnail) }}"
                                                        alt="{{ $post->title }}">
                                                </a>
                                                <div class="article-label">
                                                    <a href="#"
                                                        class="text-button-small">{{ $post->category_name ?? 'Blog' }}</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <ul class="meta">
                                                    <li class="text-button-small"><a href="#"
                                                            class="link">{{ $post->formatted_date }}</a></li>
                                                    <li class="text-button-small">by <a href="#"
                                                            class="link">Admin</a></li>
                                                </ul>
                                                <h5 class="title mb-0">
                                                    <a class="link"
                                                        href="{{ route('client.show', $post->slug) }}">{{ $post->title }}</a>
                                                </h5>
                                                <p>{{ Str::limit($post->description ?? strip_tags($post->content), 100) }}
                                                </p>
                                                <a href="{{ route('client.show', $post->slug) }}"
                                                    class="text-button link text-decoration">Đọc Thêm</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section><!-- /.News Insight -->
        @endif

        <!-- .instagram -->

    @endsection
