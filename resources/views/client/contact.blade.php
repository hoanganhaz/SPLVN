@extends('client.layouts.master')
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    <section class="flat-spacing">
        <div class="container">
            <div class="contact-us-content">
                <div class="row">
                    <div class="col-lg-4 mb-lg-30">
                        <h4 class="mb_30 wow fadeInUp">Nhà máy sản xuất cửa thép vân gỗ</h4>
                        <div class="mb_28">
                            <h6 class="mb_8">Số điện Thoại:</h6>
                            <p class="text-body-default"> 0986512929</p>
                        </div>
                        <div class="mb_28">
                            <h6 class="mb_8">Email:</h6>
                            <p class="text-body-default">slpdoor.kr@gmail.com</p>
                        </div>
                        <div class="mb_28">
                            <h6 class="mb_8">Địa chỉ:</h6>
                            <p class="text-body-default">Lô số 15, đường Thanh Niên, khu Bách Việt, Dĩnh Kế, Tp. Bắc Giang
                            </p>
                        </div>
                        <div>
                            <h6 class="mb_8">Thời gian:</h6>
                            <p class="text-body-default mb_4 open-time">
                                <span>Hàng ngày</span>
                                Tư Vấn 24/7

                            </p>
                            <p class="text-body-default open-time">
                                Hỗ Trợ Nhiệt Tình
                            </p>
                            <p class="text-body-default open-time">
                                Cung Cấp Thông Tin Chính Xác
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <h4 class="mb_7 wow fadeInUp">Liên hệ để được báo giá sớm nhất</h4>
                        <p class="text_secondary mb_24 wow fadeInUp" data-wow-delay="0.1s">hoặc có thắc mắc cần giải đáp
                        </p>
                        <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">
                                        Họ và tên <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                        placeholder="Nhập họ tên của bạn">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">
                                        Số điện thoại <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}" placeholder="Nhập số điện thoại">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" placeholder="Nhập email của bạn">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Địa chỉ</label>
                                    <input type="text" name="address"
                                        class="form-control @error('address') is-invalid @enderror"
                                        value="{{ old('address') }}" placeholder="Nhập địa chỉ">
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nội dung tin nhắn</label>
                                <textarea name="message" rows="5" class="form-control @error('message') is-invalid @enderror"
                                    placeholder="Nhập nội dung bạn muốn gửi...">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane"></i> Gửi Liên Hệ
                                </button>
                            </div>
                        </form>
                    </div>
                    <br>
                    <br>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3717.78349633871!2d106.21708426051235!3d21.280035979019754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zTMO0IHPhu5EgMTUsIMSRxrDhu51uZyBUaGFuaCBOacOqbiwga2h1IELDoWNoIFZp4buHdCwgRMSpbmggS-G6vywgVHAuIELhuq9jIEdpYW5n!5e0!3m2!1sen!2s!4v1765970249262!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
