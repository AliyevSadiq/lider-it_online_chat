<?php
/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 14.03.2018
 * Time: 18:26
 */

namespace app\assets;


use yii\web\AssetBundle;

class AdminAppAsset extends AssetBundle
{



    public $basePath = '@webroot';
    public $baseUrl = '/web/admin';


    public $css = [
	// '/css/bootstrap.min.css',
        'font-awesome/css/font-awesome.css',
        'css/animate.css',
        'css/style.css',
        'css/sweetalert.css',

    ];
    public $js = [
	//'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
        'js/jquery.metisMenu.js',
        'js/jquery.slimscroll.min.js',
        'js/inspinia.js',
        'js/pace.min.js',
        'js/sweetalert.min.js',

        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}