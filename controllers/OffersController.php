<?php

namespace app\controllers;


use app\services\OurOffersServices;
use app\services\PsychiatryDirectionsServices;
use yii\web\Controller;


class OffersController extends Controller
{
    private $offersServices;
    private $psychiatryDirections;

    public function __construct($id, $module, $config = [])
    {
        $this->offersServices = new OurOffersServices();
        $this->psychiatryDirections = new PsychiatryDirectionsServices();

        parent::__construct($id, $module, $config);
    }

    /**
     * Displays "Offers" page.
     *
     * @return string
     */
    public function actionList()
    {
        $offers = $this->offersServices->getOffers();

        return $this->render('offers', [
            'offers'=>$offers
            ]);
    }

    /**
     * Displays "PsychiatryDirections" page.
     *
     * @return string
     */
    public function actionDetails()
    {
        $psychiatryDirections = $this->psychiatryDirections->getPsychiatryDirections();

        return $this->render('psychiatryDirections', [
            'psychiatryDirections'=>$psychiatryDirections
        ]);
    }
}
