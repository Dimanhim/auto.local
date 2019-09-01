<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Models;
use frontend\models\Images;
use frontend\models\Equipment;
use frontend\models\Ad;
use yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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

    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $id = Yii::$app->request->get('id');
        $action = Yii::$app->request->get('action');
        if($action == 'delete')
        {
            $mg = false;
            $imgs = Images::find()->where(['ad' => $id])->all();
            foreach($imgs as $img)
            {
                if($img->bs == 1) unlink('images/small/'.$img->name);
                elseif($img->bs == 2) unlink('images/large/'.$img->name);
                $img->delete();
            }
            if(Ad::findOne($id)->delete()) $message = 'Объявление успешно удалено';
        }
        $ads = Ad::find();
        $pagination = new Pagination(
            [
                'defaultPageSize' => 5,
                'totalCount' => $ads->count(),
            ]
        );
        $ads = $ads->orderby('id')->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('index', [
            'ads' => $ads,
            'pagination' => $pagination
        ]);
    }
    public function actionModel()
    {
        $id = Yii::$app->request->get('id');
        $ad = Ad::findOne($id);
        $images = Images::find()->where(['ad' => $id]);
        $images_min = Images::find()->where(['ad' => $id, 'bs' => 1])->all();
        $images_max = Images::find()->where(['ad' => $id, 'bs' => 2])->all();

        return $this->render('model', [
            'ad' => $ad,
            'images_min' => $images_min,
            'images_max' => $images_max,
        ]);
    }
    public function actionAddModel()
    {
        $id = Yii::$app->request->get('id');
        return $this->render('add_model');
    }
}
