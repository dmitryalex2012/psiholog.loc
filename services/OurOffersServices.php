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
    public function getOffers ()
    {
        return Offers::findOffers();
    }

    public function getOffer ($id)
    {
        return Offers::findOffer($id);
    }

    public function extractContent($offer)
    {
        $content= $offer->content;
        $content = explode("*", $content);

        return $content;
    }

}
