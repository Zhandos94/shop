<?php

namespace frontend\migrations;

use yii\db\Migration;

class m170821_064531_insert_category extends Migration
{
    public function safeUp()
    {
        $this->batchInsert('category', ['parent_id', 'name'], [
            [0, 'Men'],
            [0, 'Women'],
            [0, 'Kids'],
            [0, 'Sportswear'],
            [0, 'Fashion'],
            [0, 'Households'],
            [0, 'Interiors'],
            [0, 'Clothing'],
            [0, 'Bags'],
            [0, 'Shoes'],
            [1, 'Nike'],
            [1, 'Adidas'],
            [1, 'Puma'],
            [1, 'ASICS'],
            [1, 'Fendi'],
            [1, 'Guess'],
            [1, 'Valentino'],
            [1, 'Dior'],
            [1, 'Versace'],
            [1, 'Armani'],
            [1, 'Prado'],
            [1, 'Dolce and Gabbana'],
            [1, 'Chanel'],
            [1, 'Gucci'],
            [2, 'Fendi'],
            [2, 'Guess'],
            [2, 'Valentino'],
            [2, 'Dior'],
            [2, 'Versace'],
            [2, 'Dolce and Gabbana'],
            [2, 'Prado'],
            [2, 'Chanel'],
        ]);
    }

    public function safeDown()
    {
        echo "m170821_064531_insert_category cannot inserted.\n";
        return false;
    }

}
