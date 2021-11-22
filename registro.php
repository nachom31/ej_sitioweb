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

echo "All the information regarding {$asunto} sent from the Email direction {$email} were  succesfully proccesed"

?>