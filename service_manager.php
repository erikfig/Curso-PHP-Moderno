<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

return [
	'doctrine'=> function () {

		$paths = array("src/App/Entities");
		$isDevMode = false;

		$dbParams = 
			array 
				(
					'host'=>'dev.local',
					'driver' => 'pdo_mysql',
					'user' => 'root',
					'password' => '123',
					'dbname' => 'novatec'
				);

		$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
		return EntityManager::create($dbParams, $config);
	},
	'twig'=> function () {
		$options = [];
		$twig = new \Twig_Environment(
			new \Twig_Loader_Filesystem(__DIR__.'/view'),
			$options
		);
		$view = new Novatec\Mvc\View\Twig($twig);
		return $view;
	},
	'router'=> function () {
		$router_factory = new Aura\Router\RouterFactory;
		$router = $router_factory->newInstance();

		$router->add(null, '/{controller}{/action}');

		// get the incoming request URL path
		$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

		// get the route based on the path and server
		$route = $router->match($path, $_SERVER);

		if (! $route) {
		    // no route object was returned
		    echo "No application route was found for that URL path.";
		    exit();
		}

		return $route;
	}
];