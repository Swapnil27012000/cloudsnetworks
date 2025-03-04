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
                            <h3 class="tg-breadcrumb__title">Service Details</h3>
                            <div class="tg-breadcrumb__list">
                                <span><a href="index.php">Home</a></span>
                                <span class="dvdr"><i class="fa-solid fa-chevron-right"></i></span>
                                <span>Service Details</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- service-area-start -->
        <div class="tg-sv-details-area fix pt-120 pb-210">
            <div class="container">
                <div class="row gx-30">
                    <div class="col-xl-4 col-lg-4 order-1 order-lg-0">
                        <div class="tg-sv-sidebar-wrap">
                            <div class="tg-sv-sidebar-widget mb-65">
                                <h4 class="tg-sv-sidebar-title mb-30">Service lists</h4>
                                <div class="tg-sv-sidebar-list-box">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="tg-sv-sidebar-list-item d-flex justify-content-between align-items-center">
                                                    <span>TechPros</span>
                                                    <i class="fa-regular fa-angle-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="tg-sv-sidebar-list-item d-flex justify-content-between align-items-center">
                                                    <span> NetWorks</span>
                                                    <i class="fa-regular fa-angle-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="tg-sv-sidebar-list-item d-flex justify-content-between align-items-center">
                                                    <span> DataMasters</span>
                                                    <i class="fa-regular fa-angle-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                           <a href="#">
                                            <div class="tg-sv-sidebar-list-item d-flex justify-content-between align-items-center">
                                                <span>Dibetics section</span>
                                                <i class="fa-regular fa-angle-right"></i>
                                            </div>
                                           </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="tg-sv-sidebar-list-item d-flex justify-content-between align-items-center">
                                                    <span>DigitalSolutions</span>
                                                    <i class="fa-regular fa-angle-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="tg-sv-sidebar-list-item d-flex justify-content-between align-items-center">
                                                    <span>CodeGenius</span>
                                                    <i class="fa-regular fa-angle-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tg-sv-sidebar-widget mb-65">
                                <h4 class="tg-sv-sidebar-title mb-30">Popular Post</h4>
                                <div class="sidebar__post">
                                    <div class="rc__post mb-30 d-flex align-items-start">
                                       <div class="rc__post-thumb mr-20">
                                          <a href="blog-details.php"><img src="assets/img/blog/blog-sidebar-sm-1.jpg"
                                                alt=""></a>
                                       </div>
                                       <div class="rc__post-content">
                                          <div class="rc__meta">
                                             <span><i class="fa-solid fa-calendar-days"></i>14 June 2024</span>
                                          </div>
                                          <h3 class="rc__post-title">
                                             <a href="blog-details.php"> Connect Innovate Succeed the design</a>
                                          </h3>
                                       </div>
                                    </div>
                                    <div class="rc__post mb-30 d-flex align-items-start">
                                       <div class="rc__post-thumb mr-20">
                                          <a href="blog-details.php"><img src="assets/img/blog/blog-sidebar-sm-2.jpg"
                                                alt=""></a>
                                       </div>
                                       <div class="rc__post-content">
                                          <div class="rc__meta">
                                             <span><i class="fa-solid fa-calendar-days"></i>14 June 2024</span>
                                          </div>
                                          <h3 class="rc__post-title">
                                             <a href="blog-details.php">Elevate Your Business with IT the most  </a>
                                          </h3>
                                       </div>
                                    </div>
                                    <div class="rc__post mb-30 d-flex align-items-start">
                                       <div class="rc__post-thumb mr-20">
                                          <a href="blog-details.php"><img src="assets/img/blog/blog-sidebar-sm-3.jpg"
                                                alt=""></a>
                                       </div>
                                       <div class="rc__post-content">
                                          <div class="rc__meta">
                                             <span><i class="fa-solid fa-calendar-days"></i>14 June 2024</span>
                                          </div>
                                          <h3 class="rc__post-title">
                                             <a href="blog-details.php">Simplify IT for Enhanced Productivity</a>
                                          </h3>
                                       </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="tg-sv-sidebar-widget">
                                <h4 class="tg-sv-sidebar-title mb-30">Get in Toucht</h4>
                                <div class="tg-sv-sidebar-contact">
                                    <a href="tel:(+888)123456765">
                                        <i class="fa-solid fa-phone"></i>(+888) 123 456 765
                                    </a>
                                    <a href="mailto:infoname@mail.com">
                                        <i class="fa-solid fa-envelope"></i>infoname@mail.com
                                    </a>
                                    <span>
                                        <i class="fa-solid fa-clock"></i>Mon-Sun : 9AM-5PM
                                    </span>
                                    <a href="<?php echo $address_link ?>/@23.8370338,90.3623014,12z?entry=ttu" target="_blank">
                                        <i class="fa-solid fa-location-dot"></i>4140 Parker Rd. Allentown, <br> New Mexico 31134
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 order-0 order-lg-1">
                        <div class="tg-sv-details-wrap">
                            <div class="row gx-30">
                                <div class="col-xl-6 mb-30">
                                    <div class="tg-sv-details-thumb-sm">
                                        <img src="assets/img/service/details-1-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-30">
                                    <div class="tg-sv-details-content">
                                        <h5 class="tg-sv-details-title-sm mb-20">Simplify IT for Enhanced</h5>
                                        <p>Gng established fact th reader will be distracted by the readable content of a page when looking at its ainu layout io The poiof using Lorem Ipsum. is that it hasi a more- or-less normal distribution of letters loren ipsum text</p>
                                        <p>Lostablished fact that a reader will be distracted by the readable content of a page when looking at its ainu layout io The point of using</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-sv-details-list pb-55">
                                <ul>
                                    <li><i class="fa-solid fa-circle-check"></i>Your Startup industry standard our service decesion loream saum solar sysem in the world.</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Knew About Fonts text the printing and solar minimum best service in our.</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Mistakes To Avoid to the dummy printing solar system is the main power service.</li>
                                </ul>
                            </div>
                            <div class="tg-sv-details-thumb mb-30">
                                <img src="assets/img/service/details-1-2.jpg" alt="">
                            </div>
                            <div class="tg-sv-details-content">
                                <h5 class="tg-sv-details-title-sm mb-20">Simplify IT for Enhanced Productivity</h5>
                                <p>Distracted by the readable content of a page when looking at its layout io The point of using Lorem Ipsum is that it has a more-iso or-less normal distribution of letters, as opposed to using It is is a long established to th fact that anni reader will be distracted by the readable content</p>
                                <p>Distracted by the readable content of a page when looking at its layout io The point of using Lorem Ipsum is that it has a more- or-less normal distribution of letters</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service-area-end -->
        
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