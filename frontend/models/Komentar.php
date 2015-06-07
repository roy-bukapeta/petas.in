<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "komentar".
 *
 * @property integer $id
 * @property string $komentar
 * @property string $waktu_pembuatan
 * @property string $waktu_pembaharuan
 * @property integer $id_peta
 * @property integer $id_cerita
 * @property integer $id_user
 *
 * @property Cerita $idCerita
 * @property Peta $idPeta
 * @property User $idUser
 */
class Komentar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'komentar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['komentar', 'waktu_pembuatan', 'waktu_pembaharuan'], 'string'],
            [['waktu_pembuatan', 'waktu_pembaharuan', 'id_user'], 'required'],
            [['id_peta', 'id_cerita', 'id_user'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'komentar' => 'Komentar',
            'waktu_pembuatan' => 'Waktu Pembuatan',
            'waktu_pembaharuan' => 'Waktu Pembaharuan',
            'id_peta' => 'Id Peta',
            'id_cerita' => 'Id Cerita',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCerita()
    {
        return $this->hasOne(Cerita::className(), ['id' => 'id_cerita']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPeta()
    {
        return $this->hasOne(Peta::className(), ['id' => 'id_peta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
