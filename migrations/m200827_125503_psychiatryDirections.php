<?php

use yii\db\Migration;

/**
 * Class m200827_125503_psychiatryDirections
 */
class m200827_125503_psychiatryDirections extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('directions', [
        'id' => $this->primaryKey(),
        'photo' =>  $this->string(),
        'content' => $this->string(),
        'price' => $this->string(),
        'notes' => $this->integer(),
    ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return false;
    }
}
