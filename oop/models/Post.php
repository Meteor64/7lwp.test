<?php
require_once "../DB.php";

class Post extends DB
{
    private $table;
    public function __construct($table)
    {
        $this->table = $table;
    }
}