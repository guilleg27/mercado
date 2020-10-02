<?php

namespace app\controllers;

use yii\rest\ActiveController;
use app\models\Productos;

class ProductosRestController extends ActiveController
{
    public $modelClass = 'app\models\Productos';

    public function actionAllproducts()
    {
        $models = Productos::find()->all();

        $data = [];
        foreach ($models as $key => $value) {
            $data[$value->id]['id'] = $value->id;
            $data[$value->id]['nombre'] = $value->nombre;
            $data[$value->id]['precio_ars'] = $value->precio_ars;
            $data[$value->id]['precio_usd'] = $value->getPrecioUSD();
        }

        return $data;
    }
}