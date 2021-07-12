<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\usd;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $class= new usd;
        $function = "kurs";
        $class->$function();
        return $this->render('index');
    }
}
