<?php

namespace app\controllers;
use Yii;
use app\models\TestForm;

class PostController extends AppController
{
    public $layout = 'basic';

    public function actionIndex()
    {
        if (Yii::$app->request->isAjax) {
            return print_r($_POST, true);
        }

        $model = new TestForm();

        return $this->render('index', compact('model'));
    }

    public function actionShow()
    {
        return $this->render('show');
    }
}