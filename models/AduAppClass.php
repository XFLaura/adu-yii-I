<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adu_app_class".
 *
 * @property integer $app_class_id
 * @property string $app_class_name
 * @property integer $app_class_up_id
 * @property integer $app_class_status
 */
class AduAppClass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adu_app_class';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['app_class_name'], 'required'],
            [['app_class_up_id', 'app_class_status'], 'integer'],
            [['app_class_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'app_class_id' => 'App Class ID',
            'app_class_name' => 'App Class Name',
            'app_class_up_id' => 'App Class Up ID',
            'app_class_status' => 'App Class Status',
        ];
    }
}
