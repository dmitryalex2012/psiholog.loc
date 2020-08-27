<?php

namespace app\models;

use yii\db\ActiveRecord;

class Offers extends ActiveRecord
{
    /**
     * @return array|ActiveRecord[]
     */
    public static function findOffers()
    {
        return Offers::find()->all();
    }
}
