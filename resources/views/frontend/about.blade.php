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
                        	<h2>{{ $about->title }}</h2>
                            <div class="separator centered"></div>
                        </div>
                        <div class="bold-text">We Providing Best Indutrial Solution For Our Customers Business Growing In Last 25+ Years.</div>
                        <div class="text">
                            <p>{{ $about->description}}</p>
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
                            <h2>{{ $about->title_2 }}</h2>
                        </div>
                        <div class="text">{{ $about->description_2 }}</div>
                        <a href="market-sectors.html" class="services">{{ $about->btn_text }} <span class="icon flaticon-arrow-pointing-to-right"></span></a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Highlights Section-->
    
    
    
    <!--Achived Section-->
   
    <!--End Achived Section-->

   

@endsection