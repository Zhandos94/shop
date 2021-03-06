<?php

namespace frontend\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m170821_052235_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'name' => $this->string(),
            'content' => $this->string(),
            'price' => $this->float()->defaultValue(0),
            'keywords' => $this->string(),
            'description' => $this->string(),
            'img' => $this->string(),
            'hit' => $this->smallInteger()->defaultValue(0),
            'new' => $this->smallInteger()->defaultValue(0),
            'sale' => $this->smallInteger()->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
