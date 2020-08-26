<?php

namespace app\controllers;


use app\services\OurOffersServices;
use yii\web\Controller;


class OffersController extends Controller
{
    private $offersServices;

    public function __construct($id, $module, $config = [])
    {
        $this->offersServices = new OurOffersServices();

        parent::__construct($id, $module, $config);
    }

    /**
     * Displays "Offers" page.
     *
     * @return string
     */
    public function actionList()
    {
//        $services[0] = '/photo/services/services1.jpg';
//        $services[1] = '/photo/services/services2.jpg';
//        $services[2] = '/photo/services/services3.jpg';
//        $services[3] = '/photo/services/services4.jpg';

        $offers = $this->offersServices->getOffers();


        return $this->render('offers', [
            'offers'=>$offers
            ]);
    }
}
