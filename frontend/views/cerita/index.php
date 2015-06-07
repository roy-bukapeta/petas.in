<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CeritaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ceritas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cerita-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cerita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama_cerita',
            'deskripsi',
            'event',
            'wkt',
            // 'waktu_pembuatan',
            // 'waktu_pembaharuan',
            // 'id_peta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
