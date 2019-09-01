<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Cars;
use frontend\models\Models;
use frontend\models\Ad;
use frontend\models\Images;
use frontend\models\Equipment;
$this->title = 'Добавление объявления';

?>
<div class="container">
    <div class="form">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12">
                    <h1>Добавление нового объявления</h1>
                </div>
                <div class="col-md-12">
                    <p class="success_message"><?= $message ?></p>    
                </div>
                
                <?php $form = ActiveForm::begin(['fieldConfig' => ['options' => ['tag' => false, 'enctype' => 'multipart/form-data']]]) ?>
<!-- Марка -->
                <?php 
                    $param = [
                        'class' => 'form-control cars',
                        'required' => true,
                        'prompt' => 'Выбрать...'
                    ];
                ?>
                <?= $form->field($pageForm, 'car', ["template" => "<div class='col-md-12'><label> Выберете марку автомобиля </label>\n{input}\n{hint}\n{error}</div>"])->dropDownList($cars, $param) ?>

<!-- Модель -->
                <?php 
                    $param = [
                        'prompt' => 'Выбрать...',
                        'required' => true,
                    ];
                ?>
                <?= $form->field($pageForm, 'model', ["template" => "<div class='col-md-12'><label> Выберете модель автомобиля </label>\n{input}\n{hint}\n{error}</div>"])->dropDownList($models, $param) ?>
<!-- Пробег -->

                <?= $form->field($pageForm, 'mileage', ["template" => "<div class='col-md-12'><label> Введите пробег, км </label>\n{input}\n{hint}\n{error}</div>"])->textInput(['placeholder' => "65000"]) ?>
<!-- Доп. опции -->
                <div class="col-md-12">
                    <h4>Дополнительные опции:</h4>
                </div>
                <?php 
                    $list = [];
                    foreach($eqs as $eq)
                    {
                        $list[$eq->id] = $eq->equipment;
                    }
                ?>
                <div class="clearfix"></div>
                <?= $form->field($pageForm, 'list', ["template" => "<div class='col-md-12'>{input}\n{hint}\n{error}</div>"])->checkboxList($list) ?>
<!-- Цена -->
                <?= $form->field($pageForm, 'price', ["template" => "<div class='col-md-12'><label> Введите цену автомобиля </label>\n{input}\n{hint}\n{error}</div>"])->textInput(['required' => true]) ?>
<!-- Телефон -->
                <?= $form->field($pageForm, 'phone', ["template" => "<div class='col-md-12'><label> Введите номер телефона </label>\n{input}\n{hint}\n{error}</div>"])->textInput(['class' => 'form-control phone', 'required' => true]) ?>
<!-- Загрузка изображения -->            
                <?= $form->field($pageForm, 'file1', ["template" => "<div class='col-md-4'><label> Загрузите фотографию 1</label>\n{input}\n{hint}\n{error}</div>"])->fileInput() ?>
                <?= $form->field($pageForm, 'file2', ["template" => "<div class='col-md-4'><label> Загрузите фотографию 2</label>\n{input}\n{hint}\n{error}</div>"])->fileInput() ?>
                <?= $form->field($pageForm, 'file3', ["template" => "<div class='col-md-4'><label> Загрузите фотографию 3</label>\n{input}\n{hint}\n{error}</div>"])->fileInput() ?>
                <div class="col-md-12">
                <?= Html::submitButton('Сохранить', ['class' => "btn btn-primary"]) ?>    
                </div>
                <?php ActiveForm::end() ?>           
            </div>
        </div>
    </div>
</div>
