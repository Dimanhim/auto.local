<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
   <div id="wrap">
      <header>
        <div class="container">
          <a href="<?= Yii::$app->urlManager->createUrl(['site']) ?>">Перейти на главную</a>
        </div>
      </header>
      <main>
        <?= $content ?>
      </main>
      <footer></footer>   
   </div>
<?php $this->endBody() ?>
<?php require_once "ajax.php" ?>
</body>
</html>
<?php $this->endPage() ?>