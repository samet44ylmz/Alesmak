<style>
/* Service bölümü için özel CSS */
.services-section {
    position: relative;
    padding: 80px 0;
    background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
    overflow: hidden;
}

.services-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('{{ asset('frontend/assets/images/background/1.jpg') }}') center/cover;
    opacity: 0.1;
    z-index: 1;
}

.services-section .auto-container {
    position: relative;
    z-index: 2;
}

.services-section .inner-container {
    position: relative;
}

/* Service kartları için yeni tasarım */
.services-block {
    margin-bottom: 30px;
}

.services-block .inner-box {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.services-block .inner-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.services-block .image {
    position: relative;
    overflow: hidden;
    height: 200px;
    background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
}

.services-block .image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.services-block .inner-box:hover .image img {
    transform: scale(1.1);
}

.services-block .lower-content {
    padding: 25px 20px;
    text-align: center;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.services-block .icon-box {
    margin-bottom: 15px;
}

.services-block .icon-box .icon {
    font-size: 3rem;
    color: #2a5298;
    display: block;
}

.services-block h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: #333;
    margin: 0;
    line-height: 1.4;
}

/* Overlay efekti */
 .services-block .overlay-box {
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background: rgba(255, 255, 255, 0.95);
     opacity: 0;
     transition: opacity 0.3s ease;
     display: flex;
     align-items: center;
     justify-content: center;
     border-radius: 15px;
     backdrop-filter: blur(5px);
 }

.services-block .inner-box:hover .overlay-box {
    opacity: 1;
}

 .services-block .overlay-inner {
     text-align: center;
     color: #1e3c72;
     padding: 20px;
 }
 
 .services-block .overlay-inner .text {
     font-size: 0.9rem;
     margin-bottom: 15px;
     line-height: 1.5;
     color: #1e3c72;
     font-weight: 500;
 }
 
 .services-block .know-more {
     color: #1e3c72;
     text-decoration: none;
     font-weight: 600;
     display: inline-flex;
     align-items: center;
     gap: 5px;
     transition: all 0.3s ease;
     background: rgba(255, 255, 255, 0.9);
     padding: 8px 16px;
     border-radius: 25px;
     border: 2px solid #1e3c72;
 }
 
 .services-block .know-more:hover {
     color: #fff;
     background: #1e3c72;
     transform: translateY(-2px);
     box-shadow: 0 5px 15px rgba(30, 60, 114, 0.3);
 }

/* Responsive tasarım */
@media (max-width: 768px) {
    .services-section {
        padding: 60px 0;
    }
    
    .services-block .image {
        height: 150px;
    }
    
    .services-block .lower-content {
        padding: 20px 15px;
    }
    
    .services-block h3 {
        font-size: 1.1rem;
    }
    
    .services-block .icon-box .icon {
        font-size: 2.5rem;
    }
}

@media (max-width: 576px) {
    .services-section {
        padding: 40px 0;
    }
    
    .services-block .image {
        height: 120px;
    }
    
    .services-block .lower-content {
        padding: 15px 10px;
    }
    
    .services-block h3 {
        font-size: 1rem;
    }
    
    .services-block .icon-box .icon {
        font-size: 2rem;
    }
}
</style>

<section class="services-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <!--Services Block-->
                <div class="services-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset($services->image_1) }}" alt="{{ $services->getTranslation('title_1') }}" />
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon flaticon-alarm-clock"></span>
                            </div>
                            <h3>{{ $services->getTranslation('title_1') }}</h3>
                        </div>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="text">ALESMAK kalitesi ile zamanında teslimat garantisi sunuyoruz.</div>
                                <a href="{{ route('product') }}" class="know-more">Detayları Gör <span class="icon flaticon-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset($services->image_2) }}" alt="{{ $services->getTranslation('title_2') }}" />
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon flaticon-education"></span>
                            </div>
                            <h3>{{ $services->getTranslation('title_2') }}</h3>
                        </div>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="text">En son teknoloji ile üretilen makinalarımız ile verimliliğinizi artırın.</div>
                                <a href="{{ route('product') }}" class="know-more">Detayları Gör <span class="icon flaticon-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset($services->image_3) }}" alt="{{ $services->getTranslation('title_3') }}" />
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon flaticon-time"></span>
                            </div>
                            <h3>{{ $services->getTranslation('title_3') }}</h3>
                        </div>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="text">Kolay kullanım ve uygun fiyatlar ile işinizi büyütün.</div>
                                <a href="{{ route('product') }}" class="know-more">Detayları Gör <span class="icon flaticon-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset($services->image_4) }}" alt="{{ $services->getTranslation('title_4') }}" />
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon flaticon-engineer"></span>
                            </div>
                            <h3>{{ $services->getTranslation('title_4') }}</h3>
                        </div>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="text">Uzman ekibimiz ile her zaman yanınızdayız.</div>
                                <a href="{{ route('contact') }}" class="know-more">İletişime Geç <span class="icon flaticon-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>