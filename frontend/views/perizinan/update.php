<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Perizinan */

$this->title = 'Update Perizinan: ' . $model->id_perizinan;
$this->params['breadcrumbs'][] = ['label' => 'Perizinans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_perizinan, 'url' => ['view', 'id' => $model->id_perizinan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perizinan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
