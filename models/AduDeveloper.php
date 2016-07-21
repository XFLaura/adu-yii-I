<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adu_developer".
 *
 * @property integer $developer_id
 * @property string $developer_name
 * @property string $developer_tel
 * @property integer $create_time
 * @property integer $developer_status
 * @property string $developer_account_balance
 * @property string $developer_token
 */
class AduDeveloper extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adu_developer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['developer_name', 'developer_tel', 'developer_token'], 'required'],
            [['create_time', 'developer_status'], 'integer'],
            [['developer_account_balance'], 'number'],
            [['developer_name', 'developer_token'], 'string', 'max' => 45],
            [['developer_tel'], 'string', 'max' => 20],
            [['developer_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'developer_id' => 'Developer ID',
            'developer_name' => 'Developer Name',
            'developer_tel' => 'Developer Tel',
            'create_time' => 'Create Time',
            'developer_status' => 'Developer Status',
            'developer_account_balance' => 'Developer Account Balance',
            'developer_token' => 'Developer Token',
        ];
    }
}
