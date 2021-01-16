<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\arcanteus\models\SonArananlar */

$this->title = 'Update Son Arananlar: ' . $model->arama_id;
$this->params['breadcrumbs'][] = ['label' => 'Son Arananlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->arama_id, 'url' => ['view', 'id' => $model->arama_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="son-arananlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
