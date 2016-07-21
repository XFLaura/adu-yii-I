<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AduAppClass */

$this->title = 'Update Adu App Class: ' . $model->app_class_id;
$this->params['breadcrumbs'][] = ['label' => 'Adu App Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->app_class_id, 'url' => ['view', 'id' => $model->app_class_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="adu-app-class-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
