<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $nama
 * @property int $nim
 * @property int $alamat
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'nim', 'alamat'], 'required'],
            [['nama', 'nim', 'alamat'], 'integer'],
            [['nim'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'nim' => 'Nim',
            'alamat' => 'Alamat',
        ];
    }
}
