<?php

$config = [
	'host'=> 'localhost',
	'port'=>'8080',
	'public_directory'=> 'public'
];

echo 'Servidor iniciado em '.$config['host'].':'.$config['port'].PHP_EOL;

$command = '"'.PHP_BINARY.'"';
$command .= ' -S '.$config['host'].':'.$config['port'];
$command .= ' -t "'.$config['public_directory'].'"/';
//$command .= ' router.php';

passthru($command);