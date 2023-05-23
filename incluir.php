<?php
include 'conexion.php';

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$sexo=$_POST['sexo'];
$terminos=$_POST['terminos'];
$ins = $con -> query("INSERT INTO form(id,nombre,correo,sexo,terminos) VALUES ('','$nombre','$correo','$sexo','$terminos')");

if($ins){
	echo "Realizado el guardado";
}
else{
	echo "No cargo";
}
?>