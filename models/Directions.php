<?php

namespace app\models;

use yii\db\ActiveRecord;

class Directions extends ActiveRecord
{
    public static function findDirections()
    {
        return Directions::find()->all();
    }

    public static function findDirection($id)
    {
        return Directions::find()->where(['id'=>$id])->one();
    }

}
