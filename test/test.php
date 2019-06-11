<?php

// Autoload files using the Composer autoloader.
require_once _DIR_ . '/../vendor/autoload.php';

use HelloWorld\Greetings;

echo Greetings::sayHelloWorld();
