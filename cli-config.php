<?php

include 'vendor/autoload.php';
$di = require 'service_manager.php';

$entityManager = $di['doctrine']();

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);