<?php

namespace app\controllers;


use yii\web\Controller;


class ServicesController extends Controller
{
    /**
     * Displays "Services" page.
     *
     * @return string
     */
    public function actionList()
    {
        return $this->render('services');
    }
}
