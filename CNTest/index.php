<?php 
require('database.php');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Clouds Networks - IT Solutions & Technology</title>
    <meta name="description" content="Nerko - NFT Portfolio Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/custom-animation.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
        </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
        </button>
    </div>
    <!-- back to top end -->

    <header>
        
        <!-- header-top-area start-->
        <div class="tg-header-top__area gradient-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9 col-7">
                        <div class="tg-header-top__info">
                            <ul>
                                <li>
                                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                                    <a href="<?php echo $address_link ?>" target="_blank"><?php echo $address_url ?></a>
                                </li>
                                <li class="d-none d-md-inline-block">
                                    <i class="fa-light fa-clock"></i>
                                    <span>Monday - Friday: 9 am - 5 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-5">
                        <div class="tg-header-top__social text-end">
                            <a href="<?php echo $youtube_url ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                            <a href="<?php echo $instagram_url ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="<?php echo $x_url ?>" target="_blank"><i class="fa-brands fa-x"></i></a>
                            <a href="<?php echo $linkedin_url ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top-area end-->

        <!-- header-area -start-->
        <div id="sticky-header" class="tg-header__area black-bg-2 tg-header__mob-space">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-5 col-md-5 col-6">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/img/logo/logo-white.png" alt="#">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-none d-xl-block">
                        <div class="tgmenu__wrap">
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu">
                                <nav class="tgmenu__nav">
                                    <ul class="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="service.php">Services</a></li>
                                        <li><a href="project.php">Projects</a></li>
                                        <li><a href="blog-single.php">Blog</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-7 col-md-7 col-6">
                        <div class="tgmenu__action-wrap d-flex justify-content-end">
                            <div class="tgmenu__action d-none d-sm-flex d-flex align-items-center">
                                <div class="tgmenu__icon">
                                    <span>
                                        <img src="assets/img/header/calling.png" alt="">
                                    </span>
                                </div>
                                <div class="tgmenu__content">
                                    <span>Need help?</span>
                                    <a href="tel:(+91)90288-64181">(+91) 90288-64181</a>
                                </div>
                            </div>
                            <div class="mobile-nav-toggler d-xl-none">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area-end -->

        <!-- Mobile Menu  -->
        <div class="tgmobile__menu">
            <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="fa-sharp fa-regular fa-xmark"></i></div>
                <div class="nav-logo">
                    <a href="index.php">
                        <img src="assets/img/logo/logo-white.png" alt="Nerko">
                    </a>
                </div>
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="<?php echo $youtube_url ?>"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="<?php echo $instagram_url ?>"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="<?php echo $x_url ?>"><i class="fab fa-x"></i></a></li>
                        <li><a href="<?php echo $linkedin_url ?>"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="tgmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->


    </header>

    <main>

        <!-- hero-area-start -->
        <div class="tg-hero-area tg-hero-ptb z-index theme-bg p-relative fix">
            <div class="tg-hero-shape-3 d-none d-md-block">
                <img src="assets/img/hero/shape-1-3.png" alt="">
            </div>
            <div class="tg-hero-shape-4">
                <img src="assets/img/hero/shape-1-4.png" alt="">
            </div>
            <div class="tg-hero-shape-5">
                <img src="assets/img/hero/shape-1-5.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-7 col-lg-8">
                        <div class="tg-hero-content z-index-9">
                            <div class="tg-hero-title-box mb-30">
                                <span class="tg-hero-subtitle wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">Innovative Features & Support</span>
                                <h1 class="tg-hero-title wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">Simplify IT Enhanced the Productivity</h1>
                            </div>
                            <div class="tg-hero-text mb-35 wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                <p>Information Technology is a broad category that encompasses <br> various technologies
                                    and practices Information </p>
                            </div>
                            <div class="tg-hero-button wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                                <a class="tg-btn-gradient" href="about-us.php">
                                    Read More
                                    <span>
                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-hero-thumb-box z-index">
                <div class="tg-hero-thumb" data-mask-src="assets/img/hero/vector-1.png">
                    <img src="assets/img/hero/hero-1-1.png" alt="">
                </div>
                <div class="tg-hero-shape-1 d-none d-md d-md-block">
                    <img src="assets/img/hero/shape-1-1.svg" alt="">
                </div>
                <div class="tg-hero-shape-2 d-none d-md d-md-block">
                    <img src="assets/img/hero/shape-1-2.svg" alt="">
                </div>
            </div>
        </div>
        <!-- hero-area-end -->

        <!-- feature-area-start -->
        <div class="tg-feature-area tg-feature-wrap z-index">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tg-feature-item text-center">
                            <div class="tg-feature-icon mb-15">
                                <span>
                                    <i class="flaticon-015-email"></i>
                                </span>
                            </div>
                            <h5 class="tg-feature-title">Elevate Your Business DataMasters</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="tg-feature-item text-center">
                            <div class="tg-feature-icon pl mb-15">
                                <span>
                                    <i class="flaticon-022-ssd"></i>
                                </span>
                            </div>
                            <h5 class="tg-feature-title">Simplify IT Enhanced WebWizard</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="tg-feature-item text-center">
                            <div class="tg-feature-icon mb-15">
                                <span>
                                    <i class="flaticon-029-webcam"></i>
                                </span>
                            </div>
                            <h5 class="tg-feature-title"> Unlock Your Business NetWorks</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                        <div class="tg-feature-item text-center">
                            <div class="tg-feature-icon pl mb-15">
                                <span>
                                    <i class="flaticon-036-smartphone"></i>
                                </span>
                            </div>
                            <h5 class="tg-feature-title">Experience the Future TechSupport</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature-area-end -->

        <!-- about-area-start -->
        <div class="tg-about-area fix p-relative pt-120 pb-120">
            <div class="tg-about-shape-1">
                <img src="assets/img/about/shape-1-1.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 order-1 order-lg-0  wow tgfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="tg-about-left">
                            <div class="tg-about-thumb-box p-relative">
                                <div class="tg-about-thumb">
                                    <img src="assets/img/about/about-1-1.jpg" alt="">
                                </div>
                                <div class="tg-about-thumb-sm">
                                    <img src="assets/img/about/about-1-2.jpg" alt="">
                                </div>
                                <div class="tg-about-experience-box">
                                    <div class="tg-about-experience d-flex align-items-center">
                                        <i>5+</i>
                                        <span>Years Of <br> experience</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 order-0 order-lg-1  wow tgfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="tg-about-right">
                            <div class="tg-about-title-box mb-15">
                                <span class="tg-section-subtitle">About Our Company</span>
                                <h4 class="tg-section-title">Elevate Your tech Business with IT Solutions</h4>
                            </div>
                            <div class="tg-about-text mb-40">
                                <p>We have been operating for over a decade, providing top-notch services to our clients
                                    and building a strong track record in the industry. We have been operating </p>
                            </div>
                            <div class="tg-hero-button">
                                <a class="tg-btn-gradient" href="about-us.php">
                                    Read More
                                    <span>
                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area-end -->

        <!-- service-area-start -->
        <div class="tg-service-area black-bg fix z-index pt-120 pb-120">
            <div class="container">
                <div class="tg-service-title-box mb-50">
                    <div class="row align-items-end">
                        <div class="col-xl-7 col-lg-7 col-md-7">
                            <div class="tg-service-title-box">
                                <span class="tg-section-subtitle-2">Innovative Features & Support</span>
                                <h4 class="tg-section-title text-white">Simplify IT for Enhanced the a Productivity</h4>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5">
                            <div class="tg-service-arrow-box text-md-end">
                                <button class="service-next">
                                    <span>
                                       <i class="fa-regular fa-arrow-left-long"></i>
                                    </span>
                                 </button>
                                 <button class="service-prev">
                                    <span>
                                       <i class="fa-regular fa-arrow-right-long"></i>
                                    </span>
                                 </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tg-service-slider-wrap">
                            <div class="swiper-container tg-service-active fix">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tg-service-item">
                                            <div class="tg-service-icon-box mb-30 d-flex justify-content-between">
                                                <div class="tg-service-icon">
                                                    <span>
                                                        <i class="flaticon-008-wifi"></i>
                                                    </span>
                                                </div>
                                                <div class="tg-service-number">
                                                    <span>
                                                        01
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="tg-service-content">
                                                <h4 class="tg-service-title mb-20"><a class="text-anim-3" href="service-details.php">Digital Solutions</a></h4>
                                                <p>Information Technology is a broad category that encompasses various
                                                    technologies and practices </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-service-item">
                                            <div class="tg-service-icon-box mb-30 d-flex justify-content-between">
                                                <div class="tg-service-icon">
                                                    <span>
                                                        <i class="flaticon-001-laptop"></i>
                                                    </span>
                                                </div>
                                                <div class="tg-service-number">
                                                    <span>
                                                        02
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="tg-service-content">
                                                <h4 class="tg-service-title mb-20"><a class="text-anim-3" href="service-details.php">Software Masters</a></h4>
                                                <p>Information Technology is a broad category that encompasses various
                                                    technologies and practices </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-service-item">
                                            <div class="tg-service-icon-box mb-30 d-flex justify-content-between">
                                                <div class="tg-service-icon">
                                                    <span>
                                                        <i class="flaticon-002-api"></i>
                                                    </span>
                                                </div>
                                                <div class="tg-service-number">
                                                    <span>
                                                        03
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="tg-service-content">
                                                <h4 class="tg-service-title mb-20"><a class="text-anim-3" href="service-details.php">Execution Business</a></h4>
                                                <p>Information Technology is a broad category that encompasses various
                                                    technologies and practices </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-service-item">
                                            <div class="tg-service-icon-box mb-30 d-flex justify-content-between">
                                                <div class="tg-service-icon">
                                                    <span>
                                                        <i class="flaticon-019-laptop"></i>
                                                    </span>
                                                </div>
                                                <div class="tg-service-number">
                                                    <span>
                                                        04
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="tg-service-content">
                                                <h4 class="tg-service-title mb-20"><a class="text-anim-3" href="service-details.php">Digi Coding</a></h4>
                                                <p>Information Technology is a broad category that encompasses various
                                                    technologies and practices </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service-area-end -->
        
        <!-- text slider-area-end -->
        <div class="tg-text-slider-area tg-text-slider-border black-bg fix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tg-text-slider-wrap">
                            <span>Revolutionizing Tech <i><img src="assets/img/service/star.png" alt=""></i> Cutting Edge <i><img src="assets/img/service/star.png" alt=""></i> Digital Solutions <i><img src="assets/img/service/star.png" alt=""></i>Revolutionizing Tech <i><img src="assets/img/service/star.png" alt=""></i> Cutting Edge <i><img src="assets/img/service/star.png" alt=""></i> Digital Solutions <i><img src="assets/img/service/star.png" alt=""></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- text slider-area-end -->

        <!-- project-area-start -->
        <div class="tg-project-area fix pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-8  wow tgfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="tg-project-left">
                            <div class="tg-project-title-box mb-15">
                                <span class="tg-section-subtitle">Latest Project</span>
                                <h4 class="tg-section-title">Empower Your Business</h4>
                            </div>
                            <div class="tg-project-text mb-40">
                                <p>Information Technology is a broad category that encompasses variou technologies and
                                    practices loren ipsum dummy text</p>
                            </div>
                            <div class="tg-project-button">
                                <a class="tg-btn-gradient" href="project-details.php">
                                    Read More
                                    <span>
                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8  wow tgfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="tg-project-thumb-wrap">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                    <div class="tg-project-2-thumb">
                                        <img src="assets/img/project/project-1-1.jpg" alt="">
                                        <div class="tg-project-2-content d-flex justify-content-between align-items-center">
                                            <h4 class="tg-project-2-title"><a class="text-anim-3" href="project-details.php">IT Services</a></h4>
                                            <div class="tg-project-2-icon">
                                                <a class="popup-image" href="assets/img/project/project-1-1.jpg"><i class="fa-regular fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                    <div class="tg-project-2-thumb">
                                        <img src="assets/img/project/project-1-2.jpg" alt="">
                                        <div class="tg-project-2-content d-flex justify-content-between align-items-center">
                                            <h4 class="tg-project-2-title"><a class="text-anim-3" href="project-details.php">IT Services</a></h4>
                                            <div class="tg-project-2-icon">
                                                <a class="popup-image" href="assets/img/project/project-1-2.jpg"><i class="fa-regular fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                    <div class="tg-project-2-thumb">
                                        <img src="assets/img/project/project-1-3.jpg" alt="">
                                        <div class="tg-project-2-content d-flex justify-content-between align-items-center">
                                            <h4 class="tg-project-2-title"><a class="text-anim-3" href="project-details.php">IT Services</a></h4>
                                            <div class="tg-project-2-icon">
                                                <a class="popup-image" href="assets/img/project/project-1-3.jpg"><i class="fa-regular fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                    <div class="tg-project-2-thumb">
                                        <img src="assets/img/project/project-1-4.jpg" alt="">
                                        <div class="tg-project-2-content d-flex justify-content-between align-items-center">
                                            <h4 class="tg-project-2-title"><a class="text-anim-3" href="project-details.php">IT Services</a></h4>
                                            <div class="tg-project-2-icon">
                                                <a class="popup-image" href="assets/img/project/project-1-4.jpg"><i class="fa-regular fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- project-area-end -->

        <!-- funfact area start -->
        <div class="tg-funfact-area z-index-1 p-relative">
            <div class="tg-funfact-bg"><span></span></div>
            <div class="tg-funfact-shape-2">
                <img src="assets/img/funfact/shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="tg-funfact-wrap p-relative">
                    <div class="tg-funfact-shape">
                        <img src="assets/img/funfact/shape.png" alt="">
                    </div>
                    <div class="row gx-0">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="tg-funfact-item text-center">
                                <i class="flaticon-009-laptop icon"></i>
                                <h5 class="tg-funfact-number"><i class="purecounter"
                                                data-purecounter-duration="1" data-purecounter-end="3">0</i>+</h5>
                                <span>Team member</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="tg-funfact-item text-center">
                                <i class="flaticon-016-sync icon"></i>
                                <h5 class="tg-funfact-number"><i class="purecounter"
                                                data-purecounter-duration="1" data-purecounter-end="2">0</i>+</h5>
                                <span>Winning award</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="tg-funfact-item text-center">
                                <i class="flaticon-030-laptop icon"></i>
                                <h5 class="tg-funfact-number"><i class="purecounter"
                                                data-purecounter-duration="1" data-purecounter-end="5">0</i>+</h5>
                                <span>Complete project</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="tg-funfact-item text-center">
                                <i class="flaticon-023-hifi icon"></i>
                                <h5 class="tg-funfact-number"><i class="purecounter"
                                                data-purecounter-duration="1" data-purecounter-end="5">0</i>+</h5>
                                <span>Client review</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- funfact area end -->

        <!-- expart area start -->
        <div class="tg-exp-area pt-80 pb-85 grey-bg">
            <div class="container">
                <div class="tg-exp-top-wrap">
                    <div class="row align-items-end">
                        <div class="col-xl-7 col-lg-7 col-md-6">
                            <div class="tg-exp-title-box">
                                <span class="tg-section-subtitle">Digital Solutions</span>
                                <h4 class="tg-section-title">Drive Efficiency with IT br the Expertise </h4>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div class="tg-exp-top-text">
                                <p>Information Technology is a broad category that the think a encompasses various
                                    technologies and practices </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tg-exp-main-wrap">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tg-exp-item tg-reveal-item p-relative active">
                                <a href="project-details.php">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-lg-8 col-md-8">
                                            <div class="tg-exp-content">
                                                <h4 class="tg-exp-title-sm">Web Development</h4>
                                                <p>Information Technology is a broad category that encompasses various
                                                    technologies </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-4 col-md-4">
                                            <div class="tg-exp-btn-box text-md-end">
                                                <span class="tg-btn-gradient-border">
                                                    <span>
                                                        Read More
                                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                                fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- <div class="tg-reveal-bg" data-background="assets/img/exprience/exp-1.png"></div> -->
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="tg-exp-item tg-reveal-item p-relative active">
                                <a href="project-details.php">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-lg-8 col-md-8">
                                            <div class="tg-exp-content">
                                                <h4 class="tg-exp-title-sm">UI/UX Design Experience</h4>
                                                <p>Information Technology is a broad category that encompasses various
                                                    technologies </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-4 col-md-4">
                                            <div class="tg-exp-btn-box text-md-end">
                                                <span class="tg-btn-gradient-border">
                                                    <span>
                                                        Read More
                                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                                fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- <div class="tg-reveal-bg" data-background="assets/img/exprience/exp-1.png"></div> -->
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="tg-exp-item tg-reveal-item tg-reveal-border p-relative active">
                                <a href="project-details.php">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-lg-8 col-md-8">
                                            <div class="tg-exp-content">
                                                <h4 class="tg-exp-title-sm">Digital Marketing</h4>
                                                <p>Information Technology is a broad category that encompasses various
                                                    technologies </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-4 col-md-4">
                                            <div class="tg-exp-btn-box text-md-end">
                                                <span class="tg-btn-gradient-border">
                                                    <span>
                                                        Read More
                                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                                fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- <div class="tg-reveal-bg" data-background="assets/img/exprience/exp-1.png"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- expart area end -->

        <!-- faq area start -->
        <div class="tg-faq-area fix pt-170 pb-170 p-relative">
            <div class="tg-faq-shape">
                <img src="assets/img/faq/shape.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-xl-6 col-lg-6">
                        <div class="tg-faq-thumb-wrap p-relative">
                            <div class="tg-faq-thumb-main">
                                <img src="assets/img/faq/faq.jpg" alt="">
                            </div>
                            <div class="tg-faq-thumb-sub">
                                <img src="assets/img/faq/faq-2.jpg" alt="">
                                <a class="video-play-btn popup-video" href="https://www.youtube.com/watch?v=PO_fBTkoznc"><i class="fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6  wow tgfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="tg-faq-title-box mb-25">
                            <span class="tg-section-subtitle">Some Faq</span>
                            <h4 class="tg-section-title">Empower Your with a the Technology</h4>
                        </div>
                        <div class="tg-custom-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            I'm a total beginner. Can I still follow along?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Your applicant may have limited help desk wexperience. In that case,
                                            look for applicants who are motivated to grow and have some transferable
                                            nibh finibus
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-buttons collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Which technical skills would you improve?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Your applicant may have limited help desk wexperience. In that case,
                                            look for applicants who are motivated to grow and have some transferable
                                            nibh finibus
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-buttons collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            What do Logical Drives do?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Your applicant may have limited help desk wexperience. In that case,
                                            look for applicants who are motivated to grow and have some transferable
                                            nibh finibus
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-buttons collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            What about our safety measures ?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Your applicant may have limited help desk wexperience. In that case,
                                            look for applicants who are motivated to grow and have some transferable
                                            nibh finibus
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq area end -->

        <!-- cta area start -->
        <div class="tg-cta-area p-relative fix z-index-2">
            <div class="tg-cta-shape-1-1">
                <img src="assets/img/cta/shape-1-1.png" alt="">
            </div>
            <div class="tg-cta-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="tg-cta-title-box">
                                <h4 class="tg-section-title text-white">Unleash the best Power of IT</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <form action="newsletter.php" method="POST">
                                <div class="tg-cta-input-box d-flex align-items-center">
                                    <input type="text" name="newsemail" placeholder="Enter Your Email">
                                    <button type="submit" name="newslettersubmit" class="tg-btn-white">
                                        Subscribe
                                        <span><i class="fa-solid fa-paper-plane"></i></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta area end -->

        <!-- testimonial area start -->
        <div class="tg-testimonial-area tg-testimonial-ptb black-bg p-relative z-index fix">
            <div class="tg-testimonial-shape">
                <img src="assets/img/testimonial/shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-7">
                        <div class="tg-testimonial-title-box text-center mb-65">
                            <span class="tg-section-subtitle text-white">CLIENTS REVIEWS</span>
                            <h4 class="tg-section-title text-white">Simplify Streamline Succeed IT </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tg-testimonial-slider-wrap p-relative">
                            <div class="tg-testimonial-arrow-box">
                                <button class="test-next">
                                    <span>
                                       <i class="fa-regular fa-arrow-left-long"></i>
                                    </span>
                                 </button>
                                 <button class="test-prev">
                                    <span>
                                       <i class="fa-regular fa-arrow-right-long"></i>
                                    </span>
                                 </button>
                            </div>
                            <div class="swiper-container tg-testimonial-active fix">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tg-testimonial-slider-item">
                                            <div class="tg-testimonial-avata-box mb-45 d-flex align-items-center">
                                                <div class="tg-testimonial-avata">
                                                    <img src="assets/img/testimonial/avata-1.png" alt="">
                                                </div>
                                                <div class="tg-testimonial-avata-info">
                                                    <h4 class="tg-testimonial-avata-name">Omkar Gurav</h4>
                                                    <span>Software Engineer</span>
                                                </div>
                                            </div>
                                            <div class="tg-testimonial-content p-relative">
                                                <p>Working with this company has been a game-changer for my thw
                                                    business. Their expertise and innovative approach have helped us
                                                    achieve remarkable growth Working with this company has been a
                                                    game-changer for my thw business</p>
                                                <img class="tg-testimonial-quote" src="assets/img/testimonial/quote.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-testimonial-slider-item">
                                            <div class="tg-testimonial-avata-box mb-45 d-flex align-items-center">
                                                <div class="tg-testimonial-avata">
                                                    <img src="assets/img/testimonial/avata-2.png" alt="">
                                                </div>
                                                <div class="tg-testimonial-avata-info">
                                                    <h4 class="tg-testimonial-avata-name">Swapnil Kamble</h4>
                                                    <span>Software Engineer</span>
                                                </div>
                                            </div>
                                            <div class="tg-testimonial-content p-relative">
                                                <p>Working with this company has been a game-changer for my thw
                                                    business. Their expertise and innovative approach have helped us
                                                    achieve remarkable growth Working with this company has been a
                                                    game-changer for my thw business</p>
                                                <img class="tg-testimonial-quote" src="assets/img/testimonial/quote.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tg-testimonial-slider-item">
                                            <div class="tg-testimonial-avata-box mb-45 d-flex align-items-center">
                                                <div class="tg-testimonial-avata">
                                                    <img src="assets/img/testimonial/avata-1.png" alt="">
                                                </div>
                                                <div class="tg-testimonial-avata-info">
                                                    <h4 class="tg-testimonial-avata-name">Sameer Kamble</h4>
                                                    <span>Software Engineer</span>
                                                </div>
                                            </div>
                                            <div class="tg-testimonial-content p-relative">
                                                <p>Working with this company has been a game-changer for my thw
                                                    business. Their expertise and innovative approach have helped us
                                                    achieve remarkable growth Working with this company has been a
                                                    game-changer for my thw business</p>
                                                <img class="tg-testimonial-quote" src="assets/img/testimonial/quote.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->

        <!-- brand area start -->
        <div class="tg-brad-area grey-bg pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-brand-slider-wrap">
                            <div class="swiper-container tg-brand-active fix">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tp-brand-item text-center">
                                            <img src="assets/img/brand/thumb-1-1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-brand-item text-center">
                                            <img src="assets/img/brand/thumb-1-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-brand-item text-center">
                                            <img src="assets/img/brand/thumb-1-3.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-brand-item text-center">
                                            <img src="assets/img/brand/thumb-1-4.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-brand-item text-center">
                                            <img src="assets/img/brand/thumb-1-5.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-brand-item text-center">
                                            <img src="assets/img/brand/thumb-1-6.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

        <!-- blog area start -->
        <div class="tg-blog-area fix p-relative pt-110 pb-90">
            <div class="tg-blog-shape-1">
                <img src="assets/img/blog/shape-1-1.png" alt="">
            </div>
            <div class="tg-blog-shape-2">
                <img src="assets/img/blog/shape-1-2.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="tg-blog-title-box text-center mb-55">
                            <span class="tg-section-subtitle">Our Latest Blog And News</span>
                            <h4 class="tg-section-title">Empower Your Business with Technology</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30  wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tg-blog-item">
                            <div class="tg-blog-thumb-box p-relative">
                                <div class="tg-blog-thumb">
                                    <a href="blog-details.php"><img src="assets/img/blog/blog-1-1.jpg" alt=""></a>
                                </div>
                                <div class="tg-blog-badge">
                                    <span>27 Feb 2024</span>
                                </div>
                            </div>
                            <div class="tg-blog-content">
                                <div class="tg-blog-meta mb-15">
                                    <span><i class="fa-regular fa-user"></i>By admin</span>
                                    <span><i class="fa-light fa-comments"></i>Comments (05)</span>
                                </div>
                                <h4 class="tg-blog-title pb-25"><a href="blog-details.php">Unleash the Power of IT Unlock Your Business</a></h4>
                                <div class="tg-blog-button">
                                    <a class="tg-btn-gradient" href="blog-details.php">
                                        Read More
                                        <span>
                                            <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                    fill="white" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30  wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="tg-blog-item">
                            <div class="tg-blog-thumb-box p-relative">
                                <div class="tg-blog-thumb">
                                    <a href="blog-details.php"><img src="assets/img/blog/blog-1-2.jpg" alt=""></a>
                                </div>
                                <div class="tg-blog-badge">
                                    <span>27 Feb 2024</span>
                                </div>
                            </div>
                            <div class="tg-blog-content">
                                <div class="tg-blog-meta mb-15">
                                    <span><i class="fa-regular fa-user"></i>By admin</span>
                                    <span><i class="fa-light fa-comments"></i>Comments (05)</span>
                                </div>
                                <h4 class="tg-blog-title pb-25"><a href="blog-details.php">Experience the Future of IT the Simplify IT for Enhanced </a></h4>
                                <div class="tg-blog-button">
                                    <a class="tg-btn-gradient" href="blog-details.php">
                                        Read More
                                        <span>
                                            <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                    fill="white" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30  wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="tg-blog-item">
                            <div class="tg-blog-thumb-box p-relative">
                                <div class="tg-blog-thumb">
                                    <a href="blog-details.php"><img src="assets/img/blog/blog-1-3.jpg" alt=""></a>
                                </div>
                                <div class="tg-blog-badge">
                                    <span>27 Feb 2024</span>
                                </div>
                            </div>
                            <div class="tg-blog-content">
                                <div class="tg-blog-meta mb-15">
                                    <span><i class="fa-regular fa-user"></i>By admin</span>
                                    <span><i class="fa-light fa-comments"></i>Comments (05)</span>
                                </div>
                                <h4 class="tg-blog-title pb-25"><a href="blog-details.php">Stay Ahead with Cutting-Edge IT Solutions</a></h4>
                                <div class="tg-blog-button">
                                    <a class="tg-btn-gradient" href="blog-details.php">
                                        Read More
                                        <span>
                                            <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                    fill="white" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->

        <!-- newsletter area start -->
        <div class="tg-newsletter-area tg-newsletter-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tg-newsletter-wrap theme-bg d-flex justify-content-between align-items-center">
                            <div class="tg-newsletter-title-box d-flex align-items-center">
                                <div class="tg-newsletter-icon d-none d-xl-block">
                                    <span><i class="flaticon-015-email"></i></span>
                                </div>
                                <h4 class="tg-section-title text-white">Stay Ahead with <br> a Cutting IT </h4>
                            </div>

                            <form action="newsletter.php" method="POST">
                                <div class="tg-cta-input-box p-relative">
                                    <input type="text" name="newsemail" placeholder="Enter Your Email">
                                    <button type="submit" name="newslettersubmit" class="tg-btn-white">
                                        Subscribe
                                        <span><i class="fa-solid fa-paper-plane"></i></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter area end -->

    </main>

    <footer>

        <!-- footer area start -->
        <div class="tg-footer-area fix p-relative z-index black-bg pt-80 pb-100">
            <div class="tg-footer-shape-1">
                <img src="assets/img/footer/shape-1-1.png" alt="">
            </div>
           <div class="container">
              <div class="row">
                 <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50  wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                    <div class="tg-footer-widget footer-col-1">
                       <div class="tg-footer-logo pb-15">
                          <a href="index.php"><img src="assets/img/logo/logo-white.png" alt=""></a>
                       </div>
                       <div class="tg-footer-text">
                            <p>Elevate your business with our comprehensive suite of software and IT services, designed to streamline operations, maximize efficiency, and empower your digital future.</p>
                       </div>
                       <div class="tg-footer-social">
                            <a href="<?php echo $youtube_url ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                            <a href="<?php echo $instagram_url ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="<?php echo $x_url ?>" target="_blank"><i class="fa-brands fa-x"></i></a>
                            <a href="<?php echo $linkedin_url ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                       </div>
                    </div>
                 </div>
                 <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50  wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                    <div class="tg-footer-widget footer-col-2">
                       <h4 class="tg-footer-widget-title">Useful Links</h4>
                       <div class="tg-footer-list">
                          <ul>
                             <li><a href="about-us.php"><i class="fa-regular fa-angle-right"></i>About Us</a></li>
                             <li><a href="teams.php"><i class="fa-regular fa-angle-right"></i>Our Team</a></li>
                             <li><a href="blog-single.php"><i class="fa-regular fa-angle-right"></i>Recent News</a></li>
                             <li><a href="project.php"><i class="fa-regular fa-angle-right"></i>Projects</a></li>
                             <li><a href="service.php"><i class="fa-regular fa-angle-right"></i>Our All Services</a></li>
                          </ul>
                       </div>
                    </div>
                 </div>
                 <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50  wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                    <div class="tg-footer-widget footer-col-3">
                        <h4 class="tg-footer-widget-title">Office Information</h4>
                       <div class="tg-footer-Office-info mb-20">
                        <span>
                            <a href="mailto:<?php echo $Contact_Email ?>"><i class="fa-solid fa-envelope"></i><?php echo $Contact_Email ?></a>
                        </span>
                          <span>
                             <a target="_blank" href="<?php echo $address_link ?>"><i class="fa-solid fa-location-dot"></i><?php echo $address_url ?></a>
                          </span>
                          <span>
                             <a href="tel:(+91) 90288-64181"><i class="fa-solid fa-phone"></i>(+91) 90288-64181</a>
                          </span>
                        </div>
                        <div class="tg-footer-Office-schedule">
                          <h6 class="mb-15">Open Hours :</h6>
                          <span>Monday - Friday: 9am - 5pm, <br>
                              Saturday - Sunday: Closed</span>
                        </div>
                    </div>
                 </div>
                 <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50  wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                    <div class="tg-footer-widget footer-col-4">
                        <h4 class="tg-footer-widget-title">Newsletter</h4>
                        <form action="newsletter.php" method="POST">
                            <div class="tg-footer-input-box">
                                <input type="email" name="newsemail" placeholder="Your Email...">
                                <button type="submit" name="newslettersubmit" class="tg-btn-gradient w-100 text-center">
                                    Read More
                                </button>
                            </div>
                        </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- footer area end -->
  
        <!-- copy-right area start -->
        <div class="tg-copyright-area black-bg">
           <div class="container">
              <div class="tg-copyright-border tg-copyright-ptb">
                 <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12  wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                       <div class="tg-copyright-left text-center text-md-start">
                          <p>Copyright@2024 Clouds Networks All Right Reserved</p>
                       </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12  wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                       <div class="tg-copyright-right text-center text-md-end">
                          <a class="text-anim-2" href="#">Trams & Condition</a>
                          <a class="text-anim-2" href="#">Privacy Policy</a>
                          <a class="text-anim-2" href="#">Contact Us</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- copy-right area end -->
  
    </footer>

    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/main.js"></script>
    
</body>

</html>