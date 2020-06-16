<?php
include_once("conexion_opentopic.php");
class listar_curso_opentopic{
	
static function ver(){

$con=conexion_opentopic::conectar();
$query= "select * from opentopic_curso";
$resultado = $con->query($query);
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    echo $fila['id']."-".$fila['descripcion']."<br/>";
}
mysqli_close($con);
}//ver
}//class
//<?php echo json_encode(array("name"=>"John","time"=>"2pm"));
?>