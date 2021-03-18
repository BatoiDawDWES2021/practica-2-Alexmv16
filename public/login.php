<?php

require_once('../config/usuaris.php');
require_once dirname(__FILE__) . "/../helpers/myHelpers.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){  
	$usu = login($usuaris,$_POST['usuario'], $_POST['clave']);
	if($usu==false){
		$err = true;
		$usuario = $_POST['usuario'];
	}else{	
	     session_start();
		$_SESSION['usuario'] = $_POST['usuario'];
        header("Location: index.php");
     
	}	
}

require_once('../templates/cabecera.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>		
		<meta charset = "UTF-8">
	</head>
	<body>	
		<?php if(isset($_GET["redirigido"])){
			echo "<p>Haga login para continuar</p>";
		}?>
		<?php if(isset($err) and $err == true){
			echo "<p>Usuario o contraseña incorrectos</p>";
		}?>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			Usuario: 
			<input value = "<?php if(isset($usuario))echo $usuario;?>"
			id = "usuario" name = "usuario" type = "text">							
			Clave :			
			<input id = "clave" name = "clave" type = "password">
			<input type = "submit">
		</form>
	</body>
</html>