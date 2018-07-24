<?php
/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 07.04.2018
 * Time: 11:40
 */

namespace app\controllers;
use yii\web\Controller;

class HomeController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout'=>'error_template',
            ],

        ];
    }

    public function actionIndex(){
        return  $this->redirect('/error');
    }



}