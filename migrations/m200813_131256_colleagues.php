<?php

use yii\db\Migration;

/**
 * Class m200813_131256_colleagues
 */
class m200813_131256_colleagues extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('colleagues', [
            'id' => $this->primaryKey(),
            'name' =>  $this->string(),
            'photos' => $this->string(),
            'specialization' => $this->string(),
            'methods' => $this->string(),
            'biography' => $this->string(),
            'hobbies' => $this->string(),
            'notes' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
//        echo "m200813_131256_colleagues cannot be reverted.\n";

        return false;
    }
}
