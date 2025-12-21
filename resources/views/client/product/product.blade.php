@extends('client.layouts.master')
@section('content')
    <!-- .page-title -->
    <div class="page-title relative">
        <div class="paralaximg" data-parallax="scroll"
            data-image-src="{{ asset('assets/client/images/page-title/page-title-9.jpg') }}">
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="title">Shop</h3>
                        <ul class="breadcrumb">
                            <li><a href="/">Homepage</a></li>
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.page-title -->
    
    <!-- Section product -->
    <section class="flat-spacing" style="background: #ffffff">
        <div class="container">
            <div class="wrapper-control-shop">
                <div class="tf-grid-layout wrapper-shop tf-col-4" id="gridLayout">
                    <!-- card product -->
                    @foreach ($products as $product)
                        <div class="card-product style-2 grid" data-availability="Out of stock" data-brand="adidas">
                            <div class="card-product-wrapper">
                                <a href="{{ route('client.productDetail', $product) }}" class="image-wrap">
                                    <img class="lazyload img-product" 
                                        data-src="{{ Storage::url($product->image) }}"
                                        src="{{ Storage::url($product->image) }}" 
                                        alt="{{ $product->name }}"
                                        style="width: 100%; height: 300px; object-fit: cover;">
                                </a>
                            </div>
                            <div class="card-product-info">
                                <a href="{{ route('client.productDetail', $product) }}" class="title link">
                                    {{ $product->name }}
                                </a>
                                <div class="price text-body-default">
                                    @if($product->sale_price && $product->sale_price < $product->price)
                                        <span class="text-caption-1 old-price">
                                            {{ number_format($product->price, 0, ',', '.') }}đ
                                        </span>
                                        <span class="current-price">
                                            {{ number_format($product->sale_price, 0, ',', '.') }}đ
                                        </span>
                                    @else
                                        <span class="current-price">
                                            {{ number_format($product->price, 0, ',', '.') }}đ
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- pagination -->
                @if($products->hasPages())
                    <ul class="wg-pagination justify-content-center mt-4">
                        {{-- Previous Page Link --}}
                        @if ($products->onFirstPage())
                            <li class="disabled">
                                <span class="pagination-item text-button"><i class="icon-left"></i></span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $products->previousPageUrl() }}" class="pagination-item text-button">
                                    <i class="icon-left"></i>
                                </a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                            @if ($page == $products->currentPage())
                                <li class="active">
                                    <div class="pagination-item text-button">{{ $page }}</div>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $url }}" class="pagination-item text-button">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($products->hasMorePages())
                            <li>
                                <a href="{{ $products->nextPageUrl() }}" class="pagination-item text-button">
                                    <i class="icon-right"></i>
                                </a>
                            </li>
                        @else
                            <li class="disabled">
                                <span class="pagination-item text-button"><i class="icon-right"></i></span>
                            </li>
                        @endif
                    </ul>
                @endif
            </div>
        </div>
    </section>
    <!-- /Section product -->

    <style>
        /* Fix cho card product image */
        .card-product .card-product-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .card-product .image-wrap {
            display: block;
            position: relative;
            padding-bottom: 100%; /* Tạo hình vuông */
            overflow: hidden;
        }

        .card-product .img-product {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card-product .image-wrap:hover .img-product {
            transform: scale(1.05);
        }

        /* Fix pagination */
        .wg-pagination {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 30px 0 0 0;
            gap: 10px;
        }

        .wg-pagination li {
            margin: 0;
        }

        .pagination-item {
            display: inline-block;
            min-width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .pagination-item:hover {
            background-color: #f5f5f5;
            border-color: #999;
        }

        .wg-pagination .active .pagination-item {
            background-color: #000;
            color: #fff;
            border-color: #000;
        }

        .wg-pagination .disabled .pagination-item {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Price styling */
        .card-product-info .price {
            margin-top: 8px;
        }

        .old-price {
            text-decoration: line-through;
            color: #999;
            margin-right: 8px;
        }

        .current-price {
            color: #e74c3c;
            font-weight: 600;
        }
    </style>
@endsection