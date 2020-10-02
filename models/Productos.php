<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $id
 * @property string $nombre
 * @property string $precio_ars
 */
class Productos extends \yii\db\ActiveRecord
{
    private $cotizacion = 60.5;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'precio_ars'], 'required'],
            [['precio_ars'], 'number'],
            [['nombre'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'precio_ars' => 'Precio Ars',
        ];
    }

    public function getPrecioUSD()
    {
        return round($this->precio_ars / $this->cotizacion,3);
    }

    public function getCotizacionUSD()
    {
        return $this->cotizacion;
    }
}
