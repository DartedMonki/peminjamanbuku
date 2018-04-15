<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peminjaman".
 *
 * @property string $nama
 * @property int $nim
 * @property string $alamat
 * @property int $nobuku
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peminjaman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'nim', 'alamat', 'nobuku'], 'required'],
            [['nama', 'alamat'], 'string'],
            [['nim', 'nobuku'], 'integer'],
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
            'nobuku' => 'Nobuku',
        ];
    }
}
