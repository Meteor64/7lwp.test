<?php
require_once "../DB.php";

class User extends DB
{
    private $table;

    public function __construct($table)
    {
        $this->table = $table;
    }


}

$obj = new User("users");
var_dump($obj);
$obj->find(1, ['name', 'email']);