<?php
/**
 * Created by PhpStorm.
 * User: mrdos
 * Date: 03.03.2017
 * Time: 17:25
 */

namespace frontend\models;
use  yii\db\ActiveRecord;

class Products extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['id' => 'category_id']);
    }

}