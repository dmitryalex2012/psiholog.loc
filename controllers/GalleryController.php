<?php

namespace app\controllers;

use app\services\GalleryServices;
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
        $gallery = GalleryServices::getGallery();

        return $this->render('gallery',[
            'gallery' => $gallery
        ]);
    }
}
