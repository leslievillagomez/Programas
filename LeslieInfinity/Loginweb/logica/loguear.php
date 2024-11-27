<?php
require './conexion.php';
session_start();

$no_cuenta = $_POST['no_cuenta'];
$clave = $_POST['clave'];

// Consulta para verificar las credenciales del usuario
$q = "SELECT COUNT(*) as contar FROM registro WHERE no_cuenta= '$no_cuenta' AND password = '$clave'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {
    
    $_SESSION['usermane'] = $no_cuenta;
    $_SESSION['loggedin'] = true; 

   
    if (isset($_SESSION['redirect_to'])) {
        $redirect_to = $_SESSION['redirect_to'];
        unset($_SESSION['redirect_to']);
        header("Location: $redirect_to"); 
    } else {
        header("Location: ../Principal.php"); 
    }
} else {
    header("Location: ../indexError.php"); 
}
exit(); 
?>
