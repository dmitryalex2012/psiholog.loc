<?php

namespace app\models;

use yii\db\ActiveRecord;

class Colleagues extends ActiveRecord
{
    public static function findColleagues()
    {
        return Colleagues::find()->all();
    }

    public static function findColleague($colleagueID)
    {
//        return Colleagues::find()->all();
        return Colleagues::find()->where(['id' => $colleagueID])->one();
    }
}
