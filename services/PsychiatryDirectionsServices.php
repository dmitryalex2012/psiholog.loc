<?php

namespace app\services;

use app\models\Directions;

class PsychiatryDirectionsServices
{
    public static function getPsychiatryDirections ()
    {
        return Directions::findPsychiatryDirections();
    }

    /**
     * Get information about our offers
     *
     * @param $id
     *
     * @return mixed
     */
    public static function getPsychiatryDirection ($id)
    {
        return Directions::findPsychiatryDirection($id);
    }

}
