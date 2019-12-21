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
        'css/style.css?ver=1569939155',
    ];
    public $js = [
        'https://code.jquery.com/jquery-3.4.1.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js',
        'js/cookie-policy.js',
        'js/script.js?ver=1569939150',
        'js/mail.js',
        'https://www.google.com/recaptcha/api.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'frontend\assets\IE9Asset',
    ];
}
