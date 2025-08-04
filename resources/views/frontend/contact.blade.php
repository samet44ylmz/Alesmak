<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ALESMAK - Plastik Geri Dönüşüm ve Boru Makinaları | İletişim</title>
<meta name="description" content="ALESMAK ile iletişime geçin. Plastik geri dönüşüm makinaları, boru üretim hatları ve endüstriyel makine çözümleri için bizimle iletişime geçin.">
<meta name="keywords" content="ALESMAK iletişim, plastik makinaları, boru üretim hatları, endüstriyel makine">
<meta name="author" content="ALESMAK">
<meta name="robots" content="index, follow">
<!-- Stylesheets -->
<link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
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
                        <!-- Dil seçenekleri -->
                        <li class="dropdown language">
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{ route('home') }}">{{ __('contact.home') }}</a></li>
                                <li><a href="{{ route('about') }}">{{ __('contact.about') }}</a></li>
                                <li class="dropdown">
                                    <a href="{{ route('product') }}">{{ __('contact.products') }} <span class="fa fa-chevron-down" style="font-size:12px;vertical-align:middle;"></span></a>
                                    <ul>
                                        <!-- Makine ve Ekipmanlar -->
                                        <li><a href="{{ route('ekstruder') }}">Ekstruder</a></li>
                                        <li><a href="{{ route('co-ekstruder-cizgimakinasi') }}">CO Ekstruder-Çizgi Makinası</a></li>
                                        <li><a href="{{ route('vakum-tanki') }}">Vakum Tankı</a></li>
                                        <li><a href="{{ route('sprey-tanki') }}">Sprey Tankı</a></li>
                                        <li><a href="{{ route('cekici-palet') }}">Çekici Palet</a></li>
                                        <li><a href="{{ route('kesici') }}">Kesici</a></li>
                                        <li><a href="{{ route('devirme-sehpasi') }}">Devirme Sehpası</a></li>
                                        <li><a href="{{ route('sarici-makinasi') }}">Sarıcı Makinası</a></li>
                                        <li><a href="{{ route('yazi-makinasi') }}">Yazı Makinası</a></li>
                                        <li><a href="{{ route('pvc-makinalari') }}">PVC Makinaları</a></li>
                                        <li><a href="{{ route('granul-makinalari') }}">Granül Makinaları</a></li>
                                        <li><a href="{{ route('bant-cekici') }}">Bant Çekici</a></li>
                                        <li><a href="{{ route('pvc-fitil-havuzu') }}">PVC Fitil Havuzu</a></li>
                                        <li><a href="{{ route('yedek-ekipmanlar') }}">Yedek Ekipmanlar</a></li>
                                        
                                        <!-- Boru Hatları -->
                                        <li><a href="{{ route('pp-atik-su-boru-hatti') }}">PP Atık Su Boru Hattı</a></li>
                                        <li><a href="{{ route('pe-boru-hatti') }}">PE Boru Hattı</a></li>
                                        <li><a href="{{ route('pprc-cam-elyaf-kompozit-boru-hatti') }}">PPRC-Cam Elyaf Kompozit Boru Hattı</a></li>
                                        
                                        <!-- Kalıplar -->
                                        <li><a href="{{ route('kafa-pe-pp-rc-kaliplari') }}">Kafa-PE-PP-RC Kalıpları</a></li>
                                        <li><a href="{{ route('pvc-kaliplari') }}">PVC Kalıpları</a></li>
                                        <li><a href="{{ route('yumusak-pvc-kaliplari') }}">Yumuşak PVC Kalıpları</a></li>
                                        <li><a href="{{ route('kalipreler') }}">Kalipreler</a></li>
                                    </ul>
                                </li>
                                <li class="current"><a href="{{ route('contact') }}">{{ __('contact.contact') }}</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
                <!--Nav Outer End-->
            </div>    
        </div>
    </div>
    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box pull-left">
                    <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/alesmaklogo.png') }}" alt="ALESMAK Logo" style="height: 70px; width: auto; background: transparent;"></a></div>
                </div>
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{ route('home') }}">{{ __('contact.home') }}</a></li>
                                <li><a href="{{ route('about') }}">{{ __('contact.about') }}</a></li>
                                <li class="dropdown">
                                    <a href="{{ route('product') }}">{{ __('contact.products') }} <span class="fa fa-chevron-down" style="font-size:12px;vertical-align:middle;"></span></a>
                                    <ul>
                                        <!-- Makine ve Ekipmanlar -->
                                        <li><a href="{{ route('ekstruder') }}">Ekstruder</a></li>
                                        <li><a href="{{ route('co-ekstruder-cizgimakinasi') }}">CO Ekstruder-Çizgi Makinası</a></li>
                                        <li><a href="{{ route('vakum-tanki') }}">Vakum Tankı</a></li>
                                        <li><a href="{{ route('sprey-tanki') }}">Sprey Tankı</a></li>
                                        <li><a href="{{ route('cekici-palet') }}">Çekici Palet</a></li>
                                        <li><a href="{{ route('kesici') }}">Kesici</a></li>
                                        <li><a href="{{ route('devirme-sehpasi') }}">Devirme Sehpası</a></li>
                                        <li><a href="{{ route('sarici-makinasi') }}">Sarıcı Makinası</a></li>
                                        <li><a href="{{ route('yazi-makinasi') }}">Yazı Makinası</a></li>
                                        <li><a href="{{ route('pvc-makinalari') }}">PVC Makinaları</a></li>
                                        <li><a href="{{ route('granul-makinalari') }}">Granül Makinaları</a></li>
                                        <li><a href="{{ route('bant-cekici') }}">Bant Çekici</a></li>
                                        <li><a href="{{ route('pvc-fitil-havuzu') }}">PVC Fitil Havuzu</a></li>
                                        <li><a href="{{ route('yedek-ekipmanlar') }}">Yedek Ekipmanlar</a></li>
                                        
                                        <!-- Boru Hatları -->
                                        <li><a href="{{ route('pp-atik-su-boru-hatti') }}">PP Atık Su Boru Hattı</a></li>
                                        <li><a href="{{ route('pe-boru-hatti') }}">PE Boru Hattı</a></li>
                                        <li><a href="{{ route('pprc-cam-elyaf-kompozit-boru-hatti') }}">PPRC-Cam Elyaf Kompozit Boru Hattı</a></li>
                                        
                                        <!-- Kalıplar -->
                                        <li><a href="{{ route('kafa-pe-pp-rc-kaliplari') }}">Kafa-PE-PP-RC Kalıpları</a></li>
                                        <li><a href="{{ route('pvc-kaliplari') }}">PVC Kalıpları</a></li>
                                        <li><a href="{{ route('yumusak-pvc-kaliplari') }}">Yumuşak PVC Kalıpları</a></li>
                                        <li><a href="{{ route('kalipreler') }}">Kalipreler</a></li>
                                    </ul>
                                </li>
                                <li class="current"><a href="{{ route('contact') }}">{{ __('contact.contact') }}</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
                <!--Nav Outer End-->
            </div>
        </div>
    </div>
    <!--End Sticky Header-->
