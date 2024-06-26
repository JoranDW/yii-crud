<?php

use app\models\Student;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\StudentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'student_id',
            'voornaam',
            'achternaam',
            'klas',
            'gemeld_door',
            'telaat_tijd',
            'telaat_reden',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Student $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'student_id' => $model->student_id]);
                 }
            ],
        ],
    ]); ?>

    <h2>Statistieken</h2>
    <table style="border: 1px solid #dddddd; padding: 5px">
        <tr style="border: 1px solid #dddddd; padding: 5px">
            <td style="border: 1px solid #dddddd; padding: 5px">Gemiddeld aantal minuten te laat:</td>
            <td style="border: 1px solid #dddddd; padding: 5px"><?= round(\app\models\Student::getAverageLateTime()) ?> minuten</td>
        </tr >
        <tr style="border: 1px solid #dddddd; padding: 5px">
            <td style="border: 1px solid #dddddd; padding: 5px">Hoogste aantal minuten te laat:</td>
            <td style="border: 1px solid #dddddd; padding: 5px"><?= round(\app\models\Student::getHighestLateTime()) ?> minuten</td>
        </tr>
        <tr style="border: 1px solid #dddddd; padding: 5px">
            <td style="border: 1px solid #dddddd; padding: 5px">Totaal aantal minuten te laat:</td>
            <td style="border: 1px solid #dddddd; padding: 5px"><?= round(\app\models\Student::getTotalLateTime()) ?> minuten</td>
        </tr>
    </table>
</div>
