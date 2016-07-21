<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AduAppClass */

$this->title = $model->app_class_id;
$this->params['breadcrumbs'][] = ['label' => 'Adu App Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adu-app-class-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->app_class_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->app_class_id], [
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
            'app_class_id',
            'app_class_name',
            'app_class_up_id',
            'app_class_status',
        ],
    ]) ?>

</div>
