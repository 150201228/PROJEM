<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\arcanteus\models\AdresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adres-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Adres', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kisi_id',
            'kisi_ad_soyad',
            'phone',
            'is_use_whatsapp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
