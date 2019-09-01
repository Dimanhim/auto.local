<?php

namespace app\modules\controllers;

use Yii;
use yii\web\Controller;
use app\modules\models\FormAdd;
use frontend\models\Cars;
use frontend\models\Models;
use frontend\models\Equipment;
use frontend\models\Ad;
use frontend\models\Images;
use yii\web\UploadedFile;
use keygenqt\components\ImageHandler;

/**
 * Default controller for the `addModel` module
 */
class DefaultController extends Controller
{

    public function actionIndex()
    {
//--- Подгрузка моделей автомобилей
        if(Yii::$app->request->get('car'))
        {
            $car_id = Yii::$app->request->get('car');
            $models = Models::find()->where(['car' => $car_id])->all();
            $values = [];
            foreach($models as $model)
            {
                $values[$model->id] = $model->model;
            }
            return json_encode($values);
        }
         
//--- Обработка формы
    	$form = new FormAdd();
    	if($form->load(Yii::$app->request->post()))
    	{
            $ad = new Ad();
            $ad->car = $form->car;
            $ad->model = $form->model;
            $ad->mileage = $form->mileage;
            $ad->price = $form->price;
            $ad->phone = $form->phone;
            
    //--- Дополнительное оборудование
            $eq_text = '';
            if($form->list)
            {
                foreach($form->list as $v)
                {
                    $eq_text .= $v.",";
                }
                 
            }
            $ad->equipment = $eq_text; 
            if($ad->save()) $message = "Объявление успешно добавлено";
            
            $ad_id = (Yii::$app->db->getLastInsertId());
    //--- Загрузка фото 1
            if(UploadedFile::getInstance($form, 'file1')) {
        //--- загрузка фото              
                $form->file1 = UploadedFile::getInstance($form, 'file1');
                $path = 'images/';
                $extension = $form->file1->extension;
                $img_name = 'image-1-'.$ad_id.'.'.$extension;
                $img_name_small = 'image-1-'.$ad_id.'-small.'.$extension;
                $img_name_large = 'image-1-'.$ad_id.'-large.'.$extension;
                $form->file1->saveAs($path.$img_name);
        //--- изменение размеров 
                    $ih = new ImageHandler();
                    $width_small = 146;
                    $height_small = 106;
                    $ih->load($path.$img_name)->resize($width_small, $height_small)->save($path.'small/'.$img_name_small);
                    $width_large = 720;
                    $height_large = 540;
                    $ih->load($path.$img_name)->resize($width_large, $height_large)->save($path.'large/'.$img_name_large);
                    unlink($path.$img_name);

        //--- запись в таблицу 
                $images = new Images();
                $images->name = $img_name_small;
                $images->ad = $ad_id;
                $images->bs = 1;
                $images->save();
  
                $images = new Images();
                $images->name = $img_name_large;
                $images->ad = $ad_id;
                $images->bs = 2;
                $images->save();
            }
    //--- Загрузка фото 2
            if(UploadedFile::getInstance($form, 'file2')) {
        //--- загрузка фото              
                $form->file2 = UploadedFile::getInstance($form, 'file2');
                $path = 'images/';
                $extension = $form->file2->extension;
                $img_name = 'image-2-'.$ad_id.'.'.$extension;
                $img_name_small = 'image-2-'.$ad_id.'-small.'.$extension;
                $img_name_large = 'image-2-'.$ad_id.'-large.'.$extension;
                $form->file2->saveAs($path.$img_name);
        //--- изменение размеров 
                    $ih = new ImageHandler();
                    $width_small = 146;
                    $height_small = 106;
                    $ih->load($path.$img_name)->resize($width_small, $height_small)->save($path.'small/'.$img_name_small);
                    $width_large = 720;
                    $height_large = 540;
                    $ih->load($path.$img_name)->resize($width_large, $height_large)->save($path.'large/'.$img_name_large);
                    unlink($path.$img_name);

        //--- запись в таблицу 
                $images = new Images();
                $images->name = $img_name_small;
                $images->ad = $ad_id;
                $images->bs = 1;
                $images->save();
  
                $images = new Images();
                $images->name = $img_name_large;
                $images->ad = $ad_id;
                $images->bs = 2;
                $images->save();
            }
    //--- Загрузка фото 3
            if(UploadedFile::getInstance($form, 'file3')) {
        //--- загрузка фото              
                $form->file3 = UploadedFile::getInstance($form, 'file3');
                $path = 'images/';
                $extension = $form->file3->extension;
                $img_name = 'image-3-'.$ad_id.'.'.$extension;
                $img_name_small = 'image-3-'.$ad_id.'-small.'.$extension;
                $img_name_large = 'image-3-'.$ad_id.'-large.'.$extension;
                $form->file3->saveAs($path.$img_name);
        //--- изменение размеров 
                    $ih = new ImageHandler();
                    $width_small = 146;
                    $height_small = 106;
                    $ih->load($path.$img_name)->resize($width_small, $height_small)->save($path.'small/'.$img_name_small);
                    $width_large = 720;
                    $height_large = 540;
                    $ih->load($path.$img_name)->resize($width_large, $height_large)->save($path.'large/'.$img_name_large);
                    unlink($path.$img_name);

        //--- запись в таблицу 
                $images = new Images();
                $images->name = $img_name_small;
                $images->ad = $ad_id;
                $images->bs = 1;
                $images->save();
  
                $images = new Images();
                $images->name = $img_name_large;
                $images->ad = $ad_id;
                $images->bs = 2;
                $images->save();
            }
    	}
        $car_arr = [];
        $cars = Cars::find()->all();
        foreach($cars as $car)
        {
            $car_arr[$car->id] = $car->car;
        }
        $model_arr = [];
        $models = Models::find()->all();
        foreach($models as $model)
        {
            $model_arr[$model->id] = $model->model;
        }
        $eqs = Equipment::find()->all();
        return $this->render('index', [
            'pageForm' => $form,
            'message' => $message,
            'eqs' => $eqs,
            'cars' => $car_arr,
            'models' => $model_arr,
        ]);
    }
}
