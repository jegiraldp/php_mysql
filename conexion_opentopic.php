<?php
class conexion_opentopic{
	
static function conectar(){

$mysqli = new mysqli("localhost", "jorge", "jorge123", "journal");
if ($mysqli->connect_errno) {
    echo "Error de conexión";
}
print ("Conectado<br/>");
return $mysqli;
}

}//class
conexion_opentopic::conectar();

?>