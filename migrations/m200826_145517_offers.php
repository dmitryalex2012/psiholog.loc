<?php

use yii\db\Migration;

/**
 * Class m200826_145517_offers
 */
class m200826_145517_offers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('offers', [
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
