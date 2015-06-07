<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CeritaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cerita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama_cerita') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'event') ?>

    <?= $form->field($model, 'wkt') ?>

    <?php // echo $form->field($model, 'waktu_pembuatan') ?>

    <?php // echo $form->field($model, 'waktu_pembaharuan') ?>

    <?php // echo $form->field($model, 'id_peta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
