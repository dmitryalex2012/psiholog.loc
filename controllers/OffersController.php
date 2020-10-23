<?php

namespace app\controllers;


//use app\models\Directions;
use app\services\OurOffersServices;
use app\services\PsychiatryDirectionsServices;
use Yii;
use yii\web\Controller;


class OffersController extends Controller
{
    private $offersServices;
    private $psychiatryDirectionsServices;

    public function __construct($id, $module, $config = [])
    {
        $this->offersServices = new OurOffersServices();
        $this->psychiatryDirectionsServices = new PsychiatryDirectionsServices();

        parent::__construct($id, $module, $config);
    }

    /**
     * Displays "Offers" page.
     *
     * @return string
     */
    public function actionList()
    {
        $offers = $this->offersServices->getOffers('offers');
        $directions = $this->offersServices->getOffers('directions');
//        $directions = $this->psychiatryDirectionsServices->getPsychiatryDirections();

        return $this->render('offers', [
            'offers'=>$offers,
            'directions'=>$directions
            ]);
    }

    /**
     * Displays "PsychiatryDirections" page.
     *
     * @return string
     */
    public function actionOffer()
    {
        $id = Yii::$app->request->get('id');
        $serviceType = Yii::$app->request->get('serviceType');

        $offer = $this->offersServices->getOffer($id, $serviceType);
        $content = $this->offersServices->extractContent($offer);

        return $this->render('detailOffer', [
            'detailOffer'=>$offer,
            'content'=>$content
        ]);
    }

//    public function actionDirection()
//    {
//        $id = Yii::$app->request->get('id');
//        $direction = $this->psychiatryDirectionsServices->getPsychiatryDirection($id);
//        $content = [];
//
//        return $this->render('detailOffer', [
//            'detailOffer'=>$direction,
//            'content'=>$content
//        ]);
//    }
}
