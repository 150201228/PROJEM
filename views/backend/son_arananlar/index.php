<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\arcanteus\models\SonArananlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Son Arananlars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="son-arananlar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Son Arananlar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->arama_id), ['view', 'id' => $model->arama_id]);
        },
    ]) ?>
</div>
