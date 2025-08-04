@extends('frontend.layouts.layout')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/pattern-1.png') }})">
    <div class="auto-container">
        <h1>Devirme Sehpası</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">{{ __('navbar.home') }}</a></li>
            <li><a href="{{ route('product') }}">{{ __('navbar.products') }}</a></li>
            <li>Devirme Sehpası</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Gallery Section-->
<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Devirme Sehpası</h2>
            <div class="separator"></div>
        </div>
        
        <div class="row clearfix">
            <!--Gallery Item-->
            <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Devirme Sehpası-özlider makina/ÜRÜNLER- devirme sehpası-ÖZLİDER- MAKİNA 1.jpg') }}" alt="Devirme Sehpası" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Devirme Sehpası-özlider makina/ÜRÜNLER- devirme sehpası-ÖZLİDER- MAKİNA 1.jpg') }}" class="lightbox-image" data-fancybox="gallery">
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
                        <img src="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Devirme Sehpası-özlider makina/ANASAYFA- devirme sehpası-ÖZLİDER- MAKİNA 1.jpg') }}" alt="Devirme Sehpası" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Devirme Sehpası-özlider makina/ANASAYFA- devirme sehpası-ÖZLİDER- MAKİNA 1.jpg') }}" class="lightbox-image" data-fancybox="gallery">
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
                        <img src="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Devirme Sehpası-özlider makina/ANASAYFA B- devirme sehpası-ÖZLİDER- MAKİNA 1.jpg') }}" alt="Devirme Sehpası" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="{{ asset('images/ÜRÜNLER ÖZLİDER MAKİNA/Devirme Sehpası-özlider makina/ANASAYFA B- devirme sehpası-ÖZLİDER- MAKİNA 1.jpg') }}" class="lightbox-image" data-fancybox="gallery">
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
