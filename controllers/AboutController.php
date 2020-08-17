<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\services\ColleaguesServices;


class AboutController extends Controller
{

    private $colleagueServices;

    public function __construct($id, $module, $config = [])
    {
        $this->colleagueServices = new ColleaguesServices();
        parent::__construct($id, $module, $config);
    }

    /**
     * Displays "About" page.
     *
     * @return string
     */

    public function actionIndex()
    {
        $colleagues = $this->colleagueServices->getColleagues();

        return $this->render('colleagues', [
            'colleagues' => $colleagues
        ]);
    }

    public function actionDetail()
    {
        $colleagueID = Yii::$app->request->get('colleagueID');
        $colleague = ColleaguesServices::getColleague($colleagueID);

        return $this->render('detail', [
            'colleague' => $colleague
        ]);
    }
 }
