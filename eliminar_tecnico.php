<?php

if(!empty($_GET)){
			include "conecta.php";
			
			$sql = "DELETE FROM tecnicos WHERE id_tecnico=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='ver_tecnicos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='ver_tecnicos.php';</script>";

			}
}

?>