<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Branch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="branch-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branchName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contactNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organizationID')->textInput() ?>

    <?= $form->field($model, 'employeeID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
