<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TCIR - First Try</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/elegant-font/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('styles/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('styles/main.css')}}" />
</head>
<body>

<div id="js-preloader" class="js-preloader">
    <div class="cp-preloader cp-preloader_type1">
        <span class="cp-preloader__letter" data-preloader="L">L</span>
        <span class="cp-preloader__letter" data-preloader="O">O</span>
        <span class="cp-preloader__letter" data-preloader="A">A</span>
        <span class="cp-preloader__letter" data-preloader="D">D</span>
        <span class="cp-preloader__letter" data-preloader="I">I</span>
        <span class="cp-preloader__letter" data-preloader="N">N</span>
        <span class="cp-preloader__letter" data-preloader="G">G</span>
    </div>
</div>

<!-- Mobile Menu -->
<div class="mobile-nav-wrapper">
    <div class="mobile-menu-inner">
        <ul class="mobile-menu">
            <li><a href="">Home</a></li>
            <li class="has-sub">
                <a href="#">Economics <i class="sub-icon fa fa-angle-down"></i></a>
                <ul class="sub-menu">
                    <li><a href="slider-boxed.html">Economic 1</a></li>
                    <li><a href="slider-full-width.html">Economic 2</a></li>
                    <li class="has-sub"><a href="#">Economic 3 <i class="sub-icon fa fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="slider-small.html">Economic 3-1</a></li>
                            <li><a href="slider-infinity.html">Economic 3-2</a></li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="has-sub">
                <a href="#">Politics <i class="sub-icon fa fa-angle-down"></i></a>
                <ul class="sub-menu">
                    <li><a href="slider-boxed.html">Politic 1</a></li>
                    <li><a href="slider-full-width.html">Politic 2</a></li>
                    <li class="has-sub"><a href="#">Politic 3 <i class="sub-icon fa fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="slider-small.html">Politic 3-1</a></li>
                            <li><a href="slider-infinity.html">Politic 3-2</a></li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li><a href="pages-about-me-v1.html">About TCIR</a></li>
        </ul>
    </div>
</div>
<div class="mobile-menu-overlay"></div>

<section class="above-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 align-self-center">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 align-self-center">
                <div class="logo">
                    <a href="#"><img src="{{asset('images/logo.png')}}" style="" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 align-self-center">
                <ul class="search-item">
                    <li class="menu-item menu-search">
                        <a href="#search" id="menu-search-btn">
                            <i class="icon_search"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Header -->
<header class="site-header fixed-header">
    <div class="container expanded">
        <div class="header-wrap">
            <div class="header-logo">
                <a href="index.html"><img style="width: 200px;height: 44px !important;" src="{{asset('images/logo.png')}}" alt=""></a>
            </div>
            <div class="header-nav">
                <ul class="main-menu">
                    <li class="menu-item-has-children active"><a href="#">Economics</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Economic 1</a></li>
                            <li><a href="home-recent.html">Economic 2</a></li>
                            <li class="menu-item-has-children"><a href="#">Economic 3</a>
                                <ul class="sub-menu">
                                    <li><a href="home-list.html">Economic 3-1</a></li>
                                    <li><a href="home-full-width.html">Economic 3-2</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Politics</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Politic 1</a></li>
                            <li><a href="home-recent.html">Politic 2</a></li>
                            <li class="menu-item-has-children"><a href="#">Politic 3</a>
                                <ul class="sub-menu">
                                    <li><a href="home-list.html">Politic 3-1</a></li>
                                    <li><a href="home-full-width.html">Politic 3-2</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li><a href="pages-about-me-v1.html">About TCIR</a></li>
                </ul>
            </div>
            <div class="header-widgets">
                <ul class="right-menu">
                    <li class="menu-item menu-mobile-nav">
                        <a href="#" class="menu-bar" id="menu-show-mobile-nav">
                            <span class="hamburger"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- /Header -->

<!-- change class -->
<div class="change-class"></div>

<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="Search..." />
        <button type="submit" class="primary-button"><i class="icon_search"></i></button>
    </form>
</div>

<div class="main-banner full-width-banner">
    <div class="container-fluid">
        <div class="owl-big-banner owl-carousel">
            <div class="item">
                <div class="overlay"></div>
                <img src="http://placehold.it/1860x700" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Fashion</span>
                        </div>
                        <a href="single-standard-post.html"><h4>tousled <em>subway</em> chartreuse</h4></a>
                        <ul class="post-info">
                            <li><a href="#">January 10, 2020</a></li>
                            <li><a href="#">6 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="overlay"></div>
                <img src="http://placehold.it/1860x700" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Lifestyle</span>
                        </div>
                        <a href="single-standard-post.html"><h4>mumblecore <em>pressed</em> hashtag</h4></a>
                        <ul class="post-info">
                            <li><a href="#">January 10, 2020</a></li>
                            <li><a href="#">3 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="overlay"></div>
                <img src="http://placehold.it/1860x700" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Beauty</span>
                        </div>
                        <a href="single-standard-post.html"><h4>iceland <em>franzen</em> asymmetrical</h4></a>
                        <ul class="post-info">
                            <li><a href="#">January 10, 2020</a></li>
                            <li><a href="#">5 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="overlay"></div>
                <img src="http://placehold.it/1860x700" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Nature</span>
                        </div>
                        <a href="single-standard-post.html"><h4>locavore <em>actually</em> vexillologist</h4></a>
                        <ul class="post-info">
                            <li><a href="#">January 10, 2020</a></li>
                            <li><a href="#">8 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="medium-gap full-width-home">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="standard-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="standard-post full-width-post">
                                <div class="post-image">
                                    <a href="single-standard-post.html"><img src="http://placehold.it/1170x450" alt=""></a>
                                </div>
                                <div class="down-content">
                                    <div class="meta-category">
                                        <span>Fashion</span>
                                    </div>
                                    <a href="single-standard-post.html"><h4>Sartorial dreamcatcher food truck <em>cardigan bicycle</em></h4></a>
                                    <ul class="post-info">
                                        <li><a href="#">January 10, 2020</a></li>
                                        <li><a href="#">Admin</a></li>
                                    </ul>
                                    <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer ethical tbh forage, four loko fam fanny pack synth. Kombucha craft beer PBRB etsy, YOLO franzen tumeric leggings sriracha fam quinoa godard next level. Cold-pressed kinfolk cronut.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="comments-info">
                                                <i class="fa fa-comment-o"></i>
                                                <span>8 comments</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <ul class="share-post">
                                                <li><i class="fa fa-share-alt"></i></li>
                                                <li><a href="#">Facebook</a>,</li>
                                                <li><a href="#">Twitter</a>,</li>
                                                <li><a href="#">Pinterest</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="standard-post full-width-post">
                                <div class="post-image">
                                    <a href="single-standard-post.html"><img src="http://placehold.it/1170x450" alt=""></a>
                                </div>
                                <div class="down-content">
                                    <div class="meta-category">
                                        <span>Fashion</span>
                                    </div>
                                    <a href="single-standard-post.html"><h4>The Ultimate <em>Women’s Bag</em> Guide Latest Fashion <em>Trends</em></h4></a>
                                    <ul class="post-info">
                                        <li><a href="#">January 10, 2020</a></li>
                                        <li><a href="#">Admin</a></li>
                                    </ul>
                                    <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer ethical tbh forage, four loko fam fanny pack synth. Kombucha craft beer PBRB etsy, YOLO franzen tumeric leggings sriracha fam quinoa godard next level. Cold-pressed kinfolk cronut.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="comments-info">
                                                <i class="fa fa-comment-o"></i>
                                                <span>8 comments</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <ul class="share-post">
                                                <li><i class="fa fa-share-alt"></i></li>
                                                <li><a href="#">Facebook</a>,</li>
                                                <li><a href="#">Twitter</a>,</li>
                                                <li><a href="#">Pinterest</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="standard-post full-width-post">
                                <div class="post-image">
                                    <a href="single-standard-post.html"><img src="http://placehold.it/1170x450" alt=""></a>
                                </div>
                                <div class="down-content">
                                    <div class="meta-category">
                                        <span>Fashion</span>
                                    </div>
                                    <a href="single-standard-post.html"><h4><em>helvetica</em> skateboard semiotics <em>tumeric shorts</em> drinking</h4></a>
                                    <ul class="post-info">
                                        <li><a href="#">January 10, 2020</a></li>
                                        <li><a href="#">Admin</a></li>
                                    </ul>
                                    <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer ethical tbh forage, four loko fam fanny pack synth. Kombucha craft beer PBRB etsy, YOLO franzen tumeric leggings sriracha fam quinoa godard next level. Cold-pressed kinfolk cronut.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="comments-info">
                                                <i class="fa fa-comment-o"></i>
                                                <span>8 comments</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <ul class="share-post">
                                                <li><i class="fa fa-share-alt"></i></li>
                                                <li><a href="#">Facebook</a>,</li>
                                                <li><a href="#">Twitter</a>,</li>
                                                <li><a href="#">Pinterest</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="footer-title">Topics</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="#">Topic 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="#">Topic 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="#">Topic 3</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="footer-title">Regions </span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="#">Region 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="#">Region 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="#">Region 3</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="footer-title ">About TCIR</span>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link footer-link">About 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="#">About 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="#">About 3</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row text-center pt-3">
            <div class="col-md-4 box">
                <span class="copyright quick-links">Copyright &copy; WebTailor <script>document.write(new Date().getFullYear())</script>
                </span>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- Scripts -->
<script src="{{asset('scripts/vendors/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('scripts/vendors/jquery.hoverIntent.min.js')}}"></script>
<script src="{{asset('scripts/vendors/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('scripts/vendors/jquery.easing.min.js')}}"></script>
<script src="{{asset('scripts/vendors/wow.min.js')}}"></script>
<script src="{{asset('scripts/vendors/parallax.min.js')}}"></script>
<script src="{{asset('scripts/vendors/isotope.min.js')}}"></script>
<script src="{{asset('scripts/vendors/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('scripts/vendors/packery-mode.pkgd.min.js')}}"></script>
<script src="{{asset('scripts/vendors/owl-carousel.min.js')}}"></script>
<script src="{{asset('scripts/vendors/jquery.appear.js')}}"></script>
<script src="{{asset('scripts/vendors/jquery.countTo.js')}}"></script>
<script src="{{asset('scripts/main.js')}}"></script>


</body>
</html>
