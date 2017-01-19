<?php
/**
 * Created by PhpStorm.
 * User: phongvt
 * Date: 18/01/2017
 * Time: 13:15
 */

namespace backend\controllers;


use yii\web\Controller;

class HomebackendController extends Controller
{
    public function actionIndex(){
        $request = \Yii::$app->getRequest();
        echo $request->getUrl();
        echo '<br>';
        echo $request->getAbsoluteUrl();
        echo '<br>';
        echo $request->getHostInfo();
        echo '<br>';
        echo $request->getPathInfo();
        echo '<br>';
        echo $request->getQueryString();
        echo '<br>';
        echo $request->getPort();
        echo '<br>';
        echo $request->getScriptUrl();
        echo '<br>';
        echo $request->getServerName();
        echo '<br>';
        echo $request->getBaseUrl();
        echo '<br>';
        echo $request->getServerPort();
        echo '<br>';
        print_r($request->getHeaders());
        echo '<br>';
        echo $request->getHeaders()->get('cookie');
        echo '<br>';
        echo $request->getUserAgent();
        echo '<br>';
        echo $request->getUserIP();
        echo '<br>';
        echo $request->getUserHost();
        echo '<br>=====================';
        echo '<br>';
        print_r($request->getQueryParams());
        echo '<br>';
        echo $request->getQueryParam('id');
    }
}