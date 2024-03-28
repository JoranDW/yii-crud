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

    <?= $form->field($model, 'klas')->dropDownList(
        [
            '1A' => '1A',
            '1B' => '1B',
            '1C' => '1C',
            '1D' => '1D',
            '2A' => '2A',
            '2B' => '2B',
            '2C' => '2C',
            '2D' => '2D',
            '3A' => '3A',
            '3B' => '3B',
            '3C' => '3C',
            '3D' => '3D',
            '4A' => '4A',
            '4B' => '4B',
            '4C' => '4C',
            '4D' => '4D',
        ]
    ) ?>

    <?= $form->field($model, 'gemeld_door')->textInput(['value' => Yii::$app->user->identity->username, 'readonly' => true]) ?>

    <?= $form->field($model, 'telaat_tijd')->dropDownList([
        '5' => '5 minutes',
        '10' => '10 minutes',
        '15' => '15 minutes',
        '20' => '20 minutes',
        '25' => '25 minutes',
        '30' => '30 minutes',
        '35' => '35 minutes',
        '40' => '40 minutes',
        '45' => '45 minutes',
        '50' => '50 minutes',
        '55' => '55 minutes',
        '60' => '60 minutes',
    ]) ?>

    <?= $form->field($model, 'telaat_reden')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
