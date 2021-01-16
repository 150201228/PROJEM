<?php

namespace kouosl\arcanteus\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\arcanteus\models\Adres;

/**
 * AdresSearch represents the model behind the search form of `kouosl\arcanteus\models\Adres`.
 */
class AdresSearch extends Adres
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kisi_id', 'is_use_whatsapp'], 'integer'],
            [['kisi_ad_soyad', 'phone'], 'safe'],
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
        $query = Adres::find();

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
            'kisi_id' => $this->kisi_id,
            'is_use_whatsapp' => $this->is_use_whatsapp,
        ]);

        $query->andFilterWhere(['like', 'kisi_ad_soyad', $this->kisi_ad_soyad])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }
}
