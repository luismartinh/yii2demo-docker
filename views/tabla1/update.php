<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tabla1 */

$this->title = 'Update Tabla1: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tabla1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tabla1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
