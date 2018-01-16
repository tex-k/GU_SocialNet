<?php

namespace app\backend\controllers;

use app\backend\models\User;

class UserarticleController extends Controller
{
    public function actionIndex()
    {
        if ($_GET['p']) {
            $user = User::getUserByLogin($_GET['p']);

            $this->render('Блог', $user);
        }
    }
}