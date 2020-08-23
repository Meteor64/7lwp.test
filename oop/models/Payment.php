<?php
require_once "../DB.php";

class Payment extends DB
{
    private $table;

    public function __construct($table)
    {
        $this->table = $table;
    }
}