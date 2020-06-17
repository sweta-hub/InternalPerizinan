<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Perizinan */

$this->title = 'Create Perizinan';
$this->params['breadcrumbs'][] = ['label' => 'Perizinans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perizinan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
