
<meta http-equiv="refresh" content="2;ausr.php" />
<?php include("body.php");?>
<?php
 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "informatica";
 $tbl_name = "usuarios_adm";
 


 $form_pass = $_POST['password'];
 
 $hash = password_hash($form_pass, PASSWORD_BCRYPT); 

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM usuarios_adm
 WHERE nombre= '$_POST[username]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "<center><h2>El Nombre de Usuario ya existe.</h2>" . "</center>";
 /*echo "<a href='ausr.php'><center><h2>Clic aqui para escoger otro Nombre</h2></center></a>";
 */
 }
 else{

 $query = "INSERT INTO usuarios_adm (nombre, password)
           VALUES ('$_POST[username]', '$hash')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "<center>Usuario Creado Exitosamente!<center>" . "</h2>";
 echo "<h4>" . "<center>Bienvenido: <center>" . $_POST['username'] . "</h4>" . "\n\n";
 /*echo "<h5>" . "<center>Regresar:</center> " . "<center><a href='ausr.php'>Clic aqui</a></center>" . "</h5>"; 
 */
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>