<!doctype html>
<html lang="zxx">

<head>
    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $identitywebsite->meta_description }}">
    <meta name="keywords" content="{{ $identitywebsite->meta_keyword }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="{{ $identitywebsite->og_title }}" />
    <meta property="og:image" content="{{ asset('/storage') . '/' . $identitywebsite->og_image }}" />
    <meta property="og:description" content="{{ $identitywebsite->og_description }}">
    <meta name="og:site_name" content="{{ $identitywebsite->og_sitename }}">
    <!-- page title -->
    <title>{{ $identitywebsite->name_website }}</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/storage') . '/' . $identitywebsite->favicon }}" type="image/x-icon">
    {{-- <link rel="shortcut icon" href="{{ asset('tamai') }}/assets/img/favicon.png" type="image/x-icon"> --}}
    <!--All Css here -->
    <!--Bootstrap v3.3.7 css-->
    <link rel="stylesheet" href="{{ asset('tamai') }}/assets/bootstrap/css/bootstrap.min.css">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('tamai') }}/assets/css/font-awesome.min.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{ asset('tamai') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('tamai') }}/assets/css/owl.theme.default.min.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('tamai') }}/assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('tamai') }}/assets/css/animate.css">
    <!-- normalize css -->
    <link rel="stylesheet" href="{{ asset('tamai') }}/assets/css/normalize.css">
    <!--main style css-->
    <link rel="stylesheet" href="{{ asset('tamai') }}/assets/css/main.css">
    <!--Responsive css-->
    <link rel="stylesheet" href="{{ asset('tamai') }}/assets/css/responsive.css">
    <!-- modernizr js -->
    <script src="{{ asset('tamai') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Start Preloader Area-->
    <div class="preloader-area">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div><!-- End Preloader Area-->
    <!-- Start header area -->
    <header id="header-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('landing') }}"><img
                        src="{{ asset('/storage') . '/' . $identitywebsite->logo }}"
                        alt="{{ $identitywebsite->name_website }}" style="height: 50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span></button>
                <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="page-scroll nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="#copy-trade">Copy Trades</a></li>
                        <li class="nav-item d-none"><a class="page-scroll nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item d-none"><a class="page-scroll nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="#layanan-kami">Layanan Kami</a></li>
                        <li class="nav-item d-none"><a class="page-scroll nav-link" href="#blog">Blog</a></li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--End header area -->
    <!-- Start banner section -->
    <section class="banner" id="home">
        <div class="tamai-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="welcome-area text-center">
                        <div class="welcome-text">
                            <h2>{{ $identitywebsite->title }}</h2>
                            <h6>{{ $identitywebsite->content }}</h6>
                        </div>
                        <div class="row justify-content-center">
                            <div class="welcome-btn m-1 mt-4">
                                {!! $identitywebsite->button !!}
                            </div>
                            @foreach ($identityTelp as $row)
                                <div class="welcome-btn m-1 mt-4">
                                    <a href="https://api.whatsapp.com/send/?phone={{ $row->number }}&text={{ $row->name_number }}"
                                        target="_blank" class="tamai-btn">{{ $row->name_number }}</a>
                                </div>
                            @endforeach
                        </div>
                        {{-- {!! $identitywebsite->button !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End banner section -->
    <!-- Start About-us section -->
    <section class="about-us section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tamai-header text-center">
                        <h2>About <span>XTREAMFOREX</span></h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tenetur eveniet earum odio rem.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-inifo">
                        {{-- <h2>Welcome to Tamai</h2> --}}
                        <p>XtreamForex adalah Broker ECN dengan Pertumbuhan Tercepat yang dioperasikan oleh Xtream
                            Markets Ltd.
                            Kami terdaftar dan diatur oleh Pulau Marshall. XtreamForex menyediakan layanan perdagangan
                            di Forex,
                            komoditas, indeks, saham, dan cryptocurrency..</p>
                        <p>Dengan kondisi perdagangan terbaik, kami menawarkan kepada Anda variasi akun yang tak
                            tertandingi
                            jenis, platform, dan perangkat yang dapat disesuaikan pelanggan dengan nyaman dan efisien
                            pengalaman perdagangan.</p>
                    </div>
                    <div class="about-btn">
                        <a href="#contact" class="tamai-btn page-scroll ">Contact us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        {{-- <img src="{{ asset('tamai') }}/assets/img/about-right.jpg" class="img-fluid" alt=""> --}}
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1RE1q-2EoAg?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About-us section -->
    <!-- Start Gallery -->
    <section class="service section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tamai-header text-center">
                        <h2>Gallery <span>Foto</span></h2>
                    </div>
                </div>
            </div>
            <div class="row slider">
                @foreach ($gallery as $row)
                    <div class="col-md-12">
                        <img src="{{ asset('/storage') . '/' . $row->gallery_name }}" alt="" width="100%"
                            class="img-thumbnail">
                        {{-- <img src="{{ asset('/storage') . '/' . $item->photo }}" class="img-fluid" alt=""> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Gallery -->
    <!--Start Features section -->
    <section class="features section-padding" id="layanan-kami">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tamai-header text-center">
                        <h2>Layanan <span>Kami</span></h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tenetur eveniet earum odio rem.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 no-padding">
                    <div class="features-img">
                        <img src="{{ asset('tamai') }}/assets/img/features.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="features-area">
                        <div id="accordion">
                            @foreach ($ourService as $row)
                                <div class="card f-bottom">
                                    <div class="card-header" id="heading{{ $row['id'] }}">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" class="text-bold"
                                                data-target="#collapse{{ $row['id'] }}" aria-expanded="false"
                                                aria-controls="collapse{{ $row['id'] }}">
                                                {{ $row['our_name_service'] }}
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse{{ $row['id'] }}" class="collapse"
                                        aria-labelledby="heading{{ $row['id'] }}" data-parent="#accordion">
                                        <div class="card-body">
                                            @if (!empty($row['detail_our_service']))
                                                @foreach ($row['detail_our_service'] as $det)
                                                    {!! $det->description !!} <br>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Features section -->
    <!-- Start Service section -->
    {{-- <section class="service section-padding" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tamai-header text-center">
                        <h2>Our <span>Service</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="tamai-box">
                        <div class="tamai-icon">
                            <i class="fa fa-university"></i>
                        </div>
                        <div class="tamai-details">
                            <h4>Pure STP ECN</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="tamai-box">
                        <div class="tamai-icon">
                            <i class="fa fa-shield"></i>
                        </div>
                        <div class="tamai-details">
                            <h4>Security of Funds</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="tamai-box">
                        <div class="tamai-icon">
                            <i class="fa fa-volume-control-phone"></i>
                        </div>
                        <div class="tamai-details">
                            <h4>Support 24/5</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="tamai-box">
                        <div class="tamai-icon">
                            <i class="fa fa-server"></i>
                        </div>
                        <div class="tamai-details">
                            <h4>No Dealing Desk</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="tamai-box">
                        <div class="tamai-icon">
                            <i class="fa fa-television"></i>
                        </div>
                        <div class="tamai-details">
                            <h4>Easy Funding or Withdraw</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="tamai-box">
                        <div class="tamai-icon">
                            <i class="fa fa-gavel"></i>
                        </div>
                        <div class="tamai-details">
                            <h4>Segregated Accounts</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Service section -->
    <!-- Start counter section -->
    {{-- <section class="project-area section-padding">
        <div class="tamai-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 offset-lg-1 col-sm-6">
                    <div class="countdown text-center">
                        <h6 class="text-white">Over</h6>
                        <h1 class="text-danger">1.5m+</h1>
                        <h6 class="text-white">Live Accounts Opened</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="countdown text-center">
                        <h6 class="text-white">MORE THAN</h6>
                        <h1 class="text-danger">5</h1>
                        <h6 class="text-white">YEAR IN BUSINESSOVER</h6>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-0 col-sm-6 offset-sm-3">
                    <div class="countdown text-center">
                        <h6 class="text-white">OVER</h6>
                        <h1 class="text-danger">2.5m+</h1>
                        <h6 class="text-white">REGISTERED ACCOUNTS</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="countdown text-center">
                        <h6 class="text-white">MORE THAN</h6>
                        <h1 class="text-danger">11+</h1>
                        <h6 class="text-white">SUPPORTED LANGUAGESOVER</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="countdown text-center">
                        <h6 class="text-white">MORE THAN</h6>
                        <h1 class="text-danger">120+</h1>
                        <h6 class="text-white">EMPLOYEES GLOBALLY</h6>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End counter section -->
    <!-- Start Our-work section -->
    <section class="about-us section-padding" id="copy-trade">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tamai-header text-center">
                        <h2>COPY TRADES WITH <span>XTREAMFOREX</span></h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tenetur eveniet earum odio rem.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7" style="padding-right: 70px">
                    <div class="about-inifo">
                        {{-- <h2>Welcome to Tamai</h2> --}}
                        <p class="text-danger" style="font-size: 40px; font-weight: 100">Most Convenient and Simplest
                            Way to Trade Forex</p>
                        <p>Program Copy Trading XtreamForex menawarkan kesempatan untuk secara otomatis menyalin
                            perdagangan dari trader sukses sehingga Anda tidak perlu menghabiskan banyak waktu untuk
                            mengembangkan strategi Anda sendiri.
                            Bergabunglah dengan program Copy Trading sekarang dan biarkan profesional terpilih bekerja
                            untuk Anda!</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-right">
                        {{-- <img src="{{ asset('img/landing/trades.jpg') }}" class="img-fluid" alt="trades"> --}}
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2KzJ1p_eN-A?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="our-work section-padding" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tamai-header text-center">
                            <h2>Our <span>Work</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tenetur eveniet earum odio rem.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="filters" class="button-group text-center">
                            <button class="btn btn-link is-checked" data-filter="*">All</button>
                            <button class="btn btn-link" data-filter=".web">Web design</button>
                            <button class="btn btn-link" data-filter=".graphics">Graphic Design</button>
                            <button class="btn btn-link" data-filter=".wordpress">Wordpress</button>
                            <button class="btn btn-link" data-filter=".photo">Photography</button>
                        </div>
                    </div>
                </div>
                <div class="row grid-area">
                    <div class="col-lg-4 col-md-6 col-sm-12 web single-item" data-category="transition">
                        <div class="portfolio-single-item">
                            <img src="{{ asset('tamai') }}/assets/img/portfolio1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-overlay">
                                <div class="w-zoom">
                                    <a href="{{ asset('tamai') }}/assets/img/portfolio1.jpg" class="portfolio-single"><i
                                    class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="w-link">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-4 col-md-6 col-sm-12 graphics single-item" data-category="transition">
                        <div class="portfolio-single-item">
                            <img src="{{ asset('tamai') }}/assets/img/portfolio2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-overlay">
                                <div class="w-zoom">
                                    <a href="{{ asset('tamai') }}/assets/img/portfolio2.jpg" class="portfolio-single"><i
                                    class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="w-link">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-4 col-md-6 col-sm-12 wordpress single-item" data-category="transition">
                        <div class="portfolio-single-item">
                            <img src="{{ asset('tamai') }}/assets/img/portfolio3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-overlay">
                                <div class="w-zoom">
                                    <a href="{{ asset('tamai') }}/assets/img/portfolio3.jpg" class="portfolio-single"><i
                                    class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="w-link">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-4 col-md-6 col-sm-12 photo single-item" data-category="transition">
                        <div class="portfolio-single-item">
                            <img src="{{ asset('tamai') }}/assets/img/portfolio4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-overlay">
                                <div class="w-zoom">
                                    <a href="{{ asset('tamai') }}/assets/img/portfolio4.jpg" class="portfolio-single"><i
                                    class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="w-link">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-4 col-md-6 col-sm-12 web wordpress single-item" data-category="transition">
                        <div class="portfolio-single-item">
                            <img src="{{ asset('tamai') }}/assets/img/portfolio5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-overlay">
                                <div class="w-zoom">
                                    <a href="{{ asset('tamai') }}/assets/img/portfolio5.jpg" class="portfolio-single"><i
                                    class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="w-link">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-4 col-md-6 col-sm-12 photo graphics single-item" data-category="transition">
                        <div class="portfolio-single-item">
                            <img src="{{ asset('tamai') }}/assets/img/portfolio6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-overlay">
                                <div class="w-zoom">
                                    <a href="{{ asset('tamai') }}/assets/img/portfolio6.jpg" class="portfolio-single"><i
                                    class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="w-link">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!--End Our-work section -->
    <!-- Start Tamai-video section -->
    {{-- <section class="tamai-video section-padding">
        <div class="tamai-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-area text-center">
                        <a class="video-play" href="https://www.youtube.com/watch?v=C1d8COfUueI"><i
                                class="fa fa-play"></i></a>
                        <h4>Watch video</h4>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Tamai-video section -->
    <!-- Start Pricing section -->
    <section class="pricing section-padding" id="pricing">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="tamai-header text-center">
                        <h2>Pricing <span>plan</span></h2>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                @foreach ($paketeas as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-table">
                            <div class="pricing-head">
                                <h3>{{ $item->name_deposit }}</h3>
                            </div>
                            <div class="price-tag">
                                <h2> Deposit</h2>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>
                                        <p class="font-weight-bolder">Low Risk : ${{ $item->low_risk }}</p>
                                    </li>
                                    <li>
                                        <p class="font-weight-bolder">Medium Risk : ${{ $item->medium_risk }}</p>
                                    </li>
                                    <li>
                                        <p class="font-weight-bolder">High Risk : ${{ $item->high_risk }}</p>
                                    </li>
                                    <li style="font-size: 10px; font-weight: bold">Batas Kerugian :
                                        {{ $item->loss_limit }}% dari deposit (max${{ $item->max_deposit }})</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="#" class="tamai-btn">Order</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Pricing section -->
    <!-- Start Team section -->
    {{-- <section class="team section-padding" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tamai-header text-center">
                            <h2>Our <span>team</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tenetur eveniet earum odio rem.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-area">
                            <div class="team-img">
                                <img src="{{ asset('tamai') }}/assets/img/team-1.jpg" class="img-fluid" alt="">
                                <div class="team-overlay">
                                    <div class="team-text">
                                        <h5>jhon doe</h5>
                                        <h6>founder/ceo</h6>
                                    </div>
                                    <div class="team-info">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-area">
                            <div class="team-img">
                                <img src="{{ asset('tamai') }}/assets/img/team-2.jpg" class="img-fluid" alt="">
                                <div class="team-overlay">
                                    <div class="team-text">
                                        <h5>Stefani Sanah</h5>
                                        <h6>co-founder</h6>
                                    </div>
                                    <div class="team-info">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-area">
                            <div class="team-img">
                                <img src="{{ asset('tamai') }}/assets/img/team-3.jpg" class="img-fluid" alt="">
                                <div class="team-overlay">
                                    <div class="team-text">
                                        <h5>Dennis Evans</h5>
                                        <h6>Web developer</h6>
                                    </div>
                                    <div class="team-info">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-area">
                            <div class="team-img">
                                <img src="{{ asset('tamai') }}/assets/img/team-4.jpg" class="img-fluid" alt="">
                                <div class="team-overlay">
                                    <div class="team-text">
                                        <h5>Maria Ross</h5>
                                        <h6>Business Developer</h6>
                                    </div>
                                    <div class="team-info">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!--End Team section -->
    <!-- Start Testimonial section -->
    <section class="testimonial section-padding" id="testimonial">
        <div class="tamai-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tamai-header overlay-text text-center">
                        <h2>Client <span>Review</span></h2>
                        <p>Beberapa testimoni client kami yang telah kerjasama</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="review-slide owl-carousel">
                        @foreach ($testimonis as $item)
                            <div class="testimonial-area text-center">
                                <div class="member">
                                    <img src="{{ asset('/storage') . '/' . $item->photo }}" class="img-fluid" alt="">
                                    <h5>{{ $item->name }}</h5>
                                    <span>{{ $item->position }}</span>
                                </div>
                                <div class="review-text">
                                    <p>{{ $item->content }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Testimonial section -->
    <!-- Start Tamai-faq section -->
    {{-- <section class="tamai-faq section-padding">
            <div class="container">
                <div class="row">
                    <div class="tamai-header text-center">
                        <h2>F.<span>A</span>.Q</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tenetur eveniet earum odio rem.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div id="accordion2">
                                <div class="card f-bottom">
                                    <div class="card-header" id="heading1">
                                        <h5 class="mb-0"><a class="btn" data-toggle="collapse" data-target="#one" aria-expanded="true" aria-controls="one">
                                          Web Development
                                            <i class="fa fa-angle-down"></i>
                                            <i class="fa fa-angle-up"></i>
                                        </a></h5>
                                    </div>
                                    <div id="one" class="collapse" aria-labelledby="heading1" data-parent="#accordion2">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        </div>
                                    </div>
                                </div>
                                <div class="card f-bottom">
                                    <div class="card-header" id="heading2">
                                        <h5 class="mb-0"><a class="btn collapsed" data-toggle="collapse" data-target="#Two" aria-expanded="false" aria-controls="Two">
                                          Graphics Design
                                            <i class="fa fa-angle-down"></i>
                                            <i class="fa fa-angle-up"></i>
                                        </a></h5>
                                    </div>
                                    <div id="Two" class="collapse show" aria-labelledby="heading2" data-parent="#accordion2">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        </div>
                                    </div>
                                </div>
                                <div class="card f-bottom">
                                    <div class="card-header" id="heading3">
                                        <h5 class="mb-0"><a class="btn collapsed" data-toggle="collapse" data-target="#Three" aria-expanded="false" aria-controls="Three">
                                          Digital Marketing
                                            <i class="fa fa-angle-down"></i>
                                            <i class="fa fa-angle-up"></i>
                                        </a></h5>
                                    </div>
                                    <div id="Three" class="collapse" aria-labelledby="heading3" data-parent="#accordion2">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="raq-right">
                            <img src="{{ asset('tamai') }}/assets/img/faq-right.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!--End Tamai-faq section -->
    <!-- Start Subscribe section -->
    {{-- <section class="subscribe section-padding">
            <div class="tamai-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tamai-header overlay-text text-center">
                            <h2>Subscribe <span>now</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tenetur eveniet earum odio rem.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="subscribe-area text-center">
                            <form class="mailchimp" >
                                <div class="form-group">
                                    <input type="email" class="form-control" name="subscribe" placeholder="Enter Your Email" id="subscriber-email" required>
                                    <button type="submit" class="email-btn"><i class="fa fa-paper-plane-o"></i>Subscrribe</button>
                                </div>
                                <div class="form-message">
                                    <h5 class="subscription-success"> </h5>
                                    <h5 class="subscription-error"> </h5>
                                    <label class="subscription-label" for="subscriber-email"></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!--End Subscribe section-->
    <!-- Start Blog section -->
    {{-- <section class="blog section-padding" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tamai-header text-center">
                            <h2>Latest <span>news</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tenetur eveniet earum odio rem.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-content">
                            <div class="blog-img">
                                <img src="{{ asset('tamai') }}/assets/img/blog-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="blog-text">
                                <h5 class="blog-title"><a href="#">Lorem ipsum dolor sit amet.</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos nihil, magni laborum rem consequatur obcaecati recusandae voluptates!</p>
                                <p class="admin">by  <a href="#">jhon doe</a> | 3 march 2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-content">
                            <div class="blog-img">
                                <img src="{{ asset('tamai') }}/assets/img/blog-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="blog-text">
                                <h5 class="blog-title"><a href="#">Lorem ipsum dolor sit amet.</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos nihil, magni laborum rem consequatur obcaecati recusandae voluptates!</p>
                                <p class="admin">by  <a href="#">jhon doe</a> | 3 march 2018</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-content">
                            <div class="blog-img">
                                <img src="{{ asset('tamai') }}/assets/img/blog-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="blog-text">
                                <h5 class="blog-title"><a href="#">Lorem ipsum dolor sit amet.</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos nihil, magni laborum rem consequatur obcaecati recusandae voluptates!</p>
                                <p class="admin">by  <a href="#">jhon doe</a> | 3 march 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- End Blog section -->
    <!-- Start Client section -->
    <section class="client section-padding">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="tamai-header text-center">
                        <h2>our <span>client</span></h2>
                    </div>
                </div>
            </div> --}}
            <div class="row responsive owl-carousel">
                <div class="text-center">
                    <div class="client-img">
                        <a href="#"><img src="{{ asset('img/ourclients/bca.svg') }}" alt="netteler"></a>
                    </div>
                </div>
                <div class="text-center">
                    <div class="client-img">
                        <a href="#"><img src="{{ asset('img/ourclients/mandiri.svg') }}" alt="skrill"></a>
                    </div>
                </div>
                <div class="text-center">
                    <div class="client-img">
                        <a href="#"><img src="{{ asset('img/ourclients/bni.png') }}" alt="visa hover"></a>
                    </div>
                </div>
                <div class="text-center">
                    <div class="client-img">
                        <a href="#"><img src="{{ asset('img/ourclients/bri.png') }}" alt="master card"></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Client section -->
    <!-- Start contact section -->
    <section class="contact section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tamai-header text-center">
                        <h2>contact <span>us</span></h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut tenetur eveniet earum odio rem.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center contact-bottom">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Address</h4>
                            <h6>{{ $identitywebsite->alamat }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Phone</h4>
                            <h6>{{ $identitywebsite->telepon }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <h6>{{ $identitywebsite->email }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-none">
                <div class="col-lg-6">
                    <div class="contact-area">
                        <div class="map-area">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div id="error" class="alert alert-danger" style="display: none">Msg Sending Failed</div>
                        <div id="success" class="alert alert-success" style="display: none">Msg Sending Success</div>
                        <form id="contact-form" method="post"
                            action="https://webtend.net/demo/html/tamai/send_mail.php">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Message" name="message"
                                    required></textarea>
                            </div>
                            <div class="send-btn">
                                <button type="submit" class="tamai-btn" value="submit">send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End contact section -->
    <!-- Start Footer area -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="footer-text">
                        {!! $identitywebsite->footer !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-social-link">
                        <ul>
                            <li><a href="https://www.facebook.com/{{ $identitywebsite->facebook }}"
                                    target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/{{ $identitywebsite->twitter }}" target="_blank"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/{{ $identitywebsite->instagram }}"
                                    target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer area -->
    <!--Scroll-up-->
    <a id="scroll-up"><i class="fa fa-angle-up"></i></a>
    <!-- jequery  -->
    <script src="{{ asset('tamai') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
    <!-- Bootstrap min.js  -->
    <script src="{{ asset('tamai') }}/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('tamai') }}/assets/bootstrap/js/popper.min.js"></script>
    <!-- Owl carousel js  -->
    <script src="{{ asset('tamai') }}/assets/js/owl.carousel.min.js"></script>
    <!-- isotope min.js  -->
    <script src="{{ asset('tamai') }}/assets/js/isotope.min.js"></script>
    <!-- imageloaded js-->
    <script src="{{ asset('tamai') }}/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- counterup js-->
    <script src="{{ asset('tamai') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('tamai') }}/assets/js/waypoints.min.js"></script>
    <!-- magnific-popup js  -->
    <script src="{{ asset('tamai') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- wow js -->
    <script src="{{ asset('tamai') }}/assets/js/wow.min.js"></script>
    <!-- gmaps js -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBOQMDDOsJA0uHTqXTDHUogDJfaTST7hNQ"></script>
    <!--ajax mail-chimp js-->
    <script src="{{ asset('tamai') }}/assets/js/jquery.ajaxchimp.min.js"></script>
    <!--main js-->
    <script src="{{ asset('tamai') }}/assets/js/main.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
</body>

</html>
