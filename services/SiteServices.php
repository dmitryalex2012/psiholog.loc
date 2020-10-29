<?php

namespace app\services;

use app\models\Site;
use  Yii;

class SiteServices
{
    /**
     * Get doctor name or medical method from DB and save them in session
     *
     * @param $doctor
     * @param $method
     */
    public static function setDoctorOrMethod($doctor, $method){

        if (isset($doctor)){
            $doctorName = Site::findDoctor($doctor);
            $doctorName = $doctorName['name'];

            (new self())->addSession('doctor', $doctorName);
        }

        if (isset($method)){
            $methodTitle = Site::findMethod($method);
            $methodTitle = $methodTitle['title'];

            (new self())->addSession('method', $methodTitle);
        }

        if ((!isset($doctor))&&(!isset($method))){
            $session = Yii::$app->session;
            $session->open();
            $session->remove('order');
            $session->close();
        }
        unset($method);
        unset($doctor);

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
