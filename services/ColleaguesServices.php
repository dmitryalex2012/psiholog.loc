<?php

namespace app\services;

use app\models\Colleagues;

class ColleaguesServices
{
    /**
     * Get information about our colleagues
     *
     * @return mixed
     */
    public static function getColleagues ()
    {
        return Colleagues::findColleagues();
    }

    public static function getColleague ($colleagueID)
    {
        return Colleagues::findColleague($colleagueID);
    }
}
