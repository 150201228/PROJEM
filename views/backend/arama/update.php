<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\arcanteus\models\Arama */

$this->title = 'Update Arama: ' . $model->arama_id;
$this->params['breadcrumbs'][] = ['label' => 'Aramas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->arama_id, 'url' => ['view', 'id' => $model->arama_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="arama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
