<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cerita".
 *
 * @property integer $id
 * @property string $nama_cerita
 * @property string $deskripsi
 * @property string $event
 * @property string $wkt
 * @property string $waktu_pembuatan
 * @property string $waktu_pembaharuan
 * @property integer $id_peta
 *
 * @property Peta $idPeta
 * @property FotoCerita[] $fotoCeritas
 * @property Komentar[] $komentars
 */
class Cerita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cerita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_cerita', 'deskripsi', 'event', 'wkt', 'waktu_pembuatan', 'waktu_pembaharuan'], 'string'],
            [['event', 'wkt', 'waktu_pembuatan', 'waktu_pembaharuan', 'id_peta'], 'required'],
            [['id_peta'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_cerita' => 'Nama Cerita',
            'deskripsi' => 'Deskripsi',
            'event' => 'Event',
            'wkt' => 'Wkt',
            'waktu_pembuatan' => 'Waktu Pembuatan',
            'waktu_pembaharuan' => 'Waktu Pembaharuan',
            'id_peta' => 'Id Peta',
        ];
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
    public function getFotoCeritas()
    {
        return $this->hasMany(FotoCerita::className(), ['id_cerita' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKomentars()
    {
        return $this->hasMany(Komentar::className(), ['id_cerita' => 'id']);
    }
}
