<?php

namespace app\controllers;


use yii\web\Controller;


class BlogController extends Controller
{
    /**
     * Displays "Offers" page.
     *
     * @return string
     */
    public function actionDisplay()
    {
        return $this->render('display');
    }
}
