<?php

namespace app\backend\controllers;

class ErrorPageController extends Controller
{
    public function actionIndex() {
        $this->render('Ошибка');
    }
}