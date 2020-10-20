<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet"  type="text/css" href="plantilla/css/estilos.css">
    
    <title>pregunta 1</title>
</head>
<body>
<h1>Universidad Mayor de San Andrés</h1>
    <div id="menu">
    		<div id="body">
		<p>LOGIN</p>
		<?php 
		$this->load->helper('url');
		 ?>
	</div>
    
    <img class="avatar" src="images/imagen.jpg"/>
    
    <form action="<?php echo site_url("Welcome/index2"); ?>" method="POST">
    
    <div>Iniciar Sesion</div>
    <label for="">Usuario</label>
    <input type="text" name="login" placeholder="ingrese usuario">
    <br>
    <label for="">Contraseña</label>
    <input type="password" name="clave" placeholder="ingrese contraseña">
    <br>
    <input type="submit" value="Ingresar" name="enviar" >
    </form>
    </div>
</body>
</html>