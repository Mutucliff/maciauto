<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Topdealers';
$this->params['breadcrumbs'][] = $this->title;
?>
 <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-16 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Dealers</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home </a></li>
                        <li>Dealers</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Dealer Section Start -->
        <div class="Dealer-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 order-xl-1 order-lg-1 order-md-2 order-2">
                        <div class="sidebar-two">
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Search By Name</h3>
                                <form action="#" class="filter-search">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Keyword">
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Detect My Location</h3>
                                <form action="#" class="filter-search">
                                    <div class="form-group">
                                        <input type="text" placeholder="Near Me">
                                    </div>
                                    <button type="submit" class="btn-two d-block w-100">Filter Result</button>
                                </form>
                            </div>
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Location</h3>
                                <div class="filter-radio-group">
                                    <div class="form-group">
                                        <input type="radio" id="test1" name="radio-group_one">
                                        <label for="test1">Paris, France</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test2" name="radio-group_one">
                                        <label for="test2">United Kngdom</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test3" name="radio-group_one">
                                        <label for="test3">South Africa</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test4" name="radio-group_one">
                                        <label for="test4">Canada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget-one contact-widget">
                                <h3 class="sidebar-widget-one-title">Contact Details</h3>
                                <form id="contactForm">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" id="name"
                                            required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required
                                            placeholder="Email" data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group v1">
                                        <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <button type="submit" class="btn-two w-100 d-block">Send Now</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-8 col-lg-8 order-xl-2 order-lg-1 order-md-1 order-1">
                        <div class="search-result-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-md-7">
                                    <p>Showing 1-13 of 23 Results</p>
                                </div>
                                <div class="col-lg-4 col-md-5">
                                    <select >
                                        <option value="1">Sort By Price: Low To High</option>
                                        <option value="2">Sort By Price: High To Low</option>
                                        <option value="3">Sort By Ratings: High To Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="dealer-card">
                                    <div class="dealer-logo">
                                        <img src="assets/img/dealer/dealer-1.webp" alt="Image">
                                    </div>
                                    <div class="dealer-info">
                                        <h3><a href="dealer-details.html">Quality Auto Services</a></h3>
                                        <ul class="dealer-metainfo list-style">
                                            <li><i class="flaticon-placeholder"></i>West 12th Street New York</li>
                                            <li><i class="flaticon-survey"></i>Total Listings: 1</li>
                                            <li><i class="flaticon-phone-call"></i><a href="7553028572.html">+1 755 302 8572</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="dealer-card">
                                    <div class="dealer-logo">
                                        <img src="assets/img/dealer/dealer-2.webp" alt="Image">
                                    </div>
                                    <div class="dealer-info">
                                        <h3><a href="dealer-details.html">JAPA Auto Parts</a></h3>
                                        <ul class="dealer-metainfo list-style">
                                            <li><i class="flaticon-placeholder"></i>3135 Oliver St, Fort Worth</li>
                                           <li><i class="flaticon-survey"></i>Total Listings: 2</li>
                                            <li><i class="flaticon-phone-call"></i><a href="7553028572.html">+1 755 302 8572</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="dealer-card">
                                    <div class="dealer-logo">
                                        <img src="assets/img/dealer/dealer-3.webp" alt="Image">
                                    </div>
                                    <div class="dealer-info">
                                        <h3><a href="dealer-details.html">Precision Tune Auto Care</a></h3>
                                        <ul class="dealer-metainfo list-style">
                                            <li><i class="flaticon-placeholder"></i>342/A Brooklyn St, Milson</li>
                                           <li><i class="flaticon-survey"></i>Total Listings: 10</li>
                                            <li><i class="flaticon-phone-call"></i><a href="7553028572.html">+1 755 302 8572</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="dealer-card">
                                    <div class="dealer-logo">
                                        <img src="assets/img/dealer/dealer-4.webp" alt="Image">
                                    </div>
                                    <div class="dealer-info">
                                        <h3><a href="dealer-details.html">Affordable Automotive </a></h3>
                                        <ul class="dealer-metainfo list-style">
                                            <li><i class="flaticon-placeholder"></i>123 Queensberry Street</li>
                                           <li><i class="flaticon-survey"></i>Total Listings: 5</li>
                                            <li><i class="flaticon-phone-call"></i><a href="7553028572.html">+1 755 302 8528</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="dealer-card">
                                    <div class="dealer-logo">
                                        <img src="assets/img/dealer/dealer-5.webp" alt="Image">
                                    </div>
                                    <div class="dealer-info">
                                        <h3><a href="dealer-details.html">Zoom Vroom Auto </a></h3>
                                        <ul class="dealer-metainfo list-style">
                                            <li><i class="flaticon-placeholder"></i>North Melbourne VIC 3051</li>
                                           <li><i class="flaticon-survey"></i>Total Listings: 13</li>
                                            <li><i class="flaticon-phone-call"></i><a href="7553028572.html">+1 755 302 8544</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="dealer-card">
                                    <div class="dealer-logo">
                                        <img src="assets/img/dealer/dealer-6.webp" alt="Image">
                                    </div>
                                    <div class="dealer-info">
                                        <h3><a href="dealer-details.html">The Auto Hospital </a></h3>
                                        <ul class="dealer-metainfo list-style">
                                            <li><i class="flaticon-placeholder"></i>California, United States</li>
                                           <li><i class="flaticon-survey"></i>Total Listings: 2</li>
                                            <li><i class="flaticon-phone-call"></i><a href="7553028572.html">+61-1234-5678-9</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="dealer-card">
                                    <div class="dealer-logo">
                                        <img src="assets/img/dealer/dealer-7.webp" alt="Image">
                                    </div>
                                    <div class="dealer-info">
                                        <h3><a href="dealer-details.html">The Friendly Garage</a></h3>
                                        <ul class="dealer-metainfo list-style">
                                            <li><i class="flaticon-placeholder"></i>44 New Design Street USA</li>
                                           <li><i class="flaticon-survey"></i>Total Listings: 12</li>
                                            <li><i class="flaticon-phone-call"></i><a href="7553028572.html">+0477 85X6 552</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="dealer-card">
                                    <div class="dealer-logo">
                                        <img src="assets/img/dealer/dealer-8.webp" alt="Image">
                                    </div>
                                    <div class="dealer-info">
                                        <h3><a href="dealer-details.html">Ready To Repair</a></h3>
                                        <ul class="dealer-metainfo list-style">
                                            <li><i class="flaticon-placeholder"></i>685 Lane Drive St. Canada</li>
                                           <li><i class="flaticon-survey"></i>Total Listings: 1</li>
                                            <li><i class="flaticon-phone-call"></i><a href="7553028572.html">+ 10 256 65 26</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="dealer-card">
                                    <div class="dealer-logo">
                                        <img src="assets/img/dealer/dealer-9.webp" alt="Image">
                                    </div>
                                    <div class="dealer-info">
                                        <h3><a href="dealer-details.html">Ready To Repair</a></h3>
                                        <ul class="dealer-metainfo list-style">
                                            <li><i class="flaticon-placeholder"></i>1235 Lane Drive New York, USA</li>
                                           <li><i class="flaticon-survey"></i>Total Listings: 1</li>
                                            <li><i class="flaticon-phone-call"></i><a href="7553028572.html">+ 10 256 65 26</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="page-nav list-style">
                            <li><a href="dealers.html"><i class="flaticon-left-arrow"></i></a></li>
                            <li><a class="active" href="dealers.html">1</a></li>
                            <li><a href="dealers.html">2</a></li>
                            <li><a href="dealers.html">3</a></li>
                            <li><a href="dealers.html"><i class="flaticon-next"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dealer Section End -->

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