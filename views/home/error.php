<?php
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = $name;
?>


<div class='c'>
    <div class='_404'>404</div>
    <hr>
    <div class='_1'>THE PAGE</div>
    <div class='_2'>WAS NOT FOUND</div>
    <a class='btn' href="<?php echo Url::to(['/'])?>">BACK TO HOME</a>
</div>