<?php

namespace app\backend\controllers;

use app\backend\models\User;

class UserpageController extends Controller
{
    public function actionIndex()
    {
        $this->render('Кабинет');
    }

    public function actionArticle()
    {
        if ($_POST['title']) {
            $authorId = AuthController::getCurrentUser()->id;
            $title = $_POST['title'];
            $text = $_POST['text'];

            $_POST['title'] = null;
            $_POST['text'] = null;

            ArticleController::create($authorId, $title, $text);

            $this->redirect('?c=userpage');
        }
    }

    public function actionDel()
    {
        if ($_GET['p']) {
            ArticleController::delArticle($_GET['p']);
        }

        $this->redirect('?c=userpage');
    }
}