<?php

namespace app\controllers;

use app\models\ContactForm;
use yii\web\Controller;

/**
 * IncidentController implements the CRUD actions for Incident model.
 */
class TestController extends Controller
{
    /**
     * Lists all Incident models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new ContactForm();
        return $this->render('index', ['time' => date('H:i:s'), 'model' => $model]);
    }

}
