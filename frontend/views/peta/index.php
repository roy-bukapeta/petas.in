<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PetaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Petas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Peta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'judul_peta',
            'sub_judul_peta',
            'penjelasan_peta',
            'event',
            // 'sumber',
            // 'tags',
            // 'terbitkan',
            // 'tong_sampah',
            // 'periode',
            // 'waktu_mulai',
            // 'waktu_berakhir',
            // 'kualias',
            // 'kunjungan',
            // 'sebaran',
            // 'waktu_pembuatan',
            // 'waktu_pembaharuan',
            // 'id_jenis',
            // 'id_periode',
            // 'id_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
