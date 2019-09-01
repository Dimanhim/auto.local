<?php
use frontend\components\Functions;
use frontend\models\Images;
$functions = new Functions();
$name = $functions->getCarName($ad->id).' '.$functions->getModelName($ad->id);
$this->title = $name;
?>
<div class="container">
    <h1>Автомобиль - <?= $name ?></h1>
    <div class="row">
        <div class="col-md-6">
            <div class="big-item">
                <div class="slider-for">
                <?php foreach($images_max as $v) { ?>
                  <img src="<?= Yii::$app->request->baseUrl ?>/images/large/<?= $v->name ?>" alt="">
                <?php } ?>
                </div>
                <div class="slider-nav">
                <?php foreach($images_min as $k) { ?>
                  <img src="<?= Yii::$app->request->baseUrl ?>/images/small/<?= $k->name ?>" alt="">
                <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="information">
                <table class="table">
                    <tr>
                        <td>Марка</td>
                        <td><?= $functions->getCarName($ad->id) ?></td>
                    </tr>
                    <tr>
                        <td>Модель</td>
                        <td><?= $functions->getModelName($ad->id) ?></td>
                    </tr>
                    <tr>
                        <td>Цена</td>
                    <?php if($ad->price) { ?>
                        <td><?= $ad->price ?> руб.</td>
                    <?php } ?>
                    </tr>
                    <tr>
                        <td>Пробег</td>
                        <td><?= $ad->mileage ?> км.</td>
                    </tr>
                    <tr>
                        <td>Комплектация</td>
                        <td>
                          <ul>
                          <?php foreach($functions->getEq($ad->equipment) as $eq) { ?>
                            <li><?= $eq->equipment ?></li>
                          <?php } ?>
                          </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Телефон</td>
                        <td><a href="tel:<?= $ad->phone ?>"><?= $ad->phone ?></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
