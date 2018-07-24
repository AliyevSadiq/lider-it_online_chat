<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;


if(Yii::$app->session->hasFlash('error')){

    echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Предупреждение! </strong>'.Yii::$app->session->getFlash('error').'
</div>';

}

 $form = ActiveForm::begin([
    'id' => 'login-form',
    'class'=>'m-t',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div >{input}</div>\n<div class=\"col-lg-9\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]);

echo  $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>

<?php echo  $form->field($model, 'password')->label(false);?>


<div class="form-group">
    <?php echo  Html::submitButton('Регистрация', ['class' => 'btn btn-primary block full-width m-b', 'name' => 'login-button']) ?>

</div>

<?php ActiveForm::end(); ?>







