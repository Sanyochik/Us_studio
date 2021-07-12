<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

use app\assets\AppAsset;

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
<body class="text-center">
<?php $this->beginBody() ?>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <a class="dec" href="/web/site/index"> <h3 class="masthead-brand">Код-чекер</h3></a>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="/web/index.php?r=site%2Freg">Регистрация</a>
                <a class="nav-link" href="/web/index.php?r=site%2Flog">Авторизация</a>
                <a class="nav-link" href="/web/index.php?r=site%2Fsearch">Поиск</a>
                <a class="nav-link" href="/web/index.php?r=temi%2Findex">управление</a>
		<a class="nav-link" href="/web/index.php?r=site%2Fcodefirst">тест</a>
            </nav>
        </div>

    </header>
        <?= Alert::widget() ?>
        <?= $content ?>

    <footer class="mastfoot mt-auto">
        <div class="inner">
        </div>
    </footer>
	</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
