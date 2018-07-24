<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;

use app\assets\AdminAppAsset;

AdminAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo  Yii::$app->language ?>">
<head>
    <meta charset="<?php echo  Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo  Html::csrfMetaTags() ?>
    <title><?php echo  Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="wrapper">


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">

                        <span class="block m-t-xs"> <strong class="font-bold">Панель администратора</strong>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo Yii::$app->user->identity['username'];?></strong>
                             </span>  </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?php echo Url::to(['/site/logout'])?>">Выйти</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                       АП
                    </div>
                </li>



              
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                </div>


            </nav>
        </div>


        <?php echo $content;?>
        <div class="footer">

        </div>

    </div>
</div>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
