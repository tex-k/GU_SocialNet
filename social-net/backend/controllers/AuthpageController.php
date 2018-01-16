<?php

namespace app\backend\controllers;

use app\backend\models\Session;
use app\backend\models\User;

class AuthpageController extends Controller
{
    public function actionIndex()
    {
        if ($_POST) {
            $user = (new User())->getUser($_POST['login'], $_POST['password']);

            if ($user) {
                AuthController::inUser($user);

                $this->redirect('?c=userpage');
            }
        }

        $this->render('Авторизация');
    }

    public function actionOut()
    {
        AuthController::outUser();

        $this->render('Главная');
    }
}