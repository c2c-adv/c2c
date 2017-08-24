<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "AttorneyType".
 *
 * @property integer $id
 * @property string $description
 *
 * @property Attorney[] $attorneys
 */
class AttorneyType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'AttorneyType';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'required'],
            [['description'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttorneys()
    {
        return $this->hasMany(Attorney::className(), ['typeID' => 'id']);
    }

    /**
     * @inheritdoc
     * @return AttorneyTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AttorneyTypeQuery(get_called_class());
    }
}
