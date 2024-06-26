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


    <h2>Statistics</h2>
    <p>Average Late Time: <?= \app\models\Student::getAverageLateTime() ?> minutes</p>
    <p>Highest Late Time: <?= \app\models\Student::getHighestLateTime() ?> minutes</p>
    <p>Total Late Time: <?= \app\models\Student::getTotalLateTime() ?> minutes</p>



</div>
