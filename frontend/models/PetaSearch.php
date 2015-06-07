<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Peta;

/**
 * PetaSearch represents the model behind the search form about `app\models\Peta`.
 */
class PetaSearch extends Peta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'terbitkan', 'tong_sampah', 'periode', 'waktu_berakhir', 'kualias', 'kunjungan', 'sebaran', 'id_jenis', 'id_periode', 'id_user'], 'integer'],
            [['judul_peta', 'sub_judul_peta', 'penjelasan_peta', 'event', 'sumber', 'tags', 'waktu_mulai', 'waktu_pembuatan', 'waktu_pembaharuan'], 'safe'],
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
        $query = Peta::find();

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
            'terbitkan' => $this->terbitkan,
            'tong_sampah' => $this->tong_sampah,
            'periode' => $this->periode,
            'waktu_berakhir' => $this->waktu_berakhir,
            'kualias' => $this->kualias,
            'kunjungan' => $this->kunjungan,
            'sebaran' => $this->sebaran,
            'id_jenis' => $this->id_jenis,
            'id_periode' => $this->id_periode,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'judul_peta', $this->judul_peta])
            ->andFilterWhere(['like', 'sub_judul_peta', $this->sub_judul_peta])
            ->andFilterWhere(['like', 'penjelasan_peta', $this->penjelasan_peta])
            ->andFilterWhere(['like', 'event', $this->event])
            ->andFilterWhere(['like', 'sumber', $this->sumber])
            ->andFilterWhere(['like', 'tags', $this->tags])
            ->andFilterWhere(['like', 'waktu_mulai', $this->waktu_mulai])
            ->andFilterWhere(['like', 'waktu_pembuatan', $this->waktu_pembuatan])
            ->andFilterWhere(['like', 'waktu_pembaharuan', $this->waktu_pembaharuan]);

        return $dataProvider;
    }
}
