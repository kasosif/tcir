<!DOCTYPE html>
<html @if(app()->getLocale() == 'ar') dir="rtl" @endif lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TCIR - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/elegant-font/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('styles/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('styles/main.css')}}" />
    <style>
        .above-header {
            background-color: #fbebca;
        }
        .site-header {
            background-color: #fbebca !important;
        }
        footer {
            background-color: #4166d4;
        }
        ul.social-icons li a.active {
            background: #00adef;
        }
        .my-footer-icon:hover {
            color: #000;
        }
        .newest-acts-link {
            color: #fff;
        }
        .newest-acts-link:hover {
            text-decoration: none;
            color: #4166d4;
        }
    </style>
    @yield('csspage')
</head>
<body>

@section('preloader')
    <div id="js-preloader" class="js-preloader">
        <div class="cp-preloader cp-preloader_type1">
            <span class="cp-preloader__letter" data-preloader="{{__('loader.1')}}">{{__('loader.1')}}</span>
            <span class="cp-preloader__letter" data-preloader="{{__('loader.2')}}">{{__('loader.2')}}</span>
            <span class="cp-preloader__letter" data-preloader="{{__('loader.3')}}">{{__('loader.3')}}</span>
            <span class="cp-preloader__letter" data-preloader="{{__('loader.4')}}">{{__('loader.4')}}</span>
            <span class="cp-preloader__letter" data-preloader="{{__('loader.5')}}">{{__('loader.5')}}</span>
            <span class="cp-preloader__letter" data-preloader="{{__('loader.6')}}">{{__('loader.6')}}</span>
            @if(app()->getLocale() == "en")
                <span class="cp-preloader__letter" data-preloader="{{__('loader.7')}}">{{__('loader.7')}}</span>
            @endif
            @if(app()->getLocale() == "fr")
                <span class="cp-preloader__letter" data-preloader="{{__('loader.7')}}">{{__('loader.7')}}</span>
                <span class="cp-preloader__letter" data-preloader="{{__('loader.8')}}">{{__('loader.8')}}</span>
                <span class="cp-preloader__letter" data-preloader="{{__('loader.9')}}">{{__('loader.9')}}</span>
                <span class="cp-preloader__letter" data-preloader="{{__('loader.10')}}">{{__('loader.10')}}</span>
            @endif
        </div>
    </div>
@show

<!-- Mobile Menu -->
<div class="mobile-nav-wrapper">
    <div class="mobile-menu-inner">
        <ul class="mobile-menu">
            <li>
                <a href="{{url('demo')}}">{{__('Home')}}</a>
            </li>
            @foreach($categories as $cat)
                @if($cat->subs()->count())
                    <li class="has-sub">
                        <a href="{{url('/demo/page/'.$cat->link)}}">{{$cat->name}} <i class="sub-icon fa fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            @foreach($cat->subs as $sub)
                                @if($sub->subs()->count())
                                    <li class="has-sub"><a href="{{url('/demo/page/'.$sub->link)}}">{{$sub->name}}</a>
                                        <ul class="sub-menu">
                                            @foreach($sub->subs as $child)
                                                <li><a href="{{url('/demo/page/'.$child->link)}}">{{$child->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li><a href="{{url('/demo/page/'.$sub->link)}}">{{$sub->name}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="{{url('/demo/page/'.$cat->link)}}">{{$cat->name}}</a>
                    </li>
                @endif
            @endforeach
            <li class="has-sub">
                <a href="#">{{__("Contact")}} <i class="sub-icon fa fa-angle-down"></i></a>
                <ul class="sub-menu">
                    <li><a href="{{route('contact')}}"></a>{{__("Contact Us")}}</li>
                    <li>
                        <a href="{{url('demo/become-member')}}">{{__('Become a Member')}}</a>
                    </li>
                    <li><a href="{{route('our-resumes')}}">{{__("Advisory Board")}}</a></li>
                    <li><a href="{{route('our-mission')}}"></a>{{__("Our Mission")}}</li>

                    <li><a href="{{route('our-status')}}"></a>{{__("Our Documents")}}</li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="mobile-menu-overlay"></div>

<section class="above-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 align-self-center">
                <ul class="social-icons">
                    <li><a @if(app()->getLocale() == 'en') style="background-color: #00adef;" @endif href="{{app()->getLocale() == 'en' ? "#" : url('locale/en')}}" title="{{__('English')}}">{{__('En')}}</a></li>
                    <li><a @if(app()->getLocale() == 'fr') style="background-color: #00adef;" @endif href="{{app()->getLocale() == 'fr' ? "#" : url('locale/fr')}}" title="{{__('French')}}">{{__('Fr')}}</a></li>
                    <li><a @if(app()->getLocale() == 'ar') style="background-color: #00adef;" @endif href="{{app()->getLocale() == 'ar' ? "#" : url('locale/ar')}}" title="{{__('Arabic')}}">{{__('Ar')}}</a></li>
                </ul>
            </div>
            <div class="col-lg-4 align-self-center">
                <div class="logo">
                    <a href="{{url('demo')}}"><img src="{{asset('images/logo_'.app()->getLocale().'.png')}}" style="width: 100%" alt="" ></a>
                </div>
            </div>
            <div class="col-lg-4 align-self-center">
                <ul style="list-style: none; float: right;">
                    <li style="background: #1e1e1e;width: 150px;text-align: center;padding: 5px;border-radius: 20px;">
                        <a class="newest-acts-link" href="{{url('/demo/page/calendar')}}">
                            {{__('Planned Activities')}}
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
                <a href="#"><img style="width: 200px;height: 44px !important;" src="{{asset('images/logo_'.app()->getLocale().'.png')}}" alt=""></a>
            </div>
            <div class="header-nav">
                <ul class="main-menu">
                    <li @if(app()->getLocale() == "ar") style="margin-left: 60px;" @endif>
                        <a href="{{url('demo')}}">{{__('Home')}}</a>
                    </li>
                    @foreach($categories as $cat)
                        @if($cat->subs()->count())
                            <li class="menu-item-has-children"><a href="#">{{$cat->name}}</a>
                                <ul class="sub-menu">
                                    @foreach($cat->subs as $sub)
                                        @if($sub->subs()->count())
                                            <li class="menu-item-has-children"><a href="{{url('/demo/page/'.$sub->link)}}">{{$sub->name}}</a>
                                                <ul class="sub-menu">
                                                    @foreach($sub->subs as $child)
                                                        <li><a href="{{url('/demo/page/'.$child->link)}}">{{$child->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li><a href="{{url('/demo/page/'.$sub->link)}}">{{$sub->name}}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>

                        @else
                            <li><a href="{{url('/demo/page/'.$cat->link)}}">{{$cat->name}}</a></li>
                        @endif
                    @endforeach
                    <li class="menu-item-has-children"><a href="#">{{__('Contact')}}</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('contact')}}">{{__('Contact Us')}}</a></li>
                            <li><a href="{{route('our-mission')}}">{{__('Our Mission')}}</a></li>
                            <li><a href="{{route('our-resumes')}}">{{__('Our Resumes')}}</a></li>
                            <li><a href="{{route('our-status')}}">{{__('Our Status')}}</a></li>
                        </ul>
                    </li>
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

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="footer-title">{{__('Topics')}}</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="#">{{__('Politics')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="#">{{__('Economics')}}</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="footer-title">{{__('Regions')}}</span>
                    </li>
                    @foreach(\App\Category::where('name_en','Regions')->first()->subs as $cat)
                        <li class="nav-item">
                            <a class="nav-link footer-link" href="{{url('/demo/page/'.$cat->link)}}">{{$cat->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="footer-title ">{{__('About TCIR')}}</span>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contact')}}" class="nav-link footer-link">{{__('Contact Us')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="{{route('our-resumes')}}">{{__('Our Resumes')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="{{route('our-mission')}}">{{__('Our Mission')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link footer-link" href="{{route('our-status')}}">{{__('Our Status')}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row pb-0">
            <div class="col-md-12">
                <ul style="list-style:none;float: left;">
                    <li style="color: #fff;font-size: 13px;"><i class="fa fa-map-marker"></i> R12 , Rue du bourgogne, Menzah</li>
                    <li style="color: #fff;font-size: 13px;"><i class="fa fa-phone"></i> 71784346</li>
                </ul>
                <ul class="social-icons" style="float: right;list-style: none;display: inline-flex">
                    <li><a href="#"><i class="my-footer-icon fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="my-footer-icon fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="my-footer-icon fa fa-linkedin"></i></a></li>
                    <li><a href="mailto:admin@tcir.org"><i class="my-footer-icon fa fa-envelope" ></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- Scripts -->
<script src="{{asset('scripts/vendors/jquery-3.4.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    function showCv(id) {
        $('#' + id).modal('show');
    }
</script>
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
@yield('jspage')
<script src="{{asset('scripts/main.js')}}"></script>

</body>
</html>
