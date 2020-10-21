<?php

namespace app\controllers;

use yii\web\Controller;


class VideoController extends Controller
{
    /**
     * Displays "Offers" page.
     *
     * @return string
     */
    public function actionVideos()
    {
        return $this->render('videos');
    }
}
