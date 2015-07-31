<?php

require __DIR__.'../vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application('Fossil', '2.0.0');
$application->run();
