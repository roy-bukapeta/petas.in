<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cerita */

$this->title = 'Create Cerita';
$this->params['breadcrumbs'][] = ['label' => 'Ceritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cerita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
