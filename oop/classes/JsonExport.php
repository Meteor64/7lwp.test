<?php
require_once "oop/contracts/interfaces/CanExport.php";


class JsonExport implements CanExport
{

    public function export()
    {
        echo "data type is : JSON";

    }
}