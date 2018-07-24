<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
       '/css/bootstrap.min.css',
       'https://use.fontawesome.com/releases/v5.0.10/css/all.css',
       '/css/animate.css',
       '/css/owl.carousel.min.css',
       '/css/style.css',

    ];
    public $js = [
     //  'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyBaCys1ai-jfl45Z9CMrzBwkn-FD_LrbHU&callback=initMap',
       '/js/bootstrap.min.js',
       '/js/bootstrap-formhelpers-phone.js',
       '/js/wow.min.js',
       '/js/jquery.easing.1.3.js',
      // '/js/jquery.mobile.customized.min.js',
       'https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js',
       '/js/owl.carousel.min.js',
       '/js/script.js',

    ];




    public $depends = [




        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
