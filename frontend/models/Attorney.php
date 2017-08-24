<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Attorney".
 *
 * @property integer $id
 * @property string $firstName
 * @property string $lastName
 * @property integer $typeID
 *
 * @property AttorneyType $type
 * @property Contract[] $contracts
 */
class Attorney extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Attorney';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'typeID'], 'required'],
            [['firstName', 'lastName'], 'string'],
            [['typeID'], 'integer'],
            [['typeID'], 'exist', 'skipOnError' => true, 'targetClass' => AttorneyType::className(), 'targetAttribute' => ['typeID' => 'id']],
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
            'typeID' => 'Type ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(AttorneyType::className(), ['id' => 'typeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContracts()
    {
        return $this->hasMany(Contract::className(), ['closingAttorneyID' => 'id']);
    }
}
