<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AduDeveloper */

$this->title = $model->developer_id;
$this->params['breadcrumbs'][] = ['label' => 'Adu Developers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adu-developer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->developer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->developer_id], [
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
            'developer_id',
            'developer_name',
            'developer_tel',
            'create_time:datetime',
            'developer_status',
            'developer_account_balance',
            'developer_token',
        ],
    ]) ?>

</div>
