<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tabla1 */

$this->title = 'Create Tabla1';
$this->params['breadcrumbs'][] = ['label' => 'Tabla1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabla1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
