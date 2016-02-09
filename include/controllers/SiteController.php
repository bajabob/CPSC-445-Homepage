<?php

namespace app\controllers;

use app\models\A2People;
use app\models\A2PeopleTags;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionA1()
    {
        return $this->render('a1');
    }

    public function actionA2()
    {

        $people = A2People::find()
            ->indexBy('id')
            ->all();

        $toSend = array();

        foreach($people as $p){
            array_push($toSend, ['person' => $p, 'tags' => A2PeopleTags::getAllByPeopleId($p->id)]);
        }


        return $this->render('a2', ['people' => $toSend]);
    }
}
