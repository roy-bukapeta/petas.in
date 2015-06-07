<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PetaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'judul_peta') ?>

    <?= $form->field($model, 'sub_judul_peta') ?>

    <?= $form->field($model, 'penjelasan_peta') ?>

    <?= $form->field($model, 'event') ?>

    <?php // echo $form->field($model, 'sumber') ?>

    <?php // echo $form->field($model, 'tags') ?>

    <?php // echo $form->field($model, 'terbitkan') ?>

    <?php // echo $form->field($model, 'tong_sampah') ?>

    <?php // echo $form->field($model, 'periode') ?>

    <?php // echo $form->field($model, 'waktu_mulai') ?>

    <?php // echo $form->field($model, 'waktu_berakhir') ?>

    <?php // echo $form->field($model, 'kualias') ?>

    <?php // echo $form->field($model, 'kunjungan') ?>

    <?php // echo $form->field($model, 'sebaran') ?>

    <?php // echo $form->field($model, 'waktu_pembuatan') ?>

    <?php // echo $form->field($model, 'waktu_pembaharuan') ?>

    <?php // echo $form->field($model, 'id_jenis') ?>

    <?php // echo $form->field($model, 'id_periode') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
