<?php
include "conecta.php";

$id_area = $_POST['id']; 
$nombre = trim(htmlentities($_POST['nombre'],ENT_NOQUOTES, "utf-8"));
$director = trim(htmlentities($_POST['director'],ENT_NOQUOTES, "utf-8"));
$telefono = trim(htmlentities($_POST['telefono'],ENT_NOQUOTES, "utf-8")); 
$correo = trim(htmlentities($_POST['correo'],ENT_NOQUOTES, "utf-8"));
$ubicacion = trim(htmlentities($_POST['ubicacion'],ENT_NOQUOTES, "utf-8"));
 echo "$id_area"; 

			
			$sql = " update areas set  nombre='$nombre',director='$director',telefono='$telefono',correo='$correo',ubicacion='$ubicacion' where id_area=".$_POST["id"];
			$query = $con->query($sql);
						if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='ver_areas.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='ver_areas.php';</script>";

			}		
			/*

$sql = "update areas set nombre= trim(htmlentities\"$_POST[nombre]\"),
						director=\"$_POST[director]\",
						telefono=\"$_POST[telefono]\",
						correo=\"$_POST[correo]\",
						ubicacion=\"$_POST[ubicacion]\" 
			where id_area=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='ver_areas.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='ver_areas.php';</script>";

			}			
*/
?>