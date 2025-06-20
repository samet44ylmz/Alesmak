@extends('frontend.layouts.layout')

@section('content')
    <!--Main Slider-->
 @include('frontend.sections.hero')
 
    
    <!--Services Section-->
   @include('frontend.sections.services')
    <!--End Services Section-->
    
   	<!--market sectors Section-->
   @include('frontend.sections.market-sectors')
    <!--End Market Section-->
    
    
    
   
    
    <!--Career Section-->
   @include('frontend.sections.career')


    
    <!--End Career Section-->

   
@endsection