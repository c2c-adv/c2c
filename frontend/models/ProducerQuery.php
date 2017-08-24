<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Producer]].
 *
 * @see Producer
 */
class ProducerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Producer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Producer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
