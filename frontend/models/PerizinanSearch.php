<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Perizinan;

/**
 * PerizinanSearch represents the model behind the search form of `app\models\Perizinan`.
 */
class PerizinanSearch extends Perizinan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_perizinan'], 'integer'],
            [['no_izin', 'nama_pemilik', 'lokasi', 'file'], 'safe'],
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
        $query = Perizinan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_perizinan' => $this->id_perizinan,
        ]);

        $query->andFilterWhere(['like', 'nama_pemilik', $this->nama_pemilik])
        ->andFilterWhere(['like', 'file', $this->file]);

        return $dataProvider;
    }
}
