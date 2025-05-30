<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Description -->
    <meta name="description" content="">
    <meta name="author" content="Themeland">

    <!-- Title -->
    <title>Hostbit Domain Hosting Provider</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template/assets/img/favicon.png') }}">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">

    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/responsive.css') }}">
</head>

<body class="domain">
    <!--====== Preloader Area Start ======-->
    <div id="preloader">
        <!-- Hostbit Preloader -->
        <div id="hostbit-preloader" class="hostbit-preloader">
            <!-- Preloader Animation -->
            <div class="preloader-animation">
                <!-- Spinner -->
                <div class="spinner"></div>
                <!-- Loader -->
                <div class="loader">
                    <span data-text-preloader="H" class="animated-letters">H</span>
                    <span data-text-preloader="O" class="animated-letters">O</span>
                    <span data-text-preloader="S" class="animated-letters">S</span>
                    <span data-text-preloader="T" class="animated-letters">T</span>
                    <span data-text-preloader="B" class="animated-letters">B</span>
                    <span data-text-preloader="I" class="animated-letters">I</span>
                    <span data-text-preloader="T" class="animated-letters">T</span>
                </div>
                <p class="fw-5 text-center text-uppercase">Loading</p>
            </div>
            <!-- Loader Animation -->
            <div class="loader-animation">
                <div class="row h-100">
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Preloader Area End ======-->

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main overflow-hidden">
        <!-- ***** Header Start ***** -->
        <header id="header">
            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">
                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="index.html">
                        <img class="navbar-brand-regular" src="assets/img/logo/logo-white.png" alt="brand-logo">
                        <img class="navbar-brand-sticky" src="assets/img/logo/logo.png" alt="sticky brand-logo">
                    </a>
                    <div class="ml-auto"></div>
                    <!-- Navbar -->
                    <ul class="navbar-nav items">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">WordPress <i class="fas fa-angle-down ml-1"></i></a>
                            <ul class="dropdown-menu items">
                                <li class="nav-item">
                                    <a href="{{ url('/hosting-wordpress') }}" class="nav-link d-inline-flex">
                                        <i class="icon-home media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            WordPress Hosting
                                            <small class="d-block mt-1">Optimized solution for WordPress hosting</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/hosting-ecommerce') }}" class="nav-link d-inline-flex">
                                        <i class="icon-basket-loaded media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            eCommerce Hosting
                                            <small class="d-block mt-1">Built for Online stores</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Web Hosting <i class="fas fa-angle-down ml-1"></i></a>
                            <ul class="dropdown-menu items">
                                <li class="nav-item">
                                    <a href="{{ url('/hosting-shared') }}" class="nav-link d-inline-flex">
                                        <i class="icon-organization media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Shared Hosting
                                            <small class="d-block mt-1">For small to medium websites</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/hosting-vps') }}" class="nav-link d-inline-flex">
                                        <i class="icon-fire media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            VPS Hosting
                                            <small class="d-block mt-1">Dedicated resources to scale</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/hosting-email') }}" class="nav-link d-inline-flex">
                                        <i class="icon-envelope-open media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Email Hosting
                                            <small class="d-block mt-1">Promote your business with every outreach</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/hosting-dedicated') }}" class="nav-link d-inline-flex">
                                        <i class="icon-globe media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Dedicated Hosting
                                            <small class="d-block mt-1">Optimized for dedicated web server</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/hosting-cloud') }}" class="nav-link d-inline-flex">
                                        <i class="icon-cloud-upload media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Cloud Hosting
                                            <small class="d-block mt-1">For large scale projects</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/hosting-reseller') }}" class="nav-link d-inline-flex">
                                        <i class="icon-speedometer media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Reseller Hosting
                                            <small class="d-block mt-1">Increase your business to the world</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Domains <i class="fas fa-angle-down ml-1"></i></a>
                            <ul class="dropdown-menu items">
                                <li class="nav-item">
                                    <a href="{{ url('/domain-checker') }}" class="nav-link d-inline-flex">
                                        <i class="icon-magnifier media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Domain Checker
                                            <small class="d-block mt-1">Find a perfect domain name</small>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/domain-transfer') }}" class="nav-link d-inline-flex">
                                        <i class="icon-rocket media mr-3"></i>
                                        <span class="nav-link-item media-body">
                                            Domain Transfer
                                            <small class="d-block mt-1">Want to transfer your domain?</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Pages <i class="fas fa-angle-down ml-1"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Domains <i class="fas fa-angle-right ml-1"></i></a>
                                    <ul class="dropdown-menu items">
                                        <li class="nav-item">
                                            <a href="{{ url('/domain-checker') }}" class="nav-link d-inline-flex">
                                                <i class="icon-magnifier media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Domain Checker
                                                    <small class="d-block mt-1">Find a perfect domain name</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/domain-transfer') }}" class="nav-link d-inline-flex">
                                                <i class="icon-rocket media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Domain Transfer
                                                    <small class="d-block mt-1">Want to transfer your domain?</small>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Hosting <i class="fas fa-angle-right ml-1"></i></a>
                                    <ul class="dropdown-menu items">
                                        <li class="nav-item">
                                            <a href="{{ url('/hosting-shared') }}" class="nav-link d-inline-flex">
                                                <i class="icon-organization media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Shared Hosting
                                                    <small class="d-block mt-1">For small to medium websites</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/hosting-vps') }}" class="nav-link d-inline-flex">
                                                <i class="icon-fire media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    VPS Hosting
                                                    <small class="d-block mt-1">Dedicated resources to scale</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/hosting-email') }}" class="nav-link d-inline-flex">
                                                <i class="icon-envelope-open media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Email Hosting
                                                    <small class="d-block mt-1">Promote your business with outreach</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/hosting-dedicated') }}" class="nav-link d-inline-flex">
                                                <i class="icon-globe media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Dedicated Hosting
                                                    <small class="d-block mt-1">Optimized for dedicated web server</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/hosting-cloud') }}" class="nav-link d-inline-flex">
                                                <i class="icon-cloud-upload media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Cloud Hosting
                                                    <small class="d-block mt-1">For large scale projects</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/hosting-reseller') }}" class="nav-link d-inline-flex">
                                                <i class="icon-speedometer media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    Reseller Hosting
                                                    <small class="d-block mt-1">Increase your business to the world</small>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">WordPress <i class="fas fa-angle-right ml-1"></i></a>
                                    <ul class="dropdown-menu items">
                                        <li class="nav-item">
                                            <a href="{{ url('/hosting-wordpress') }}" class="nav-link d-inline-flex">
                                                <i class="icon-home media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    WordPress Hosting
                                                    <small class="d-block mt-1">Optimized solution for WordPress</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/hosting-ecommerce') }}" class="nav-link d-inline-flex">
                                                <i class="icon-basket-loaded media mr-3"></i>
                                                <span class="nav-link-item media-body">
                                                    eCommerce Hosting
                                                    <small class="d-block mt-1">Built for Online stores</small>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="{{ url('/datacenter') }}" class="nav-link">Data Center</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Affiliate</a></li>
                                <li class="nav-item"><a href="#" class="nav-link disabled">More Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Affiliates</a>
                        </li>
                    </ul>
                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                                <i class="fas fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-comment-alt"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Toggler -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="fas fa-bars toggle-icon m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action Button -->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="#" class="btn ml-lg-auto btn-bordered-white"><i class="fas fa-user contact-icon mr-md-2"></i>Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area domain-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <!-- Domain Content -->
                        <div class="domain-content section-heading text-center mb-0">
                            <h2 class="text-white">Transfer Your Domain</h2>
                            <p class="text-white my-3">Enter the domain that you would like to transfer to Hostbit</p>
                            <!-- Domain Form -->
                            <div class="domain-form m-auto">
                                <input type="email" class="form-control" placeholder="Enter your desired domain name">
                                <button type="submit" class="btn btn-bordered"><i class="fas fa-search mr-2"></i>Search</button>
                            </div>
                            <span class="text-white d-block mt-5">Looking for a new domain name? <a class="service-btn text-white" href="domain-checker.html">Try domain checker</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** Promo Area Start ***** -->
        <section class="section promo-area promo-1 ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Why transfer your domain?</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Promo -->
                        <div class="single-promo text-center p-3">
                            <i class="pe-7s-timer pe-5x"></i>
                            <h3 class="my-3">User-friendly control panel</h3>
                            <p>Hostbit offers a wide variety of tools to satisfy advanced user and website developer needs, all in one place.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Promo -->
                        <div class="single-promo text-center p-3">
                            <i class="pe-7s-chat pe-5x"></i>
                            <h3 class="my-3">24/7/365 Chat Support</h3>
                            <p>Professional and hands-on. Our team of experts will solve technical issues to get your websites up and running. Anytime.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Single Promo -->
                        <div class="single-promo text-center p-3">
                            <i class="pe-7s-timer pe-5x"></i>
                            <h3 class="my-3">Simply fast websites</h3>
                            <p>Website speed can slow or grow your business. Delight your visitors with a lightning fast website.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Promo Area End ***** -->

        <!-- ***** Service Area End ***** -->
        <section id="service" class="section service-area bg-indigo ptb_100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="section-heading mb-3">
                            <h2 class="text-white mb-3">Transfer your domain in 4 simple steps</h2>
                            <p class="text-white">Whether you are looking for a personal website hosting plan or a business website hosting plan, Hosting is the perfect solution for you. Our powerful website hosting services will not only help you achieve your overall website goals, but will also provide you with the confidence you need in knowing that you are partnered with a reliable and secure website hosting platform.</p>
                        </div>
                        <a href="#" class="btn btn-lg mt-4">Learn More</a>
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Content List -->
                        <ul class="content-list text-left pt-4 pt-md-0">
                            <!-- Single Content List -->
                            <li class="single-content-list media py-3">
                                <div class="content-icon pt-2 pr-4">
                                    <i class="fas fa-angle-double-right text-white"></i>
                                </div>
                                <div class="content-text media-body">
                                    <h3 class="text-white mb-2">Enter the domain name you want to transfer</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</p>
                                </div>
                            </li>
                            <!-- Single Content List -->
                            <li class="single-content-list media py-3">
                                <div class="content-icon pt-2 pr-4">
                                    <i class="fas fa-angle-double-right text-white"></i>
                                </div>
                                <div class="content-text media-body">
                                    <h3 class="text-white mb-2">Proceed with the purchase</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</p>
                                </div>
                            </li>
                            <!-- Single Content List -->
                            <li class="single-content-list media py-3">
                                <div class="content-icon pt-2 pr-4">
                                    <i class="fas fa-angle-double-right text-white"></i>
                                </div>
                                <div class="content-text media-body">
                                    <h3 class="text-white mb-2">Enter the EPP code and confirm transfer</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</p>
                                </div>
                            </li>
                            <!-- Single Content List -->
                            <li class="single-content-list media py-3">
                                <div class="content-icon pt-2 pr-4">
                                    <i class="fas fa-angle-double-right text-white"></i>
                                </div>
                                <div class="content-text media-body">
                                    <h3 class="text-white mb-2">Confirm domain transfer email</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Service Area End ***** -->

        <!-- ***** Content Area Start ***** -->
        <section class="section content-area ptb_100">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-12 col-lg-6">
                        <!-- Content Inner -->
                        <div class="content-inner">
                            <!-- Section Heading -->
                            <div class="section-heading mb-3">
                                <h2>To ensure successful domain transfer</h2>
                            </div>
                            <!-- Content List -->
                            <ul class="content-list">
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>Make sure it has been more than 60 days since the domain registration or last transfer</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>Check your domain status, it should not be in Pending Delete or Redemption status</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>Make sure you have access to the domain’s EPP code. Learn more about EPP</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                    <div class="content-text media-body">
                                        <span>Your Whois privacy protection should be disabled</span>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="service-btn mt-4">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                        <div class="content-thumb pt-5 pt-lg-0">
                            <img src="assets/img/content/content_thumb.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Content Area End ***** -->

        <!--====== Call To Action Area Start ======-->
        <section class="section cta-area bg-indigo ptb_100">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center m-0">
                            <h2 class="text-white">Ready to get Started?</h2>
                            <p class="text-white d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="text-white d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                            <a class="btn btn-lg mt-4" href="#">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Call To Action Area End ======-->

        <!--====== Footer Area Start ======-->
        <footer class="section footer-area bg-dark">
            <!-- Footer Top -->
            <div class="footer-top ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- Footer Items -->
                                    <div class="footer-items">
                                        <!-- Footer Title -->
                                        <h3 class="footer-title text-uppercase mb-2">Products</h3>
                                        <ul>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Shared Hosting</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">WordPress Hosting</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">VPS Hosting</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Dedicated Hosting</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Reseller Hosting</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- Footer Items -->
                                    <div class="footer-items">
                                        <!-- Footer Title -->
                                        <h3 class="footer-title text-uppercase text-white mb-2">Programs</h3>
                                        <ul>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">WordPress</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Affiliates</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Marketing Services</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">WordPress Guide</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Professional Email</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Register Domains</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Transfer Domains</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Manage Domains</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- Footer Items -->
                                    <div class="footer-items">
                                        <!-- Footer Title -->
                                        <h3 class="footer-title text-uppercase mb-2">Company</h3>
                                        <ul>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">About</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Careers</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Contact</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Terns of Service</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Privacy</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Blog</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Sitemap</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- Footer Items -->
                                    <div class="footer-items">
                                        <!-- Footer Title -->
                                        <h3 class="footer-title text-uppercase mb-2">Support</h3>
                                        <ul>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Live Chat</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Knowledge Base</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Customer Portal</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Support Portal</a></li>
                                            <li class="py-2"><a class="link-hover text-white-50" href="#">Video Tutorials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items pt-4 pt-lg-0">
                                <!-- Footer Title -->
                                <h3 class="footer-title text-uppercase mb-2">Follow Us</h3>
                                <p class="text-white-50 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quae.</p>
                                <!-- Social Icons -->
                                <ul class="social-icons list-inline pt-2">
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left text-white-50">&copy; 2021 Hostbit All rights reserved.</div>
                                <!-- Copyright Right -->
                                <div class="copyright-right text-white-50">Made with <i class="fas fa-heart"></i> By <a href="#">Themeland</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->

        <!--====== Modal Search Area Start ======-->
        <div id="search" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Search <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 align-self-center">
                                <div class="row">
                                    <div class="col-12 pb-3">
                                        <h2 class="search-title mb-3">What are you looking for?</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group">
                                        <input type="text" class="form-control" placeholder="Enter your keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group align-self-center">
                                        <button class="btn btn-bordered mt-3">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Search Area End ======-->

        <!--====== Modal Responsive Menu Area Start ======-->
        <div id="menu" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Responsive Menu Area End ======-->
    </div>


    <!-- ***** All jQuery Plugins ***** -->

   <!-- jQuery -->
    <script src="{{ asset('template/assets/js/jquery/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('template/assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('template/assets/js/plugins/plugins.min.js') }}"></script>

    <!-- Active js -->
    <script src="{{ asset('template/assets/js/active.js') }}"></script>

</body>

</html>