<?php

use frontend\components\Functions;
use frontend\models\Images;
use yii\widgets\LinkPager;
$functions = new Functions;
$this->title = 'Объявления';
?>
<div class="container">
    <h1>Объявления</h1>
    <div class="message">
        <p class="message"><?= $message ?></p>
    </div>
    <table class="car table">
        <tr>
            <td>Марка</td>
            <td>Модель</td>
            <td>Фото</td>
            <td>Цена</td>
            <td>Действия</td>
        </tr>
    <?php foreach($ads as $ad) { ?>
        <tr>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => $ad->id]) ?>"><?= $functions->getCarName($ad->id) ?></a>
            </td>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => $ad->id]) ?>"><?= $functions->getModelName($ad->id) ?></a>
            </td>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => $ad->id]) ?>">
                    <img class="image" src="<?= Yii::$app->request->baseUrl ?>/images/small/<?= $functions->getImage($ad->id) ?>" >
                </a>
            </td>
            <td><?= $ad->price ?></td>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/index', 'id' => $ad->id, 'action' => 'delete']) ?>" class="delete">Удалить</a>
            </td>
        </tr>
    <?php } ?>
    </table>
    <?= LinkPager::widget(['pagination' => $pagination])  ?>
    <a href="<?= Yii::$app->urlManager->createUrl(['addModel']) ?>" class="btn btn-primary">Добавить автомобиль</a>
</div>
