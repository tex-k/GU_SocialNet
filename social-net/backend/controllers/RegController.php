<?php

namespace app\backend\controllers;

use app\backend\models\User;

class RegController extends Controller
{
    public static function createUser()
    {
        if ($_POST) {
            (new User($_POST['login'], $_POST['password'], $_POST['name'], $_POST['surname'], $_POST['email']))->setUser();
        }
    }

    public static function delUser($user)
    {
        User::delUser($user->id);
    }
}