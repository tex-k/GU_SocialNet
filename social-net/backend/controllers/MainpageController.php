<?php

namespace app\backend\controllers;

class MainpageController extends Controller
{
    public function actionIndex()
    {
        $this->render('Главная');
    }
}