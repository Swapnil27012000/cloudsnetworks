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

        <!-- breadcrumb-area-start -->
        <div class="tg-breadcrumb-area tg-breadcrumb-height tg-breadcrumb-overley black-bg p-relative"
            data-background="assets/img/breadcrumb/breadcrumb-1-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tg-breadcrumb__content z-index-3 text-center">
                            <h3 class="tg-breadcrumb__title">About Us</h3>
                            <div class="tg-breadcrumb__list">
                                <span><a href="index.php">Home</a></span>
                                <span class="dvdr"><i class="fa-solid fa-chevron-right"></i></span>
                                <span>About Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- about-area-start -->
        <div class="tg-about-area tg-about-inner-style fix p-relative pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">         
                    <div class="col-xl-6 col-lg-6  wow tgfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="tg-about-right-box">
                            <div class="tg-about-title-box mb-15">
                                <span class="tg-section-subtitle">About Our Company</span>
                                <h4 class="tg-section-title">Elevate Your <br> Business with IT Solutions</h4>
                            </div>
                            <div class="tg-about-text mb-40">
                                <p>We have been operating for over a decade, providing top-notch services to our clients and building a strong track record in the industry.We have been operating  </p>
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
                    <div class="col-xl-6 col-lg-6  wow tgfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="tg-about-left">
                            <div class="tg-about-thumb-box text-center text-lg-end p-relative">
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
                </div>
            </div>
        </div>
        <!-- about-area-end -->

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
                                                    <h4 class="tg-testimonial-avata-name">Dianne Russell</h4>
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
                                                    <h4 class="tg-testimonial-avata-name">Eleanor Pena</h4>
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
                                                    <h4 class="tg-testimonial-avata-name">Eleanor Pena</h4>
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

        <!-- expart area start -->
        <div class="tg-exp-2-area pt-110">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-6">
                        <div class="tg-exp-2-title-box text-center mb-50">
                            <span class="tg-section-subtitle">Digital Solutions</span>
                            <h4 class="tg-section-title">Drive Efficiency with IT the Expertise </h4>
                        </div>
                    </div>
                </div>
                <div class="tg-exp-2-main-wrap">
                    <div class="row">
                        <div class="col-xl-12 mb-30  wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <div class="tg-exp-2-item p-relative">
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-5 col-md-8">
                                        <div class="tg-exp-content">
                                            <h4 class="tg-exp-title-sm"><a href="#">Web Development</a></h4>
                                            <p>Information Technology is a broad category that encompasses various
                                                technologies</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-7 col-md-4">
                                        <div class="tg-exp-2-right d-flex justify-content-md-end justify-content-start align-items-center">
                                            <div class="tg-exp-2-button d-none d-lg-block">
                                                <a class="tg-btn-grey-border" href="service-details.php">
                                                    <span>
                                                        Read More
                                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                                fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="tg-exp-2-thumb">
                                                <a href="project-details.php"><img src="assets/img/exprience/exp-3-1.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 mb-30  wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <div class="tg-exp-2-item p-relative">
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-5 col-md-8">
                                        <div class="tg-exp-content">
                                            <h4 class="tg-exp-title-sm"><a href="#">Strategy Planning</a></h4>
                                            <p>Information Technology is a broad category that encompasses various
                                                technologies</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-7 col-md-4">
                                        <div class="tg-exp-2-right d-flex justify-content-md-end justify-content-start align-items-center">
                                            <div class="tg-exp-2-button d-none d-lg-block">
                                                <a class="tg-btn-grey-border" href="service-details.php">
                                                    <span>
                                                        Read More
                                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                                fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="tg-exp-2-thumb">
                                                <a href="project-details.php"><img src="assets/img/exprience/exp-3-2.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 mb-30  wow tgfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tg-exp-2-item p-relative">
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-5 col-md-8">
                                        <div class="tg-exp-content">
                                            <h4 class="tg-exp-title-sm"><a href="#">IT Outsourcing</a></h4>
                                            <p>Information Technology is a broad category that encompasses various
                                                technologies</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-7 col-md-4">
                                        <div class="tg-exp-2-right d-flex justify-content-md-end justify-content-start align-items-center">
                                            <div class="tg-exp-2-button d-none d-lg-block">
                                                <a class="tg-btn-grey-border" href="service-details.php">
                                                    <span>
                                                        Read More
                                                        <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                                fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="tg-exp-2-thumb">
                                                <a href="project-details.php"><img src="assets/img/exprience/exp-3-3.png" alt=""></a>
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
        <!-- expart area end -->

        <!-- brand area start -->
        <div class="tg-brad-area pt-90 pb-125">
            <div class="container custom-container-1 fix">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-brand-slider-wrap">
                            <div class="swiper-container tg-brand-active">
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

        <!-- faq-area-start -->
        <div class="tg-faq-2-area pb-150 fix p-relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="tg-faq-2-left">
                            <div class="tg-faq-title-box mb-60">
                                <span class="tg-section-subtitle">Ask Question</span>
                                <h4 class="tg-section-title">Revolutionizing For Technology Future</h4>
                            </div>
                            <div class="tg-custom-accordion-2">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-items">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                What does an IT consulting firm do?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Distracted by the readable content of a page when looking at its layout io
                                                The point of using Lorem Ipsum is that it has a more
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-items">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-buttons collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                How can your IT services benefit my business?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse show"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Distracted by the readable content of a page when looking at its layout io
                                                The point of using Lorem Ipsum is that it has a more
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-items">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-buttons collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Do you offer cybersecurity services?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Distracted by the readable content of a page when looking at its layout io
                                                The point of using Lorem Ipsum is that it has a more
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-items">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-buttons collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                What is the process for developing custom software?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Distracted by the readable content of a page when looking at its layout io
                                                The point of using Lorem Ipsum is that it has a more
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6  wow tgfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="tg-faq-2-thumb-box text-center text-lg-end p-relative">
                            <div class="tg-faq-2-thumb">
                                <img src="assets/img/faq/faq-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq-area-end -->

        <!-- cta-area-start -->
        <div class="tg-cta-2-area p-relative z-index-4 pt-60">
            <div class="container">
                <div class="tg-cta-2-ptb p-relative">
                    <div class="tg-cta-2-bg d-none d-md-block">
                        <img src="assets/img/cta/thumb-bg-1.png" alt="">
                    </div>
                    <div class="tg-cta-2-wrapper fix">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7 col-md-7 offset-md-5 offset-lg-5 offset-xl-5">
                                <div class="tg-cta-2-content">
                                    <h4 class="tg-section-title mb-30">Stay <span>Connected</span> With Cutting Edge IT
                                    </h4>
                                    <div class="tg-cta-2-btn-box">
                                        <a href="contact.php" class="tg-btn-gradient">
                                            Get A Quato
                                            <span>
                                                <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                        fill="white"></path>
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
        </div>
        <!-- cta-area-end -->

    </main>

    <!-- start footer section -->
	<?php
	include('footer.php');
	?>
<!-- end footer section -->

    
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