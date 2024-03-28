<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $student_id
 * @property string $voornaam
 * @property string $achternaam
 * @property string $klas
 * @property int|null $telaat_tijd
 * @property string|null $telaat_reden
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['voornaam', 'achternaam', 'klas'], 'required'],
            [['telaat_tijd'], 'integer'],
            [['voornaam', 'achternaam'], 'string', 'max' => 15],
            [['klas'], 'string', 'max' => 5],
            [['telaat_reden'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'voornaam' => 'Voornaam',
            'achternaam' => 'Achternaam',
            'klas' => 'Klas',
            'telaat_tijd' => 'Telaat Tijd',
            'telaat_reden' => 'Telaat Reden',
        ];
    }
}
