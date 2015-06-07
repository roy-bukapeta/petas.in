<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "foto_cerita".
 *
 * @property integer $id
 * @property string $caption
 * @property string $path
 * @property integer $id_cerita
 *
 * @property Cerita $idCerita
 */
class Fotocerita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foto_cerita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['caption', 'path'], 'string'],
            [['id_cerita'], 'required'],
            [['id_cerita'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Caption',
            'path' => 'Path',
            'id_cerita' => 'Id Cerita',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCerita()
    {
        return $this->hasOne(Cerita::className(), ['id' => 'id_cerita']);
    }
}
