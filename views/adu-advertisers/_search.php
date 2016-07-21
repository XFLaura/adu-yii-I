<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AduAdvertisersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adu-advertisers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'advertisers_id') ?>

    <?= $form->field($model, 'advertisers_name') ?>

    <?= $form->field($model, 'advertisers_tel') ?>

    <?= $form->field($model, 'create_time') ?>

    <?= $form->field($model, 'advertisers_status') ?>

    <?php // echo $form->field($model, 'advertisers_account_balance') ?>

    <?php // echo $form->field($model, 'advertisers_token') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
