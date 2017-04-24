<?php
include "conecta.php";

$id_reporte = $_POST['id'];
$tipo = trim(htmlentities($_POST['tipo'],ENT_NOQUOTES, "utf-8"));
$marca = trim(htmlentities($_POST['marca'],ENT_NOQUOTES, "utf-8"));
$modelo = trim(htmlentities($_POST['modelo'],ENT_NOQUOTES, "utf-8"));
$observaciones = trim(htmlentities($_POST['observaciones'],ENT_NOQUOTES, "utf-8"));
$estado= "Terminado"; 


			
			$sql = " update reportes set tipo='$tipo',marca='$marca',modelo='$modelo',observaciones='$observaciones', estado='$estado' where id_reporte=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Gracias Completado exitosamente.\");window.location='ver_reportes.php';</script>";
			}else{
				print "<script>alert(\"No se pudo Completar.\");window.location='ver_reportes.php';</script>";

			}			

/*
$sql = "update reportes set tipo=\"$_POST[tipo]\",marca=\"$_POST[marca]\",modelo=\"$_POST[modelo]\",observaciones=\"$_POST[observaciones]\",estado=\"$_POST[estado]\" 
			where id_reporte=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='ver_reportes.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='ver_reportes.php';</script>";

			}			

*/
?>