<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pedido */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedido-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pedi_data_criacao')->textInput() ?>

    <?= $form->field($model, 'pedi_data_alteracao')->textInput() ?>

    <?= $form->field($model, 'clien_codigo')->textInput() ?>

    <?= $form->field($model, 'usua_codigo')->textInput() ?>

    <?= $form->field($model, 'fopa_codigo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
