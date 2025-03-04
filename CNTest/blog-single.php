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
                            <h3 class="tg-breadcrumb__title">Blog</h3>
                            <div class="tg-breadcrumb__list">
                                <span><a href="index.php">Home</a></span>
                                <span class="dvdr"><i class="fa-solid fa-chevron-right"></i></span>
                                <span>Blog</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- blog-details-area-start -->
        <div class="tg-blog-details-area fix pt-120 pb-100">
            <div class="container">
                <div class="row gx-30">
                    <div class="col-xl-8 col-lg-8">
                        <div class="postbox__left">
                            <article>
                                <div class="postbox__wrap mb-60">
                                    <div class="postbox__thumb mb-25 p-relative">
                                        <img src="assets/img/blog/details-1-1.jpg" alt="">
                                        <div class="postbox__meta">
                                            <span>31 December,2023</span>
                                            <span>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.85052 2.80038C3.64282 2.80038 3.43979 2.86197 3.26709 2.97736C3.0944 3.09275 2.9598 3.25676 2.88032 3.44865C2.80083 3.64053 2.78004 3.85168 2.82056 4.05539C2.86108 4.25909 2.96109 4.44621 3.10796 4.59308C3.25482 4.73994 3.44194 4.83996 3.64564 4.88048C3.84935 4.921 4.0605 4.9002 4.25239 4.82072C4.44427 4.74123 4.60828 4.60664 4.72367 4.43394C4.83907 4.26125 4.90065 4.05821 4.90065 3.85052C4.90065 3.572 4.79002 3.3049 4.59308 3.10796C4.39614 2.91102 4.12903 2.80038 3.85052 2.80038ZM13.3858 6.09781L7.49799 0.203038C7.43258 0.138153 7.355 0.0868184 7.2697 0.0519786C7.1844 0.0171389 7.09307 -0.000520993 7.00093 1.17015e-05H0.700103C0.514428 1.17015e-05 0.336356 0.0737711 0.205064 0.205064C0.0737711 0.336356 1.17015e-05 0.514428 1.17015e-05 0.700103V7.00093C-0.000520993 7.09307 0.0171389 7.1844 0.0519786 7.2697C0.0868184 7.355 0.138153 7.43258 0.203038 7.49799L6.09781 13.3858C6.49161 13.7791 7.02543 14 7.58201 14C8.13858 14 8.6724 13.7791 9.0662 13.3858L13.3858 9.1012C13.7791 8.7074 14 8.17359 14 7.61701C14 7.06044 13.7791 6.52662 13.3858 6.13282V6.09781ZM12.3986 8.07207L8.07207 12.3916C7.9409 12.522 7.76346 12.5952 7.57851 12.5952C7.39355 12.5952 7.21611 12.522 7.08494 12.3916L1.4002 6.71389V1.4002H6.71389L12.3986 7.08494C12.4635 7.15036 12.5149 7.22794 12.5497 7.31324C12.5845 7.39853 12.6022 7.48987 12.6017 7.58201C12.6009 7.76567 12.528 7.94167 12.3986 8.07207Z" fill="url(#paint0_linear_3605_401)"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_3605_401" x1="-0.0886736" y1="5.03274" x2="14.1536" y2="5.28368" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#351EE0"/>
                                                    <stop offset="1" stop-color="#3F74EF"/>
                                                    </linearGradient>
                                                    </defs>
                                                 </svg>
                                                Web design
                                            </span>
                                            <span>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.8998 4.19994H11.1998V2.09997C11.1998 1.54302 10.9786 1.00889 10.5848 0.615067C10.191 0.221246 9.65682 0 9.09987 0H2.09997C1.54302 0 1.00889 0.221246 0.615067 0.615067C0.221246 1.00889 0 1.54302 0 2.09997V10.4999C0.000689827 10.6381 0.0422709 10.7729 0.119503 10.8876C0.196735 11.0022 0.306162 11.0913 0.433994 11.1438C0.517068 11.183 0.608168 11.2022 0.69999 11.1998C0.792114 11.2004 0.883436 11.1827 0.968721 11.1479C1.05401 11.1131 1.13158 11.0617 1.19698 10.9968L3.16396 9.02287H4.19994V10.0309C4.19994 10.5878 4.42119 11.1219 4.81501 11.5158C5.20883 11.9096 5.74297 12.1308 6.29991 12.1308H11.1438L12.8028 13.7968C12.8682 13.8617 12.9458 13.913 13.0311 13.9478C13.1164 13.9827 13.2077 14.0003 13.2998 13.9998C13.3916 14.0022 13.4827 13.983 13.5658 13.9438C13.6936 13.8913 13.8031 13.8021 13.8803 13.6875C13.9575 13.5729 13.9991 13.438 13.9998 13.2998V6.29991C13.9998 5.74297 13.7786 5.20883 13.3847 4.81501C12.9909 4.42119 12.4568 4.19994 11.8998 4.19994ZM4.19994 6.29991V7.62289H2.87696C2.78484 7.62236 2.69351 7.64002 2.60823 7.67485C2.52294 7.70969 2.44537 7.76102 2.37997 7.82589L1.39998 8.81288V2.09997C1.39998 1.91432 1.47373 1.73628 1.605 1.605C1.73628 1.47373 1.91432 1.39998 2.09997 1.39998H9.09987C9.28552 1.39998 9.46357 1.47373 9.59484 1.605C9.72612 1.73628 9.79986 1.91432 9.79986 2.09997V4.19994H6.29991C5.74297 4.19994 5.20883 4.42119 4.81501 4.81501C4.42119 5.20883 4.19994 5.74297 4.19994 6.29991ZM12.5998 11.6128L11.8998 10.9128C11.835 10.8467 11.7577 10.7941 11.6724 10.758C11.5871 10.722 11.4955 10.7032 11.4028 10.7029H6.29991C6.11426 10.7029 5.93622 10.6291 5.80494 10.4978C5.67367 10.3666 5.59992 10.1885 5.59992 10.0029V6.29991C5.59992 6.11426 5.67367 5.93622 5.80494 5.80494C5.93622 5.67367 6.11426 5.59992 6.29991 5.59992H11.8998C12.0855 5.59992 12.2635 5.67367 12.3948 5.80494C12.5261 5.93622 12.5998 6.11426 12.5998 6.29991V11.6128Z" fill="url(#paint0_linear_3605_399)"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_3605_399" x1="-0.0886723" y1="5.03274" x2="14.1534" y2="5.28367" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#351EE0"/>
                                                    <stop offset="1" stop-color="#3F74EF"/>
                                                    </linearGradient>
                                                    </defs>
                                                </svg>
                                                Comments (05)
                                            </span>
                                        </div>
                                    </div>
                                    <div class="postbox__content">
                                       <h4 class="blog__details-title mb-20"><a href="blog-details.php">Simplify IT for Enhanced</a></h4>
                                       <div class="blog__details-text mb-30">
                                           <p>Web designing in a powerful way of just not an only professions, however, in a passion for our Company. We have to a tendency to believe the idea that smart looking of any websitet in on visitors.Web designing in a powerful way of just not an only profession</p>
                                       </div>
                                       <div class="blog__details-button">
                                           <a href="blog-details.php" class="tg-btn-gradient-border">
                                                <span>
                                                    Read More
                                                    <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                            fill="currentcolor"></path>
                                                    </svg>
                                                </span>
                                           </a>
                                       </div>
                                    </div>
                                </div>                                
                            </article>
                            <article>
                                <div class="postbox__wrap mb-60">
                                    <div class="postbox__thumb mb-25 p-relative">
                                        <img src="assets/img/blog/details-1-2.jpg" alt="">
                                        <div class="postbox__meta">
                                            <span>31 December,2023</span>
                                            <span>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.85052 2.80038C3.64282 2.80038 3.43979 2.86197 3.26709 2.97736C3.0944 3.09275 2.9598 3.25676 2.88032 3.44865C2.80083 3.64053 2.78004 3.85168 2.82056 4.05539C2.86108 4.25909 2.96109 4.44621 3.10796 4.59308C3.25482 4.73994 3.44194 4.83996 3.64564 4.88048C3.84935 4.921 4.0605 4.9002 4.25239 4.82072C4.44427 4.74123 4.60828 4.60664 4.72367 4.43394C4.83907 4.26125 4.90065 4.05821 4.90065 3.85052C4.90065 3.572 4.79002 3.3049 4.59308 3.10796C4.39614 2.91102 4.12903 2.80038 3.85052 2.80038ZM13.3858 6.09781L7.49799 0.203038C7.43258 0.138153 7.355 0.0868184 7.2697 0.0519786C7.1844 0.0171389 7.09307 -0.000520993 7.00093 1.17015e-05H0.700103C0.514428 1.17015e-05 0.336356 0.0737711 0.205064 0.205064C0.0737711 0.336356 1.17015e-05 0.514428 1.17015e-05 0.700103V7.00093C-0.000520993 7.09307 0.0171389 7.1844 0.0519786 7.2697C0.0868184 7.355 0.138153 7.43258 0.203038 7.49799L6.09781 13.3858C6.49161 13.7791 7.02543 14 7.58201 14C8.13858 14 8.6724 13.7791 9.0662 13.3858L13.3858 9.1012C13.7791 8.7074 14 8.17359 14 7.61701C14 7.06044 13.7791 6.52662 13.3858 6.13282V6.09781ZM12.3986 8.07207L8.07207 12.3916C7.9409 12.522 7.76346 12.5952 7.57851 12.5952C7.39355 12.5952 7.21611 12.522 7.08494 12.3916L1.4002 6.71389V1.4002H6.71389L12.3986 7.08494C12.4635 7.15036 12.5149 7.22794 12.5497 7.31324C12.5845 7.39853 12.6022 7.48987 12.6017 7.58201C12.6009 7.76567 12.528 7.94167 12.3986 8.07207Z" fill="url(#paint0_linear_3605_401)"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_3605_4011" x1="-0.0886736" y1="5.03274" x2="14.1536" y2="5.28368" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#351EE0"/>
                                                    <stop offset="1" stop-color="#3F74EF"/>
                                                    </linearGradient>
                                                    </defs>
                                                 </svg>
                                                Web design
                                            </span>
                                            <span>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.8998 4.19994H11.1998V2.09997C11.1998 1.54302 10.9786 1.00889 10.5848 0.615067C10.191 0.221246 9.65682 0 9.09987 0H2.09997C1.54302 0 1.00889 0.221246 0.615067 0.615067C0.221246 1.00889 0 1.54302 0 2.09997V10.4999C0.000689827 10.6381 0.0422709 10.7729 0.119503 10.8876C0.196735 11.0022 0.306162 11.0913 0.433994 11.1438C0.517068 11.183 0.608168 11.2022 0.69999 11.1998C0.792114 11.2004 0.883436 11.1827 0.968721 11.1479C1.05401 11.1131 1.13158 11.0617 1.19698 10.9968L3.16396 9.02287H4.19994V10.0309C4.19994 10.5878 4.42119 11.1219 4.81501 11.5158C5.20883 11.9096 5.74297 12.1308 6.29991 12.1308H11.1438L12.8028 13.7968C12.8682 13.8617 12.9458 13.913 13.0311 13.9478C13.1164 13.9827 13.2077 14.0003 13.2998 13.9998C13.3916 14.0022 13.4827 13.983 13.5658 13.9438C13.6936 13.8913 13.8031 13.8021 13.8803 13.6875C13.9575 13.5729 13.9991 13.438 13.9998 13.2998V6.29991C13.9998 5.74297 13.7786 5.20883 13.3847 4.81501C12.9909 4.42119 12.4568 4.19994 11.8998 4.19994ZM4.19994 6.29991V7.62289H2.87696C2.78484 7.62236 2.69351 7.64002 2.60823 7.67485C2.52294 7.70969 2.44537 7.76102 2.37997 7.82589L1.39998 8.81288V2.09997C1.39998 1.91432 1.47373 1.73628 1.605 1.605C1.73628 1.47373 1.91432 1.39998 2.09997 1.39998H9.09987C9.28552 1.39998 9.46357 1.47373 9.59484 1.605C9.72612 1.73628 9.79986 1.91432 9.79986 2.09997V4.19994H6.29991C5.74297 4.19994 5.20883 4.42119 4.81501 4.81501C4.42119 5.20883 4.19994 5.74297 4.19994 6.29991ZM12.5998 11.6128L11.8998 10.9128C11.835 10.8467 11.7577 10.7941 11.6724 10.758C11.5871 10.722 11.4955 10.7032 11.4028 10.7029H6.29991C6.11426 10.7029 5.93622 10.6291 5.80494 10.4978C5.67367 10.3666 5.59992 10.1885 5.59992 10.0029V6.29991C5.59992 6.11426 5.67367 5.93622 5.80494 5.80494C5.93622 5.67367 6.11426 5.59992 6.29991 5.59992H11.8998C12.0855 5.59992 12.2635 5.67367 12.3948 5.80494C12.5261 5.93622 12.5998 6.11426 12.5998 6.29991V11.6128Z" fill="url(#paint0_linear_3605_399)"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_3605_3999" x1="-0.0886723" y1="5.03274" x2="14.1534" y2="5.28367" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#351EE0"/>
                                                    <stop offset="1" stop-color="#3F74EF"/>
                                                    </linearGradient>
                                                    </defs>
                                                </svg>
                                                Comments (05)
                                            </span>
                                        </div>
                                    </div>
                                    <div class="postbox__content">
                                       <h4 class="blog__details-title mb-20"><a href="blog-details.php">Unlock Your Business Potential</a></h4>
                                       <div class="blog__details-text mb-30">
                                           <p>Web designing in a powerful way of just not an only professions, however, in a passion for our Company. We have to a tendency to believe the idea that smart looking of any websitet in on visitors.Web designing in a powerful way of just not an only profession</p>
                                       </div>
                                       <div class="blog__details-button">
                                           <a href="blog-details.php" class="tg-btn-gradient-border">
                                                <span>
                                                    Read More
                                                    <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                            fill="currentcolor"></path>
                                                    </svg>
                                                </span>
                                           </a>
                                       </div>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <div class="postbox__wrap">
                                    <div class="postbox__thumb mb-25 p-relative">
                                        <img src="assets/img/blog/details-1-3.jpg" alt="">
                                        <div class="postbox__meta">
                                            <span>31 December,2023</span>
                                            <span>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.85052 2.80038C3.64282 2.80038 3.43979 2.86197 3.26709 2.97736C3.0944 3.09275 2.9598 3.25676 2.88032 3.44865C2.80083 3.64053 2.78004 3.85168 2.82056 4.05539C2.86108 4.25909 2.96109 4.44621 3.10796 4.59308C3.25482 4.73994 3.44194 4.83996 3.64564 4.88048C3.84935 4.921 4.0605 4.9002 4.25239 4.82072C4.44427 4.74123 4.60828 4.60664 4.72367 4.43394C4.83907 4.26125 4.90065 4.05821 4.90065 3.85052C4.90065 3.572 4.79002 3.3049 4.59308 3.10796C4.39614 2.91102 4.12903 2.80038 3.85052 2.80038ZM13.3858 6.09781L7.49799 0.203038C7.43258 0.138153 7.355 0.0868184 7.2697 0.0519786C7.1844 0.0171389 7.09307 -0.000520993 7.00093 1.17015e-05H0.700103C0.514428 1.17015e-05 0.336356 0.0737711 0.205064 0.205064C0.0737711 0.336356 1.17015e-05 0.514428 1.17015e-05 0.700103V7.00093C-0.000520993 7.09307 0.0171389 7.1844 0.0519786 7.2697C0.0868184 7.355 0.138153 7.43258 0.203038 7.49799L6.09781 13.3858C6.49161 13.7791 7.02543 14 7.58201 14C8.13858 14 8.6724 13.7791 9.0662 13.3858L13.3858 9.1012C13.7791 8.7074 14 8.17359 14 7.61701C14 7.06044 13.7791 6.52662 13.3858 6.13282V6.09781ZM12.3986 8.07207L8.07207 12.3916C7.9409 12.522 7.76346 12.5952 7.57851 12.5952C7.39355 12.5952 7.21611 12.522 7.08494 12.3916L1.4002 6.71389V1.4002H6.71389L12.3986 7.08494C12.4635 7.15036 12.5149 7.22794 12.5497 7.31324C12.5845 7.39853 12.6022 7.48987 12.6017 7.58201C12.6009 7.76567 12.528 7.94167 12.3986 8.07207Z" fill="url(#paint0_linear_3605_401)"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_3605_4013" x1="-0.0886736" y1="5.03274" x2="14.1536" y2="5.28368" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#351EE0"/>
                                                    <stop offset="1" stop-color="#3F74EF"/>
                                                    </linearGradient>
                                                    </defs>
                                                 </svg>
                                                Web design
                                            </span>
                                            <span>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.8998 4.19994H11.1998V2.09997C11.1998 1.54302 10.9786 1.00889 10.5848 0.615067C10.191 0.221246 9.65682 0 9.09987 0H2.09997C1.54302 0 1.00889 0.221246 0.615067 0.615067C0.221246 1.00889 0 1.54302 0 2.09997V10.4999C0.000689827 10.6381 0.0422709 10.7729 0.119503 10.8876C0.196735 11.0022 0.306162 11.0913 0.433994 11.1438C0.517068 11.183 0.608168 11.2022 0.69999 11.1998C0.792114 11.2004 0.883436 11.1827 0.968721 11.1479C1.05401 11.1131 1.13158 11.0617 1.19698 10.9968L3.16396 9.02287H4.19994V10.0309C4.19994 10.5878 4.42119 11.1219 4.81501 11.5158C5.20883 11.9096 5.74297 12.1308 6.29991 12.1308H11.1438L12.8028 13.7968C12.8682 13.8617 12.9458 13.913 13.0311 13.9478C13.1164 13.9827 13.2077 14.0003 13.2998 13.9998C13.3916 14.0022 13.4827 13.983 13.5658 13.9438C13.6936 13.8913 13.8031 13.8021 13.8803 13.6875C13.9575 13.5729 13.9991 13.438 13.9998 13.2998V6.29991C13.9998 5.74297 13.7786 5.20883 13.3847 4.81501C12.9909 4.42119 12.4568 4.19994 11.8998 4.19994ZM4.19994 6.29991V7.62289H2.87696C2.78484 7.62236 2.69351 7.64002 2.60823 7.67485C2.52294 7.70969 2.44537 7.76102 2.37997 7.82589L1.39998 8.81288V2.09997C1.39998 1.91432 1.47373 1.73628 1.605 1.605C1.73628 1.47373 1.91432 1.39998 2.09997 1.39998H9.09987C9.28552 1.39998 9.46357 1.47373 9.59484 1.605C9.72612 1.73628 9.79986 1.91432 9.79986 2.09997V4.19994H6.29991C5.74297 4.19994 5.20883 4.42119 4.81501 4.81501C4.42119 5.20883 4.19994 5.74297 4.19994 6.29991ZM12.5998 11.6128L11.8998 10.9128C11.835 10.8467 11.7577 10.7941 11.6724 10.758C11.5871 10.722 11.4955 10.7032 11.4028 10.7029H6.29991C6.11426 10.7029 5.93622 10.6291 5.80494 10.4978C5.67367 10.3666 5.59992 10.1885 5.59992 10.0029V6.29991C5.59992 6.11426 5.67367 5.93622 5.80494 5.80494C5.93622 5.67367 6.11426 5.59992 6.29991 5.59992H11.8998C12.0855 5.59992 12.2635 5.67367 12.3948 5.80494C12.5261 5.93622 12.5998 6.11426 12.5998 6.29991V11.6128Z" fill="url(#paint0_linear_3605_399)"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_3605_3993" x1="-0.0886723" y1="5.03274" x2="14.1534" y2="5.28367" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#351EE0"/>
                                                    <stop offset="1" stop-color="#3F74EF"/>
                                                    </linearGradient>
                                                    </defs>
                                                </svg>
                                                Comments (05)
                                            </span>
                                        </div>
                                    </div>
                                    <div class="postbox__content">
                                       <h4 class="blog__details-title mb-20"><a href="#">Unleash the Power of IT</a></h4>
                                       <div class="blog__details-text mb-30">
                                           <p>Web designing in a powerful way of just not an only professions, however, in a passion for our Company. We have to a tendency to believe the idea that smart looking of any websitet in on visitors.Web designing in a powerful way of just not an only profession</p>
                                       </div>
                                       <div class="blog__details-button">
                                           <a href="blog-details.php" class="tg-btn-gradient-border">
                                                <span>
                                                    Read More
                                                    <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.6875 6.71875L11.6875 10.7188C11.3125 11.125 10.6562 11.125 10.2812 10.7188C9.875 10.3438 9.875 9.6875 10.2812 9.3125L12.5625 7H1C0.4375 7 0 6.5625 0 6C0 5.40625 0.4375 5 1 5H12.5625L10.2812 2.71875C9.875 2.34375 9.875 1.6875 10.2812 1.3125C10.6562 0.90625 11.3125 0.90625 11.6875 1.3125L15.6875 5.3125C16.0938 5.6875 16.0938 6.34375 15.6875 6.71875Z"
                                                            fill="currentcolor"></path>
                                                    </svg>
                                                </span>
                                           </a>
                                       </div>
                                    </div>
                                </div>
                            </article>
                            <div class="basic-pagination text-center mt-70">
                                <nav>
                                   <ul>
                                      <li class="active">
                                         <a href="blog-single.php">01</a>
                                      </li>
                                      <li>
                                         <a href="blog-single.php">02</a>
                                      </li>
                                      <li>
                                         <a href="blog-single.php">03</a>
                                      </li>
                                   </ul>
                                </nav>
                             </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog__sidebar">
                            <div class="sidebar__widget mb-60">
                                <h4 class="sidebar__widget-title">Search Here </h4>
                                <div class="sidebar__search p-relative">
                                    <input type="text" placeholder="Search..">
                                    <div class="sidebar__search-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.41732 16.7487C10.3402 16.7487 12.1079 16.0872 13.5184 14.9904L18.0975 19.5695L19.5704 18.0966L14.9913 13.5174C16.0892 12.106 16.7507 10.3383 16.7507 8.41536C16.7507 3.82057 13.0121 0.0820312 8.41732 0.0820312C3.82253 0.0820312 0.0839844 3.82057 0.0839844 8.41536C0.0839844 13.0102 3.82253 16.7487 8.41732 16.7487ZM8.41732 2.16536C11.8642 2.16536 14.6673 4.96849 14.6673 8.41536C14.6673 11.8622 11.8642 14.6654 8.41732 14.6654C4.97044 14.6654 2.16732 11.8622 2.16732 8.41536C2.16732 4.96849 4.97044 2.16536 8.41732 2.16536Z" fill="#05092B"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget widget_categories mb-60">
                                <h4 class="sidebar__widget-title">Category </h4>
                                <ul>
                                    <li><a href="#">Cleanning </a></li>
                                    <li><a href="#">Cloud solution </a></li>
                                    <li><a href="#">Free service </a></li>
                                    <li><a href="#">Cleaner </a></li>
                                    <li><a href="#">SEO Marketing </a></li>
                                    <li><a href="#">CPA marketing </a></li>
                                </ul>
                            </div>
                            <div class="sidebar__widget mb-60">
                                <h4 class="sidebar__widget-title">Popular Post </h4>
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
                            <div class="sidebar__widget mb-60">
                                <h4 class="sidebar__widget-title">Popular Tags</h4>
                                <div class="tagcloud">
                                    <a href="#">TechPros</a>
                                    <a href="#">NetWorks</a>
                                    <a href="#">CyberSafe</a>
                                    <a href="#">Web</a>
                                    <a href="#">InnovIT</a>
                                    <a href="#">TechSavvy</a>
                                    <a href="#">SoftwareMasters</a>
                                </div>
                            </div>
                            <div class="sidebar__widget widget_newsletter">
                                <h4 class="sidebar__widget-title">Newsletter</h4>
                                <p>Subscribe for get more help and information</p>  
                                <div class="sidebar__email p-relative">
                                    <input type="email" placeholder="E-mail Adress">
                                    <div class="sidebar__email-icon">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </div>
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-details-area-end -->

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