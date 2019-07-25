<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m190725_101403_create_news_table extends Migration
{
    /**
     * @return bool|void
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'content' => $this->text(),
            'status' => $this->integer(3),
        ]);
    }

    /**
     * @return bool|void
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
