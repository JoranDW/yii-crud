<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentSearch represents the model behind the search form of `app\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'telaat_tijd'], 'integer'],
            [['voornaam', 'achternaam', 'klas', 'gemeld_door', 'telaat_reden'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Student::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'student_id' => $this->student_id,
            'telaat_tijd' => $this->telaat_tijd,
        ]);

        $query->andFilterWhere(['like', 'voornaam', $this->voornaam])
            ->andFilterWhere(['like', 'achternaam', $this->achternaam])
            ->andFilterWhere(['like', 'klas', $this->klas])
            ->andFilterWhere(['like', 'gemeld_door', $this->gemeld_door])
            ->andFilterWhere(['like', 'telaat_reden', $this->telaat_reden]);

        return $dataProvider;
    }
}
