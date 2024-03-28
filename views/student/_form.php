<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Student $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'voornaam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'achternaam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telaat_tijd')->textInput() ?>

    <?= $form->field($model, 'telaat_reden')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
