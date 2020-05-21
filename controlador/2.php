<?php 
	require_once ("../controladores/crud_basicos.php");

	if (isset($_POST['btnEnviar'])) {

		$fecha=$_POST['fecha'];
		$hora=$_POST['hora'];
		$diligenciador=$_POST['diligenciador'];
		$comprador=$_POST['comprador'];
		$empresa=$_POST['empresa'];
		$ciudad=$_POST['ciudad'];
		$direccion=$_POST['direccion'];
		$correo=$_POST['correo'];
		$telefono=$_POST['telefono'];

		$val=new datosBasicos();

		$validar=$val->insertarDatos($fecha, $hora, $diligenciador, $comprador, $empresa, $ciudad, $direccion, $correo, $telefono);
	}
 ?>