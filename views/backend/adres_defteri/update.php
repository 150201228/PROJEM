<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\arcanteus\models\AdresDefteri */

$this->title = 'Update Adres Defteri: ' . $model->kisi_id;
$this->params['breadcrumbs'][] = ['label' => 'Adres Defteris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kisi_id, 'url' => ['view', 'id' => $model->kisi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="adres-defteri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
