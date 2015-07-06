<?php
private function addUser ($name, $pass, $email, $username) {
	//ver se o utilizador já existe
	$query = "select * from cliente where username='".$name."'";
	$info = mysql_query("START TRANSACTION");
	$info = mysql_query($query);
	if (!$info ||  mysql_num_rows($info) >= 1 ) {
		$info = mysql_query("ROLLBACK");
		echo ("este utilizador já existe, escolha outro nome");
		return;
	} 
 	$query = "INSERT INTO user(username, password, create_time) VALUES ('".$nome."','".$pass."',now());";
 	//manda-se a query
 	//se correr bem  commit
 	// se não roolback
}
?>