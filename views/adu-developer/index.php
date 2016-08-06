<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AduDeveloperSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '开发者信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adu-developer-index">


    <p>
        <?= Html::a('创建开发者信息', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'developer_id',
            'developer_name',
            'developer_tel',
            'create_time:datetime',
            'developer_status',
            // 'developer_account_balance',
            // 'developer_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
