<?php

namespace app\controllers;

use yii\web\Controller;

class AboutController extends Controller
{
    /**
     * Displays "About" page.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('colleagues');
    }
 }
