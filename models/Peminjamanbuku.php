<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peminjamanbuku".
 *
 * @property string $Nama
 * @property string $NIM
 * @property string $Alamat
 * @property int $No Buku
 */
class Peminjamanbuku extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peminjamanbuku';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nama', 'NIM', 'Alamat', 'No Buku'], 'required'],
            [['Nama', 'NIM', 'Alamat'], 'string'],
            [['No Buku'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nama' => 'Nama',
            'NIM' => 'Nim',
            'Alamat' => 'Alamat',
            'No Buku' => 'No  Buku',
        ];
    }
}
