<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Produto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'prod_nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cate_codigo')->textInput() ?>

    <?= $form->field($model, 'fabr_codigo')->textInput() ?>

    <?= $form->field($model, 'prod_valor')->textInput() ?>

    <?= $form->field($model, 'prod_estoque')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
