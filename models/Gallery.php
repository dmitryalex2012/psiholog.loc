<?php

namespace app\models;

use yii\db\ActiveRecord;

class Gallery extends ActiveRecord
{
    /**
     * Find photo addresses for "Gallery" page.
     *
     * @return array|ActiveRecord[]
     */
    public static function findGallery()
    {
        return Gallery::find()->all();
    }
}
