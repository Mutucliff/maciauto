<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Link of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/flaticon_motoz.css">
        <link rel="stylesheet" href="assets/css/remixicon.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/fancybox.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/dark-theme.css">
        <title>Motoz - Car Dealer & Automotive HTML Template</title>
        <link rel="icon" type="image/png" href="assets/img/favicon.webp">
    </head>

    <body>

        <div class="body_overlay"></div>

        <!--Preloader starts-->
        <div class="loader js-preloader">
            <svg class="car" width="102" height="40" xmlns="http://www.w3.org/2000/svg">
            <g transform="translate(2 1)" stroke="#E70D3D" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                <path class="car__body" d="M47.293 2.375C52.927.792 54.017.805 54.017.805c2.613-.445 6.838-.337 9.42.237l8.381 1.863c2.59.576 6.164 2.606 7.98 4.531l6.348 6.732 6.245 1.877c3.098.508 5.609 3.431 5.609 6.507v4.206c0 .29-2.536 4.189-5.687 4.189H36.808c-2.655 0-4.34-2.1-3.688-4.67 0 0 3.71-19.944 14.173-23.902zM36.5 15.5h54.01" stroke-width="2"/>
                <ellipse class="car__wheel--left" stroke-width="2.2" fill="#FFF" cx="83.493" cy="30.25" rx="6.922" ry="6.808"/>
                <ellipse class="car__wheel--right" stroke-width="2.2" fill="#FFF" cx="46.511" cy="30.25" rx="6.922" ry="6.808"/>
                <path class="car__line car__line--top" d="M22.5 16.5H2.475" stroke-width="2"/>
                <path class="car__line car__line--middle" d="M20.5 23.5H.4755" stroke-width="2"/>
                <path class="car__line car__line--bottom" d="M25.5 9.5h-19" stroke-width="2"/>
            </g>
            </svg>
        </div> 
        <!--Preloader ends-->

        <!-- Theme Switcher Start -->
        <div class="switch-theme-mode">
            <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
            </label>
        </div>
        <!-- Theme Switcher End -->

        <!-- Header Section Start -->
        <header class="header-wrap header-one">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-9">
                            <div class="header-top-left">
                                <ul class="contact-info list-style">
                                    <li>
                                        <span>Phone:</span><a href="tel:87896744455">878-9674-4455</a>
                                    </li>
                                    <li>
                                       <span> Opening Hours:</span>Mon to Fri : 9:00am to 6:00pm
                                    </li>
                                    <li>
                                        <span>Location:</span>23 Bakery Street, London, UK
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3">
                            <div class="header-top-right">
                                <div class="user-menu">
                                    <i class="flaticon-user-1"></i>
                                    <a href="my-account.html">Login</a>
                                    <a href="my-account.html">Register</a>
                                </div>
                                <div class="social-link">
                                    <span>Follow Us:</span>
                                    <ul class="social-profile list-style">
                                        <li>
                                            <a href="https://facebook.com/">
                                                <i class="flaticon-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/">
                                                <i class="flaticon-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/">
                                                <i class="flaticon-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://linkedin.com/">
                                                <i class="flaticon-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img class="logo-light" src="assets/img/logo-white.webp" alt="logo">
                            <img class="logo-dark" src="assets/img/logo-white.webp" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                            <div class="menu-close d-lg-none">
                                <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                            </div>
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item has-child">
                                    <a href="#" class="nav-link">
                                        Home
                                        <i class="flaticon-down-arrow"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link">Home One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">Home Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">Home Three</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-child">
                                    <a href="#" class="nav-link">
                                        Inventory
                                        <i class="flaticon-down-arrow"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="inventory.html" class="nav-link">Inventory</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="inventory-details.html" class="nav-link">Inventory Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-child">
                                    <a href="#" class="nav-link active">
                                        Pages
                                        <i class="flaticon-down-arrow"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about.html" class="nav-link">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Listings
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="listings.html" class="nav-link">All Listings</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="add-listing.html" class="nav-link">Add Listings</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="listing-details.html" class="nav-link">Listing Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link active">
                                                Services
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="services.html" class="nav-link active">Our Services</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="service-details.html" class="nav-link">Service Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Dealer
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="dealers.html" class="nav-link">Top Dealers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="dealer-details.html" class="nav-link">Dealer Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">Our Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="calculator.html" class="nav-link">Calculator</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pricing-plan.html" class="nav-link">Pricing Plan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonials.html" class="nav-link">Testimonials</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-of-service.html" class="nav-link">Terms of Service</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="error-404.html" class="nav-link">404 Error Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-child">
                                    <a href="#" class="nav-link">
                                        Shop
                                        <i class="flaticon-down-arrow"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="shop.html" class="nav-link">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="shop-details.html" class="nav-link">Shop Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="wishlist.html" class="nav-link">Wishlist</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cart.html" class="nav-link">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="checkout.html" class="nav-link">Checkout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="Compare.html" class="nav-link">Compare</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="my-account.html" class="nav-link">My Account</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-child">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class="flaticon-down-arrow"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Blog Layout
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="blog-no-sidebar.html" class="nav-link">Blog Grid</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Single Blog
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="blog-details-no-sidebar.html" class="nav-link">Blog Details No Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog-details-left-sidebar.html" class="nav-link">Blog Details Left Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog-details-right-sidebar.html" class="nav-link active">Blog Details Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact</a>
                                </li>
                                <li class="nav-item d-lg-none">
                                    <a href="add-listing.html" class="btn-two">Add Listing</a>
                                </li>
                            </ul>
                            <div class="other-options md-none">
                                <div class="option-item">
                                    <a href="compare-2.html" class="compare-btn"><span class="sm-text">Compare</span><i class="flaticon-compare"></i><span class="cart-count">10</span></a>
                                </div>
                                <div class="option-item">
                                    <a class="shopcart" href="cart.html"><span class="sm-text">Cart</span><i class="flaticon-shopping-bag-1"></i><span class="cart-count">1</span></a>
                                </div>
                                <div class="option-item">
                                    <a href="add-listing.html" class="btn-two">Add Listing</a>
                                </div>
                                <div class="option-item">
                                    <button class="sidebar-btn"><i class="flaticon-menu"></i></button>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="mobile-bar-wrap">
                        <a href="compare-2.html" class="compare-btn d-lg-none"><i class="flaticon-compare"></i><span class="cart-count">10</span></a>
                        <a class="shopcart  d-lg-none" href="cart.html"><i class="flaticon-shopping-bag-1"></i><span class="cart-count">1</span></a>
                        <button class="sidebar-btn  d-lg-none"><i class="flaticon-menu"></i></button>
                        <div class="mobile-menu d-lg-none">
                            <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header> 
        <div class="sidebar-popup">
            <div class="sidebar-popup-wrap">
                <button type="button" class="close-popup"> <i class="ri-close-fill"></i> </button>
                <div class="comp-logo">
                    <a href="index.html"> 
                        <img src="assets/img/logo-white.webp" alt="Image">
                    </a>
                </div>
                <p class="comp-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                <ul class="contact-box list-style">
                    <li>
                        <b>Address:</b>
                        <p>23 Bakery Street, London, UK</p>
                    </li>
                    <li>
                        <b>Phone:</b>
                        <a href="tel:87896744455">878-9674-4455</a>
                    </li>
                    <li>
                        <b>Email:</b>
                        <a href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#89e1ece5e5e6c9e4e6fde6f3a7eae6e4"><span class="__cf_email__" data-cfemail="1a727f7676755a77756e756034797577">[email&#160;protected]</span></a>
                    </li>
                </ul>
                <ul class="social-profile list-style">
                    <li>
                        <a target="_blank" href="https://facebook.com/">
                            <i class="ri-facebook-line"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://linkedin.com/">
                            <i class="ri-linkedin-line"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://instagram.com/">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </li>
                </ul>
                <div class="comp-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd"></iframe>
                </div>
            </div>
        </div>
        <!-- Header Section End -->  

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-8  bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Our Services</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home </a></li>
                        <li>Service</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Service Section Start -->
        <div class="service-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="section-title-two text-center mb-40">
                        <span>Our Services</span>
                        <h2>Services We Offer For You</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-card">
                            <div class="service-img">
                                <img src="assets/img/services/service-1.webp" alt="Image">
                            </div>
                            <div class="service-info">
                                <span class="service-icon">
                                    <i class="flaticon-van"></i>
                                </span>
                                <h3><a href="service-details.html">Engine & Transmission</a></h3>
                                <p>Lorem Ipsum has been the industry sta dummy text ever since the dolor when an unknown printer took a galley of type dolore magna aliqua.</p>
                                <a href="service-details.html" class="link-one">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-card">
                            <div class="service-img">
                                <img src="assets/img/services/service-2.webp" alt="Image">
                            </div>
                            <div class="service-info">
                                <span class="service-icon">
                                    <i class="flaticon-hand-gesture"></i>
                                </span>
                                <h3><a href="service-details.html">Brake Service & Repair</a></h3>
                                <p>Lorem Ipsum has been the industry sta dummy text ever since the dolor when an unknown printer took a galley of type dolore magna aliqua.</p>
                                <a href="service-details.html" class="link-one">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-card">
                            <div class="service-img">
                                <img src="assets/img/services/service-3.webp" alt="Image">
                            </div>
                            <div class="service-info">
                                <span class="service-icon">
                                    <i class="flaticon-technical-support"></i>
                                </span>
                                <h3><a href="service-details.html">Heating & AC Repairs</a></h3>
                                <p>Lorem Ipsum has been the industry sta dummy text ever since the dolor when an unknown printer took a galley of type dolore magna aliqua.</p>
                                <a href="service-details.html" class="link-one">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-card">
                            <div class="service-img">
                                <img src="assets/img/services/service-4.webp" alt="Image">
                            </div>
                            <div class="service-info">
                                <span class="service-icon">
                                    <i class="flaticon-drive-thru"></i>
                                </span>
                                <h3><a href="service-details.html">Brake Checkup</a></h3>
                                <p>Lorem Ipsum has been the industry sta dummy text ever since the dolor when an unknown printer took a galley of type dolore magna aliqua.</p>
                                <a href="service-details.html" class="link-one">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-card">
                            <div class="service-img">
                                <img src="assets/img/services/service-5.webp" alt="Image">
                            </div>
                            <div class="service-info">
                                <span class="service-icon">
                                    <i class="flaticon-car"></i>
                                </span>
                                <h3><a href="service-details.html">Securiy Inspection</a></h3>
                                <p>Lorem Ipsum has been the industry sta dummy text ever since the dolor when an unknown printer took a galley of type dolore magna aliqua.</p>
                                <a href="service-details.html" class="link-one">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-card">
                            <div class="service-img">
                                <img src="assets/img/services/service-6.webp" alt="Image">
                            </div>
                            <div class="service-info">
                                <span class="service-icon">
                                    <i class="flaticon-gear-1"></i>
                                </span>
                                <h3><a href="service-details.html">Engine Upgrades</a></h3>
                                <p>Lorem Ipsum has been the industry sta dummy text ever since the dolor when an unknown printer took a galley of type dolore magna aliqua.</p>
                                <a href="service-details.html" class="link-one">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="page-nav list-style">
                    <li><a href="services.html"><i class="flaticon-left-arrow"></i></a></li>
                    <li><a class="active" href="services.html">1</a></li>
                    <li><a href="services.html">2</a></li>
                    <li><a href="services.html">3</a></li>
                    <li><a href="services.html"><i class="flaticon-next"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Service Section End -->

        <!-- App Section Start -->
        <div class="app-wrap">
            <div class="container">
                <div class="app-box bg_ash">
                    <img src="assets/img/app/app-shape-1.webp" alt="Image" class="app-shape-one">
                    <img src="assets/img/app/app-shape-2.webp" alt="Image" class="app-shape-two">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="app-content">
                                <div class="content-title-two">
                                    <span>Our App</span>
                                    <h2>Download Motoz App For Free!</h2>
                                    <p>It is a long established fact that reader will be distracted by the dolore</p>
                                </div>
                                <div class="app-btn">
                                    <a href="index.html"><img src="assets/img/icon/google-play.webp" alt="Image">
                                        GET IT ON <span>Google Play</span></a>
                                    <a href="index.html"><img src="assets/img/icon/apple-store.webp" alt="Image">Download on The <span>App Store</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/app/app.webp" alt="Image" class="app-img">
                </div>
            </div>
        </div>
        <!-- App Section End -->