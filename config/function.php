<?php
date_default_timezone_set("Asia/Kolkata");

function post($key=''){

	if($key==''){
		return $_POST;
	}else{
		return $_POST[$key];
	}
}


function get($key=''){

	if($key==''){
		return $_GET;
	}else{
		return $_GET[$key];
	}
}


function request($key=''){

	if($key==''){
		return $_REQUEST;
	}else{
		return $_REQUEST[$key];
	}
}



function prx($arg){

	echo '<pre>';
	
	var_dump($arg);

	echo '</pre>';
	exit;
}


function cur_date(){
	return date('Y-m-d');
}

function cur_time(){
	return date('H:i:s');
}

function now(){
	return date('Y-m-d H:i:s');
}