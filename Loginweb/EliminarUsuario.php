<?php

include('recursos/header.php');

session_start();
$no_cuenta = $_SESSION['username'];

if (!isset($no_cuenta)) {
    header("location: ./index.php");
    exit(); // Asegura que el script se detenga después de redirigir
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/estilos.css">
    <title>Eliminar</title>
</head>

<body>
<div class="form-container">
    <h1 style=" text-align: center;" >Eliminar Usuario</h1>
    <form style=" text-align: center;" method="POST" action="./logica/deleteUsuario.php">

        <input  type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
        <br />
        <div class="form-section">
            <button type="submit" name="submit" class="btn-custom" >Eliminar Usuario</button>
        </div>
    </form>
    <div class="form-section">
    <form   method="POST"  action="Principal.php">
                    <button type="submit" class="btn-custom">Lista Actualizada</button>
    </form>
</div>
</div>
</body>

</html>
<?php
include('recursos/footer.php');
?>