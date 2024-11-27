<?php
include "./conexion.php";
mysqli_set_charset($conexion, 'utf8');
$nombreUser = $_POST['no_cuenta'];

$buscarusuario = "SELECT * FROM registro WHERE no_cuenta ='$nombreUser'";
$resultado = $conexion->query($buscarusuario);
$count = mysqli_num_rows($resultado);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../recursos/estilos.css">
</head>
<body>
<header>
        
        <div class="header-container">
           
            <div class="header-logo">
                <a href="index.php">
                    <img src="../recursos/pac.png" alt="Logo" class="logo-img">
                </a>
            </div>

            <div class="header-nav">
                <div class="nav-item"><a href="../index.php">Inicio</a></div>
                <div class="nav-item"><a href="../Registro.php">Registrate</a></div>
                <div class="nav-item"><a>Contacto</a></div>
                <div class="nav-item"><a>Preguntas Frecuentes</a></div>

            </div>
        </div>
    </header>
    <div class="container">
        <div class="card center-align">
            <?php if ($count == 1): ?>
                <h1>El usuario ya está registrado</h1>
                <a href="../Registro.php" class="link">Nuevo registro</a>
            <?php else: ?>
                <?php
                mysqli_query($conexion,"INSERT INTO registro(
                    nombre, estado, no_cuenta, direccion, telefono, email, password)
                    VALUES(
                        '$_POST[nombre]',
                        '$_POST[estado]',
                        '$_POST[no_cuenta]',
                        '$_POST[direccion]',
                        '$_POST[telefono]',
                        '$_POST[email]',
                        '$_POST[password]'
                    )");
                ?>
                <h1>Usuario creado con éxito</h1>
                <div>
                <a href="../Registro.php" class="btn btn-custom waves-effect waves-light">Nuevo registro</a>
                    <a href="../Principal.php" class="btn btn-custom waves-effect waves-light">Ver registros</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <footer>
    <div class="footer-content">
    <img src="../recursos/pac.png" alt="logo" class="imagen-derecha">
        <p>&copy; <?php echo date("Y"); ?> Login Web. Todos los derechos reservados.</p>
        <nav class="footer-links">
            <ul>
           <ol> <a>Sobre Nosotros</a></ol>
           <ol><a>Política de Privacidad</a></ol>
           <ol><a>Contacto</a></ol>
           <ol><a>Preguntas Frecuentes</a></ol>
            </ul>
        </nav>
    </div>
    <p>.</p>
    <p>.</p>
    <p>.</p>
</footer>
</body>
</html>

