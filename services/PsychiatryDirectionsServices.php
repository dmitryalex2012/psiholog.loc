<?php

namespace app\services;

use app\models\Directions;

class PsychiatryDirectionsServices
{
    /**
     * Get information about our offers
     *
     * @return mixed
     */
    public static function getPsychiatryDirections ()
    {
        return Directions::findPsychiatryDirections();
    }

}
