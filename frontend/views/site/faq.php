<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'faq';
$this->params['breadcrumbs'][] = $this->title;
?>
  <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-12 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Frequently Asked Questions</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home </a></li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- FAQ Section start -->
        <section class="faq-wrap ptb-100">
            <img src="dependencies/img/faq-shape-1.webp" alt="Image" class="faq-shape-one bounce">
            <img src="dependencies/img/faq-shape-2.webp" alt="Image" class="faq-shape-two animationFramesTwo">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="faq-img-wrap">
                            <img src="dependencies/img/city/faq-img-1.webp" alt="Image" class="faq-img-one">
                            <img src="dependencies/img/city/faq-img-2.webp" alt="Image" class="faq-img-two">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="content-title-two mb-30">
                                <span>FAQ</span>
                                <h2>Need To Ask Some Questions Or Check Questions</h2>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            <span>
                                                <ion-icon name="add-circle-outline" class="plus"></ion-icon>
                                                <ion-icon name="remove-circle-outline" class="minus"></ion-icon>
                                            </span>
                                            Do You Offer Any Sort Of Warranty?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="single-product-text">
                                                <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi. Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <span>
                                                <ion-icon name="add-circle-outline" class="plus"></ion-icon>
                                                <ion-icon name="remove-circle-outline" class="minus"></ion-icon>
                                            </span>
                                            When Should I Get My Oil Changed?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse "
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi. Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <span>
                                                <ion-icon name="add-circle-outline" class="plus"></ion-icon>
                                                <ion-icon name="remove-circle-outline" class="minus"></ion-icon>
                                            </span>
                                            We Know How To Handle A Wide Range Of Car Services.
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi. Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingfour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                            aria-expanded="true" aria-controls="collapsefour">
                                            <span>
                                                <ion-icon name="add-circle-outline" class="plus"></ion-icon>
                                                <ion-icon name="remove-circle-outline" class="minus"></ion-icon>
                                            </span>
                                            Maintain Your Car To Stay Safe On The Road
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse "
                                        aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="single-product-text">
                                                <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi. Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section End -->

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