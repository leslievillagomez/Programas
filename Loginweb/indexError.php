<?php
include('recursos/header.php');
?>
<link rel="stylesheet" href="recursos/estilos.css">

<div  class="form-container">
    <h1>Login Error</h1>
    <h3>Datos incorrectos. Intentalo de nuevo</h3>
        <form method="POST" action="logica/loguear.php">

            <input type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
            <br />
            <input type="text" name="clave" placeholder="Contraseña" />
            <br />
            <div class="form-section">
                        <button type="submit" name="submit" class="btn-custom" >Iniciar Sesion</button>
            </div>

        </form>
    
</div>
<?php
include('recursos/footer.php');
?>