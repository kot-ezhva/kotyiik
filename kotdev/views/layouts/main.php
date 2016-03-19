<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <?php
    Yii::app()->clientScript->registerCoreScript('bootstrap.material');
    Yii::app()->clientScript->registerCoreScript('admin.css');
    Yii::app()->clientScript->registerCoreScript('jquery.ui');
    ?>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <title><?= HU::getSettings('title') ?> | Админ-панель</title>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/kotdev">kotDev</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?= Yii::app()->user->name ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?= CHtml::link('Перейти на сайт', ['../'], ['target' => '_blank']) ?></li>
                        <li><?= CHtml::link('Изменить профиль', ['user/edit']) ?></li>
                        <li class="divider"></li>
                        <li><?= CHtml::link('Выйти', ['user/logout']) ?></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="col-xs-3">
        <div class="b-navigation">
            <ul>
                <li><?= CHtml::link('<i class="material-icons">dashboard</i> Панель приборов', Yii::app()->createUrl('dashboard/index'), ['class' => 'btn btn-default']); ?></li>
                <li><?= CHtml::link('<i class="material-icons">view_agenda</i> Блоки', Yii::app()->createUrl('block/index'), ['class' => 'btn btn-default']); ?></li>
                <li><?= CHtml::link('<i class="material-icons">extension</i> Настройки', Yii::app()->createUrl('settings/index'), ['class' => 'btn btn-default']); ?></li>
            </ul>
        </div>
    </div>
    <div class="col-xs-9 col-xs-offset-3 b-content">
        <div class="row">
            <?= $content; ?>
        </div>
    </div>


</div>

<script>
    $.material.init();
</script>
</body>
</html>
