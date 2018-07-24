<?php
/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 23.07.2018
 * Time: 16:56
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\Chat;
use Yii;
class ChatController extends  AppController
{

    public function actionIndex(){

        $time = date('H:i:s');

        $query = "SELECT * FROM `chat`
INNER JOIN
`user`
ON
`chat`.`user_id`=`user`.`id`
ORDER BY `chat_id` DESC";

        $chats = Chat::findBySql($query)->all();
        $user_id=Yii::$app->user->identity['id'];
        $model=new Chat();
        if ($model->load(Yii::$app->request->post())) {
            $model->user_id =  $user_id;
            $model->chat_message = Yii::$app->request->post('Chat')['chat_message'];
            if($model->save()) {
                return $this->refresh();
            }
        }
        $this->setMeta('Панель администратора | Чат');
        return $this->render('index',compact('model','chats','time'));
    }
}