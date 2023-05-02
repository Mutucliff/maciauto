<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Service-details';
$this->params['breadcrumbs'][] = $this->title;
?>
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
                                <img src="dependencies/img/services/single-service-1.webp" alt="Image">
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
                                    <a class="single-service-img" data-fancybox="gallery" href="dependencies/img/services/single-service-2.webp">
                                        <img src="dependencies/img/services/single-service-2.webp" alt="Image">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="single-service-img" data-fancybox="gallery" href="dependencies/img/services/single-service-3.webp">
                                        <img src="dependencies/img/services/single-service-3.webp" alt="Image">
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
                            <img src="dependencies/img/services/service-1.webp" alt="Image">
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
                            <img src="dependencies/img/services/service-2.webp" alt="Image">
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
                            <img src="dependencies/img/services/service-3.webp" alt="Image">
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
                            <img src="dependencies/img/services/service-4.webp" alt="Image">
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
                            <img src="dependencies/img/services/service-5.webp" alt="Image">
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
                            <img src="dependencies/img/services/service-6.webp" alt="Image">
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
                    <img src="dependencies/img/app/app-shape-1.webp" alt="Image" class="app-shape-one">
                    <img src="dependencies/img/app/app-shape-2.webp" alt="Image" class="app-shape-two">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="app-content">
                                <div class="content-title-two">
                                    <span>Our App</span>
                                    <h2>Download Motoz App For Free!</h2>
                                    <p>It is a long established fact that reader will be distracted by the dolore</p>
                                </div>
                                <div class="app-btn">
                                    <a href="index.html"><img src="dependencies/img/icon/google-play.webp" alt="Image">
                                        GET IT ON <span>Google Play</span></a>
                                    <a href="index.html"><img src="dependencies/img/icon/apple-store.webp" alt="Image">Download on The <span>App Store</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="dependencies/img/app/app.webp" alt="Image" class="app-img">
                </div>
            </div>
        </div>
        <!-- App Section End -->