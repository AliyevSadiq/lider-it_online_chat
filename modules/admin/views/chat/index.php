<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
$script = <<< JS
$(document).ready(function() {
    setInterval(function updateDiv()
{ 
    $( "#refresh-div" ).load(window.location.href + " #refresh-div" );
}, 3000);
});
JS;
$this->registerJs($script);
?>
<?php
$form=ActiveForm::begin(['options'=>['class'=>'form-horizontal']]);
echo   $form->field($model, "chat_message")->textarea(['rows' => '6']);
echo Html::submitButton('Отправить',['class'=>'btn btn-success']);
ActiveForm::end();
?>

<?php Pjax::begin(); ?>

<div id="refresh-div">
<?php
foreach ($chats as $chat):
?>
    <br>
    <div class="alert alert-success" role="alert">
    <p><b><?php echo $chat->username;?></b></p>
     <p><?php echo $chat->chat_message;?></p>
    </div>

<?php endforeach;?>
</div>
<?php Pjax::end(); ?>