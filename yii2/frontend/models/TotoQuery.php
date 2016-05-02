<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[TotoModel]].
 *
 * @see TotoModel
 */
class TotoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TotoModel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TotoModel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
