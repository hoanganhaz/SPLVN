@extends('client.layouts.master')

@push('styles')
    <style>
        .blog-detail-wrap {
            background: #f8f9fa;
            padding: 60px 0;
        }

        .blog-detail-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .blog-content-wrapper {
            max-width: 850px;
            margin: 0 auto;
            background: #fff;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .blog-header {
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 1px solid #e5e5e5;
        }

        .blog-category-badge {
            display: inline-block;
            background: #f8f9fa;
            color: #495057;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 20px;
            text-decoration: none;
            transition: all 0.3s;
        }

        .blog-category-badge:hover {
            background: #007bff;
            color: #fff;
        }

        .blog-title {
            font-size: 36px;
            font-weight: 700;
            line-height: 1.4;
            color: #1a1a1a;
            margin-bottom: 20px;
        }

        .blog-meta-info {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            align-items: center;
            color: #6c757d;
            font-size: 14px;
        }

        .blog-meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .blog-meta-item i {
            font-size: 16px;
        }

        .blog-featured-image {
            margin: 40px 0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .blog-featured-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Ensure large images don't overflow on small screens */
        .blog-featured-image img {
            object-fit: cover;
            max-height: 600px;
            width: 100%;
        }

        .blog-description {
            font-size: 17px;
            line-height: 1.7;
            color: #495057;
            margin-bottom: 30px;
            padding: 20px 25px;
            background: #f8f9fa;
            border-left: 4px solid #007bff;
            border-radius: 4px;
        }

        .blog-content {
            font-size: 16px;
            line-height: 1.8;
            color: #333;
        }

        .blog-content p {
            margin-bottom: 18px;
        }

        .blog-content h2,
        .blog-content h3,
        .blog-content h4 {
            margin-top: 30px;
            margin-bottom: 16px;
            font-weight: 600;
            color: #1a1a1a;
        }

        .blog-content h2 {
            font-size: 28px;
        }

        .blog-content h3 {
            font-size: 24px;
        }

        .blog-content h4 {
            font-size: 20px;
        }

        .blog-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 30px 0;
        }

        .blog-content ul,
        .blog-content ol {
            margin: 20px 0;
            padding-left: 30px;
        }

        .blog-content li {
            margin-bottom: 10px;
        }

        .blog-tags-share {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 30px 0;
            margin: 40px 0;
            border-top: 1px solid #e5e5e5;
            border-bottom: 1px solid #e5e5e5;
        }

        .blog-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }

        .blog-tag {
            background: #f8f9fa;
            color: #495057;
            padding: 6px 14px;
            border-radius: 16px;
            font-size: 13px;
            text-decoration: none;
            transition: all 0.3s;
        }

        .blog-tag:hover {
            background: #007bff;
            color: #fff;
        }

        .blog-share {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .blog-share-title {
            font-weight: 600;
            color: #1a1a1a;
            margin: 0;
        }

        .social-share-links {
            display: flex;
            gap: 10px;
        }

        .social-share-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            transition: all 0.3s;
            text-decoration: none;
        }

        .social-share-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .social-facebook {
            background: #3b5998;
        }

        .social-twitter {
            background: #1da1f2;
        }

        .social-linkedin {
            background: #0077b5;
        }

        .social-telegram {
            background: #0088cc;
        }

        .blog-navigation {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin: 50px 0;
        }

        .related-post {
            display: flex;
            gap: 20px;
            align-items: center;
            margin: 30px 0 60px;
        }

        .related-post .pre,
        .related-post .next {
            flex: 1 1 50%;
        }

        .nav-post-item {
            padding: 25px;
            background: #f8f9fa;
            border-radius: 8px;
            transition: all 0.3s;
            text-decoration: none;
            display: block;
        }

        .nav-post-item:hover {
            background: #007bff;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.2);
        }

        .nav-post-item:hover * {
            color: #fff !important;
        }

        .nav-direction {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #6c757d;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .nav-post-title {
            font-size: 16px;
            font-weight: 600;
            color: #1a1a1a;
            line-height: 1.4;
        }

        .nav-post-item.next {
            text-align: right;
        }

        .comments-section {
            margin: 60px 0;
            padding: 40px;
            background: #f8f9fa;
            border-radius: 12px;
        }

        .comments-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #1a1a1a;
        }

        .comment-form {
            background: #fff;
            padding: 35px;
            border-radius: 8px;
            margin-top: 40px;
        }

        .form-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #1a1a1a;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            font-size: 15px;
            transition: all 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
        }

        .form-control::placeholder {
            color: #adb5bd;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .submit-btn {
            background: #007bff;
            color: #fff;
            padding: 14px 35px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .submit-btn:hover {
            background: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
        }

        .related-articles {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 15px;
        }

        .section-subtitle {
            font-size: 16px;
            color: #6c757d;
        }

        @media (max-width: 768px) {
            .blog-title {
                font-size: 26px;
            }

            .blog-content-wrapper {

                /* TOC styles */
                .blog-toc {
                    margin: 18px 0 0;
                }

                .toc-toggle {
                    display: none;
                    background: transparent;
                    border: none;
                    color: #007bff;
                    font-weight: 600;
                    cursor: pointer;
                    margin-bottom: 8px;
                }

                .toc-content {
                    background: #f8f9fa;
                    border: 1px solid #e9ecef;
                    padding: 12px 16px;
                    border-radius: 8px;
                }

                .toc-content strong {
                    display: block;
                    margin-bottom: 8px;
                }

                .toc-list {
                    list-style: none;
                    padding-left: 0;
                    margin: 0;
                }

                .toc-list li {
                    margin: 6px 0;
                }

                .toc-list li a {
                    color: #495057;
                    text-decoration: none;
                    font-size: 14px;
                }

                .toc-list li.toc-h3 {
                    margin-left: 14px;
                    font-size: 13px;
                }

                .toc-list li.toc-h4 {
                    margin-left: 28px;
                    font-size: 13px;
                }

                @media (max-width: 768px) {
                    .toc-toggle {
                        display: inline-block;
                    }

                    .toc-content {
                        display: none;
                    }

                    .toc-content.open {
                        display: block;
                    }
                }

                padding: 30px 20px;
            }

            .blog-navigation {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .blog-tags-share {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        /* Additional mobile refinements */
        @media (max-width: 480px) {
            .blog-detail-wrap {
                padding: 30px 0;
            }

            .blog-content-wrapper {
                padding: 20px;
                border-radius: 8px;
            }

            .blog-title {
                font-size: 22px;
                line-height: 1.25;
            }

            .blog-meta-info {
                gap: 12px;
                font-size: 13px;
            }

            .blog-description {
                font-size: 15px;
                padding: 12px;
            }

            .social-share-btn {
                width: 36px;
                height: 36px;
            }

            .blog-tags {
                gap: 8px;
            }

            .section-title {
                font-size: 28px;
            }

            .related-post {
                flex-direction: column;
            }

            .related-post .pre,
            .related-post .next {
                text-align: left;
            }

            .blog-featured-image img {
                max-height: 360px;
            }
        }

        @media (max-width: 360px) {
            .blog-title {
                font-size: 20px;
            }

            .blog-content {
                font-size: 15px;
            }

            .blog-description {
                font-size: 14px;
                padding: 10px;
            }

            .submit-btn {
                padding: 12px 20px;
                font-size: 14px;
            }
        }
    </style>
@endpush

@section('content')
    <!-- main-content -->
    <div class="main-content">

        <!-- .blog-details-main -->
        <div class="blog-detail-wrap">
            <div class="blog-detail-container">
                <div class="blog-content-wrapper">

                    <!-- Blog Header -->
                    <div class="blog-header">
                        @if ($post->category)
                            <a href="#" class="blog-category-badge">{{ $post->category }}</a>
                        @endif

                        <h1 class="blog-title">{{ $post->title }}</h1>

                        <div class="blog-meta-info">
                            <div class="blog-meta-item">
                                <i class="icon-calendar"></i>
                                <span>{{ $post->created_at->format('F d, Y') }}</span>
                            </div>
                            <div class="blog-meta-item">
                                <i class="icon-user"></i>
                                <span>{{ $post->author ?? 'Admin' }}</span>
                            </div>
                            <div class="blog-meta-item">
                                <i class="icon-eye"></i>
                                <span>{{ $post->views ?? 0 }} views</span>
                            </div>
                            <div class="blog-meta-item">
                                <i class="icon-clock"></i>
                                <span>{{ $post->reading_time ?? '5' }} min read</span>
                            </div>
                        </div>
                    </div>
                    <!-- Table of Contents -->
                    <div class="blog-toc" aria-hidden="false">
                        <button class="toc-toggle" aria-expanded="true">Mục lục ▾</button>
                        <nav class="toc-content" aria-label="Mục lục bài viết">
                            <strong>Mục lục</strong>
                            <ul class="toc-list"></ul>
                        </nav>
                    </div>

                    <!-- Featured Image -->
                    @if ($post->thumbnail)
                        <div class="blog-featured-image">
                            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}">
                        </div>
                    @endif

                    <!-- Description -->
                    @if ($post->description)
                        <div class="blog-description">
                            {{ $post->description }}
                        </div>
                    @endif

                    <!-- Content -->
                    <div class="blog-content">
                        {!! $post->content !!}
                    </div>

                    <!-- Tags & Share -->
                    <div class="blog-tags-share">
                        @if ($post->tags)
                            <div class="blog-tags">
                                <span style="font-weight: 600; color: #1a1a1a;">Tags:</span>
                                @foreach (explode(',', $post->tags) as $tag)
                                    <a href="#" class="blog-tag">{{ trim($tag) }}</a>
                                @endforeach
                            </div>
                        @endif

                        <div class="blog-share">
                            <h6 class="blog-share-title">Share:</h6>
                            <div class="social-share-links">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                    target="_blank" class="social-share-btn social-facebook">
                                    <i class="icon icon-facebook"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}"
                                    target="_blank" class="social-share-btn social-twitter">
                                    <i class="icon icon-x"></i>
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                                    target="_blank" class="social-share-btn social-linkedin">
                                    <i class="icon icon-linkedin"></i>
                                </a>
                                <a href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}"
                                    target="_blank" class="social-share-btn social-telegram">
                                    <i class="icon icon-telegram"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Navigation to Previous/Next Post --}}
                    @php
                        $previousPost = \App\Models\Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
                        $nextPost = \App\Models\Post::where('id', '>', $post->id)->orderBy('id', 'asc')->first();
                    @endphp

                    @if ($previousPost || $nextPost)
                        <div class="related-post">
                            @if ($previousPost)
                                <div class="pre w-50">
                                    <div class="text-btn-uppercase btn-direction">
                                        <a href="{{ route('client.show', $previousPost->slug) }}">Previous</a>
                                    </div>
                                    <h6 class="fw-5">
                                        <a class="link line-clamp-2"
                                            href="{{ route('client.show', $previousPost->slug) }}">
                                            {{ $previousPost->title }}
                                        </a>
                                    </h6>
                                </div>
                            @endif

                            @if ($nextPost)
                                <div class="next w-50">
                                    <div class="text-btn-uppercase btn-direction text-end">
                                        <a href="{{ route('client.show', $nextPost->slug) }}">Next</a>
                                    </div>
                                    <h6 class="fw-5 text-end">
                                        <a class="link line-clamp-2" href="{{ route('client.show', $nextPost->slug) }}">
                                            {{ $nextPost->title }}
                                        </a>
                                    </h6>
                                </div>
                            @endif
                        </div>
                    @endif

                    {{-- Comments Section (Optional - if you want to implement later) --}}
                    <div class="reply-comment">
                        <h4 class="reply-comment-heading">Bình Luận</h4>
                        <div class="alert alert-info">
                            <p class="mb-0">Tính năng bình luận sẽ được cập nhật sớm!</p>
                        </div>
                    </div>

                    {{-- Leave Comment Form --}}
                    <div class="leave-comment">
                <h4 class="leave-comment-heading mb_24">Nhập Bình Luận</h4>
                        <form class="form-leave-comment" action="#" method="POST">
                            @csrf
                            <div class="wrap">
                                <div class="cols">
                                    <fieldset class="">
                                        <input class="" type="text" placeholder="Họ Tên*" name="name"
                                            tabindex="1" value="" aria-required="true" required="">
                                    </fieldset>
                                    <fieldset class="">
                                        <input class="" type="email" placeholder="Email*" name="email"
                                            tabindex="2" value="" aria-required="true" required="">
                                    </fieldset>
                                </div>
                                <fieldset class="">
                                    <textarea class="" rows="4" placeholder="Nội dung*" name="message" tabindex="3" aria-required="true"
                                        required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="button-submit">
                                <button class="tf-btn btn-onsurface" type="submit">Bình luận <i
                                        class="icon-arrow-up-right"></i></button>
                            </div>
                        </form>
                    </div>

                    <ul class="tf-social-icon style-1 ">
                        <li>
                            <h6>Share:</h6>
                        </li>
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                target="_blank" class="social-facebook"><i class="icon icon-facebook"></i></a></li>
                        <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}"
                                target="_blank" class="social-twiter"><i class="icon icon-x"></i></a></li>
                        <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                                target="_blank" class="social-pinterest"><i class="icon icon-linkedin"></i></a></li>
                        <li><a href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}"
                                target="_blank" class="social-instagram"><i class="icon icon-telegram"></i></a></li>
                    </ul>
                </div>
            </div><!-- /.blog-details-main -->

            <!-- Related Articles -->
            @if ($relatedPosts && $relatedPosts->count() > 0)
                <section class="related-articles">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-header">
                                    <h3 class="section-title">Bài viết liên quan</h3>
                                    <p class="section-subtitle">Khám phá thêm những bài viết thú vị khác mà bạn có thể thích</p>
                                </div>
                                <div class="swiper tf-sw-recent " data-preview="3" data-tablet="2" data-mobile="1"
                                    data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                                    data-pagination-md="1" data-pagination-lg="1">
                                    <div class="swiper-wrapper">
                                        @foreach ($relatedPosts as $index => $relatedPost)
                                            <div class="swiper-slide ">
                                                <div class="blog-article-item wow fadeInUp"
                                                    data-wow-delay="{{ $index * 0.1 }}s">
                                                    <div class="article-thumb">
                                                        <a href="{{ route('client.show', $relatedPost->slug) }}">
                                                            @if ($relatedPost->thumbnail)
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('storage/' . $relatedPost->thumbnail) }}"
                                                                    src="{{ asset('storage/' . $relatedPost->thumbnail) }}"
                                                                    alt="{{ $relatedPost->title }}">
                                                            @else
                                                                <img class="lazyload"
                                                                    data-src="{{ asset('images/blog/default.jpg') }}"
                                                                    src="{{ asset('images/blog/default.jpg') }}"
                                                                    alt="{{ $relatedPost->title }}">
                                                            @endif
                                                        </a>
                                                        @if ($relatedPost->category)
                                                            <div class="article-label">
                                                                <a href="#"
                                                                    class="text-button-small">{{ $relatedPost->category }}</a>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="article-content">
                                                        <ul class="meta">
                                                            <li class="text-button-small">
                                                                <a href="#"
                                                                    class="link">{{ $relatedPost->created_at->format('F d, Y') }}</a>
                                                            </li>
                                                            <li class="text-button-small">by
                                                                <a href="#"
                                                                    class="link">{{ $relatedPost->author ?? 'Admin' }}</a>
                                                            </li>
                                                        </ul>
                                                        <h5 class="article-title">
                                                            <a href="{{ route('client.show', $relatedPost->slug) }}"
                                                                class="line-clamp-2 link">
                                                                {{ $relatedPost->title }}
                                                            </a>
                                                        </h5>
                                                        <p class="article-description text_secondary text-body-default">
                                                            {{ Str::limit($relatedPost->description, 100) }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="sw-pagination-recent sw-dots type-circle d-flex justify-content-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            <!-- /Related Articles -->

        </div><!-- main-content -->
    @endsection

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const content = document.querySelector('.blog-content');
                const tocList = document.querySelector('.toc-list');
                const tocContent = document.querySelector('.toc-content');
                const tocToggle = document.querySelector('.toc-toggle');
                if (!content || !tocList) return;

                const headings = content.querySelectorAll('h2, h3, h4');
                if (!headings.length) {
                    const toc = document.querySelector('.blog-toc');
                    if (toc) toc.style.display = 'none';
                    return;
                }

                function slugify(text) {
                    return text.toString().toLowerCase().trim()
                        .replace(/\s+/g, '-')
                        .replace(/[^\w\-]+/g, '')
                        .replace(/\-\-+/g, '-')
                        .replace(/^-+/, '')
                        .replace(/-+$/, '');
                }

                headings.forEach(function(h) {
                    const baseId = h.id ? h.id : slugify(h.textContent);
                    let id = baseId;
                    let i = 1;
                    while (document.getElementById(id)) {
                        id = baseId + '-' + i++;
                    }
                    h.id = id;

                    const li = document.createElement('li');
                    li.className = 'toc-' + h.tagName.toLowerCase();
                    const a = document.createElement('a');
                    a.href = '#' + id;
                    a.textContent = h.textContent.trim();
                    a.addEventListener('click', function(e) {
                        e.preventDefault();
                        document.getElementById(id).scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        if (history.replaceState) {
                            history.replaceState(null, null, '#' + id);
                        }
                        if (window.innerWidth <= 768 && tocContent) tocContent.classList.remove('open');
                    });
                    li.appendChild(a);
                    tocList.appendChild(li);
                });

                if (tocToggle && tocContent) {
                    tocToggle.addEventListener('click', function() {
                        tocContent.classList.toggle('open');
                        const expanded = tocContent.classList.contains('open');
                        tocToggle.setAttribute('aria-expanded', expanded);
                    });
                }
            });
        </script>
    @endpush
