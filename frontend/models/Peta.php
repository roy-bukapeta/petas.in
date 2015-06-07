<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "peta".
 *
 * @property integer $id
 * @property string $judul_peta
 * @property string $sub_judul_peta
 * @property string $penjelasan_peta
 * @property string $event
 * @property string $sumber
 * @property string $tags
 * @property integer $terbitkan
 * @property integer $tong_sampah
 * @property integer $periode
 * @property string $waktu_mulai
 * @property integer $waktu_berakhir
 * @property integer $kualias
 * @property integer $kunjungan
 * @property integer $sebaran
 * @property string $waktu_pembuatan
 * @property string $waktu_pembaharuan
 * @property integer $id_jenis
 * @property integer $id_periode
 * @property integer $id_user
 *
 * @property Cerita[] $ceritas
 * @property FotoPeta[] $fotoPetas
 * @property Komentar[] $komentars
 * @property Jenis $idJenis
 * @property Periode $idPeriode
 * @property User $idUser
 */
class Peta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul_peta', 'sub_judul_peta', 'penjelasan_peta', 'event', 'sumber', 'tags', 'waktu_mulai', 'waktu_pembuatan', 'waktu_pembaharuan'], 'string'],
            [['event', 'periode', 'waktu_pembuatan', 'waktu_pembaharuan', 'id_user'], 'required'],
            [['terbitkan', 'tong_sampah', 'periode', 'waktu_berakhir', 'kualias', 'kunjungan', 'sebaran', 'id_jenis', 'id_periode', 'id_user'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul_peta' => 'Judul Peta',
            'sub_judul_peta' => 'Sub Judul Peta',
            'penjelasan_peta' => 'Penjelasan Peta',
            'event' => 'Event',
            'sumber' => 'Sumber',
            'tags' => 'Tags',
            'terbitkan' => 'Konsep / Terbit',
            'tong_sampah' => 'Tong Sampah',
            'periode' => 'Periode',
            'waktu_mulai' => 'Waktu Mulai',
            'waktu_berakhir' => 'Waktu Berakhir',
            'kualias' => 'Kualias',
            'kunjungan' => 'Kunjungan',
            'sebaran' => 'Sebaran',
            'waktu_pembuatan' => 'Waktu Pembuatan',
            'waktu_pembaharuan' => 'Waktu Pembaharuan',
            'id_jenis' => 'Id Jenis',
            'id_periode' => 'Id Periode',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCeritas()
    {
        return $this->hasMany(Cerita::className(), ['id_peta' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFotoPetas()
    {
        return $this->hasMany(FotoPeta::className(), ['id_peta' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKomentars()
    {
        return $this->hasMany(Komentar::className(), ['id_peta' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJenis()
    {
        return $this->hasOne(Jenis::className(), ['id' => 'id_jenis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPeriode()
    {
        return $this->hasOne(Periode::className(), ['id' => 'id_periode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
