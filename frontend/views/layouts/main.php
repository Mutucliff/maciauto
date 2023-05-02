<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

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
                            <!-- <img class="logo-light" src="dependencies/img/logo-white.webp" alt="logo"> -->
                            <img class="logo-dark" src="dependencies/img/logo-white.webp" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                            <div class="menu-close d-lg-none">
                                <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                            </div>
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item has-child">
                                    <a href="#" class="nav-link active">
                                        Home
                                        <i class="flaticon-down-arrow"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link active">Home One</a>
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
                                    <a href="#" class="nav-link">
                                        Pages
                                        <i class="flaticon-down-arrow"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['/site/about'])?>" class="nav-link">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['/site/listings'])?>" class="nav-link">
                                                Listings
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="<?= Yii::$app->urlManager->createUrl(['/site/alllistings'])?>" class="nav-link">All Listings</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= Yii::$app->urlManager->createUrl(['/site/addlistings'])?>" class="nav-link">Add Listings</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= Yii::$app->urlManager->createUrl(['/site/listingdetails'])?>" class="nav-link">Listing Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['/site/services'])?>" class="nav-link">
                                                Services
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="<?= Yii::$app->urlManager->createUrl(['/site/ourservices'])?>" class="nav-link">Our Services</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= Yii::$app->urlManager->createUrl(['/site/servicedetails'])?>" class="nav-link">Service-Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href=""<?= Yii::$app->urlManager->createUrl(['/site/dealer'])?> class="nav-link">
                                                Dealer
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="<?= Yii::$app->urlManager->createUrl(['/site/top-dealers'])?>" class="nav-link">Top Dealers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= Yii::$app->urlManager->createUrl(['/site/dealerdetails'])?>" class="nav-link">Dealer Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['/site/ourteam'])?>" class="nav-link">Our Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['/site/calculator'])?>" class="nav-link">Calculator</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['/site/faq'])?>" class="nav-link">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['/site/pricingplan'])?>" class="nav-link">Pricing Plan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['/site/testimonials'])?>" class="nav-link">Testimonials</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['/site/termsofservice'])?>" class="nav-link">Terms of Service</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['/site/privacypolicy'])?>" class="nav-link">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= Yii::$app->urlManager->createUrl(['/site/error404page'])?>" class="nav-link">404 Error Page</a>
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
                                                    <a href="blog-details-right-sidebar.html" class="nav-link">Blog Details Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href=" <?= Yii::$app->urlManager->createUrl(['/site/contact'])?>" class="nav-link">Contact</a>
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

        <?= $content ?>
 

 <!-- Footer Section Start -->
 <footer class="footer-wrap">
            <div class="container">
                <div class="row pt-100 pb-75">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <a href="index.html" class="footer-logo">
                                <img src="dependencies/img/logo-white.webp" alt="Image">
                            </a>
                            <ul class="contact-info list-style">
                                <li>
                                    <ion-icon name="location"></ion-icon>
                                    <h6>Location</h6>
                                    <p>2976 sunrise road las vegas</p>
                                </li>
                                <li>
                                    <ion-icon name="mail"></ion-icon>
                                    <h6>Email</h6>
                                    <a href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#c6aea3aaaaa986aba9b2a9bce8a5a9ab"><span class="__cf_email__" data-cfemail="f8909d949497b895978c9782d69b9795">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <ion-icon name="call"></ion-icon>
                                    <h6>Phone</h6>
                                    <a href="tel:098765432150">098765432150</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Customer Links</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="blog-right-sidebar.html">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Latest News
                                    </a>
                                </li>
                                <li>
                                    <a href="inventory.html">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Inventory
                                    </a>
                                </li>
                                <li>
                                    <a href="testimonials.html">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Testimonials
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="shop.html">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Our Shop
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Quick Links</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="dealers.html">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Our Dealers
                                    </a>
                                </li>
                                <li>
                                    <a href="about.html">
                                        <i class="ri-arrow-right-s-line"></i>
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="terms-of-service.html">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Terms Of Use
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Privacy Policy 
                                    </a>
                                </li>
                                <li>
                                    <a href="about.html">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Why Choose
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Newsletter Signup</h3>
                            <p>Subscribe Our Newsletter To Get Our Latest Update & News!</p>
                            <form action="#" class="newsletter-form">
                                <div class="form-group">
                                    <input type="email" placeholder="Enter Email Address">
                                    <button type="submit"><ion-icon name="paper-plane-outline"></ion-icon></button>
                                </div>
                            </form>
                            <div class="social-link">
                                <h6>Follow Us :</h6>
                                <ul class="social-profile style1 list-style">
                                    <li>
                                        <a href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="copyright-text"><i class="ri-copyright-line"></i><span>Motoz</span> is proudly owned by <a href="https://hibotheme.com/">HiboTheme</a></p>
        </footer>
        <!-- Footer Section End -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
