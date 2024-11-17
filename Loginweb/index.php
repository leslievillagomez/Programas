<?php
include('recursos/header.php');
?>
<link rel="stylesheet" href="recursos/estilos.css">
<div class="form-container">
        <div   class="col s12 m5">
            <div>
                <h1>Login en el Sistema</h1>
                <form   method="POST"  action="logica/loguear.php">
                    <input type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
                        <br />
                    <input type="text" name="clave" placeholder="Contraseña" />
                        <br />
                    <div class="form-section">
                        <button type="submit" name="submit" class="btn-custom" >Iniciar Sesion</button>
                    </div>
                </form> 

                <div class="form-section">
                    <div>    
                        <h3>¿No tienes cuenta?</h3>
                        <p>.</p>
                    </div>
                    <form   method="POST"  action="Registro.php">
                    <button type="submit" class="btn-custom">Registrate</button>
                    </form>
                </div>
                </div>
            </div>
        </div>

   </div>
   </div>
  <div class="row">
   <?php
include('recursos/footer.php');
?>