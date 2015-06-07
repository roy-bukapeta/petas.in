<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "foto_peta".
 *
 * @property integer $id
 * @property string $caption
 * @property string $path
 * @property integer $id_peta
 *
 * @property Peta $idPeta
 */
class Fotopeta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foto_peta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['caption', 'path'], 'string'],
            [['id_peta'], 'required'],
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
            'caption' => 'Caption',
            'path' => 'Path',
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
}
