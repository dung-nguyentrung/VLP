<footer class="footer footer-default-padding">
    <div class="container">
        <div class="row footer-row">
            <div class="col-lg-4 mb-30">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                    </div>
                    <p class="mb-30">{{ $setting->description }}</p>
                    <a href="" class="main-btn-three">
                        <div class="text-btn">
                            <span class="text-btn-one">Chi tiết</span>
                            <span class="text-btn-two">Chi tiết</span>
                        </div>
                        <div class="arrow-btn">
                            <span class="arrow-one"><i class="fas fa-caret-right"></i></span>
                            <span class="arrow-two"><i class="fas fa-caret-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-30">
                <div class="mb-0 footer-widget">
                    <h4>Links</h4>
                    <div class="line-footer"></div>
                    <div class="row">
                        <div class="col-6">
                            <ul class="mb-0 footer-link">
                                <li>
                                    <a href="/">
                                        <span><i class="fas fa-angle-right"></i></span> Trang chủ
                                    </a>
                                </li>
                                <li>
                                    <a href="/shop">
                                        <span><i class="fas fa-angle-right"></i></span> Sản phẩm
                                    </a>
                                </li>
                                <li>
                                    <a href="/careers">
                                        <span><i class="fas fa-angle-right"></i></span> Tuyển dụng
                                    </a>
                                </li>
                                <li>
                                    <a href="/news">
                                        <span><i class="fas fa-angle-right"></i></span> Tin tức
                                    </a>
                                </li>
                                <li>
                                    <a href="/contact">
                                        <span><i class="fas fa-angle-right"></i></span> Liên hệ
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="mb-0 footer-link">
                                <li>
                                    <a href="/gallery">
                                        <span><i class="fas fa-angle-right"></i></span> Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="/#faq">
                                        <span><i class="fas fa-angle-right"></i></span> FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="/contact#buy">
                                        <span><i class="fas fa-angle-right"></i></span> Mua hàng
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/C%C3%B4ng+Ty+TNHH+V%C3%A2n+Long/@20.870844,106.6438158,17z/data=!3m1!4b1!4m5!3m4!1s0x314a7a3cbeac5cb7:0xa7a7c67131d12793!8m2!3d20.870844!4d106.6460045">
                                        <span><i class="fas fa-angle-right"></i></span> Bản đồ
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="footer-widget">
                    <h4>Tin tức mới nhất</h4>
                    <div class="line-footer"></div>
                    <p class="mb-15">Đăng ký để nhận tin tức mới nhất</p>
                    @if (session('message_email'))
                        <p class="text-success">{{ Session::get('message_email') }}</p>
                    @endif
                    @error('email')
                        <p>{{ $message }}</p>
                    @enderror
                    <form wire:submit.prevent="storeNewsLetter">
                        <div class="newsletter-item">
                            <input type="email" name="email" wire:model="email" placeholder="Email của bạn">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                    <ul class="social-media">
                        <li><a href="https://www.facebook.com/TUY%E1%BB%82N-D%E1%BB%A4NG-V%C3%82N-LONG-111007523649398/" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCrYT1V4gFMkZs0f1sJcejCg" class="youtube"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row row-contact">
            <div class="col-lg-4 col-sm-6 no-padding">
                <div class="single-item">
                    <span class="flaticon-call"></span>
                    <p>{{ $setting->phone }}</p>
                    <p>{{ $setting->fax }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 no-padding">
                <div class="single-item">
                    <span class="flaticon-email"></span>
                    <p>{{ $setting->email }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 no-padding">
                <div class="single-item">
                    <span class="flaticon-location"></span>
                    <p>{{ $setting->address }}</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scroll-up">
    <i class="fas fa-angle-up"></i>
</div>
