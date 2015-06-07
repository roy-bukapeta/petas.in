<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peta */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Petas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'judul_peta',
            'sub_judul_peta',
            'penjelasan_peta',
            'event',
            'sumber',
            'tags',
            'terbitkan',
            'tong_sampah',
            'periode',
            'waktu_mulai',
            'waktu_berakhir',
            'kualias',
            'kunjungan',
            'sebaran',
            'waktu_pembuatan',
            'waktu_pembaharuan',
            'id_jenis',
            'id_periode',
            'id_user',
        ],
    ]) ?>

</div>
