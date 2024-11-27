<?php
include('./recursos/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro en la DB</title>
    <!-- Importa Materialize CSS desde el CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.>
    <link rel="stylesheet" href="./estilos/estilosRegistro.css">
</head>
<header>
    Bienvenido, registrate.
</header>
<body>
    <main>
    <div >
        <div>
            <div>
                <div class=form-container>
                    <div >
                        <span class="card-title center-align">Registro en mi DB</span>
                        <form action="./logica/enviarRegistro.php" method="post">
                            <div class="input-field">
                            <label for="nombre">Nombre usuario:</label>
                <input type="text" name="nombre" required maxlength="100" placeholder="Ingresa tu Nombre">
                <br><br>
                <label for="estado">Estado:</label>
                <input type="text" name="estado" required maxlength="100" placeholder="Ingresa tu estacio civil">
                <br><br>
                <label for="email">Correo:</label>
                <input type="mail" name="email" required maxlength="100" placeholder="Ingresa tu correo">
                <br><br>
                <label for="no_cuenta">Numero de Cuenta:</label>
                <input type="text" name="no_cuenta" required maxlength="10" placeholder="Ingresa tu numero de cuenta">
                <br><br>
                <label for="direccion">Direccion:</label>
                <input type="text" name="direccion" required maxlength="100" placeholder="Ingresa tu direccion particular">
                <br><br>
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" required maxlength="8" placeholder="Ingresa tu telefono">
                <br><br>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" required maxlength="8" placeholder="Ingresa tu contraseña">
                <br><br>
                <div>
            </div>
            <div class="form-section">
             <button type="submit" name="submit" class="btn-custom" >Enviar registro</button>
             </div>
        </form>
    </div>

<div class="form-section">
    <form   method="POST"  action="./Registro.php">
                    <button type="submit" class="btn-custom">Registrate</button>
    </form>
</div>
<div class="form-section">
    <form   method="POST"  action="./index.php">
                    <button type="submit" class="btn-custom">Iniciar Sesion</button>
    </form>
</div>
</main>


<?php
include('./recursos/footer.php');
?>
</body>
</html>
