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
                        <h2>{{ $hero->title }}</h2>
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
                        <div class="text">{{ $hero->description }}</div>
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
                        <a href="about.html" class="know_more">
                            <span class="icon flaticon-right-arrow-1"></span>{{ $hero->btn_text }}
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>