<?php

namespace app\backend\controllers;

use app\backend\models\Session;
use app\backend\models\User;
use app\backend\services\Str;

class AuthController extends Controller
{
    public static function inUser($user)
    {
        $sid = Str::generateStr();

        (new Session())->setSession($sid, $user->id);

        AuthController::setSession($sid);
    }

    public static function outUser()
    {
        if (AuthController::checkUser()) {
            AuthController::delCurrentSession();
        }
    }

    public static function checkUser()
    {
        $sid = AuthController::getCurrentSessionId();

        if ($sid) {
            return true;
        } else {
            return false;
        }
    }

    public static function setSession($sid)
    {
        session_start();

        $_SESSION['sid'] = $sid;
    }

    public static function getCurrentSessionId()
    {
        session_start();

        return $_SESSION['sid'];
    }

    public static function getCurrentUser()
    {
        $sid = AuthController::getCurrentSessionId();

        return  User::getUserBySession($sid);
    }

    public static function delCurrentSession()
    {
        $sid = AuthController::getCurrentSessionId();

        Session::delSession($sid);

        $_SESSION['sid'] = null;
    }
}