<?php
include('./recursos/header.php');
session_start();

// Verifica si el usuario no ha iniciado sesión
if (!isset($_SESSION['loggedin'])) {
   
    $_SESSION['redirect_to'] = $_SERVER['REQUEST_URI'];
    
    // Redirige al usuario a la página de login
    header('Location: ./index.php');
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./recursos/estilos.css">
</head>
<header>
    <h3>Procede a eliminar</h3>
</header>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card">
                    <div>
                        <span class="card-title center-align">Eliminar Usuario</span>
                        <form method="POST" action="./logica/deleteUsuario.php">
                            <div class="input-field">
                                <input id="no_cuenta" type="text" name="no_cuenta" placeholder = "no_cuenta" required>
                                <label for="no_cuenta"></label>
                            </div>
                            <div class="center-align">
                                <button class="btn btn-custom waves-effect waves-light" type="submit">Eliminar usuario</button>
                                </div>
                        </form>
                    </div>
                    <div class="card-action center-align">
                       
                        <form   method="POST"  action="./Principal.php">
                    <button type="submit" class="btn-custom">LISTAS</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
    </div>

    
</body>
</html>
<?php
include('./recursos/footer.php');
?>
