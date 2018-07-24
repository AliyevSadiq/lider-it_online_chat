<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $id
 * @property string $username
 * @property string $role
 * @property string $password
 * @property string $auth_key
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'role', 'password'], 'required'],
            [['username', 'password', 'auth_key'], 'string', 'max' => 200],
            [['role'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' =>'Имя пользователя',
            'password' =>'Пароль',
            'role' => 'Role',
            'auth_key' => 'Auth Key',
        ];
    }
}
