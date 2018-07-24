<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "chat".
 *
 * @property int $chat_id
 * @property int $user_id
 * @property string $chat_message
 */
class Chat extends \yii\db\ActiveRecord
{
    public $username;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chat';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'chat_message'], 'required'],
            [['user_id'], 'integer'],
            [['chat_message'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'chat_id' => 'Chat ID',
            'user_id' => 'User ID',
            'chat_message' => 'Chat Message',
        ];
    }
}
