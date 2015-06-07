<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "periode".
 *
 * @property integer $id
 * @property string $nama
 * @property string $keterangan
 *
 * @property Peta[] $petas
 */
class Periode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'periode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama', 'keterangan'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetas()
    {
        return $this->hasMany(Peta::className(), ['id_periode' => 'id']);
    }
}
