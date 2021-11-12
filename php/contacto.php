<?php
require_once "connection.php";
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje']

$obj = new connection();
$con = $obj->connect();
$instruccion_sql = "INSERT INTO contacto (nombre, apellido, email, asunto) values ('($nombre)','($apellido)','($email)','($asunto)','($mensaje)'"
$result = $con->prepare($instruccion_sql);
$result->execute();

echo "Los datos del usuario {$nombre},{$apellido} fueron procesados satisfactoriamente"