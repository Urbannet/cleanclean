<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TotoModel */

$this->title = 'Update Toto Model: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Toto Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toto-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
