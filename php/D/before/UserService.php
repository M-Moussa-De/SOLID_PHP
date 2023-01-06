<?php

class UserService
{
    private MySQLDB $mysql;

    public function __construct()
    {
        $this->mysql = new MySQLDB();
    }

    public function saveUser()
    {
        $this->mysql->save();
    }
}
