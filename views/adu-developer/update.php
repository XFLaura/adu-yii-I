<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AduDeveloper */

$this->title = 'Update Adu Developer: ' . $model->developer_id;
$this->params['breadcrumbs'][] = ['label' => 'Adu Developers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->developer_id, 'url' => ['view', 'id' => $model->developer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="adu-developer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
