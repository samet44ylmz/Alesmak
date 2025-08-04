<section class="career-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Video Column-->
                <div class="video-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="image">
                        	<img src="{{ asset($career->image ) }}" alt="" />
                            {{-- <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-btn"> --}}
                               
                    
                            </a>
                        </div>
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="sec-title">
                        	<h2>{{ $career->getTranslation('title', app()->getLocale()) }}</h2>
                            <div class="separator centered"></div>
                        </div>
                        <div class="text">{{ $career->getTranslation('description', app()->getLocale()) }}</div>
                        {{-- Eğer ekstra alanlar varsa buraya ekleyebilirsiniz --}}
                        <a class="see_all" href="{{ route('contact') }}">
                            {{ $career->getTranslation('btn_text', app()->getLocale()) }}
                            <span class="icon flaticon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>