<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Contract".
 *
 * @property integer $id
 * @property integer $producerID
 * @property string $contractDate
 * @property string $inspectionDate
 * @property string $closingDate
 * @property integer $closingAttorneyID
 *
 * @property Attorney $closingAttorney
 */
class Contract extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Contract';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['producerID', 'contractDate', 'inspectionDate', 'closingDate', 'closingAttorneyID'], 'required'],
            [['producerID', 'closingAttorneyID'], 'integer'],
            [['contractDate', 'inspectionDate', 'closingDate'], 'safe'],
            [['closingAttorneyID'], 'exist', 'skipOnError' => true, 'targetClass' => Attorney::className(), 'targetAttribute' => ['closingAttorneyID' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'producerID' => 'Producer ID',
            'contractDate' => 'Contract Date',
            'inspectionDate' => 'Inspection Date',
            'closingDate' => 'Closing Date',
            'closingAttorneyID' => 'Closing Attorney ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClosingAttorney()
    {
        return $this->hasOne(Attorney::className(), ['id' => 'closingAttorneyID']);
    }
}
