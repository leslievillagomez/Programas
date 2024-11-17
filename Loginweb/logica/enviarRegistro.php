<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../recursos/estilos.css">
    <link rel="shortcut icon" href="../recursos/favicon.png" type="image/x-icon">
    <title>Document</title>

</head>
<body>
    <div class="wrapper">
<header>
        <!-- Contenedor principal del header -->
        <div class="header-container">
            <!-- Logo -->
            <div class="header-logo">
                <a href="index.php">
                    <img src="../recursos/pac.png" alt="Logo" class="logo-img">
                </a>
            </div>

            <!-- Menú de navegación -->
            <div class="header-nav">
                <div class="nav-item"><a href="index.php">Inicio</a></div>
                <div class="nav-item"><a href="Registro.php">Registrate</a></div>
                <div class="nav-item"><a href="contacto.php">Contacto</a></div>
                <div class="nav-item"><a href="faq.php">Preguntas Frecuentes</a></div>

            </div>
        </div>
    </header>
    </div class="wrapper">


<?php

include "./conexion.php";
mysqli_set_charset($conexion,'utf8');
$no_cuenta=$_POST['no_cuenta'];
//el primero es 
$buscarusuario="SELECT * FROM  registro WHERE no_cuenta ='$no_cuenta'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo"<h3>El usuario ya existe</h3>";
    echo"<p>.</p>";
    echo "<a href='../Registro.php' class='btn-custom'>Nuevo registro</a>";
    echo"<p>.</p>";
}else{
    mysqli_query($conexion,"INSERT INTO registro(
        nombre,estado,no_cuenta,direccion,telefono,email,password)
        VALUES(
            '$_POST[nombre]',
            '$_POST[estado]',
            '$_POST[no_cuenta]',
            '$_POST[direccion]',
            '$_POST[telefono]',
            '$_POST[email]',
            '$_POST[password]'
        )");
        echo"<p>.</p>";
        echo "<br> <h3>Usuario creado con exito</h3>";
        echo"<p>.</p>";
        echo "<a href='../Registro.php' class='btn-custom'>Nuevo registro</a>";
        echo"<p>.</p>";
        echo "<a href='../Principal.php' class='btn-custom'>Ver registro</a>";
        echo"<p>.</p>";
}
?>


<footer>
    <div class="footer-content">
    <img src="../recursos/pac.png" alt="logo" class="imagen-derecha">
        <p>&copy; <?php echo date("Y"); ?> Login Web. Todos los derechos reservados.</p>
        <nav class="footer-links">
            <ul>
           <ol> <a href="about.php">Sobre Nosotros</a></ol>
           <ol><a href="privacidad.php">Política de Privacidad</a></ol>
           <ol><a href="contacto.php">Contacto</a></ol>
           <ol><a href="faq.php">Preguntas Frecuentes</a></ol>
            </ul>
        </nav>
    </div>
    <p>.</p>
    <p>.</p>
    <p>.</p>
</footer>
</body>
</html>