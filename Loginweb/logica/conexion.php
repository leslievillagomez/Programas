<?php
//2019
//170 000 km 
// trax

// $host_db = "localhost";
// $user_db = "id20310581_aaronico";
// $pass_db = "Hw\&J=21JXiLsZ~<";
// $db_name = "id20310581_test_php";
$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "leon2023";
$db_name = "citas";


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>