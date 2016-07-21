<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AduAppClass */

$this->title = 'Create Adu App Class';
$this->params['breadcrumbs'][] = ['label' => 'Adu App Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adu-app-class-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
