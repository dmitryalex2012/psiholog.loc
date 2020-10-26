<?php

namespace app\models;

use yii\db\ActiveRecord;

class Directions extends ActiveRecord
{
    /**
     * Directions determination for "offer" page
     *
     * @return array|ActiveRecord[]
     */

    public static function findDirections()
    {
        return Directions::find()->all();
    }

    /**
     * Determination selected direction for "detailOffer" page
     *
     * @param $id
     * @return array|ActiveRecord|null
     */
        public static function findDirection($id)
    {
        return Directions::find()->where(['id'=>$id])->one();
    }

}
