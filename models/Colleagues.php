<?php

namespace app\models;

use yii\db\ActiveRecord;

class Colleagues extends ActiveRecord
{
    public static function findColleagues()
    {
        return Colleagues::find()->all();
    }
}
