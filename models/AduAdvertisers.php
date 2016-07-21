<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adu_advertisers".
 *
 * @property integer $advertisers_id
 * @property string $advertisers_name
 * @property string $advertisers_tel
 * @property integer $create_time
 * @property integer $advertisers_status
 * @property string $advertisers_account_balance
 * @property string $advertisers_token
 */
class AduAdvertisers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adu_advertisers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['advertisers_id', 'advertisers_name', 'advertisers_tel', 'advertisers_token'], 'required'],
            [['advertisers_id', 'create_time', 'advertisers_status'], 'integer'],
            [['advertisers_account_balance'], 'number'],
            [['advertisers_name', 'advertisers_token'], 'string', 'max' => 45],
            [['advertisers_tel'], 'string', 'max' => 20],
            [['advertisers_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'advertisers_id' => 'Advertisers ID',
            'advertisers_name' => 'Advertisers Name',
            'advertisers_tel' => 'Advertisers Tel',
            'create_time' => 'Create Time',
            'advertisers_status' => 'Advertisers Status',
            'advertisers_account_balance' => 'Advertisers Account Balance',
            'advertisers_token' => 'Advertisers Token',
        ];
    }
}
