<?php
include "conecta.php";

$id_tecnico = $_POST['id']; 
$nombre = trim(htmlentities($_POST['nombre'],ENT_NOQUOTES, "utf-8"));
$telefono = trim(htmlentities($_POST['telefono'],ENT_NOQUOTES, "utf-8"));
$correo = trim(htmlentities($_POST['correo'],ENT_NOQUOTES, "utf-8")); 

			
			$sql = " update tecnicos set  nombre='$nombre',telefono='$telefono',correo='$correo' where id_tecnico=".$_POST["id"];
			$query = $con->query($sql);
						if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='ver_tecnicos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='ver_tecnicos.php';</script>";

			}
/*
$sql = "update tecnicos set nombre=\"$_POST[nombre]\",telefono=\"$_POST[telefono]\",correo=\"$_POST[correo]\"
			where id_tecnico=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='ver_tecnicos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='ver_tecnicos.php';</script>";

			}			

*/
?>