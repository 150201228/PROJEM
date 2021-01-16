<?php

namespace kouosl\arcanteus\models;

use Yii;

/**
 * This is the model class for table "adres_defteri".
 *
 * @property string $kisi_id
 * @property string $kisi_ad_soyad
 * @property string $phone
 * @property int $is_use_whatsapp
 */
class Adres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adres_defteri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kisi_ad_soyad', 'phone'], 'required'],
            [['is_use_whatsapp'], 'integer'],
            [['kisi_ad_soyad', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kisi_id' => 'Kisi ID',
            'kisi_ad_soyad' => 'Kisi Ad Soyad',
            'phone' => 'Phone',
            'is_use_whatsapp' => 'Is Use Whatsapp',
        ];
    }
}
