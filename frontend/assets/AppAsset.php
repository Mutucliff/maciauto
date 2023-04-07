<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        "dependencies/css/bootstrap.min.css",
        "dependencies/css/flaticon_motoz.css",
        "dependencies/css/remixicon.css",
        "dependencies/css/ionicons.min.css",
        "dependencies/css/owl.carousel.min.css",
        "dependencies/css/odometer.min.css",
        "dependencies/css/fancybox.css",
        "dependencies/css/aos.css",
        "dependencies/css/header.css",
        "dependencies/css/style.css",
        "dependencies/css/footer.css",
        "dependencies/css/responsive.css",
        "dependencies/css/dark-theme.css",
    ];
    public $js = [
        "../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js",
        "dependencies/js/jquery.min.js",
        "dependencies/js/bootstrap.bundle.min.js",
        "dependencies/js/form-validator.min.js",
        "dependencies/js/contact-form-script.js",
        "dependencies/js/aos.js",
        '../../../unpkg.com/ionicons%405.0.0/dist/ionicons.js',
        "dependencies/js/owl.carousel.min.js",
        "dependencies/js/odometer.min.js",
        "dependencies/js/fancybox.js",
        "dependencies/js/jquery.appear.js",
        "dependencies/js/tweenmax.min.js",
        "dependencies/js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
