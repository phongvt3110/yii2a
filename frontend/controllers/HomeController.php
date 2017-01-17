<?php

namespace frontend\controllers;
use yii\web\Controller;

class HomeController extends Controller{
    public function actionIndex(){
        $this->layout = 'myLayout';      
        return $this->render('index');
    }
}
