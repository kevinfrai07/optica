<?php 
	
	require_once("../modelos/crud_basicos.php");

	if (isset($_POST['btnEnviar'])) {
		
		$fecha=date('yyyy-mm-dd');
		$hora=date('hh-mm-ss');
		$diligenciador=$_POST['diligenciador'];
		$comprador=$_POST['comprador'];
		$empresa=$_POST['empresa'];
		$ciudad=$_POST['ciudad'];
		$direccion=$_POST['direccion'];
		$correo=$_POST['correo'];
		$telefono=$_POST['telefono'];
		//terminan los primeros datos

		$esf1=$_POST['esf1'];
		$cil1=$_POST['cil1'];
		$eje1=$_POST['eje1'];
		$add1=$_POST['add1'];
		$tipo_lente=$_POST['tipo_lente1'];
		$esf2=$_POST['esf2'];
		$cil2=$_POST['cil2'];
		$eje2=$_POST['eje2'];
		$add2=$_POST['add2'];
		$tipo_lente2=$_POST['tipo_lente2'];
		$filtro=$_POST['filtro'];
		$montadura=$_POST['montadura'];
		$tipo_talla=$_POST['tipo_talla'];
		//terminan los segndos datos 

		$fecha1=$_POST['fecha1'];
		$diagonal=$_POST['diagonal'];
		$dnp=$_POST['dnp'];
		$dv=$_POST['dv'];
		$filtro2=$_POST['filtro2'];
		$vertical=$_POST['vertical'];
		$puente=$_POST['puente'];
		$altura_focal=$_POST['altura_focal'];
		$dt=$_POST['dt'];
		$color=$_POST['color'];
		$dtrabajo=$_POST['dtrabajo'];
		$pant=$_POST['pant'];
		$observaciones=$_POST['observaciones'];
		$otras_observaciones=$_POST['otras_observaciones'];
		//terminan los terceros datos

		//nombre de la clase
		$val=new datosBasicos();
		//nombre de la funcion 
		$validar=$val->insertarDatos($fecha, $hora, $diligenciador, $comprador, $empresa, $ciudad, $direccion, $correo, $telefono, $esf1, $cil1, $eje1, $add1, $tipo_lente, $esf2, $cil2, $eje2, $add2, $tipo_lente2, $filtro, $montadura,$tipo_talla, $fecha1, $diagonal, $dnp, $dv, $filtro2, $vertical, $puente, $altura_focal, $dt, $color, $dtrabajo, $pant, $observaciones, $otras_observaciones);
	}

 ?>