<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TotoModel */

$this->title = 'Create Toto Model';
$this->params['breadcrumbs'][] = ['label' => 'Toto Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toto-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
