<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Menak Furniture</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="home/assets/img/logo-menak-furniture.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/all.min.css') }} ">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('home/assets/bootstrap/css/bootstrap.min.css') }} ">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/owl.carousel.css') }} ">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/magnific-popup.css') }} ">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/animate.css') }} ">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/meanmenu.min.css') }} ">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/main.css') }} ">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/responsive.css') }} ">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    @include('home.partials.header')
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->

    <!-- hero area -->
    @include('home.partials.hero_area')
    <!-- end hero area -->

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h3>Gratis Ongkos Kirim</h3>
                            <!-- <p>Ketika belanja lebih dari Rp. 150.000</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>Layanan 24/7</h3>
                            <!-- <p>Dapatkan layanan setiap hari</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>Pengembalian Dana</h3>
                            <!-- <p>Dapatkan pengembalian dana dalam 3 hari!</p> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->
    @include('home.partials.product_section')
    <!-- end product section -->

    @include('home.partials.cart')
   
    @include('home.partials.advertisement')

    @include('home.partials.news')
    
    {{-- @include('home.partials.footer') --}}
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2024 - <a href="https://imransdesign.com/">Menak Furniture</a>, All Rights
                        Reserved.</p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <!-- <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li> -->
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <!-- <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
       <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="{{ asset('home/assets/js/jquery-1.11.3.min.js') }} "></script>
    <!-- bootstrap -->
    <script src="{{ asset('home/assets/bootstrap/js/bootstrap.min.js') }} "></script>
    <!-- count down -->
    <script src="{{ asset('home/assets/js/jquery.countdown.js') }} "></script>
    <!-- isotope -->
    <script src="{{ asset('home/assets/js/jquery.isotope-3.0.6.min.js') }} "></script>
    <!-- waypoints -->
    <script src="{{ asset('home/assets/js/waypoints.js') }} "></script>
    <!-- owl carousel -->
    <script src="{{ asset('home/assets/js/owl.carousel.min.js') }} "></script>
    <!-- magnific popup -->
    <script src="{{ asset('home/assets/js/jquery.magnific-popup.min.js') }} "></script>
    <!-- mean menu -->
    <script src="{{ asset('home/assets/js/jquery.meanmenu.min.js') }} "></script>
    <!-- sticker js -->
    <script src="{{ asset('home/assets/js/sticker.js') }} "></script>
    <!-- main js -->
    <script src="{{ asset('home/assets/js/main.js') }} "></script>

</body>

</html>
