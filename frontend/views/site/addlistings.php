<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'addlistings';
$this->params['breadcrumbs'][] = $this->title;
?>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap br-15 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Car Listings</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home </a></li>
                        <li>Listings</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Blog Details Section Start -->
        <div class="blog-details-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 order-xl-1 order-lg-1 order-md-2 order-2">
                        <div class="sidebar-two">
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Search Filters</h3>
                                <form action="#" class="filter-search">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Keyword">
                                    </div>
                                    <div class="form-group">
                                        <select >
                                            <option value="0">Condition</option>
                                            <option value="1">New</option>
                                            <option value="2">Refubrished</option>
                                            <option value="3">Resale</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select >
                                            <option value="0">Condition</option>
                                            <option value="1">New</option>
                                            <option value="2">Refubrished</option>
                                            <option value="3">Resale</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="car_make" id="car_make">
                                            <option value="0">Select Make</option>
                                            <option value="1">Audi</option>
                                            <option value="2">BMW</option>
                                            <option value="3">Voxwagon</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="car_model" id="car_model">
                                            <option value="0">Select Car Model</option>
                                            <option value="1">N Series</option>
                                            <option value="2">S Series</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="car_offer" id="car_offer">
                                            <option value="0">Select Type</option>
                                            <option value="1">Discount Offer</option>
                                            <option value="2">Promotional Offer</option>
                                            <option value="3">Rental Offer</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Fuel Types</h3>
                                <div class="filter-radio-group">
                                    <div class="form-group">
                                        <input type="radio" id="test1" name="radio-group_one">
                                        <label for="test1">Diesel</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test2" name="radio-group_one">
                                        <label for="test2">Electric</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test3" name="radio-group_one">
                                        <label for="test3">Hybrid</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test4" name="radio-group_one">
                                        <label for="test4">Petrol</label>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Transmission</h3>
                                <div class="filter-radio-group">
                                    <div class="form-group">
                                        <input type="radio" id="test5" name="radio-group_two">
                                        <label for="test5">Autometic</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test6" name="radio-group_two">
                                        <label for="test6">CVT</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test7" name="radio-group_two">
                                        <label for="test7">DCT</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test8" name="radio-group_two">
                                        <label for="test8">Manual</label>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Features</h3>
                                <div class="filter-radio-group">
                                    <div class="form-group">
                                        <input type="radio" id="test9" name="radio-group_three">
                                        <label for="test9">Airbag - Driver</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test10" name="radio-group_three">
                                        <label for="test10">Airbag - Passenger</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test11" name="radio-group_three">
                                        <label for="test11">Alloy Wheels</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test12" name="radio-group_three">
                                        <label for="test12">Anti-lock Braking System</label>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Save Search</h3>
                                <form action="#" class="save-search-form">
                                    <div class="form-group">
                                        <input type="text" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Email Frequency">
                                    </div>
                                    <button class="btn-two">Save Search</button>
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
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="dependencies/img/product/product-9.webp" alt="Image">
                                         <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <a href="listings.html" class="product-category">Crossover</a>
                                        <h3><a href="listing-details.html">Audi Trone Electric Sport</a></h3>
                                        <div class="product-price">Price: $62000</div>
                                        <ul class="product-amenity list-style">
                                            <li>Transmission <span>Autometic</span></li>
                                            <li>Drive <span>4WD</span></li>
                                            <li>Mileage<span>1500 (Mi)</span></li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-style">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                            <span>(4k+ Ratings)</span>
                                        </div>
                                        <a href="listing-details.html" class="btn-one">View Details</a>
                                        <p class="product-listed-by">Listed By: <span>Midas International</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="dependencies/img/product/product-10.webp" alt="Image">
                                         <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <a href="listings.html" class="product-category">Convertible</a>
                                        <h3><a href="listing-details.html">Nissan Sports T10</a></h3>
                                        <div class="product-price">Price: $35000</div>
                                        <ul class="product-amenity list-style">
                                            <li>Transmission <span>Autometic</span></li>
                                            <li>Drive <span>4WD</span></li>
                                            <li>Mileage<span>1500 (Mi)</span></li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-style">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                            <span>(3k+ Ratings)</span>
                                        </div>
                                        <a href="listing-details.html" class="btn-one">View Details</a>
                                        <p class="product-listed-by">Listed By: <span>Tune Auto Care</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="dependencies/img/product/product-11.webp" alt="Image">
                                         <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <a href="listings.html" class="product-category">Sedan</a>
                                        <h3><a href="listing-details.html">BMW Electric Model i4</a></h3>
                                        <div class="product-price">Price: $94000</div>
                                        <ul class="product-amenity list-style">
                                            <li>Transmission <span>Autometic</span></li>
                                            <li>Drive <span>4WD</span></li>
                                            <li>Mileage<span>1500 (Mi)</span></li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-style">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                            <span>(2k+ Ratings)</span>
                                        </div>
                                        <a href="listing-details.html" class="btn-one">View Details</a>
                                        <p class="product-listed-by">Listed By: <span>The Auto Hospital</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="dependencies/img/product/product-12.webp" alt="Image">
                                         <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <a href="listings.html" class="product-category">Wagon</a>
                                        <h3><a href="listing-details.html">New 2022 Lexus RC4</a></h3>
                                        <div class="product-price">Price: $65000</div>
                                        <ul class="product-amenity list-style">
                                            <li>Transmission <span>Autometic</span></li>
                                            <li>Drive <span>4WD</span></li>
                                            <li>Mileage<span>1500 (Mi)</span></li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-style">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                            <span>(4k+ Ratings)</span>
                                        </div>
                                        <a href="listing-details.html" class="btn-one">View Details</a>
                                        <p class="product-listed-by">Listed By: <span>Total Care Auto</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="dependencies/img/product/product-13.webp" alt="Image">
                                         <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <a href="listings.html" class="product-category">Hybrid</a>
                                        <h3><a href="listing-details.html">Volvo Electric Model A10</a></h3>
                                        <div class="product-price">Price: $46000</div>
                                        <ul class="product-amenity list-style">
                                            <li>Transmission <span>Autometic</span></li>
                                            <li>Drive <span>4WD</span></li>
                                            <li>Mileage<span>1500 (Mi)</span></li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-style">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                            <span>(1k+ Ratings)</span>
                                        </div>
                                        <a href="listing-details.html" class="btn-one">View Details</a>
                                        <p class="product-listed-by">Listed By: <span>Luxe Auto Care</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="dependencies/img/product/product-14.webp" alt="Image">
                                         <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <a href="listings.html" class="product-category">SUV</a>
                                        <h3><a href="listing-details.html">Range Rover Evouque R5</a></h3>
                                        <div class="product-price">Price: $842000</div>
                                        <ul class="product-amenity list-style">
                                            <li>Transmission <span>Autometic</span></li>
                                            <li>Drive <span>4WD</span></li>
                                            <li>Mileage<span>1500 (Mi)</span></li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-style">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                            <span>(7k+ Ratings)</span>
                                        </div>
                                        <a href="listing-details.html" class="btn-one">View Details</a>
                                        <p class="product-listed-by">Listed By: <span>Eco Auto Service</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="dependencies/img/product/product-23.webp" alt="Image">
                                         <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <a href="listings.html" class="product-category">Hatchback</a>
                                        <h3><a href="listing-details.html">Tesla 2022 Edition T10</a></h3>
                                        <div class="product-price">Price: $54000</div>
                                        <ul class="product-amenity list-style">
                                            <li>Transmission <span>Autometic</span></li>
                                            <li>Drive <span>4WD</span></li>
                                            <li>Mileage<span>1500 (Mi)</span></li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-style">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                            <span>(3k+ Ratings)</span>
                                        </div>
                                        <a href="listing-details.html" class="btn-one">View Details</a>
                                        <p class="product-listed-by">Listed By: <span>Auto Excellence</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="dependencies/img/product/product-24.webp" alt="Image">
                                         <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <a href="listings.html" class="product-category">Audi</a>
                                        <h3><a href="listing-details.html">Hundai Kong GT Sports</a></h3>
                                        <div class="product-price">Price: $72000</div>
                                        <ul class="product-amenity list-style">
                                            <li>Transmission <span>Autometic</span></li>
                                            <li>Drive <span>4WD</span></li>
                                            <li>Mileage<span>1500 (Mi)</span></li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-style">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                            <span>(5k+ Ratings)</span>
                                        </div>
                                        <a href="listing-details.html" class="btn-one">View Details</a>
                                        <p class="product-listed-by">Listed By: <span>Zoom Vroom Auto</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="dependencies/img/product/product-25.webp" alt="Image">
                                         <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <a href="listings.html" class="product-category">Voxwagon</a>
                                        <h3><a href="listing-details.html">Voxy Sports Car</a></h3>
                                        <div class="product-price">Price: $42000</div>
                                        <ul class="product-amenity list-style">
                                            <li>Transmission <span>Autometic</span></li>
                                            <li>Drive <span>4WD</span></li>
                                            <li>Mileage<span>1500 (Mi)</span></li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-style">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                            <span>(4k+ Ratings)</span>
                                        </div>
                                        <a href="listing-details.html" class="btn-one">View Details</a>
                                        <p class="product-listed-by">Listed By: <span>Milan Auto</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="page-nav list-style">
                            <li><a href="listings.html"><i class="flaticon-left-arrow"></i></a></li>
                            <li><a class="active" href="listings.html">1</a></li>
                            <li><a href="listings.html">2</a></li>
                            <li><a href="listings.html">3</a></li>
                            <li><a href="listings.html"><i class="flaticon-next"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Listing Section End -->

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
