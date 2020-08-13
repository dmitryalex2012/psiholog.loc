<?php

namespace app\controllers;

use yii\web\Controller;
use app\services\ColleaguesServices;

class AboutController extends Controller
{
    /**
     * Displays "About" page.
     *
     * @return string
     */

    public function actionIndex()
    {
        $colleagues = ColleaguesServices::getColleagues();

        return $this->render('colleagues', [
            'colleagues' => $colleagues
        ]);
    }
 }
