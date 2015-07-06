<?php
function addUser ($name,$pass,$email,$username) {
	//ver se o utilizador já existe
	$query = "select * from cliente where username='".$username."'";
	echo $query;
	$info = mysql_query("START TRANSACTION");
	$info = mysql_query($query);
	if (!$info ||  mysql_num_rows($info) >= 1 ) {
		$info = mysql_query("ROLLBACK");
		echo ("este utilizador já existe, escolha outro nome");
		return;
	} else {
		echo mysql_num_rows($info);
		$query = "INSERT INTO cliente ( `NOME`, `MORADA`, `TELEFONE`, `PASSWORD`, `MAIL`, `USERNAME`) VALUES ('".$name."', 'sfkjfksjfklsfjlfsjksf', '985938698639', '".$pass."', '".$email."', '".$username."')";
		$info = mysql_query($query);
		if ($info) {
			echo "adicionado com sucesso";
			$info = mysql_query("commit");
		} else {
			echo "upps";
			$info = mysql_query("roolback");
		}
	} 
}
?>