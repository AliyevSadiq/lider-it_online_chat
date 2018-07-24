<?php
/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 14.03.2018
 * Time: 18:26
 */

namespace app\assets;


use yii\web\AssetBundle;

class LoginAppAsset extends AssetBundle
{



    public $basePath = '@webroot';
    public $baseUrl = '/web/admin';
    public $css = [
        'font-awesome/css/font-awesome.css',
        'css/animate.css',
        'css/style.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}