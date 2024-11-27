<?php
include('./recursos/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intento Fallido</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.">
    <link rel="stylesheet" href="./recursos/estilos.css">
</head>
<body>
    <h1>Hubo un error, intenta de nuevo</h1>
    <div class="form-container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div>
                    <div>
                        <form method="POST" action="logica/loguear.php">
                        <div class="input-field">
                        <label for="email">No de cuenta</label>
                            <input id="no_cuenta" type="text" name="no_cuenta" required>
                            
                        </div>
                        <div class="input-field">
                        <label for="clave">Contraseña</label>
                            <input id="clave" type="password" name="clave" req>
                            
                        </div>
                        <div class="center-align">
                            <button type="submit" class="btn-custom">Iniciar Sesión</>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

  
   
</body>
</html>
<?php
include('./recursos/footer.php');
?>