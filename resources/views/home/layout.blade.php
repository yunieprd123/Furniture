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
    <title> 
        @yield('title'){{$judul ?? ''}} | Menak Furniture</title>

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


    <div class="product-section">

        @yield('content')
    </div>



    @include('home.partials.footer')
    <div class="copyright">
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
                            <li><a href="https://www.instagram.com/menak.furniture?igsh=MXA0ZXdkcXFodTU5cw==" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <!-- <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
       <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

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
