<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use dosamigos\tinymce\TinyMce;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Peta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peta-form">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css" />

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'judul_peta')->textInput() ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'sub_judul_peta')->textInput() ?>
                </div>
            </div>
            <?= $form->field($model, 'penjelasan_peta')->widget(TinyMce::className(), [
                'options' => ['rows' => 10],
                // 'language' => 'es',
                'clientOptions' => [
                    'plugins' => [
                        "advlist autolink lists link charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste"
                    ],
                    'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                ]
            ]);?>

            <?= $form->field($model, 'sumber')->textInput() ?>

            <?= $form->field($model, 'tags')->textInput() ?>

            <!-- Cerita Form -->

            <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 4, // the maximum times, an element can be added (default 999)
                'min' => 0, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $cerita[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'id',
                    'nama_cerita',
                    'deskripsi',
                    'event',
                    'wkt',
                ],
            ]); ?>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Cerita <button type="button" class="add-item btn btn-primary btn-xs pull-right" onclick="Peta()"><i class="glyphicon glyphicon-plus"></i> Add</button>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="container-items"><!-- widgetBody -->
                    <?php foreach ($cerita as $i => $modelAddress): ?>
                        <div class="item panel panel-default"><!-- widgetItem -->
                            <div class="panel-heading">
                                <h3 class="panel-title pull-left">Slide</h3>
                                <div class="pull-right">
                                    <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <?php
                                    // necessary for update action.
                                    if (! $modelAddress->isNewRecord) {
                                        echo Html::activeHiddenInput($modelAddress, "[{$i}]id");
                                    }
                                ?>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <?= $form->field($modelAddress, "[{$i}]nama_cerita")->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?= $form->field($modelAddress, "[{$i}]deskripsi")->textInput(['maxlength' => true]) ?>    
                                    </div>
                                    <div class="col-sm-12">
                                        <?= $form->field($modelAddress, "[{$i}]event")->HiddenInput(['maxlength' => true])->label('') ?>    
                                    </div>
                                    <div class="col-sm-12">
                                        <?= $form->field($modelAddress, "[{$i}]wkt")->HiddenInput(['maxlength' => true])->label('') ?>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="map" style="height: 180px; "></div>
                                    </div>
                                </div><!-- .row -->

                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div><!-- .panel -->
            <?php DynamicFormWidget::end(); ?>

            <!-- Cerita Form -->

        </div>
        <div class="col-md-3">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Terbitkan</h3>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'terbitkan')->textInput() ?>

                    <?= $form->field($model, 'tong_sampah')->textInput() ?>
                </div>
            </div>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Periode</h3>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'periode')->textInput() ?>

                    <?= $form->field($model, 'waktu_mulai')->textInput() ?>

                    <?= $form->field($model, 'waktu_berakhir')->textInput() ?>
                </div>
            </div>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Kategori</h3>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'id_jenis')->textInput() ?>

                    <?= $form->field($model, 'id_periode')->textInput() ?>
                </div>
            </div>

        </div>
        
    </div>

    <?= $form->field($model, 'event')->HiddenInput()->label('') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script type="text/javascript">
    function Peta(){
        var jumlah = $(".item").length;

        var jumlah = jumlah - 1;

        setTimeout(Ini(jumlah), 500000);
    }    

    function Ini (jumlah) {
        setTimeout(Itu(jumlah), 500000);
    }

    function Itu (jumlah) {
        var map = L.map('map' + jumlah).setView([-2, 117], 4);

        L.tileLayer('http://{s}.{base}.maps.cit.api.here.com/maptile/2.1/maptile/{mapID}/satellite.day/{z}/{x}/{y}/256/png8?app_id={app_id}&app_code={app_code}', {
            attribution: 'Here',
            subdomains: '1234',
            mapID: 'newest',
            app_id: 'DemoAppId01082013GAL',
            app_code: 'AJKnXv84fjrb0KIHawS0Tg',
            base: 'aerial',
            minZoom: 0,
            maxZoom: 20,
        }).addTo(map);
    }
</script>
