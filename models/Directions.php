<?php

namespace app\models;

use yii\db\ActiveRecord;

class Directions extends ActiveRecord
{
    public static function findPsychiatryDirections()
    {
        return Directions::find()->all();
    }

}
