<?php

$donot_scan[] = 'env.php';
$donot_scan[] = 'routes.php';

$ENV = include_once __DIR__.'/config/env.php';
$config = scandir(__DIR__.'/config/');

unset($config[0],$config[1]);

foreach ($config as $index => $config_file) {

	if(!in_array($config_file, $donot_scan)){
		include_once __DIR__.'/config/'.$config_file;
	}
	
}





