<?php

use Emil\Vildt1\Api;

date_default_timezone_set('Europe/Copenhagen');
require_once __DIR__ . '/../vendor/autoload.php';

$newapi = new Api();
echo $newapi->when() . "\n";
try {
    echo $newapi->getSevenDays() . "\n";
} catch (Exception $exception) {
    echo $exception->getMessage() . "\n";
}
