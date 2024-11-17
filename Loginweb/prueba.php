<?php
// Incluir archivo de conexión a la base de datos
require 'logica/conexion.php';

// Obtener los datos enviados del formulario
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$no_cuenta = $_POST['no_cuenta'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];

// Comprobar si la cuenta ya existe en la base de datos
$query = "SELECT * FROM registro WHERE no_cuenta = '$no_cuenta'";
$result = mysqli_query($conexion, $query);

// Verificar si ya existe la cuenta
if (mysqli_num_rows($result) > 0) {
    // Si la cuenta ya existe, redirigir a error.php
    header("Location: index.php");
    exit();
} else {
    // Si la cuenta no existe, proceder con el registro
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Seguridad de la contraseña

    // Insertar los datos del nuevo usuario
    $insert_query = "INSERT INTO registro (nombre, estado, email, no_cuenta, direccion, telefono, password) 
                     VALUES ('$nombre', '$estado', '$email', '$no_cuenta', '$direccion', '$telefono', '$hashed_password')";
    
    if (mysqli_query($conexion, $insert_query)) {
        // Redirigir al inicio de sesión o página de éxito
        header("Location: index.php"); // Redirige a una página de éxito si lo prefieres
        exit();
    } else {
        // Si hay algún error al insertar
        echo "Error: " . mysqli_error($conexion);
    }
}

// Cerrar conexión
mysqli_close($conexion);
?>
