<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AduAdvertisers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adu-advertisers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'advertisers_id')->textInput() ?>

    <?= $form->field($model, 'advertisers_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advertisers_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'advertisers_status')->textInput() ?>

    <?= $form->field($model, 'advertisers_account_balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advertisers_token')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
