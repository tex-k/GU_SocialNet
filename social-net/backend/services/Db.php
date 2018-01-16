<?php

namespace app\backend\services;

use mysqli;

class Db
{
    public function getConn()
    {
        return new mysqli('localhost', 'aleksey', '1234', 'gu-social-net');
    }


}