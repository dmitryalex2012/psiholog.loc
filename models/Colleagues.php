<?php

namespace app\models;

use yii\db\ActiveRecord;

class Colleagues extends ActiveRecord
{
    /**
     * Finds all colleagues for "About" page
     *
     * @return array|ActiveRecord[]
     */
    public static function findColleagues()
    {
        return Colleagues::find()->all();
    }

    /**
     * Finds colleague for "About" page.
     *
     * @param $colleagueID
     * @return array|ActiveRecord|null
     */
    public static function findColleague($colleagueID)
    {
        return Colleagues::find()->where(['id' => $colleagueID])->one();
    }
}
