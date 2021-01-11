<?php

namespace app\services;

use app\models\Site;
use  Yii;

class SiteServices
{
    /**
     * Get doctor name or medical method from DB and save them in session
     *
     * @param $doctorID
     * @param $serviceTypeID
     * @param $serviceType
     */
    public static function setDoctorOrMethod($doctorID, $serviceTypeID, $serviceType){

        if (isset($doctorID)){

            $doctorName = Site::findDoctor($doctorID);
            $doctorName = $doctorName['name'];

            (new self())->addSession('doctor', $doctorName);

        } elseif (isset($serviceTypeID)){

            if ($serviceType == 'offer'){
                $methodTitle = Site::findMethod($serviceTypeID);
            } else{
                $methodTitle = Site::findDirection($serviceTypeID);
            }

            $methodTitle = $methodTitle['title'];
            (new self())->addSession('method', $methodTitle);

        }

        if ((!isset($doctorID))&&(!isset($serviceTypeID))){

            $session = Yii::$app->session;
            $session->open();
            $session->remove('order');
            $session->close();

        }

        unset($serviceTypeID);
        unset($doctorID);

        return;
    }

    /**
     * Save doctor name or medical method in session
     *
     * @param $title
     * @param $value
     */
    private function addSession($title, $value){

        $session = Yii::$app->session;
        $session->open();

        $order = [];
        $order[$title] = $value;

        $session->set('order', $order);
        $session->close();

        return;
    }
}
