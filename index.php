<?php
echo "hello";
//include('incluirbd.php');
include('function.php');
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
		<?php
			//session_start();
			/*if(isset($_POST['registo'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				//pedido bd
				$query = "SELECT * FROM CLIENTE WHERE username = '".$username."' AND password = '".$password."'";
				$info = mysql_query($query);
				$numero_de_linhas = mysql_num_rows($info);
				
				/*if("numero_de_linhas == 1"){
					$Fetch = mysql_fetch_array($info);
					$user=$Fetch['username'];
					$_SESSION['User']=$user;
					echo '<span style="color:#019AFF; text-align:center;">LogIn efectuado!</span>';
					echo '<meta http-equiv="refresh" contente="1;URL=index.php?username='.$user.'">';
					echo $name;
					echo "Nao efectuado!".mysql_error();
				}
			}*/
			?>
	</body>
</html>
	