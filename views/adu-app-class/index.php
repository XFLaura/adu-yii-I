<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AduAppClassSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adu App Classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adu-app-class-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Adu App Class', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'app_class_id',
            'app_class_name',
            'app_class_up_id',
            'app_class_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
