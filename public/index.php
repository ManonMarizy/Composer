<?php
require_once __DIR__ . '/../vendor/autoload.php';

$txt = new App\Wcs\Hello();

echo $txt->talk();