<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Producer".
 *
 * @property integer $id
 * @property string $firstName
 * @property string $lastName
 */
class Producer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Producer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName'], 'required'],
            [['firstName', 'lastName'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
        ];
    }

    /**
     * @inheritdoc
     * @return ProducerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProducerQuery(get_called_class());
    }
}
