@extends('frontend.layouts.layout')
@section('content')

<!--Company Section-->
    <section class="company-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="sec-title">
                        	<h2>{{ __("about.title") }}</h2>
                            <div class="separator centered"></div>
                        </div>
                        <div class="bold-text">{{ __("about.subtitle") }}</div>
                        <div class="text">
                            <p>{{ $about->getTranslation('description', app()->getLocale()) }}</p>
                        </div>
                        <div class="signature"><img src="{{ asset($about->image) }}" alt="" /></div>
                    </div>
                </div>
                
                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="image">
                        	<img src="images/resource/company.jpg" alt="" />
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Company Section-->
    
    <!--Highlights Section-->
    <section class="highlights-section">
    	<div class="image-layer" style="background-image:url(images/background/10.jpg)"></div>
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Column-->
              
                
                <!--Services Column-->
                <div class="services-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column" style="background:none !important; opacity:1 !important;">
                        <div class="upper-box">
                            <div class="icon flaticon-target"></div>
                            <h2>{{ $about->getTranslation('title_2', app()->getLocale()) }}</h2>
                        </div>
                        <div class="text">{{ $about->getTranslation('description_2', app()->getLocale()) }}</div>
                        <a href="{{ route('contact') }}" class="services">{{ $about->getTranslation('btn_text', app()->getLocale()) }} <span class="icon flaticon-arrow-pointing-to-right"></span></a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Highlights Section-->
    
    
    
    <!--Achived Section-->
   
    <!--End Achived Section-->

   

@endsection