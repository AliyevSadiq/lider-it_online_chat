<?php
/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 13.02.2018
 * Time: 10:01
 */

namespace app\modules\admin\controllers;


use yii\web\Controller;

class AppController extends Controller
{

    public  function debug($arr){
    echo '<pre>'.print_r($arr,true).'</pre>';
}

    protected function setMeta($title=null){
        $this->view->title=$title;

    }


}
