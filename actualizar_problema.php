<?php
include "conecta.php";

$id_problema = $_POST['id']; 
$problema = trim(htmlentities($_POST['problema'],ENT_NOQUOTES, "utf-8"));

			
			$sql = " update problemas set problema='$problema' where id_problema=".$_POST["id"];
			$query = $con->query($sql);
						if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='ver_problemas.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='ver_problemas.php';</script>";

			}


/*
$sql = "update problemas set problema=\"$_POST[problema]\" 
			where id_problema=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='ver_problemas.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='ver_problemas.php';</script>";

			}			
*/
?>