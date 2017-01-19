<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property integer $id
 * @property string $name
 * @property string $country
 * @property string $created
 * @property string $updated
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'created', 'updated'], 'required'],
            [['created', 'updated'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['country'], 'string', 'max' => 10],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'country' => 'Country',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
