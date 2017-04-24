<?php

$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

if(empty($usuario) || empty($pass)){
	header("Location: index.html");
	exit();
}

/*mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());
mysql_select_db('informatica') or die ("Error al seleccionar la Base de datos: " . mysql_error());
*/

include("conecta.php");

$result = mysqli_query("SELECT * from usuarios where Username='" . $usuario . "'");

if($row = mysqli_fetch_array($result)){
	if($row['Password'] ==  $pass){
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: contenido.php");
	}else{
		header("Location: contenido.php");
		exit();
	}
}else{
	header("Location: login.php");
	exit();
}

echo $result;
?>