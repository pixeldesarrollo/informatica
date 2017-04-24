<?php  
include "conecta.php";

/*$query="SELECT * FROM areas";
$res=mysqli_query($query);

*/
/*$sql = "SELECT * FROM areas";
$result = $con->query($sql);*/

$sql1= "select * from areas";
$query = $con->query($sql1);

?>
<form>
Selecciona
<select name="valor">
<option selected>Elige</option>
<?php while ($r=$query->fetch_array()):?>
<option value="<?php echo $r['nombre']?>"><?php echo $r['nombre'];  ?> 
</option>
<?php endwhile;?>


</select>
