<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[CustomerNameModel]].
 *
 * @see CustomerNameModel
 */
class CustomernameQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return CustomerNameModel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CustomerNameModel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
