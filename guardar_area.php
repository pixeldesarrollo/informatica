<html>
    <head>
        <title>Guardar area</title>
        <meta http-equiv="Refresh" content="3;url=crear_area.php">
    </head>
    <body>
    </body>
</html>
<?php 

$nombre = trim(htmlentities($_POST['nombre'],ENT_NOQUOTES, "utf-8"));
$director = trim(htmlentities($_POST ['director'],ENT_NOQUOTES, "utf-8"));
$telefono = trim(htmlentities($_POST ['telefono'],ENT_NOQUOTES, "utf-8"));
$correo = trim(htmlentities($_POST ['correo'],ENT_NOQUOTES, "utf-8"));
$ubicacion = trim(htmlentities($_POST ['ubicacion'],ENT_NOQUOTES, "utf-8"));

include ('conecta.php');

$insertar = "INSERT INTO areas (nombre, director, telefono, correo, ubicacion) VALUES ('$nombre', '$director', '$telefono', '$correo', '$ubicacion')";
$ejecutar = mysqli_query($con, $insertar);
if ($ejecutar) {
	print "<script>alert(\"Guardado exitosamente.\");window.location='crear_area.php';</script>";
} else{
	print "<script>alert(\"No se pudo Guardar.\");window.location='crear_area.php';</script>";

}
?>