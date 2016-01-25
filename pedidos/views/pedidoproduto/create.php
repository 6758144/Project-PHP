<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pedidoproduto */

$this->title = 'Create Pedidoproduto';
$this->params['breadcrumbs'][] = ['label' => 'Pedidoprodutos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidoproduto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
