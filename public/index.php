<?php
#echo 'This is Index.php';
$url = $_GET['url'];
echo '<br/>';
include dirname(__DIR__).'/server.php';
include dirname(__DIR__).'/config/routes.php';

if(isset($routes[$url])){

if(file_exists(dirname(__DIR__).'/app/'.$routes[$url])){
	include_once dirname(__DIR__).'/app/'.$routes[$url];
}else{
	include_once dirname(__DIR__).'/error.php';
}

}else{
	include_once dirname(__DIR__).'/app/'.DEFAULT_PAGE;
}







