@extends('frontend.layouts.layout')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/pattern-1.png') }})">
    <div class="auto-container">
        <h1>Yazı Makinası</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">{{ __('navbar.home') }}</a></li>
            <li><a href="{{ route('product') }}">{{ __('navbar.products') }}</a></li>
            <li>Yazı Makinası</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Gallery Section-->
<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Yazı Makinası</h2>
            <div class="separator"></div>
        </div>
        
        <div class="row clearfix">
            <!--Gallery Item-->
            <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Yazı Makinası -özlider makina/ÜRÜNLER -Yazı Makinası -özlider makina.jpg') }}" alt="Yazı Makinası" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Yazı Makinası -özlider makina/ÜRÜNLER -Yazı Makinası -özlider makina.jpg') }}" class="lightbox-image" data-fancybox="gallery">
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
                        <img src="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Yazı Makinası -özlider makina/ÜRÜNLER B -Yazı Makinası -özlider makina.jpg') }}" alt="Yazı Makinası" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Yazı Makinası -özlider makina/ÜRÜNLER B -Yazı Makinası -özlider makina.jpg') }}" class="lightbox-image" data-fancybox="gallery">
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
                        <img src="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Yazı Makinası -özlider makina/ÜRÜNLER- YAZICI -Makinası ÖZLİDER- MAKİNA 76.jpg') }}" alt="Yazı Makinası" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Yazı Makinası -özlider makina/ÜRÜNLER- YAZICI -Makinası ÖZLİDER- MAKİNA 76.jpg') }}" class="lightbox-image" data-fancybox="gallery">
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
