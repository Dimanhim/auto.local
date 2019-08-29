<?php

/* @var $this yii\web\View */

$this->title = 'Объявления';
?>
<?php //print_r(Yii::$app) ?>
<div class="container">
    <h1>Объявления</h1>
    <div class="message">
        <p class="message">Объявление успешно удалено</p>
    </div>
    <table class="car table">
        <tr>
            <td>Марка</td>
            <td>Модель</td>
            <td>Фото</td>
            <td>Цена</td>
            <td>Действия</td>
        </tr>
        <tr>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => 25]) ?>">Опель</a>
            </td>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => 25]) ?>">Insignia</a>
            </td>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => 25]) ?>">
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/car-1-1-small.jpg" >
                </a>
            </td>
            <td>1 500 000</td>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => 25]) ?>" class="delete">Удалить</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => 25]) ?>">BMW</a>
            </td>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => 25]) ?>">X6</a>
            </td>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => 25]) ?>">
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/car-1-2-small.jpg" >
                </a>
            </td>
            <td>3 500 000</td>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => 25]) ?>" class="delete">Удалить</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => 25]) ?>">Mitsubishi</a>
            </td>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => 25]) ?>">Pagero</a>
            </td>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'id' => 25]) ?>">
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/car-1-2-small.jpg" >
                </a>
            </td>
            <td>2 500 000</td>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/model', 'action' => 'delete', 'id' => 25]) ?>" class="delete">Удалить</a>
            </td>
        </tr>
    </table>
    <a href="<?= Yii::$app->urlManager->createUrl(['addModel']) ?>" class="btn btn-primary">Добавить объявление</a>
</div>
