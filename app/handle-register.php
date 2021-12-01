<?php


//Request Type : Post Request 
if($_SERVER['REQUEST_METHOD']=='POST'){

// Legal Button
if(isset($_POST['submit']) and !empty($_POST)){

$name = post('name');
#echo $name;

$email = post('email');
#echo $email;

$password = post('password');
#echo $password;

$mobile = post('mobile');
#echo $mobile;

$country = post('country');
#echo $country;

$gender = post('gender');
#echo $gender;

//Validation Rules

//Database Connectivity
// Data will be store inside, 
// Database ---> Tables 
// Create the Table




}else{
	header("Location:register.php?status=Invalid-Request");
}

}else{
	header("Location:register.php?status=Invalid-Request");
}














?>






