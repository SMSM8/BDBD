<?php 
session_start();
echo "funciona";
if ($_POST ['submeter'] && $_POST ['submeter']  == 'Submeter') {
	$nome =  mysql_escape_string($_POST['fname']);
	$pass = md5(mysql_escape_string($_POST['password']));
	$username = mysql_escape_string($_POST['username']);
	$email = mysql_escape_string($_POST['email']);
	addUser ($name, $pass, $email, $username) 

}
		/*$username = $_POST['username'];
	$password = $_POST['password'];
	echo $username;
	echo $password;*/

?>