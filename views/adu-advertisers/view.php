<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AduAdvertisers */

$this->title = $model->advertisers_id;
$this->params['breadcrumbs'][] = ['label' => 'Adu Advertisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adu-advertisers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->advertisers_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->advertisers_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'advertisers_id',
            'advertisers_name',
            'advertisers_tel',
            'create_time:datetime',
            'advertisers_status',
            'advertisers_account_balance',
            'advertisers_token',
        ],
    ]) ?>

</div>
