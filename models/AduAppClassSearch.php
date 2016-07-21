<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AduAppClass;

/**
 * AduAppClassSearch represents the model behind the search form about `app\models\AduAppClass`.
 */
class AduAppClassSearch extends AduAppClass
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['app_class_id', 'app_class_up_id', 'app_class_status'], 'integer'],
            [['app_class_name'], 'safe'],
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
        $query = AduAppClass::find();

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
            'app_class_id' => $this->app_class_id,
            'app_class_up_id' => $this->app_class_up_id,
            'app_class_status' => $this->app_class_status,
        ]);

        $query->andFilterWhere(['like', 'app_class_name', $this->app_class_name]);

        return $dataProvider;
    }
}
