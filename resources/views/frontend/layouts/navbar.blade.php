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
                                    <li><a href="{{ route('home') }}">{{ __('navbar.home') }}</a></li>
                                    <li><a href="{{ route('about') }}">{{ __('navbar.about') }}</a></li>
                                    <li class="dropdown">
                                        <a href="{{ route('product') }}">{{ __('navbar.products') }} <span class="fa fa-chevron-down" style="font-size:12px;vertical-align:middle;"></span></a>
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
                                    <li><a href="{{ route('contact') }}">{{ __('navbar.contact') }}</a></li>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                    </div>

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
                                    <li><a href="{{ route('home') }}">{{ __('navbar.home') }}</a></li>
                                    <li><a href="{{ route('about') }}">{{ __('navbar.about') }}</a></li>
                                    <li class="dropdown">
                                        <a href="{{ route('product') }}">{{ __('navbar.products') }} <span class="fa fa-chevron-down" style="font-size:12px;vertical-align:middle;"></span></a>
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
                                    <li><a href="{{ route('contact') }}">{{ __('navbar.contact') }}</a></li>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                    </div>
                </div>
            </div>
        </div>