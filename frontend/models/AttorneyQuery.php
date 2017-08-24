<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Attorney]].
 *
 * @see Attorney
 */
class AttorneyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Attorney[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Attorney|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
