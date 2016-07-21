<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AduAdvertisers;

/**
 * AduAdvertisersSearch represents the model behind the search form about `app\models\AduAdvertisers`.
 */
class AduAdvertisersSearch extends AduAdvertisers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['advertisers_id', 'create_time', 'advertisers_status'], 'integer'],
            [['advertisers_name', 'advertisers_tel', 'advertisers_token'], 'safe'],
            [['advertisers_account_balance'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = AduAdvertisers::find();

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
            'advertisers_id' => $this->advertisers_id,
            'create_time' => $this->create_time,
            'advertisers_status' => $this->advertisers_status,
            'advertisers_account_balance' => $this->advertisers_account_balance,
        ]);

        $query->andFilterWhere(['like', 'advertisers_name', $this->advertisers_name])
            ->andFilterWhere(['like', 'advertisers_tel', $this->advertisers_tel])
            ->andFilterWhere(['like', 'advertisers_token', $this->advertisers_token]);

        return $dataProvider;
    }
}