</header>
<!--End Main Header -->
    
<!--Location Section-->
<section class="location-section" style="background-image:url({{ asset('frontend/assets/images/background/pattern-1.png') }})">
    	<div class="auto-container">
        	<ul class="page-breadcrumb">
            	<li><a href="{{ route('home') }}">{{ __('contact.home') }}</a></li>
                <li>{{ __('contact.about') }}</li>
            </ul>
        	<div class="sec-title centered light">
            	<h2>{{ __('contact.visit_location') }}</h2>
                <div class="separator"></div>
            </div>
            
            <!--Map Outer-->
            <div class="map-outer">
                <!--Map Canvas-->
                <div style="width:100%; height:auto;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3009.707178180963!2d28.904022977445816!3d41.03166187134715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caba5ff41aaaab%3A0xfe2cc8b361c2da26!2sG%C3%BCldallar%2011.%20Sanayi%20Sitesi!5e0!3m2!1str!2str!4v1750276158208!5m2!1str!2str"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Page Title-->
    
    <section class="contact-section">
    	<div class="auto-container">
        	
            <!--Title Box-->
            <div class="sec-title">
            	<div class="clearfix">
                	<div class="pull-left">
                    	<h2>{{ __('contact.title') }}</h2>
                        <div class="separator"></div>
                    </div>
                    <div class="text">{{ $contact->getTranslation('description', app()->getLocale()) }}</div>
                </div>
            </div>
        
        	<div class="inner-container">
            	<div class="clearfix">
                	
                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	<div class="upper-box">
                            	<ul class="list-style-three">
                                	<li><span class="icon flaticon-technology-2"></span><strong>{{ $contact->getTranslation('phone_title') }} </strong>{{ $contact->getTranslation('phone_description') }}</li>
                                    <li><span class="icon flaticon-envelope-1"></span><strong>{{ $contact->getTranslation('adres_title') }} </strong>{{ $contact->getTranslation('adres_description') }}</li>
                                    <li><span class="icon flaticon-time-1"></span><strong>{{ $contact->getTranslation('hour_title') }} </strong>{{ $contact->getTranslation('hour_description') }}</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    
                    <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
    <div class="inner-column">
        <!-- Contact Form -->
        <div class="contact-form">
            <!-- Success/Error Messages -->
            @if(session('success'))
                <div class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border: 1px solid #c3e6cb; border-radius: 4px; position: relative; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                    <i class="fa fa-check-circle" style="margin-right: 8px; font-size: 16px;"></i> 
                    <strong>Başarılı!</strong> {{ session('success') }}
                    <button type="button" class="close-alert" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); background: none; border: none; font-size: 18px; color: #155724; cursor: pointer;">&times;</button>
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px; position: relative; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                    <i class="fa fa-exclamation-circle" style="margin-right: 8px; font-size: 16px;"></i> 
                    <strong>Hata!</strong> {{ session('error') }}
                    <button type="button" class="close-alert" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); background: none; border: none; font-size: 18px; color: #721c24; cursor: pointer;">&times;</button>
                </div>
            @endif
            
            @if($errors->any())
                <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px; position: relative; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                    <i class="fa fa-exclamation-circle" style="margin-right: 8px; font-size: 16px;"></i> 
                    <strong>Hata!</strong> Lütfen aşağıdaki hataları düzeltin:
                    <button type="button" class="close-alert" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); background: none; border: none; font-size: 18px; color: #721c24; cursor: pointer;">&times;</button>
                    <ul style="margin: 10px 0 0 0; padding-left: 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <!--Default Form-->
            <form method="POST" action="{{ route('contact.message.store') }}" id="contact-form">
                @csrf
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="text" name="name" placeholder="{{ __('contact.name') }}" required>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="email" name="email" placeholder="{{ __('contact.email') }}" required>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="text" name="phone" placeholder="{{ __('contact.phone') }}">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                        <textarea name="message" placeholder="{{ __('contact.message') }}" required></textarea>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                        <button class="theme-btn submit-btn" type="submit" name="submit-form">{{ __('contact.send_message') }} <span class="icon flaticon-right-arrow-1"></span></button>
                    </div>
                </div>
            </form>
        </div>
        <!--End Contact Form -->
    </div>
