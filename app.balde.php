<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laravel Blog</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

    <link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />
</head>

<body>

    <!-- Header -->
    <header id="header">
        <!-- Nav -->
        <div id="nav">
            <!-- Main Nav -->
            <div id="nav-fixed">
                <div class="container">
                    <!-- logo -->
                    <div class="nav-logo">
                        <a href="index.html" class="logo"><img src="{{asset('front/img/logo.png')}}" alt=""></a>
                    </div>
                    <!-- /logo -->

                    <!-- nav -->
                    <ul class="nav-menu nav navbar-nav">
                        <li class="cat-1"><a href="#">Web Design</a></li>
                        <li class="cat-2"><a href="#">JavaScript</a></li>
                        <li class="cat-3"><a href="#">Css</a></li>
                        <li class="cat-4"><a href="#">Jquery</a></li>
                    </ul>
                    <!-- /nav -->

                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div class="search-form">
                            <input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
                            <button class="search-close"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /search & aside toggle -->
                </div>
            </div>
            <!-- /Main Nav -->

            <!-- Aside Nav -->
            <div id="nav-aside">
                <!-- nav -->
                <div class="section-row">
                    <ul class="nav-aside-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
                <!-- /nav -->


                <!-- social links -->
                <div class="section-row">
                    <h3>Follow us</h3>
                    <ul class="nav-aside-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <!-- /social links -->

                <!-- aside nav close -->
                <button class="nav-aside-close"><i class="fa fa-times"></i></button>
                <!-- /aside nav close -->
            </div>
            <!-- Aside Nav -->
        </div>
        <!-- /Nav -->
    </header>
    <!-- /Header -->

    @yield('content')


    <!-- Footer -->
    <footer id="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html" class="logo"><img src="{{asset('front/img/logo.png')}}" alt=""></a>
                        </div>
                        <ul class="footer-nav">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Advertisement</a></li>
                        </ul>
                        <div class="footer-copyright">
                            <span>&copy;
                                <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">About Us</h3>
                                <ul class="footer-links">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Join Us</a></li>
                                    <li><a href="contact.html">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">Catagories</h3>
                                <ul class="footer-links">
                                    <li><a href="category.html">Web Design</a></li>
                                    <li><a href="category.html">JavaScript</a></li>
                                    <li><a href="category.html">Css</a></li>
                                    <li><a href="category.html">Jquery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="col-md-3">
        <div class="footer-widget">
            <h3 class="footer-title">Join our Newsletter</h3>
            <div class="footer-newsletter">
                <form>
                    <input class="input" type="email" name="newsletter" placeholder="Enter your email">
                    <button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
                </form>
            </div>
            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
    </div>

</div>
<!-- /row -->
</div>
<!-- /container -->
</footer>
<!-- /Footer -->

<!-- jQuery Plugins -->
<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>

</body>

</html>