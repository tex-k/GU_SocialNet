<?php

namespace app\backend\controllers;

use app\backend\models\Article;
use app\backend\models\User;

class RegpageController extends Controller
{
    public function actionIndex()
    {
        $this->actionCreate();
    }

    public function actionCreate()
    {
        RegController::createUser();

        $this->render('Регистрация');
    }

    public function actionDel()
    {
        $user = AuthController::getCurrentUser();

        Article::delArticlesByUserId($user->id);

        RegController::delUser($user);

        AuthController::delCurrentSession();

        $this->redirect('?c=mainpage');
    }
}