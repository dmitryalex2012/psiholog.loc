<?php

namespace app\services;

use app\models\Offers;

class OurOffersServices
{
    /**
     * Get information about our offers
     *
     * @return mixed
     */
    public static function getOffers ()
    {
        return Offers::findOffers();
    }

}
