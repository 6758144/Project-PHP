<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pedidoproduto */

$this->title = 'Update Pedidoproduto: ' . ' ' . $model->pepr_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Pedidoprodutos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pepr_codigo, 'url' => ['view', 'id' => $model->pepr_codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedidoproduto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
