<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;

$zach = new Hello();
echo $zach->talk();


use HelloWorld\SayHello;
echo '<br>';
echo SayHello::world();