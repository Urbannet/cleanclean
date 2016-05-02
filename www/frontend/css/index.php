<?php
require(__DIR__ . '/../../yii2/vendor/autoload.php');
require(__DIR__ . '/../../yii2/vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../yii2/common/config/bootstrap.php');
require(__DIR__ . '/../../yii2/frontend/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../yii2/common/config/main.php'),
    require(__DIR__ . '/../../yii2/common/config/main-local.php'),
    require(__DIR__ . '/../../yii2/frontend/config/main.php'),
    require(__DIR__ . '/../../yii2/frontend/config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
