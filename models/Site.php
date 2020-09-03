<?php

namespace app\models;

use yii\db\ActiveRecord;

class Site extends ActiveRecord
{
    public static function findDoctor($doctorID)
    {
        return Colleagues::find()->where(['id' => $doctorID])->one();
    }

    public static function findMethod($methodID)
    {
        return Offers::find()->where(['id' => $methodID])->one();
    }
}
