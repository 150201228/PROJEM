<?php

namespace kouosl\arcanteus\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\arcanteus\models\Arama;

/**
 * AramaSearch represents the model behind the search form of `kouosl\arcanteus\models\Arama`.
 */
class AramaSearch extends Arama
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['arama_id'], 'integer'],
            [['aranan_adi', 'son_tarih'], 'safe'],
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
        $query = Arama::find();

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
            'arama_id' => $this->arama_id,
            'son_tarih' => $this->son_tarih,
        ]);

        $query->andFilterWhere(['like', 'aranan_adi', $this->aranan_adi]);

        return $dataProvider;
    }
}
