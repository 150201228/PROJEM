<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\arcanteus\models\SonArananlar */

$this->title = 'Create Son Arananlar';
$this->params['breadcrumbs'][] = ['label' => 'Son Arananlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="son-arananlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
