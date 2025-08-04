<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>{{ __('layout.title') }}</title>
<meta name="description" content="ALESMAK - Plastik geri dönüşüm makinaları, boru üretim hatları, ekstruder makinaları ve endüstriyel makine üretimi. Kaliteli ve güvenilir plastik işleme ekipmanları.">
<meta name="keywords" content="plastik geri dönüşüm, boru makinaları, ekstruder, plastik işleme, endüstriyel makine, ALESMAK">
<meta name="author" content="ALESMAK">
<meta name="robots" content="index, follow">
<!-- Stylesheets -->
<link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets2/css/settings.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('frontend/assets2/css/layers.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('frontend/assets2/css/navigation.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">
<!--<link href="{{ asset('frontend/assets/css/color.css') }}" rel="stylesheet">-->

<style>
/* Mobilde resimleri küçült ama düzeni koru */
@media only screen and (max-width: 768px) {
    /* Resimleri küçült ama düzeni bozma */
    .gallery-item .image img {
        max-width: 100%;
        height: auto;
        max-height: 200px;
        object-fit: cover;
    }
    
    /* Galeri düzenini koru */
    .gallery-item {
        margin-bottom: 20px;
    }
    
    /* Ürün sayfalarındaki resimler için */
    .gallery-section .gallery-item .image img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    
    /* Genel resimler için */
    img {
        max-width: 100%;
        height: auto;
    }
    
    /* Büyük resimleri mobilde küçült */
    .image img {
        max-height: 250px;
        object-fit: cover;
    }
    
    /* Sol-sağ düzeni koru */
    .row .col-md-6,
    .row .col-sm-6 {
        float: left;
        width: 50%;
    }
    
    /* İçerik düzenini koru */
    .content-column,
    .image-column {
        float: left;
        width: 100%;
    }
    
    /* Resim ve yazı yan yana kalması için */
    .about-section .content-column,
    .about-section .image-column {
        width: 50%;
        float: left;
    }
}

@media only screen and (max-width: 480px) {
    .gallery-item .image img {
        max-height: 150px;
    }
    
    .gallery-section .gallery-item .image img {
        height: 150px;
    }
    
    .image img {
        max-height: 200px;
    }
    
    /* Küçük ekranlarda da düzeni koru */
    .row .col-md-6,
    .row .col-sm-6 {
        width: 50%;
        float: left;
    }
    
    .about-section .content-column,
    .about-section .image-column {
        width: 50%;
        float: left;
    }
}

/* Admin panelde yazılan metinlerin satır sonlarını koru */
.text,
.description,
.about-section .text,
.career-section .text,
.contact-section .text {
    white-space: pre-wrap;
    word-wrap: break-word;
}

/* Özellikle description alanları için */
.sec-title + .text,
.widget-content .text,
.card-body .text {
    white-space: pre-wrap;
    word-wrap: break-word;
}

/* Ürün fotoğrafları için düzeltmeler */
.gallery-item .image img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.gallery-item .image img:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

.gallery-item .inner-box {
    margin-bottom: 30px;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.gallery-item .overlay-box {
    background: rgba(0,0,0,0.7);
    opacity: 0;
    transition: all 0.3s ease;
}

.gallery-item .inner-box:hover .overlay-box {
    opacity: 1;
}

/* Mobilde fotoğraf düzenlemesi */
@media (max-width: 768px) {
    .gallery-item .image img {
        height: 200px;
    }
}

@media (max-width: 576px) {
    .gallery-item .image img {
        height: 180px;
    }
}

/* Frontend Logo Responsive Stilleri */
.logo img {
    transition: all 0.3s ease;
    background: transparent;
    border-radius: 0;
    box-shadow: none;
}

.logo:hover img {
    transform: scale(1.05);
    filter: brightness(1.1);
}

.logo-box {
    background: transparent;
    border: none;
    padding: 5px;
}

/* Mobile responsive logo */
@media (max-width: 768px) {
    .logo img {
        height: 55px !important;
    }
}

@media (max-width: 576px) {
    .logo img {
        height: 50px !important;
    }
}

@media (max-width: 480px) {
    .logo img {
        height: 45px !important;
    }
}


</style>

<link rel="shortcut icon" href="{{ asset('images/alesmaklogo.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/alesmaklogo.png') }}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset('frontend/assets/js/respond.js') }}"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
    
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="top-outer clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left">
                    	<ul class="links clearfix">
                        	<li><a href="#"><span class="icon fa fa-phone"></span>  +90 530 470 26 53</a></li>
                            <li><a href="#"><span class="icon fa fa-envelope-o"></span>info@alesmakine.com.tr</a></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right clearfix">
                    	<ul class="clearfix">
                        	<li class="dropdown language">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @php
                                        $locale = app()->getLocale();
                                        $flag = [
                                            'tr' => 'tr.png',
                                            'en' => 'gb.png',
                                            'ar' => 'sa.png',
                                        ];
                                        $langName = [
                                            'tr' => 'Türkçe',
                                            'en' => 'English',
                                            'ar' => 'Arabic',
                                        ];
                                    @endphp
                                    <img src="https://flagcdn.com/16x12/{{ pathinfo($flag[$locale], PATHINFO_FILENAME) }}.png" alt="{{ $langName[$locale] }}" style="width:16px; height:12px; margin-right:5px;"> {{ $langName[$locale] }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('locale', 'tr') }}">
                                            <img src="https://flagcdn.com/16x12/tr.png" alt="Turkish" style="width:16px; height:12px; margin-right:5px;">
                                            Türkçe
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('locale', 'en') }}">
                                            <img src="https://flagcdn.com/16x12/gb.png" alt="English" style="width:16px; height:12px; margin-right:5px;">
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('locale', 'ar') }}">
                                            <img src="https://flagcdn.com/16x12/sa.png" alt="Arabic" style="width:16px; height:12px; margin-right:5px;">
                                            Arabic
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top End -->
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/alesmaklogo.png') }}" alt="ALESMAK Logo" style="height: 70px; width: auto; background: transparent;"></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                 @include('frontend.layouts.navbar')
                    <!--Nav Outer End-->
                    
            	</div>    
            </div>
        </div>
    	
        <!--Sticky Header-->
       
                        <!-- Main Menu End-->
                        
                    </div>
                    <!--Nav Outer End-->
                    
            	</div>
                
            </div>
        </div>
        <!--End Sticky Header-->
        
    </header>
    <!--End Main Header -->
    
  @yield('content')

 <a href="https://wa.me/+905304702653" class="whatsapp-button" target="_blank" rel="noopener noreferrer" style="position: fixed; bottom: 30px; right: 30px; z-index: 9999; background-color: #25d366; border-radius: 5px; padding: 8px 16px; display: flex; align-items: center; text-decoration: none;">
        <img src="{{ asset('WhatsAppButtonGreenLarge.svg') }}" alt="Chat on WhatsApp" style="height: 30px; vertical-align: middle; margin-right: 8px">
        <span style="font-size: 16px; color: white; vertical-align: middle">
            {{ __('layout.contact_us') }}
        </span>
    </a>
    
    
    <!--Main Footer-->
  @include('frontend.layouts.footer')
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->


