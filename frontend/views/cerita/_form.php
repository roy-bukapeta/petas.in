<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cerita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cerita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_cerita')->textInput() ?>

    <?= $form->field($model, 'deskripsi')->textInput() ?>

    <?= $form->field($model, 'event')->textInput() ?>

    <?= $form->field($model, 'wkt')->textInput() ?>

    <?= $form->field($model, 'waktu_pembuatan')->textInput() ?>

    <?= $form->field($model, 'waktu_pembaharuan')->textInput() ?>

    <?= $form->field($model, 'id_peta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
