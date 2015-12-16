<?php 

// Included for stand alone use.
include('autoload.php');
date_default_timezone_set('America/New_York');

use PHPIntegrator\Controllers\PersonController;

use DateTime;

$controller = new PersonController();

$person = $controller->createPerson('John', 'Doe', new DateTime('2015-01-01'));

print_r($person);

echo $person->getFullname();


?>
