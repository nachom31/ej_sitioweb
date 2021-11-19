<?php
require_once "conection.php";
$asunto=$_POST['asunto'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$obj = new connection();
$con = $obj->connect();
$instruccion_sql = "INSERT INTO contacto (asunto, email, mensaje) 
values ('{$asunto}', '{$email}', '{$mensaje}')";
$result = $con->prepare($instruccion_sql);
$result->execute();

echo "Los datos del mensaje sobre {$asunto} enviados desde la direccion {$email} fueron procesados satisfactoriamente"

?>