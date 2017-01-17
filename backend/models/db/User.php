<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $nickname
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $prefix_phone_number
 * @property integer $phone_number
 * @property integer $gender
 * @property integer $province_id
 * @property integer $status
 * @property string $created
 * @property string $updated
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nickname', 'username', 'auth_key', 'password_hash', 'email', 'province_id', 'created', 'updated'], 'required'],
            [['phone_number', 'gender', 'province_id', 'status'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['nickname'], 'string', 'max' => 20],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['prefix_phone_number'], 'string', 'max' => 5],
            [['nickname'], 'unique'],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nickname' => 'Nickname',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'prefix_phone_number' => 'Prefix Phone Number',
            'phone_number' => 'Phone Number',
            'gender' => 'Gender',
            'province_id' => 'Province ID',
            'status' => 'Status',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
