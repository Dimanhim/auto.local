<?php

namespace app\modules\controllers;

use yii\web\Controller;
use app\modules\models\FormAdd;

/**
 * Default controller for the `addModel` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	$form = new FormAdd();
    	/*if($form->load(Yii::$app->request->post()))
    	{

    	}*/
        return $this->render('index', [
        	'pageForm' => $form,
        ]);
    }
}
