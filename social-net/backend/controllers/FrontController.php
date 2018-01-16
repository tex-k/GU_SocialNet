<?php

namespace app\backend\controllers;

class FrontController extends Controller
{
    public function actionIndex()
    {
        if ($_SERVER['REQUEST_URI'] == '/') {
            (new MainpageController())->run();
        } else {
            $controller = 'app\backend\controllers\\' . ucfirst($_GET['c']) . 'Controller';
            if (class_exists($controller)) {
                (new $controller)->run();
            } else {
                (new ErrorPageController())->run();
            }
        }
    }
}