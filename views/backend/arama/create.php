<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\arcanteus\models\Arama */

$this->title = 'Create Arama';
$this->params['breadcrumbs'][] = ['label' => 'Aramas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
