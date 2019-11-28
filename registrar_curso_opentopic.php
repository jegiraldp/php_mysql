<?php
//include_once("conexion_opentopic.php");
//$con=conexion_opentopic::conectar();

$nom=$_POST['txtNombreCurso'];
$nc=strtolower($nom);
$ncc=$_POST['txtNombreCreador'];
$cc=$_POST['txtCorreoCreador'];
$d=$_POST['txtDescripcion'];
$letra=substr($nc,0,1);
$f=date("m.d.Y"); // 26.06.19

$query= "insert into opentopic_curso (nombre,creador,correo,descripcion,letra,fecha) values 
('$nc','$ncc','$cc','$d','$letra','$letra')";
print $query."<br/>";

/*if($con->query($query)){
print "Registro Ok";	
}else{
	print "error";
}

mysqli_close($con);*/


?>