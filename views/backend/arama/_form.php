<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\arcanteus\models\Arama */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="arama-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'aranan_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'son_tarih')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
