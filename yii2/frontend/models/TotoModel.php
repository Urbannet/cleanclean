<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toto".
 *
 * @property integer $id
 * @property string $description
 */
class TotoModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'toto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'description'], 'required'],
            [['id'], 'integer'],
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
     * @inheritdoc
     * @return TotoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TotoQuery(get_called_class());
    }
}
