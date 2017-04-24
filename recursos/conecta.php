<?php 

try{

$conexion = new PDO('mysql:host=localhost;dbname=informatica', 'root', '');
echo "Conecion ok";
} catch(PDOException $e){
echo "Error: " . $e->getMessage(); 

}

?>