<?php

namespace app\backend\controllers;

class ArticlespageController extends Controller
{
    public function actionIndex()
    {
        $this->render('Статьи');
    }
}