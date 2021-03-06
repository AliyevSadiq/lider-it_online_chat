<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use app\assets\ErrorAsset;
use yii\helpers\Url;
ErrorAsset::register($this);
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
<div class="container">

    <div class="row pad-top text-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <?php echo $content;?>


        </div>

    </div>
</div>






<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
