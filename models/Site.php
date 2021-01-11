<?php

namespace app\models;

use yii\db\ActiveRecord;

class Site extends ActiveRecord
{
    public static function findDoctor($doctorID)
    {
        return Colleagues::find()->where(['id' => $doctorID])->one();
    }

    public static function findMethod($serviceTypeID)
    {
        return Offers::find()->where(['id' => $serviceTypeID])->one();
    }

    public static function findDirection($serviceTypeID)
    {
        return Directions::find()->where(['id' => $serviceTypeID])->one();
    }
}