</div>
                    
                </div>
            </div>
        </div>
    </section>
    


    
    <!--Main Footer-->
    @include('frontend.layouts.footer')
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/assets/js/validate.js') }}"></script>
<script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
<!--Google Map APi Key-->
<!--End Google Map APi-->

<script>
// Başarılı ve hata mesajlarını otomatik olarak gizle
document.addEventListener('DOMContentLoaded', function() {
    // Close butonları için event listener
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('close-alert')) {
            const alert = e.target.closest('.alert');
            if (alert) {
                alert.style.transition = 'opacity 0.5s ease-out';
                alert.style.opacity = '0';
                setTimeout(function() {
                    alert.style.display = 'none';
                }, 500);
            }
        }
    });
    
    // Başarılı mesajları 5 saniye sonra gizle
    const successAlerts = document.querySelectorAll('.alert-success');
    successAlerts.forEach(function(alert) {
        setTimeout(function() {
            if (alert.style.display !== 'none') {
                alert.style.transition = 'opacity 0.5s ease-out';
                alert.style.opacity = '0';
                setTimeout(function() {
                    alert.style.display = 'none';
                }, 500);
            }
        }, 5000);
    });
    
    // Hata mesajlarını 8 saniye sonra gizle
    const errorAlerts = document.querySelectorAll('.alert-danger');
    errorAlerts.forEach(function(alert) {
        setTimeout(function() {
            if (alert.style.display !== 'none') {
                alert.style.transition = 'opacity 0.5s ease-out';
                alert.style.opacity = '0';
                setTimeout(function() {
                    alert.style.display = 'none';
                }, 500);
            }
        }, 8000);
    });
    
    // Form gönderildikten sonra mesajları temizle
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function() {
            // Form gönderilirken butonu devre dışı bırak
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = 'Gönderiliyor... <span class="icon flaticon-right-arrow-1"></span>';
            }
        });
    }
});
</script>
<a href="https://wa.me/+905304702653" class="whatsapp-button" target="_blank" rel="noopener noreferrer" style="position: fixed; bottom: 30px; right: 30px; z-index: 9999; background-color: #25d366; border-radius: 5px; padding: 8px 16px; display: flex; align-items: center; text-decoration: none;">
        <img src="{{ asset('WhatsAppButtonGreenLarge.svg') }}" alt="Chat on WhatsApp" style="height: 30px; vertical-align: middle; margin-right: 8px">
        <span style="font-size: 16px; color: white; vertical-align: middle">
            Bize Ulaşın
        </span>
    </a>
</body>
</html>