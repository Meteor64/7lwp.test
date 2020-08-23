<?php
require_once "oop/contracts/interfaces/CanExport.php";


class HtmlExport implements CanExport
{

    public function export()
    {
        echo "data type is : HTML";
    }
}