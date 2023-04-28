<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Service-details';
$this->params['breadcrumbs'][] = $this->title;
?>
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
                                                    <a href="services.html" class="nav-link ">Our Services</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="service-details.html" class="nav-link active">Service Details</a>
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
                        <a href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#1b737e7777745b76746f746135787476"><span class="__cf_email__" data-cfemail="3058555c5c5f705d5f445f4a1e535f5d">[email&#160;protected]</span></a>
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
        <div class="breadcrumb-wrap br-7 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Service Details</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home </a></li>
                        <li><a href="services.html">Services</a></li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Service Details section Start -->
        <section class="service-details-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-12 order-xl-1 order-lg-2 order-md-2 order-2">
                        <div class="sidebar">
                            <div class="sidebar-widget-two">
                                <ul class="category-box-one list-style">
                                    <li>
                                        <a href="services.html">
                                           Brake Service & Repair
                                            <i class="flaticon-next"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html"  class="active">
                                            Engine & Transmission
                                            <i class="flaticon-next"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html">
                                            Heating & AC Repair
                                            <i class="flaticon-next"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html">
                                           Engine Upgrades
                                            <i class="flaticon-next"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html">
                                            Securoty Inspection
                                            <i class="flaticon-next"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html">
                                            Engine Oil Change
                                            <i class="flaticon-next"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-widget-one contact-widget">
                                <h3 class="sidebar-widget-one-title">Get In Touch</h3>
                                <form id="contactForm">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Full Name" id="name"
                                            required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required
                                            placeholder="Email Address" data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group v1">
                                        <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <button type="submit" class="btn-two w-100 d-block">Send Your Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Top Services</h3>
                                <ul class="category-box-two list-style">
                                    <li>
                                        <a href="services.html">
                                            Auto Dealing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html">
                                            Car News
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html">
                                            Car Reviews
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html">
                                            Classic Cars
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html">
                                           Top Brands
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 order-xl-2 order-lg-1 order-md-1 order-1">
                        <div class="service-desc">
                            <h2>Engine & Transmission</h2>
                            <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <div class="single-service-img mt-4">
                                <img src="assets/img/services/single-service-1.webp" alt="Image">
                                <a class="play-now" data-fancybox="" href="https://www.youtube.com/watch?v=BJoVxpAZb_E">
                                    <ion-icon name="play"></ion-icon>
                                    <span class="ripple"></span>
                                </a>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages.</p>
                            <ul class="single-listing-features list-style">
                                <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidu</li>
                                <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</li>
                                <li>Eirmod tempor invidu nt ut labore et dolore magna aliquyam erat</li>
                                <li>Diam nonumy eirmod tempor invidu nt ut labore et</li>
                            </ul>
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="single-service-img" data-fancybox="gallery" href="assets/img/services/single-service-2.webp">
                                        <img src="assets/img/services/single-service-2.webp" alt="Image">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="single-service-img" data-fancybox="gallery" href="assets/img/services/single-service-3.webp">
                                        <img src="assets/img/services/single-service-3.webp" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                            <ol>
                                <li>Lorem ipsum dolor sit consectetur adipiscing elitdiam nonumy eirmod tempor.</li>
                                <li>Advisory membership elitr, sed diam nonumy eirmod tempor.</li>
                                <li>If you do not have enough time, you will always be able.</li>
                                <li>Irmad temporarily involved labor and doll magna alicum erat.</li>
                                <li>Labor and love magna aliquam irat valupatua.</li>
                            </ol>
                            <h3>What You Will Get From This Service</h3>
                            <p>Amet consectetur adipisicing elit. Mollitia excepturi eaque, corporis nulla maxime inventore magni repreh enderit lorem ipsum dolor sit consequatur deserunt, eligendi totam voluptas natus. Quaerat neque nisi voluptatum.</p>
                            <ul class="content-feature-list style1 list-style mb-0">
                                <li><i class="ri-check-double-line"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod tempor.</li>
                                <li><i class="ri-check-double-line"></i>Advisory membership elitr, sed diam nonumy eirmod tempor invidunt ut labor et dolore magna.</li>
                                <li><i class="ri-check-double-line"></i>If you do not have enough time, you will always be able to work and do what you want.</li>
                                <li><i class="ri-check-double-line"></i>Irmad temporarily involved labor and doll magna alicum erat, sed diam voluptua. Vero Eos and accused.</li>
                                <li><i class="ri-check-double-line"></i>Labor and Love Magna Aliquam Irat, Sed Diam Valupatua. Vero eos et accusam.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Details section end -->

        <!-- Service Section Start -->
        <div class="service-wrap pb-100">
            <div class="container">
                <div class="row">
                    <div class="section-title-two text-center mb-40">
                        <span>Related Services</span>
                        <h2>Services We Offer For You</h2>
                    </div>
                </div>
                <div class="service-slider owl-carousel">
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