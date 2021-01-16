<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\arcanteus\models\AdresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adres-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kisi_id') ?>

    <?= $form->field($model, 'kisi_ad_soyad') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'is_use_whatsapp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
