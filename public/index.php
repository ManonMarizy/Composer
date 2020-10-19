<?php
require_once __DIR__ . '/../src/Wcs/Hello.php';

$txt = new App\Wcs\Hello();

echo $txt->talk();