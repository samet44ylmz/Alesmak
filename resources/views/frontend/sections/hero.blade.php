<style>
/* Hero bölümü için navbar rengi uyumlu CSS */
.main-slider .tp-caption h2 {
    color: #1e3c72 !important;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.8);
}

.main-slider .tp-caption .text {
    color: #1e3c72 !important;
    font-weight: 500;
    text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.8);
}

.main-slider .know_more {
    color: #1e3c72 !important;
    border-bottom: 2px solid #1e3c72 !important;
    background: rgba(255, 255, 255, 0.9);
    padding: 10px 20px;
    border-radius: 25px;
    transition: all 0.3s ease;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.main-slider .know_more:hover {
    color: #fff !important;
    background: #1e3c72 !important;
    border-bottom: 2px solid #1e3c72 !important;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(30, 60, 114, 0.3);
}

.main-slider .know_more .icon {
    color: inherit;
    transition: all 0.3s ease;
}

.main-slider .know_more:hover .icon {
    color: inherit;
}

/* Responsive tasarım */
@media (max-width: 768px) {
    .main-slider .tp-caption h2 {
        font-size: 2rem !important;
    }
    
    .main-slider .tp-caption .text {
        font-size: 1rem !important;
    }
    
    .main-slider .know_more {
        padding: 8px 16px;
        font-size: 0.9rem;
    }
}

@media (max-width: 576px) {
    .main-slider .tp-caption h2 {
        font-size: 1.5rem !important;
    }
    
    .main-slider .tp-caption .text {
        font-size: 0.9rem !important;
    }
    
    .main-slider .know_more {
        padding: 6px 12px;
        font-size: 0.8rem;
    }
}
</style>

<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1"
             style="overflow: hidden;">
            <ul>
                <li data-description="Slide Description"
                    data-easein="default"
                    data-easeout="default"
                    data-fsmasterspeed="1500"
                    data-fstransition="fade"
                    data-index="rs-1001"
                    data-masterspeed="default"
                    data-rotate="0"
                    data-saveperformance="off"
                    data-slotamount="default"
                    data-thumb="{{ asset($hero->image) }}"
                    data-title="Slide Title"
                    data-transition="parallaxvertical"
                    style="background: url('{{ asset($hero->image) }}') center center / cover no-repeat;">

                    <div class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-80','-90','-70','-80']"
                        data-width="['650','700','650','460']"
                        data-whitespace="normal"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:[100%]","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                        <h2>{{ $hero->getTranslation('title', app()->getLocale()) }}</h2>
                    </div>

                    <div class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['30','20','20','20']"
                        data-width="['650','700','650','460']"
                        data-whitespace="normal"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:[100%]","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                        <div class="text">{{ $hero->getTranslation('description', app()->getLocale()) }}</div>
                    </div>

                    <div class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['110','100','90','90']"
                        data-width="['550','550','550','460']"
                        data-whitespace="normal"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:[100%]","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                        <a href="{{ route('about') }}" class="know_more">
                            <span class="icon flaticon-right-arrow-1"></span>{{ $hero->getTranslation('btn_text', app()->getLocale()) }}
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>