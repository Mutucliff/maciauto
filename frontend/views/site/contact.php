<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?> 
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-10 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home </a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

         <!-- Contact Us section Start -->
         <section class="contact-us-wrap ptb-100">
            <div class="container">
                <div class="section-title-two text-center mb-30">
                    <span>Contact Us</span>
                    <h2>Don't Hesitate To Contact Us</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="contact-item-wrap">
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <ion-icon name="location"></ion-icon>
                                </span>
                                <div class="contact-info">
                                    <h3>Our Location</h3>
                                    <p>CA 560 bush st & 20th ave, apt 5
                                        san francisco,230909, canada
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <ion-icon name="mail"></ion-icon>
                                </span>
                                <div class="contact-info">
                                    <h3>Send An Email</h3>
                                    <a href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#4129242d2d2e012c2e352e3b6f222e2c"><span class="__cf_email__" data-cfemail="224a474e4e4d624f4d564d580c414d4f">[email&#160;protected]</span></a>
                                    <a href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#2c5f595c5c435e586c4143584356024f4341"><span class="__cf_email__" data-cfemail="2a595f5a5a45585e6a47455e455004494547">[email&#160;protected]</span></a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <ion-icon name="call"></ion-icon>
                                </span>
                                <div class="contact-info">
                                    <h3>Phone Number</h3>
                                    <a href="tel:88098787868">+44 587 154765</a>
                                    <a href="tel:88098787869">+55 576 234532</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="contact-form">
                            <form class="form-wrap" id="contactForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name*" id="name"
                                                required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" required
                                                placeholder="Email*" data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="phone_number" id="phone_number" required
                                                placeholder="Phone Number*" data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" placeholder="Subject*" id="msg_subject" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group v1">
                                            <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check checkbox">
                                            <input
                                                name="gridCheck"
                                                value="I agree to the terms and privacy policy."
                                                class="form-check-input"
                                                type="checkbox"
                                                id="gridCheck"
                                                required
                                            >
                                            <label class="form-check-label" for="gridCheck">
                                                I agree to the <a class="link style2" href="terms-of-service.html">terms &amp; conditions</a> and <a class="link style2" href="privacy-policy.html">privacy policy</a>
                                            </label>
                                            <div class="help-block with-errors gridCheck-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn-two">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us section End -->

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
