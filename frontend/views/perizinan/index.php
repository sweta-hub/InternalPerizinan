<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PerizinanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perizinan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perizinan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perizinan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

    
            'no_izin',
            'nama_pemilik',
            'lokasi',
            'file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
