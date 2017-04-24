<html>
    <head>
        <title>Guardar area</title>
        <meta http-equiv="Refresh" content="3;url=crear_area.php">
    </head>
    <body>
    </body>
</html>
<?php 

$problema =trim(htmlentities($_POST['problema'],ENT_NOQUOTES, "utf-8"));

include ('conecta.php');

$insertar = "INSERT INTO problemas (problema) VALUES ('$problema')";
$ejecutar = mysqli_query($con, $insertar);
if ($ejecutar) {
	print "<script>alert(\"Guardado exitosamente.\");window.location='crear_problema.php';</script>";
} else{
	print "<script>alert(\"No se pudo Guardar.\");window.locatio6n='crear_problema.php';</script>";
}
?>