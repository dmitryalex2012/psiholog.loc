<?php

use yii\db\Migration;

/**
 * Class m200909_122130_gallery
 */
class m200909_122130_gallery extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('gallery', [
            'id' => $this->primaryKey(),
            'photoAddress' =>  $this->string(512),
            'title' => $this->string(256),
            'description' => $this->string(256),
            'notes' => $this->string(1024),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200909_122130_gallery cannot be reverted.\n";

        return false;
    }
}
