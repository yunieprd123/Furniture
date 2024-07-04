<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="index.html">
                            <img src="home/assets/img/logo-menak.png" alt="">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="current-list-item"><a href="#">Home</a>
                            </li>
                            <li><a href="about.html">Tentang Kami</a></li>
                            <li><a href="#">Layanan Kami</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('home.furniture-kayu-jati') }}">Furniture Kayu Jati</a></li>
                                    <li><a href="{{ route('home.lemari-kayu-jati') }}">Lemari Kayu Jati</a></li>
                                    <li><a href="{{ route('home.meja-kayu-jati') }}">Meja Kayu</a></li>
                                    <li><a href="{{ route('home.custom-design') }}">Custom Design</a></li>
                                    <li><a href="{{ route('home.mini-furniture') }}">Mini Furniture</a></li>
                                </ul>
                            </li>
                            <li><a href="news.html">Service Furniture</a>
                            </li>
                            <li><a href="contact.html">Kontak Kami</a></li>
                            <li>
                                <div class="header-icons">
                                    <!-- <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a> -->
                                    <a class="mobile-hide search-bar-icon" href="#"><i
                                            class="fas fa-search"></i></a>
                                </div>
                            </li>
                            <li>
                                <div class="header-icons">
                                    @if (Route::has('login'))
                                        @auth

                                            <x-app-layout>

                                            </x-app-layout>
                                        @else
                                <li class="nav-item">
                                    <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">
                                        Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-success" href="{{ route('register') }}">
                                        Register</a>
                                </li>
                            @endauth
                            @endif

                            <style>
                                #logincss {
                                    margin-left: 3px;
                                }
                            </style>
                            <style>
                                #registercss {
                                    margin-right: 7px;
                                }
                            </style>
                </div>
                </li>
                </ul>
                </nav>
                <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                <div class="mobile-menu"></div>
                <!-- menu end -->
            </div>
        </div>
    </div>
</div>
</div>
