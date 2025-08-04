@extends('frontend.layouts.layout')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/pattern-1.png') }})">
    <div class="auto-container">
        <h1>Sarıcı Makinası</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">{{ __('navbar.home') }}</a></li>
            <li><a href="{{ route('product') }}">{{ __('navbar.products') }}</a></li>
            <li>Sarıcı Makinası</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Gallery Section-->
<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Sarıcı Makinası</h2>
            <div class="separator"></div>
        </div>
        
        <div class="row clearfix">
            <!--Gallery Item-->
            <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Sarıcı Makinası-özlider makina/ÜRÜNLER- Sarıcı Makinası ÖZLİDER- MAKİNA 21.jpg') }}" alt="Sarıcı Makinası" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Sarıcı Makinası-özlider makina/ÜRÜNLER- Sarıcı Makinası ÖZLİDER- MAKİNA 21.jpg') }}" class="lightbox-image" data-fancybox="gallery">
                                        <span class="icon flaticon-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Gallery Item-->
            <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Sarıcı Makinası-özlider makina/ANASAYFA- Sarıcı Makinası ÖZLİDER- MAKİNA 21.jpg') }}" alt="Sarıcı Makinası" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Sarıcı Makinası-özlider makina/ANASAYFA- Sarıcı Makinası ÖZLİDER- MAKİNA 21.jpg') }}" class="lightbox-image" data-fancybox="gallery">
                                        <span class="icon flaticon-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Gallery Item-->
            <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Sarıcı Makinası-özlider makina/ANASAYFA B- Sarıcı Makinası ÖZLİDER- MAKİNA 21.jpg') }}" alt="Sarıcı Makinası" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Sarıcı Makinası-özlider makina/ANASAYFA B- Sarıcı Makinası ÖZLİDER- MAKİNA 21.jpg') }}" class="lightbox-image" data-fancybox="gallery">
                                        <span class="icon flaticon-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Gallery Item-->
            <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Sarıcı Makinası-özlider makina/ÜRÜNLER- Sarıcı Makinası ÖZLİDER- MAKİNA 75.jpg') }}" alt="Sarıcı Makinası" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Sarıcı Makinası-özlider makina/ÜRÜNLER- Sarıcı Makinası ÖZLİDER- MAKİNA 75.jpg') }}" class="lightbox-image" data-fancybox="gallery">
                                        <span class="icon flaticon-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Gallery Item-->
            <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Sarıcı Makinası-özlider makina/ÜRÜNLER- Sarıcı Makinası ÖZLİDER- MAKİNA 76.jpg') }}" alt="Sarıcı Makinası" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Sarıcı Makinası-özlider makina/ÜRÜNLER- Sarıcı Makinası ÖZLİDER- MAKİNA 76.jpg') }}" class="lightbox-image" data-fancybox="gallery">
                                        <span class="icon flaticon-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Gallery Section-->
@endsection
