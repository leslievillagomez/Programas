<?php
include('./recursos/header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login en Amarillo</title>
    
</head>
<body >
    <main>
    <div class="form_container">
        <div class="col s12 m5">
            <div>
                <div>
                <h1>Login en el Sistema</h1>
                <form   method="POST"  action="./logica/loguear.php">
                    <input type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
                        <br />
                    <input type="text" name="clave" placeholder="Contraseña" />
                        <br />
                    <div class="form-section">
                        <button type="submit" name="submit" class="btn-custom" >Iniciar Sesion</button>
                    </div>
                </form> 

                </div>
                <div class="form_section">
                    <br>
                        <br>
                        <a >¿No tienes cuenta? Regístrate aqui</a>
                        </br>
                    <form   method="POST"  action="./Registro.php">
                    <button type="submit" class="btn-custom">Registrate</button>
                    </form>
                    </br>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
<?php
include('./recursos/footer.php');
?>