<html>
    <head>
        <title>Guardar area</title>
       
    </head>
    <body>
    </body>
</html>
<?php 
header("Content-Type: text/html;charset=utf-8");
$nombre = trim(htmlentities($_POST['nombre'],ENT_NOQUOTES, "utf-8"));
$telefono = trim(htmlentities($_POST ['telefono'],ENT_NOQUOTES, "utf-8"));
$correo = trim(htmlentities($_POST ['correo'],ENT_NOQUOTES, "utf-8"));


include ('conecta.php');

$insertar = "INSERT INTO tecnicos (nombre, telefono, correo) VALUES ('$nombre', '$telefono', '$correo')";
$ejecutar = mysqli_query($con, $insertar);
if ($ejecutar) {
	print "<script>alert(\"Guardado exitosamente.\");window.location='crear_tecnico.php';</script>";
} else{
	print "<script>alert(\"No se pudo Guardar.\");window.location='crear_tecnico.php';</script>";

}
?>