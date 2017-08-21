<?php
/**
 * Created by PhpStorm.
 * User: mrdos
 * Date: 03.03.2017
 * Time: 17:24
 */

namespace frontend\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['category_id' => 'id']);
    }
}
?>