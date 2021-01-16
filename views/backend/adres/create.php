<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\arcanteus\models\Adres */

$this->title = 'Create Adres';
$this->params['breadcrumbs'][] = ['label' => 'Adres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
