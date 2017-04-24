<html>
<head>
<title>Guardamos los datos en la base de datos</title>
</head>
<body>
<?php

// Recibimos por POST los datos procedentes del formulario
$tipo = $_POST["tipo"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$servicio = $_POST["servicio"];
$observaciones = $_POST["observaciones"];

echo "$tipo" . '<br>';
echo "$marca" . '<br>';
echo "$modelo" . '<br>';
echo "$servicio" . '<br>';
echo "$observaciones" . '<br>';

include("conecta.php");
/*
mysql_query("insert into reporte (tipo,marca,modelo,servicio,observaciones) values ('$tipo', '$marca', $modelo', '$servicio', '$observaciones')");
*/
?>

</html>