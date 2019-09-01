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
    public $list;
    public $file;
    public $file1;
    public $file2;
    public $file3;

    public function rules()
    {
        return [
            [['mileage', 'price', 'list'], 'number'],
            [['car', 'model', 'phone', 'equipment'], 'string'],
            [['file'], 'file', 'extensions' => 'png, jpg'],
            [['car', 'model', 'price', 'phone'], 'required']
        ];
    }
    
}