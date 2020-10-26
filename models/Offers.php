<?php

namespace app\models;

use yii\db\ActiveRecord;

class Offers extends ActiveRecord
{
    /**
     * Offers determination for "offer" page
     *
     * @return array|ActiveRecord[]
     */
    public static function findOffers()
    {
        return Offers::find()->all();
    }

    /**
     * Determination selected offer for "detailOffer" page
     *
     * @param $id
     * @return array|ActiveRecord|null
     */
    public static function findOffer($id)
    {
        return Offers::find()->where(['id'=>$id])->one();
    }
}
