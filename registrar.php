<?php

include("con_db.php");

if (isset($_POST['register'])) {
	if (
		strlen($_POST['cod_asesor']) >= 1 && strlen($_POST['numero_cliente']) >= 1
		&& strlen($_POST['tipo_negocio']) >= 1
		&& strlen($_POST['observaciones']) >= 1
	) {
		$cod_asesor = trim($_POST['cod_asesor']);
		$numero_cliente = trim($_POST['numero_cliente']);
		$tipo_negocio = trim($_POST['tipo_negocio']);
		$observaciones = trim($_POST['observaciones']);


		$fecha = date("d/m/y");



		$query = mysqli_query($conex, "SELECT * FROM asesores WHERE numero_cliente ='$numero_cliente'");
		$result = mysqli_fetch_array($query);
		if ($result > 0) {
			$alerta = '<h3 class="bad"> El número ya existe.</h3>';
		} else {


			$consulta = "INSERT INTO asesores (cod_asesor, numero_cliente, tipo_negocio, observaciones, `fecha`) VALUES ('$cod_asesor','$numero_cliente','$tipo_negocio','$observaciones','$fecha')";
			$resultado = mysqli_query($conex, $consulta);
			if ($resultado) {

				$alerta = "<h3 class='ok'>¡Se guardo correctamente!</h3>";
			} else {

				$alerta = "<h3 class='bad'>¡ocurrio un error!</h3>";
			}
		}
	} else {

		$alerta = "<h3 class='bad'>Llene los campos!</h3>";
	}
}
