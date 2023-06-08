<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\UserAi;
use app\models\SignupForm;

class AiController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', '注册成功！');
            return $this->redirect(['ai/index']);
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
}