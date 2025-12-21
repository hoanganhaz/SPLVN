@extends('client.layouts.master')
@section('content')
         <div class="page-title relative">
            <div class="paralaximg" data-parallax="scroll" data-image-src="{{ asset('images/page-title/page-title-1.jpg') }}">
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="title">Bài Viết</h3>
                            <ul class="breadcrumb">
                                <li><a href="{{ route(' client.home') }}">Bài viết</a></li>
                                <li>Bài viết</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.page-title -->

        <!-- main-content -->
        <div class="main-content">

            <!-- .blog-grid-main -->
            <div class="blog-grid-main flat-spacing">
                <div class="container">
                    <div class="row">
                        <div class="tf-grid-layout md-col-3 mb_48 ">
                            @forelse($posts as $post)
                            <div class="blog-article-item">
                                <div class="article-thumb" style="position: relative; padding-bottom: 66.67%; overflow: hidden;">
                                    <a href="{{ route('client.show', $post->slug) }}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                        @if($post->thumbnail)
                                            <img class="lazyload" 
                                                 data-src="{{ asset('storage/' . $post->thumbnail) }}"
                                                 src="{{ asset('storage/' . $post->thumbnail) }}" 
                                                 alt="{{ $post->title }}"
                                                 style="width: 100%; height: 100%; object-fit: cover;">
                                        @else
                                            <img class="lazyload" 
                                                 data-src="{{ asset('images/blog/default.jpg') }}"
                                                 src="{{ asset('images/blog/default.jpg') }}" 
                                                 alt="{{ $post->title }}"
                                                 style="width: 100%; height: 100%; object-fit: cover;">
                                        @endif
                                    </a>
                                    @if($post->category)
                                    <div class="article-label">
                                        <a href="#" class="text-button-small">{{ $post->category }}</a>
                                    </div>
                                    @endif
                                </div>
                                <div class="article-content">
                                    <ul class="meta">
                                        <li class="text-button-small">
                                            <a href="#" class="link">{{ $post->created_at->format('F d, Y') }}</a>
                                        </li>
                                        <li class="text-button-small">by
                                            <a href="#" class="link">{{ $post->author ?? 'Admin' }}</a>
                                        </li>
                                    </ul>
                                    <h5 class="article-title">
                                        <a href="{{ route('client.show', $post->slug) }}" class="line-clamp-2 link">
                                            {{ $post->title }}
                                        </a>
                                    </h5>
                                    <p class="article-description text_secondary text-body-default">
                                        {{ Str::limit($post->description, 120) }}
                                    </p>
                                </div>
                            </div>
                            @empty
                            <div class="col-12">
                                <div class="alert alert-info text-center">
                                    <h5>Chưa có bài viết nào</h5>
                                    <p>Vui lòng quay lại sau!</p>
                                </div>
                            </div>
                            @endforelse
                        </div>
                        
                        @if($posts->hasPages())
                        <ul class="wg-pagination justify-content-center">
                            {{-- Previous Page Link --}}
                            @if ($posts->onFirstPage())
                                <li class="disabled"><span class="pagination-item text-button"><i class="icon-left"></i></span></li>
                            @else
                                <li><a href="{{ $posts->previousPageUrl() }}" class="pagination-item text-button"><i class="icon-left"></i></a></li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                @if ($page == $posts->currentPage())
                                    <li class="active">
                                        <div class="pagination-item text-button">{{ $page }}</div>
                                    </li>
                                @else
                                    <li><a href="{{ $url }}" class="pagination-item text-button">{{ $page }}</a></li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($posts->hasMorePages())
                                <li><a href="{{ $posts->nextPageUrl() }}" class="pagination-item text-button"><i class="icon-right"></i></a></li>
                            @else
                                <li class="disabled"><span class="pagination-item text-button"><i class="icon-right"></i></span></li>
                            @endif
                        </ul>
                        @endif
                    </div>
                </div>
            </div><!-- /.blog-grid-main -->

        </div><!-- main-content -->
@endsection