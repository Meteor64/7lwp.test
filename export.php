<?php

require_once 'oop/classes/HtmlExport.php';
require_once 'oop/classes/XmlExport.php';
require_once 'oop/classes/JsonExport.php';

$export = "xml";
$handler = $export . "Export";
$handlerObj = new $handler;
echo $handlerObj->export();
