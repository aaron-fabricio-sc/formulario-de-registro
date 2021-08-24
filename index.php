<?php
include("registrar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Registro cliente</title>
</head>

<body>
	<div class="container">
		<form method="post">
			<img src="./logo.png" width="250px" height="150px" alt="">
			<h1>Registro de clientes</h1>
			<div class="alert"><?php echo isset($alerta) ? $alerta : ''; ?></div>
			<label for="cod_asesor">Ingrese su código de asesor:</label>
			<input type="text" name="cod_asesor" placeholder="Ingrese su codigo de asesor" id="cod_asesor">
			<label for="numero_cliente">Ingrese el número del cliente:</label>

			<input type="text" name="numero_cliente" id="numero_cliente" placeholder="Ingrese su número del cliente">
			<label for="tipo_negocio">Especifique el tipo de negocio:</label>

			<input type="text" name="tipo_negocio" placeholder="Ingrese negocio del cliente" id="tipo_negocio">

			<label for="observaciones">Especifique las observaciones que tiene:</label>

			<textarea name="observaciones" id="observaciones" cols="30" rows="10" placeholder="observaciones"> </textarea>

			<input type="submit" name="register">

		</form>
	</div>

</body>

</html>