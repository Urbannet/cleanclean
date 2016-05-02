<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "customername".
 *
 * @property integer $id
 * @property string $firstname
 */
class CustomerNameModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customername';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'firstname'], 'required'],
            [['id'], 'integer'],
            [['firstname'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
        ];
    }

    /**
     * @inheritdoc
     * @return CustomernameQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CustomernameQuery(get_called_class());
    }
}
