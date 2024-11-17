<?php
session_start();
$no_cuenta= $_SESSION['username'];//413112576
include('recursos/header.php');

if(!isset($no_cuenta)){

        header("location: ./index.php");
}else{
    
    echo "<h1> Bienvenido no. $no_cuenta </h1> ";

    echo "<a href='logica/salir.php' class='btn-custom'>Salir</a>";

    

    // se usa el requiere para si psi se necesita el archivo conexion
require "./logica/conexion.php";
mysqli_set_charset($conexion,'utf8');

//genear el query
$consulta_sql="SELECT * FROM registro";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 
echo "<table border='2' >
    <tr>
        <th>Usuario</th>
        <th>No Cuenta</th>
        <th>Estado</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo Electronico</th>
        <th>Fecha de Registro</th>
    </tr>";

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
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

}else{
    
    echo " <h1 style='color:red' >Sin Ningun registro</h1>";
 } 
  echo "
    <a href='EliminarUsuario.php' class='btn-custom'>Eliminar Usuario</a>";
    echo"<p>.</p>";
echo "<a href='Registro.php' class='btn-custom'>Registrate</a>";
echo"<p>.</p>";



}

include('recursos/footer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/estilos.css">
    <title>Document</title>
    
</head>
<body>

</body>
</html>