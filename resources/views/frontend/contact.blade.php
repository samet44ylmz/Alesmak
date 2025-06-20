<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>The Metron - Industry and Factory HTML Template | Contact</title>
<!-- Stylesheets -->
<link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">
<!--<link href="{{ asset('frontend/assets/css/color.css') }}" rel="stylesheet">-->

<link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('frontend/assets/images/favicon.png') }}" type="image/x-icon">
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
                        <li><a href="#"><span class="icon fa fa-phone"></span>  +0 625-07520-6644</a></li>
                        <li><a href="#"><span class="icon fa fa-envelope-o"></span>Mailus@Metroindustry.com</a></li>
                        <li><a href="#"><span class="icon flaticon-placeholder-2"></span>Locate Us</a></li>
                    </ul>
                </div>
                <!--Top Right-->
                <div class="top-right clearfix">
                    <ul class="clearfix">
                        <!-- Dil seçenekleri -->
                        <li class="dropdown language">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="https://flagcdn.com/16x12/gb.png" alt="English" style="width:16px; height:12px; margin-right:5px;"> English <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        <img src="https://flagcdn.com/16x12/tr.png" alt="Turkish" style="width:16px; height:12px; margin-right:5px;">
                                        Türkçe
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://flagcdn.com/16x12/gb.png" alt="English" style="width:16px; height:12px; margin-right:5px;">
                                        English
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
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
                    <div class="logo"><a href="index.html"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a></div>
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
                                <li><a href="{{ route('home') }}">Anasayfa</a></li>
                                <li><a href="{{ route('about') }}">Hakkımızda</a></li>
                                <li class="dropdown"><a href="{{ route('product') }}">Ürünler</a></li>
                                <li class="current"><a href="{{ route('contact') }}">İletişim</a></li>
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
                    <div class="logo"><a href="index.html"><img src="{{ asset('frontend/assets/images/logo-small.png') }}" alt=""></a></div>
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
                                <li><a href="{{ route('home') }}">Anasayfa</a></li>
                                <li><a href="{{ route('about') }}">Hakkımızda</a></li>
                                <li class="dropdown"><a href="{{ route('product') }}">Ürünler</a></li>
                                <li class="current"><a href="{{ route('contact') }}">İletişim</a></li>
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
            	<li><a href="{{ route('home') }}">Anasayfa</a></li>
                <li>Hakkımızda</li>
            </ul>
        	<div class="sec-title centered light">
            	<h2>Visit Our Location</h2>
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
                    	<h2>{{ $contact->title }}</h2>
                        <div class="separator"></div>
                    </div>
                    <div class="text">{{$contact->description}}</div>
                </div>
            </div>
        
        	<div class="inner-container">
            	<div class="clearfix">
                	
                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	<div class="upper-box">
                            	<ul class="list-style-three">
                                	<li><span class="icon flaticon-technology-2"></span><strong>{{ $contact->phone_title }} </strong>{{ $contact->phone_description }}</li>
                                    <li><span class="icon flaticon-envelope-1"></span><strong>{{ $contact->adres_title }} </strong>{{ $contact->adres_description }}</li>
                                    <li><span class="icon flaticon-time-1"></span><strong>{{ $contact->hour_title }} </strong>{{ $contact->hour_description }}</li>
                                </ul>
                            </div>
                            <div class="lower-box">
                            	<div class="lower-inner">
                                	<div class="image">
                                    	<img src="{{ asset('frontend/assets/images/resource/author-7.jpg') }}" alt="" />
                                    </div>
                                    <h3>Jenifer Hearly</h3>
                                    <div class="designation">Manager</div>
                                    <div class="emailed">Jenifer@Metroindustry.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
    <div class="inner-column">
        <!-- Contact Form -->
        <div class="contact-form">
            <!--Default Form-->
            <form method="POST" action="{{ route('contact.message.store') }}" id="contact-form">
                @csrf
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="text" name="name" placeholder="Ad Soyad" required>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="email" name="email" placeholder="E-Mail" required>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="text" name="phone" placeholder="Telefon">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                        <textarea name="message" placeholder="Mesajınız" required></textarea>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                        <button class="theme-btn submit-btn" type="submit" name="submit-form">Gönder <span class="icon flaticon-right-arrow-1"></span></button>
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
    
    <!--Quote Form-->
    <div class="modal fade" id="schedule-box" tabindex="-1" role="dialog">
      <div class="modal-dialog popup-container container" role="document">
        <div class="modal-content">
            <div class="appoinment_form_wrapper clear_fix">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="get-quote-form" style="background-image:url({{ asset('frontend/assets/images/background/13.jpg') }})">
                	<div class="inner-box">
                    	<!--Sec Title-->
                        <div class="sec-title">
                        	<div class="clearfix">
                            	<div class="pull-left">
                                	<h2>Get a Quote</h2>
                                    <div class="separator centered"></div>
                                </div>
                                <div class="pull-left">
                                	<div class="text">Get a free quote for your industrial or engineering business solutions, We are here 24/7.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Quote Form / Style Two-->
                        <div class="quote-form style-two">
                            <!--Shipping Form-->
                            <form method="post" action="contact.html">
                                <div class="row clearfix">
                                	<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="text" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="text" placeholder="Company Name" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="text" placeholder="Phone" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <select class="custom-select-box">
                                            <option>Select Needed Service</option>
                                            <option>Services One</option>
                                            <option>Services Two</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea placeholder="Your Message..."></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Now <span class="icon flaticon-arrow-pointing-to-right"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div> 
        </div> 
      </div> 
      <a href="index.html" class="backhome">Back to Home <span class="icon flaticon-arrow-pointing-to-right"></span></a>
    </div>
    <!-- End of Quote box -->

    
    <!--Main Footer-->
    <footer class="main-footer">
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="column col-md-5 col-sm-6 col-xs-12">
						<div class="footer-widget logo-widget">
							<div class="logo">
                            	<a href="index.html"><img src="{{ asset('frontend/assets/images/footer-logo.png') }}" alt="" /></a>
                            </div>
                            <div class="widget-content">
                            	<div class="text">Global Street 5004, Newyork, United States.</div>
                                <ul class="list">
                                	<li>+0 625-07520-6644 </li>
                                    <li>Mailus@Metroindustry.com</li>
                                </ul>
                                <div class="timing">
                                	<span>Visit Our Office:</span>Monday - Satday: 9.00am to 5.00pm
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column col-md-4 col-sm-6 col-xs-12">
						<div class="footer-widget links-widget">
                        	<div class="footer-title">
                            	<h2>Usefull Links</h2>
                            </div>
                            <div class="row clearfix">
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                	<ul class="links">
                                    	<li><a href="about.html">Hakkımızda</a></li>
                                        <li><a href="#">Meet Our Team</a></li>
                                        <li><a href="#">Case Studies</a></li>
                                        <li><a href="#">Get a Quote</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">İletişim</a></li>
                                    </ul>
                                </div>
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                	<ul class="links">
                                    	<li><a href="market-sectors.html">Ürünler</a></li>
                                        <li><a href="#">Industries</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Why Choose Us</a></li>
                                        <li><a href="#">Sustainability</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column col-md-3 col-sm-6 col-xs-12">
						<div class="footer-widget material-widget">
                        	
                         
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-bottom">
        	<div class="auto-container">
                <div class="row clearfix">
                    
                   
                    </div>
                    
                </div>
                
                <div class="copyright">Copyright © 2025 <a href="#">The Metron Industry</a> Theme by <a href="#">Themekalia.</a> All rights reserved.</div>
                
            </div>
        </div>
    </footer>
    
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
<a href="https://wa.me/+905304702653" class="whatsapp-button" target="_blank" rel="noopener noreferrer" style="position: fixed; bottom: 30px; right: 30px; z-index: 9999; background-color: #25d366; border-radius: 5px; padding: 8px 16px; display: flex; align-items: center; text-decoration: none;">
        <img src="{{ asset('WhatsAppButtonGreenLarge.svg') }}" alt="Chat on WhatsApp" style="height: 30px; vertical-align: middle; margin-right: 8px">
        <span style="font-size: 16px; color: white; vertical-align: middle">
            Bize Ulaşın
        </span>
    </a>
</body>
</html>