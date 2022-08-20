<?php
$nombre= $_POST['nombre'];
$clave= $_POST['clave'];
$conexion=mysqli_connect("localhost","root","","usuarios");

$consulta="select * from usu where usuario='$nombre' and clave='$clave'";

$resultado= mysqli_query($conexion,$consulta);

	if($resultado->num_rows>0) {
	header("location:contactenos.html");
}
else{
	echo "Error en Datos de Autenticación";
}

?>



