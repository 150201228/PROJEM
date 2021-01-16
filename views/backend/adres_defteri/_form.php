<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\arcanteus\models\AdresDefteri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adres-defteri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kisi_ad_soyad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_use_whatsapp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
