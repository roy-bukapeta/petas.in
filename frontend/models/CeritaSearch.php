<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Cerita;

/**
 * CeritaSearch represents the model behind the search form about `app\models\Cerita`.
 */
class CeritaSearch extends Cerita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_peta'], 'integer'],
            [['nama_cerita', 'deskripsi', 'event', 'wkt', 'waktu_pembuatan', 'waktu_pembaharuan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Cerita::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_peta' => $this->id_peta,
        ]);

        $query->andFilterWhere(['like', 'nama_cerita', $this->nama_cerita])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'event', $this->event])
            ->andFilterWhere(['like', 'wkt', $this->wkt])
            ->andFilterWhere(['like', 'waktu_pembuatan', $this->waktu_pembuatan])
            ->andFilterWhere(['like', 'waktu_pembaharuan', $this->waktu_pembaharuan]);

        return $dataProvider;
    }
}
