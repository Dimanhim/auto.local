<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Добавление объявления';
?>
<div class="container">
    <div class="form">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Добавление нового объявления</h1>
                <?php $form = ActiveForm::begin(['fieldConfig' => ['options' => ['tag' => false]], 'options' => ['class' => 'form send-data']]) ?>
                <?= $form->field($pageForm, 'car', ["template" => "<label> Выберете марку автомобиля </label>\n{input}\n{hint}\n{error}"])->textInput(['placeholder' => "Пример - Опель"]) ?>
                <?= $form->field($pageForm, 'model', ["template" => "<label> Выберете модель автомобиля </label>\n{input}\n{hint}\n{error}"])->textInput(['placeholder' => "Модель автомобиля"]) ?>
                <?= $form->field($pageForm, 'mileage', ["template" => "<label> Введите пробег, км </label>\n{input}\n{hint}\n{error}"])->textInput(['placeholder' => "65000"]) ?>
                <?= $form->field($pageForm, 'equipment', ["template" => "<label> Дополнительное оборудование </label>\n{input}\n{hint}\n{error}"])->textInput() ?>
                <?= $form->field($pageForm, 'price', ["template" => "<label> Введите цену автомобиля </label>\n{input}\n{hint}\n{error}"])->textInput() ?>
                <?= $form->field($pageForm, 'phone', ["template" => "<label> Введите номер телефона </label>\n{input}\n{hint}\n{error}"])->textInput(['class' => 'form-control phone']) ?>
                <?= Html::submitButton('Сохранить', ['class' => "btn btn-primary"]) ?>
                <?php ActiveForm::end() ?>           
            </div>
        </div>
        
    </div>
    
</div>
