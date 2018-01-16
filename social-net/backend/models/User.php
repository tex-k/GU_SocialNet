<?php

namespace app\backend\models;

use app\backend\services\Db;

class User
{
    protected $id;
    protected $login;
    protected $password;
    protected $name;
    protected $surname;
    protected $email;

    public function __construct($login = null, $password = null, $name = null, $surname = null, $email = null)
    {
        $this->setLogin($login);
        $this->setPassword($password);
        $this->setName($name);
        $this->setSurname($surname);
        $this->setEmail($email);
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setUser()
    {
        (new Db())->getConn()->query("INSERT INTO user (login, password, email, name, surname)
                            VALUES ('$this->login', '$this->password', '$this->email', '$this->name', '$this->surname')");
    }

    public static function delUser($userId)
    {
        (new Db())->getConn()->query("DELETE FROM user WHERE id = '$userId'");
    }

    public static function getListLogins()
    {
        $rows = (new Db())->getConn()->query("SELECT * FROM user")->fetch_all();

        $logins = [];

        foreach ($rows as $row) {
            array_push($logins, $row[1]);
        }
        return $logins;
    }

    public function getUser($login, $password)
    {
        return (new Db())->getConn()->query("SELECT * FROM user WHERE login = '$login' AND password = '$password'")
            ->fetch_object();
    }

    public static function getUserBySession($sid)
    {
        $session = Session::getSessionById($sid);
        return (new Db())->getConn()->query("SELECT * FROM user WHERE id = '$session->userId'")->fetch_object();
    }

    public static function getUserByLogin($login)
    {
        return (new Db())->getConn()->query("SELECT * FROM user WHERE login = '$login'")->fetch_object();
    }

    public static function getUserById($userId)
    {
        return (new Db())->getConn()->query("SELECT * FROM user WHERE id = '$userId'")->fetch_object();
    }


}