<?php

namespace app\services;

use app\models\Directions;
use app\models\Offers;

class OurOffersServices
{
    /**
     * Get information about our offers
     *
     * @param $servicesType
     * @return mixed
     */
    public function getOffers ($servicesType)
    {
        if ($servicesType === "offers"){
            $services = Offers::findOffers();
        }
        else{
            $services = Directions::findDirections();
        }

        return $services;
    }

    public function getOffer ($id, $serviceType)
    {
        if ($serviceType == "offers"){
            $service = Offers::findOffer($id);
//            $service['serviceType'] = 'offer';      /** For determination "Offer" or "Method" in FeedbackForm */
        }
        else{
            $service = Directions::findDirection($id);
//            $service['serviceType'] = 'direction';  /** For determination "Offer" or "Method" in FeedbackForm */
        }

        return $service;
    }

    public function extractContent($offer)
    {
        $content= $offer->content;
        $content = explode("*", $content);

        return $content;
    }

}
