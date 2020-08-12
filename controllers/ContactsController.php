<?php

namespace app\controllers;

use yii\web\Controller;

class ContactsController extends Controller
{
    /**
     * Displays "Contacts" page.
     *
     * @return string
     */
    public function actionLoad()
    {
        return $this->render('contacts');
    }
 }
