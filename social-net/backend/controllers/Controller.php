<?php

namespace app\backend\controllers;

use app\backend\models\Article;
use app\backend\models\User;

include 'FrontController.php';
include 'MainpageController.php';
include 'UserspageController.php';
include 'AuthpageController.php';
include 'RegpageController.php';
include 'UserpageController.php';
include 'AuthController.php';
include '../services/Db.php';
include '../models/Session.php';
include 'RegController.php';
include 'ArticleController.php';
include 'UserarticleController.php';
include 'ErrorPageController.php';
include 'ArticlespageController.php';
include '../services/Str.php';

class Controller
{
    public function run()
    {
        if ($_GET['a']) {
            $action = 'action' . ucfirst($_GET['a']);
            if (!method_exists($this, $action)) {
                $action = 'actionIndex';
            }
        } else {
            $action = 'actionIndex';
        }

        $this->$action();
    }

    protected function render($page, $user = null)
    {
        $page = json_encode($page);
        $users = json_encode(User::getListLogins());
        $articles=json_encode(Article::getAllArticles());
        $auth = json_encode(AuthController::checkUser());

        if ($user) {
            $articlesUser = json_encode(ArticleController::getArrayArticlesByUserId($user->id));
            $user = json_encode($user);
        } else {
            $articlesUser = json_encode(null);
            $user = json_encode(null);
        }

        if ($auth === 'true') {
            $currentUser = json_encode(AuthController::getCurrentUser());
            $articlesCurrentUser = json_encode(ArticleController::getArrayArticlesByCurrentUser());

            if ($user === 'null') {
                $user = $currentUser;
            }
        } else {
            $currentUser = json_encode(null);
            $articlesCurrentUser = json_encode(null);
        }

        include '../../frontend/layout.php';
    }

    protected function redirect($url)
    {
        header('Location:' . $url);
    }
}