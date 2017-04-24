<?php 

require_once('../lib/pdf/mpdf.php');

$conn = new mysqli('localhost', 'root','', 'informatica');

/*WHERE campo BETWEEN 'fecha_inicial' AND 'fecha_final'*/
$query = "SELECT * FROM reportes WHERE estado = 'terminado'  ";
$prepare = $conn->prepare($query);
$prepare->execute();
$resultSet = $prepare->get_result();
while ($productos[] = $resultSet->fetch_array()); 
$resultSet->close();
$prepare->close();
$conn->close();
/*
print_r($productos);
die();*/
/*
include "conecta.php";
$sql1= "select * from reportes  WHERE estado='Pendiente'   ORDER BY id_reporte DESC";
function obtenerNombreTecnico($idTecnico,$con){
	$sql=$con->query("SELECT nombre FROM tecnicos WHERE id_tecnico=".$idTecnico);
	$datos=$sql->fetch_array();
	return $datos["nombre"];
    $query = $con->query($sql1);
}*/
$html ='<header class="clearfix">
      <div id="logo">
        <img src="../../recursos/img/logo.png">

    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Area</th>
            <th class="desc">Fecha</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Problema</th>
            <th>Reporta</th>
            <th>Observaciones</th>
            <th>Tecnico</th>
          </tr>
        </thead>
        <tbody>';
        foreach ($productos as $producto) {
        	$html .= ' <tr>
            <td class="service">'.$producto['id_area'].'</td>
            <td class="desc">'.$producto['fecha'].'</td>
            <td class="unit">'.$producto['tipo'].'</td>
            <td class="qty">'.$producto['marca'].'</td>
            <td class="qty">'.$producto['modelo'].'</td>
            <td class="qty">'.$producto['problema'].'</td>
            <td class="qty">'.$producto['reporta'].'</td>
            <td class="qty">'.$producto['observaciones'].'</td>
            <td class="qty">'.$producto['id_tecnico'].'</td>
          </tr>';
        }
        $html .= '<tr>

          
  
        </tbody>
      </table>
      <div id="notices">
        <div>Reporte de la:</div>
        <div class="notice">Dirección de informatica H. Ayuntamiento de Tulum</div>
      </div>
    </main>';
$mpdf = new mPDF('c', 'A4-L');
$css = file_get_contents('css/style.css');
$mpdf->writeHTML($css,1);
$mpdf->writeHTML($html);
$mpdf->Output('reporte.pdf','I');


 ?>