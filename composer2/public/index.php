<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;

$test = new Hello();

echo $test->talk();
 