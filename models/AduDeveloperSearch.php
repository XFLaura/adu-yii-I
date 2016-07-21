<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AduDeveloper;

/**
 * AduDeveloperSearch represents the model behind the search form about `app\models\AduDeveloper`.
 */
class AduDeveloperSearch extends AduDeveloper
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['developer_id', 'create_time', 'developer_status'], 'integer'],
            [['developer_name', 'developer_tel', 'developer_token'], 'safe'],
            [['developer_account_balance'], 'number'],
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
        $query = AduDeveloper::find();

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
            'developer_id' => $this->developer_id,
            'create_time' => $this->create_time,
            'developer_status' => $this->developer_status,
            'developer_account_balance' => $this->developer_account_balance,
        ]);

        $query->andFilterWhere(['like', 'developer_name', $this->developer_name])
            ->andFilterWhere(['like', 'developer_tel', $this->developer_tel])
            ->andFilterWhere(['like', 'developer_token', $this->developer_token]);

        return $dataProvider;
    }
}
