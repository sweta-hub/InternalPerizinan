<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "perizinan".
 *
 * @property int $id_perizinan
 * @property string $no_izin
 * @property string $nama_pemilik
 * @property string $lokasi
 * @property string $file
 */
class Perizinan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perizinan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_izin', 'nama_pemilik', 'lokasi', 'file'], 'required'],
            [['no_izin', 'nama_pemilik'], 'string', 'max' => 455],
            [['file'], 'file','skipOnEmpty'=>TRUE,'extensions'=>'pdf'],
            [['lokasi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_perizinan' => 'Id Perizinan',
            'no_izin' => 'No Izin',
            'nama_pemilik' => 'Nama Pemilik',
            'lokasi' => 'Lokasi',
            'file' => 'File',
        ];
    }
}
