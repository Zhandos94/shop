<?php

namespace frontend\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m170821_051603_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'name' => $this->string(80),
            'keywords' => $this->string(),
            'descriptions' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
