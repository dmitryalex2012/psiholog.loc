<?php

namespace app\controllers;

use yii\web\Controller;


class GalleryController extends Controller
{


    /**
     * Displays 'Gallery' page.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('gallery');
    }
}
