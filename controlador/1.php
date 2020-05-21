<?php 
	require_once("../controladores/crud_observaciones.php");

	if (isset($_POST['btnAceptar'])) {
		
		$fecha=$_POST['fecha'];
		$diagonal=$_POST['diagonal'];
		$dnp=$_POST['dnp'];
		$dv=$_POST['dv'];
		$filtro=$_POST['filtro'];
		$vertical=$_POST['vertical'];
		$puente=$_POST['puente'];
		$altura_focal=$_POST['altura_focal'];
		$dt=$_POST['dt'];
		$color=$_POST['color'];
		$dtrabajo=$_POST['dtrabajo'];
		$pant=$_POST['pant'];
		$observaciones=$_POST['observaciones'];
		$otras_observaciones=$_POST['otras_observaciones'];

		$val=new masDetalles();

		$validar=$val->agregarDetalles($fecha, $diagonal, $dnp, $dv, $filtro, $vertical, $puente, $altura_focal, $dt, $color, $dtrabajo, $pant, $observaciones, $otras_observaciones);
	}

 ?>