<?php

namespace app\modules\admin;
use yii\filters\AccessControl;
use Yii;
use yii\web\ErrorHandler;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        $r = Yii::$app->urlManager->parseRequest(Yii::$app->request)[0];
        $r_array = explode('/',$r);

        if($r_array[0] === 'admin') {
            Yii::configure($this, [
                'components' => [
                    'errorHandler' => [
                        'class' => ErrorHandler::className(),
                        'errorAction' => '/admin/partner/error',
                    ]
                ],
            ]);

            $handler = $this->get('errorHandler');
            Yii::$app->set('errorHandler', $handler);
            $handler->register();

        }


    }

    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }
}
