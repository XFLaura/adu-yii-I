<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AduAppClass */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adu-app-class-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'app_class_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'app_class_up_id')->textInput() ?>

    <?= $form->field($model, 'app_class_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
