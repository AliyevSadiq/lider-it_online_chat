<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизоваться';
$this->params['breadcrumbs'][] = $this->title;

?>





    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'class'=>'m-t',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div >{input}</div>\n<div class=\"col-lg-9\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]);

    echo  $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>

    <?php echo  $form->field($model, 'password')->passwordInput()->label(false) ?>

    <?php echo  $form->field($model, 'rememberMe')->checkbox([
        'template' => "<div class=\"col-lg-9\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
    ]) ?>

    <div class="form-group">

            <?php echo  Html::submitButton('Авторизоваться', ['class' => 'btn btn-primary block full-width m-b', 'name' => 'login-button']) ?>

    </div>

    <?php ActiveForm::end(); ?>
<a href="<?php echo \yii\helpers\Url::to(['site/registration'])?>" class="btn btn-primary block full-width m-b">Регистрация</a>






