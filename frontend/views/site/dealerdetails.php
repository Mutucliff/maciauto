<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Dealerdetails';
$this->params['breadcrumbs'][] = $this->title;
?>
  <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-16 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Dealer Details</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home </a></li>
                        <li><a href="dealers.html">Dealer</a></li>
                        <li>Dealer Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Dealer Details section Start -->
        <section class="service-details-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="service-desc">
                            <h2>Explore Our Customer Service</h2>
                            <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="single-service-img" data-fancybox="gallery" href="dependencies/img/dealer/single-dealer-2.webp">
                                        <img src="dependencies/img/dealer/single-dealer-2.webp" alt="Image">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="single-service-img" data-fancybox="gallery" href="dependencies/img/dealer/single-dealer-3.webp">
                                        <img src="dependencies/img/dealer/single-dealer-3.webp" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <h2>We Provide Useful Services</h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout the point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters as opposed to using content here content here making it look like readable English. Many desktop publishing packages dolore magna amet.</p>
                            <div class="single-service-img mt-4">
                                <img src="dependencies/img/dealer/single-dealer-1.webp" alt="Image">
                            </div>
                            <h2>Service We Provide</h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages.</p>
                            <ul class="product-feature-list list-style mb-4">
                                <li><span><i class="ri-check-line"></i></span>Lorem ipsum dolor, sit amet.</li>
                                <li><span><i class="ri-check-line"></i></span>Amet consectetur adipisicing elit. Officia, odit!</li>
                                <li><span><i class="ri-check-line"></i></span>Aquaerat ipsa quis possimus.</li>
                                <li><span><i class="ri-check-line"></i></span>Lorem, ipsum dolor sit amet consectetur adipi.</li>
                            </ul>
                            <h2>Location</h2>
                            <div class="comp-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget-one">
                                <div class="search-box">
                                    <div class="form-group">
                                        <input type="search" placeholder="Search">
                                        <button type="submit"> 
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Top Dealers</h3>
                                <ul class="category-box-two list-style">
                                    <li>
                                        <a href="dealer-details.html">
                                           Car Track Holdings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dealer-details.html">
                                           Head Racing Holdings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dealer-details.html">
                                            Motorline Automotive
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dealer-details.html">
                                            Grand Pix Motors
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dealer-details.html">
                                           Shone Automobile 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-widget-one tags">
                                <h3 class="sidebar-widget-one-title">Tags</h3>
                                <div class="tag-list">
                                    <ul class="list-style">
                                        <li><a href="listings.html">Hatchback</a></li>
                                        <li><a href="listings.html">Luxury</a></li>
                                        <li><a href="listings.html">Minivan</a></li>
                                        <li><a href="listings.html">Premium</a></li>
                                        <li><a href="listings.html">Sedan</a></li>
                                        <li><a href="listings.html">Supercars</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget-one contact-widget">
                                <h3 class="sidebar-widget-one-title">Contact Details</h3>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dealer Details section end -->

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