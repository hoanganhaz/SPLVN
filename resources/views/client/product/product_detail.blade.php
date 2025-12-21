@extends('client.layouts.master')
@section('content')
    <section class="flat-spacing" style="background: #fff">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tf-product-media-wrap sticky-top">
                        <div class="thumbs-slider">
                            <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom"
                                data-direction="vertical">
                                <div class="swiper-wrapper stagger-wrap">
                        
                                        <div class="swiper-slide stagger-item">
                                            <div class="item">
                                                <img class="lazyload" data-src="{{Storage::url($product->image)}}"
                                                    src="{{Storage::url($product->image)}}" alt="{{ $product->name }}">
                                            </div>
                                        </div>
                        
                                    
                                </div>
                            </div>
                            <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
                                <div class="swiper-wrapper">
                                    @if($product->image)
                                        <div class="swiper-slide">
                                            <a href="{{Storage::url($product->image)}}" target="_blank" class="item"
                                                data-pswp-width="600px" data-pswp-height="600px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="{{Storage::url($product->image)}}"
                                                    data-src="{{Storage::url($product->image)}}" 
                                                    src="{{Storage::url($product->image)}}"
                                                    alt="{{ $product->name }}">
                                            </a>
                                        </div>
                                    @endif
                                   
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
                                        <h3 class="name">{{ $product->name }}</h3>
                                        
                                    </div>
                                    <div class="tf-product-info-desc">
                                        <div class="tf-product-info-price">
                                            @if($product->sale_price && $product->sale_price < $product->price)
                                                <h5 class="price-on-sale">{{ number_format($product->sale_price, 0, ',', '.') }}đ</h5>
                                                <div class="compare-at-price">{{ number_format($product->price, 0, ',', '.') }}đ</div>
                                                <div class="badges-on-sale text-btn-uppercase">
                                                    -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                                                </div>
                                            @else
                                                <h5 class="price-on-sale">{{ number_format($product->price, 0, ',', '.') }}đ</h5>
                                            @endif
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tf-product-info-choose-option gap-19 ">
                                    <ul class="tf-product-info-sku">
                                        <li>
                                            <p class="text-caption-1">Mã sản phẩm:</p>
                                            <p class="text-caption-1 text-1">{{ $product->code }}</p>
                                        </li>
                                        
                                        <li>
                                            <p class="text-caption-1">Tình trạng:</p>
                                            <p class="text-caption-1 text-1">
                                                {{ $product->status == 1 ? 'Còn hàng' : 'Hết hàng' }}
                                            </p>
                                        </li>
                                        @if($product->category)
                                            <li>
                                                <p class="text-caption-1">Danh mục:</p>
                                                <p class="text-caption-1">
                                                    <a href="#" class="text-1 link">{{ $product->category->name }}</a>
                                                </p>
                                            </li>
                                        @endif
                                    </ul>
                                    {{-- Thông tin chi tiết sản phẩm --}}
                                    @if($product->length || $product->width || $product->wing_eyelids)
                                        <div class="variant-picker-item">
                                            <div class="variant-picker-label mb_12">
                                                <strong>Kích thước:</strong>
                                            </div>
                                            <div class="product-specs">
                                                @if($product->length)
                                                    <p>Chiều dài: {{ $product->length }}</p>
                                                @endif
                                                @if($product->width)
                                                    <p>Chiều rộng: {{ $product->width }}</p>
                                                @endif
                                                @if($product->wing_eyelids)
                                                    <p>Cánh mí: {{ $product->wing_eyelids }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    @endif

                                    @if($product->paint_technology || $product->key || $product->hinge || $product->design)
                                        <div class="variant-picker-item">
                                            <div class="variant-picker-label mb_12">
                                                <strong>Thông số kỹ thuật:</strong>
                                            </div>
                                            <div class="product-specs">
                                                @if($product->paint_technology)
                                                    <p>Công nghệ sơn: {{ $product->paint_technology }}</p>
                                                @endif
                                                @if($product->key)
                                                    <p>Chìa khóa: {{ $product->key }}</p>
                                                @endif
                                                @if($product->hinge)
                                                    <p>Bản lề: {{ $product->hinge }}</p>
                                                @endif
                                                @if($product->design)
                                                    <p>Thiết kế: {{ $product->design }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                    <div>
                                        <a href="#" class="tf-btn btn-primary w-full">Liên Hệ</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section product -->

    <section style="background: #fff" class="mb-10">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="widget-tabs style-1">
                        <ul class="widget-menu-tab">
                            <li class="item-title active">
                                <span class="inner">Mô tả</span>
                            </li>
                        </ul>
                        <div class="widget-content-tab">
                            <div class="widget-content-inner active">
                                <div class="tab-description">
                                    <div class="right">
                                        <h6 class="mb_12">Thông tin sản phẩm</h6>
                                        @if($product->description)
                                            {!! $product->description !!}
                                        @endif
                                    </div>
                                    <div class="left">
                                        <h6 class="mb_12">Thông số kỹ thuật</h6>
                                        <ul class="tf-product-info-sku">
                                            <li>
                                                <p class="text-caption-1">Mã sản phẩm:</p>
                                                <p class="text-caption-1 text-1">{{ $product->code }}</p>
                                            </li>
                                           
                                            <li>
                                                <p class="text-caption-1">Tình trạng:</p>
                                                <p class="text-caption-1 text-1">
                                                    {{ $product->status == 1 ? 'Còn hàng' : 'Hết hàng' }}
                                                </p>
                                            </li>
                                            @if($product->category)
                                                <li>
                                                    <p class="text-caption-1">Danh mục:</p>
                                                    <p class="text-caption-1">
                                                        <a href="#" class="text-1 link">{{ $product->category->name }}</a>
                                                    </p>
                                                </li>
                                            @endif
                                        </ul>
                                        {{-- Thông tin chi tiết sản phẩm --}}
                                        @if($product->length || $product->width || $product->wing_eyelids)
                                            <div class="variant-picker-item">
                                                <div class="variant-picker-label mb_12">
                                                    <strong>Kích thước:</strong>
                                                </div>
                                                <div class="product-specs">
                                                    @if($product->length)
                                                        <p>Chiều dài: {{ $product->length }}</p>
                                                    @endif
                                                    @if($product->width)
                                                        <p>Chiều rộng: {{ $product->width }}</p>
                                                    @endif
                                                    @if($product->wing_eyelids)
                                                        <p>Cánh mí: {{ $product->wing_eyelids }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
    
                                        @if($product->paint_technology || $product->key || $product->hinge || $product->design)
                                            <div class="variant-picker-item">
                                                <div class="variant-picker-label mb_12">
                                                    <strong>Thông số kỹ thuật:</strong>
                                                </div>
                                                <div class="product-specs">
                                                    @if($product->paint_technology)
                                                        <p>Công nghệ sơn: {{ $product->paint_technology }}</p>
                                                    @endif
                                                    @if($product->key)
                                                        <p>Chìa khóa: {{ $product->key }}</p>
                                                    @endif
                                                    @if($product->hinge)
                                                        <p>Bản lề: {{ $product->hinge }}</p>
                                                    @endif
                                                    @if($product->design)
                                                        <p>Thiết kế: {{ $product->design }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

@endsection