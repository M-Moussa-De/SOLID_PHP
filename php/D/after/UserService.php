<?php

class UserService
{
    private $dao;

    public function __construct(IDataAccessObject $dao)
    {
        $this->dao = $dao;
    }

    public function saveUser()
    {
        $this->dao->save();
    }
}

// opt 1
$userService = new UserService(new MySQLDB());

// opt 2
$userService = new UserService(new MongoDB());

$userService->saveUser();
