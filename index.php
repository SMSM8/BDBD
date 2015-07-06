<?php
echo "hello";
include('incluirbd.php');
include('functions.php');
session_destroy();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		
		<title>Boa Fama 1975</title>
		<meta name="description" content="FCTUC,LDM,Base_de_Dados,Sérgio_Martins">
		<meta name="keywords" content="html5,css3,javascript,sql">
	</head>
	<body id="prioripag">
		<div id="formulario" class="fo">
			<form action="registo.php" method="POST" id="registo" name="registo">
				<input type="text" id="fname" placeholder="nome" name="fname">
				<input type="password" id="pass" placeholder="password" name="password">
				<input type="password" id="pass2" placeholder="re-type your password" name="repass">
				<input type="email" id="mail" placeholder="email" name="email">
				<input type="text" id="username" placeholder="username" name="username">
				<input type="submit" value="Submeter" id="submeter" name="submeter">
			</form>
		</div>	
		<!-- validação d.e campos-->
	</body>
</html>
	