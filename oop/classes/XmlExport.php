<?php
require_once "oop/contracts/interfaces/CanExport.php";

class XmlExport implements CanExport
{

    public function export()
    {
        echo "data type is : XML";
    }
}