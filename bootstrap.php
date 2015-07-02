<?php

define ('DS', DIRECTORY_SEPARATOR);

include 'vendor'.DS.'autoload.php';
$di = require 'service_manager.php';

$controller = 'App\\Controllers\\IndexController';


$rote = $di['router']();
//var_dump($rote);
if (!empty($rote->params['controller']))
	$controller = 'App\\Controllers\\'.ucfirst($rote->params['controller']).'Controller';

$action = 'index';

if (!empty($rote->params['action']))
	$action = $rote->params['action'];


$controller = new $controller;
$controller->setView($di['twig']());
$controller->setDi($di);

$controller->$action();