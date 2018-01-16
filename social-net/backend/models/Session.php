<?php

namespace app\backend\models;

use app\backend\services\Db;

class Session
{
    protected $sid;
    protected $userId;

    /**
     * @param mixed $sid
     */
    public function setSid($sid)
    {
        $this->sid = $sid;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    public function setSession($sid, $userId)
    {
        (new Db())->getConn()->query("INSERT INTO sessions (id, userId) VALUES ('$sid', '$userId')");
    }

    public static function delSession($sid)
    {
        (new Db())->getConn()->query("DELETE FROM sessions WHERE id = '$sid'");
    }

    public static function getSessionById($sid)
    {
        return (new Db())->getConn()->query("SELECT * FROM sessions WHERE id = '$sid'")->fetch_object();
    }
}