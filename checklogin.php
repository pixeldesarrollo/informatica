<?php
session_start();
?>

<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "informatica";
$tbl_name = "usuarios_adm";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM $tbl_name WHERE nombre = '$username'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {     
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($password, $row['password'])) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
   /* $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
*/
    header("location: index-admin.php");

/*
    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 

*/
 } else { 
    echo "Bienvenido! " . $_SESSION['username'];
 	header("location: index.php");
   /*echo "Username o Password estan incorrectos.";
   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
*/

 }
 mysqli_close($conexion); 
 ?>