<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tabla1".
 *
 * @property int $id
 * @property string $Descripcion
 */
class Tabla1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tabla1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Descripcion'], 'required'],
            [['Descripcion'], 'string', 'max' => 45],
            [['Descripcion'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Descripcion' => 'Descripcion',
        ];
    }
}
