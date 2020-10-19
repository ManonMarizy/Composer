<?php
require_once __DIR__ . '/../vendor/autoload.php';

$txt = new App\Wcs\Hello();
$txt2 = new \HelloWorld\SayHello();
echo $txt->talk() . "<br>";
echo $txt2->world();