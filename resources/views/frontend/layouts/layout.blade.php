<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>The Metron - Industry and Factory HTML Template | Homepage Style One</title>
<!-- Stylesheets -->
<link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets2/css/settings.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('frontend/assets2/css/layers.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('frontend/assets2/css/navigation.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
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
                        <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a></div>
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
            Bize Ulaşın
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

</body>
</html>

