<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AduDeveloper */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adu-developer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'developer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'developer_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'developer_status')->textInput() ?>

    <?= $form->field($model, 'developer_account_balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'developer_token')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
