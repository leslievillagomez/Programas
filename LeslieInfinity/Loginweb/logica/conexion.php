<?php

$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "leon2023";
$db_name = "citas";


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

echo "Conexion a bd";
?>