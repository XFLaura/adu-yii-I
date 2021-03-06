<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AduDeveloper */

$this->title = '创建开发者信息';
$this->params['breadcrumbs'][] = ['label' => 'Adu Developers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adu-developer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
