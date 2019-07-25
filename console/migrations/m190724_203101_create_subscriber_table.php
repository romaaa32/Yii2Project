<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subscriber}}`.
 */
class m190724_203101_create_subscriber_table extends Migration
{

    /**
     * @return bool|void
     */
    public function safeUp()
    {
        $this->createTable('subscriber', [
           'id' => $this->primaryKey(),
            'email' => $this->string()->unique(),
        ]);
    }

    /**
     * @return bool|void
     */
    public function safeDown()
    {
        $this->dropTable('subscriber');
    }
}
