<?php
namespace app\modules\models;

use yii\base\Model;
use yii\web\UploadedFile;

class FormAdd extends Model
{
    /**
     * @var UploadedFile
     */
    public $car;
    public $model;
    public $mileage ;
    public $equipment;
    public $price;
    public $phone;

    public function rules()
    {
        return [
            [['mileage', 'price'], 'number'],
            [['car', 'model', 'equipment', 'phone'], 'string']
        ];
    }
    
}