<?php

namespace kouosl\ilanmodul\frontend\models;

use Yii;

/**
 * This is the model class for table "ilan".
 *
 * @property int $id
 * @property string $ad
 * @property string $tarih
 * @property string $kategori
 */
class Ilan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ilan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ad', 'tarih', 'kategori'], 'required'],
            [['id'], 'integer'],
            [['ad', 'kategori'], 'string'],
            [['tarih'], 'safe'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ad' => 'Ad',
            'tarih' => 'Tarih',
            'kategori' => 'Kategori',
        ];
    }
}