<script src="{{ asset('frontend/assets/js/jquery.js') }}"></script> 
<!--Revolution Slider-->
<script src="{{ asset('frontend/assets2/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('frontend/assets2/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('frontend/assets2/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('frontend/assets2/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets2/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('frontend/assets2/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('frontend/assets2/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('frontend/assets2/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('frontend/assets2/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('frontend/assets2/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('frontend/assets2/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main-slider-script.js') }}"></script>

<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
<script src="{{ asset('frontend/assets/js/knob.js') }}"></script>
<script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>

<script>
// Fotoğraf yollarını URL encode et
document.addEventListener('DOMContentLoaded', function() {
    // Tüm img elementlerini bul
    const images = document.querySelectorAll('img[src*="ÜRÜNLER"], img[src*="KALIP"], img[src*="BORU"]');
    
    images.forEach(function(img) {
        const src = img.getAttribute('src');
        if (src && src.includes('images/')) {
            // URL'den images/ kısmını çıkar
            const path = src.replace(/.*images\//, '');
            
            // URL encode et
            const encodedPath = encodeURIComponent(path);
            
            // Yeni src oluştur
            const newSrc = src.replace(path, encodedPath);
            
            // Src'yi güncelle
            img.setAttribute('src', newSrc);
            
            // Lightbox linklerini de güncelle
            const lightboxLink = img.closest('.gallery-item').querySelector('.lightbox-image');
            if (lightboxLink) {
                lightboxLink.setAttribute('href', newSrc);
            }
        }
    });
});
</script>

</body>
</html>

