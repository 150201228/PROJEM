<?php

namespace kouosl\arcanteus\models;

use Yii;

/**
 * This is the model class for table "son_arananlar".
 *
 * @property string $arama_id
 * @property string $aranan_adi
 * @property string $son_tarih
 */
class Arama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'son_arananlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['aranan_adi', 'son_tarih'], 'required'],
            [['son_tarih'], 'safe'],
            [['aranan_adi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'arama_id' => 'Arama ID',
            'aranan_adi' => 'Aranan Adi',
            'son_tarih' => 'Son Tarih',
        ];
    }
}
