<?php

namespace app\backend\controllers;

use app\backend\models\Article;

include '../models/Article.php';

class ArticleController extends Controller
{
    public static function create($authorId, $title, $text)
    {
        (new Article($authorId, $title, $text))->setArticle();
    }

    public static function getArticleByCurrentUser()
    {
        $user = AuthController::getCurrentUser();

        return ArticleController::getArticleByUserId($user->id);
    }

    public static function getArticleByUserId($userId)
    {
        return (new Article())->getArticleByUserId($userId);
    }

    public static function getArrayArticlesByCurrentUser()
    {
        $user = AuthController::getCurrentUser();

        return ArticleController::getArrayArticlesByUserId($user->id);
    }

    public static function  getArrayArticlesByUserId($userId)
    {
        return Article::getArrayArticlesByUserId($userId);
    }

    public static function delArticle($id)
    {
        Article::delArticle($id);
    }
}