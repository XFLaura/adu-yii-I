<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AduAdvertisers */

$this->title = '创建广告者信息';
$this->params['breadcrumbs'][] = ['label' => 'Adu Advertisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adu-advertisers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
