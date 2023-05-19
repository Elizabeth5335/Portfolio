<?php

namespace app\controllers;

use app\helpers\ElasticEmailHelper;
use yii\helpers\Url;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
//use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionContact(){
        $model = new ContactForm();
        Yii::$app->session->setFlash('error', 'No data to send email.');
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $emailSent = ElasticEmailHelper::contact($model);
            if ($emailSent) {
                Yii::$app->session->setFlash('success', 'Email sent successfully.');
            } else {
                Yii::$app->session->setFlash('error', 'Failed to send email.');
            }
        }

        if(Yii::$app->session->get('language')==='en'){
            return $this->redirect('/en');
        }
        else
            return $this->redirect('/uk');
    }

}
