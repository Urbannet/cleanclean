<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\CustomerNameModel */

$this->title = 'Create Customer Name Model';
$this->params['breadcrumbs'][] = ['label' => 'Customer Name Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-name-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
