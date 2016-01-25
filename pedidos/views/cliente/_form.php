<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clien_nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clien_tipo')->textInput() ?>

    <?= $form->field($model, 'clien_cpf_cnpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clien_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'muni_codigo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
