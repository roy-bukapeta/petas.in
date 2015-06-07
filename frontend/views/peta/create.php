<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Peta */

$this->title = 'Buat';
$this->params['breadcrumbs'][] = ['label' => 'Peta', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peta-create">

    <?= $this->render('_form', [
        'model' => $model,
        'cerita' => $cerita
    ]) ?>

</div>
