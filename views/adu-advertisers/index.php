<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AduAdvertisersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '广告主信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adu-advertisers-index">

    <p>
        <?= Html::a('创建广告主信息', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'advertisers_id',
            'advertisers_name',
            'advertisers_tel',
            'create_time:datetime',
            'advertisers_status',
            // 'advertisers_account_balance',
            // 'advertisers_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
