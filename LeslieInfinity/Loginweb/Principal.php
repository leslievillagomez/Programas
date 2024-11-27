<?php
include('./recursos/header.php');
session_start();


if (!isset($_SESSION['loggedin'])) {

    $_SESSION['redirect_to'] = $_SERVER['REQUEST_URI'];
    

    header('Location: ./index.php');
    exit();
}

$no_cuenta = $_SESSION['usermane']; // Número de cuenta del usuario
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./recursos/estilos.css">
</head>
<body>
<header>

</header>
<div class="container">
    <div>
        <div>
            <h3 class="center-align">Hola, tu cuenta es: <?php echo $no_cuenta; ?></h3>
        </div>
    </div>

    <?php
    // Requiere el archivo de conexión
    require "./logica/conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    // Genera el query
    $consulta_sql = "SELECT * FROM registro";
    $resultado = $conexion->query($consulta_sql);

    // Muestra los datos en una tabla
    if (mysqli_num_rows($resultado) > 0) {
        echo "<table class='highlight'>";
        echo "<tr>
        <th>Usuario</th>
        <th>No Cuenta</th>
        <th>Estado</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo Electronico</th>
        <th>Fecha de Registro</th>
    </tr>";

        // Muestra cada registro de la base de datos en una fila de la tabla
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
                echo"<td>". $row['nombre'] ."</td>";
                echo"<td>". $row['no_cuenta'] ."</td>";
                echo"<td>". $row['estado'] ."</td>";
                echo"<td>". $row['direccion'] ."</td>";
                echo"<td>". $row['telefono'] ."</td>";
                echo"<td>". $row['email'] ."</td>";
                echo"<td>". $row['fecha_registro'] ."</td>";
                echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<h2 class='center-align' style='color:red;'>Sin ningún registro</h2>";
    }
    ?>

    <div class="center-align">
    <br> <br> <br>
    <a href='./EliminarUsuario.php' class="btn btn-custom waves-effect waves-light">Eliminar Usuario</a>
        <a href='./Registro.php' class="btn btn-custom waves-effect waves-light">Nuevo Registro</a>
        <br><br>
        <a href='./logica/salir.php' class="btn btn-custom waves-effect waves-light">Salir 
        </a>
    </div>
    <br><br><br>
</div>

</body>
<br><br><br><br><br><br><br><br><br><br>
</html>
<?php include('./recursos/footer.php');?>
