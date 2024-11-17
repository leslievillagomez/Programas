<?php
/*$host_db="127.0.0.1:3308";
$user_db="root";
$pass_db="123456";
$db_name="test_php";*/

$host_db="sql310.infinityfree.com";
$user_db="if0_37364489";
$pass_db="coYnNguWsDB7Ss";
$db_name="if0_37364489_aaron_php";
echo $host_db


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
} else {
    echo"<h2 style='color: greenyellow; text-align: center;'>Hola, tu conexión está funcionando.</h2>";
}


?>