<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\arcanteus\models\AramaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aramas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arama-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Arama', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'arama_id',
            'aranan_adi',
            'son_tarih',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
