<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $pasword_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $role
 * @property integer $status
 * @property integer $created_at
 * @property integer $update_at
 * @property string $avatar
 * @property string $background
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property integer $jenis_kelamin
 * @property string $twitter
 * @property string $facebook
 * @property string $website
 * @property integer $badge
 *
 * @property Komentar[] $komentars
 * @property Peta[] $petas
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
            [['username', 'auth_key', 'pasword_hash', 'email', 'created_at', 'update_at'], 'required'],
            [['username', 'auth_key', 'pasword_hash', 'password_reset_token', 'email', 'avatar', 'background', 'tanggal_lahir', 'alamat', 'twitter', 'facebook', 'website'], 'string'],
            [['role', 'status', 'created_at', 'update_at', 'jenis_kelamin', 'badge'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'pasword_hash' => 'Pasword Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'role' => 'Role',
            'status' => 'Status',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'avatar' => 'Avatar',
            'background' => 'Background',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'jenis_kelamin' => 'Jenis Kelamin',
            'twitter' => 'Twitter',
            'facebook' => 'Facebook',
            'website' => 'Website',
            'badge' => 'Badge',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKomentars()
    {
        return $this->hasMany(Komentar::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetas()
    {
        return $this->hasMany(Peta::className(), ['id_user' => 'id']);
    }
}
