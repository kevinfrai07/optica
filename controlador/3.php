<?php 
	
	require_once("../controladores/crud_formula.php");

	if (isset($_POST['btnConfirmar'])) {

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

		$val=new formula();

		$validar=$val->insertarFormula($esf1, $cil1, $eje1, $add1, $tipo_lente, $esf2, $cil2, $eje2, $add2, $tipo_lente2, $filtro, $montadura, $tipo_talla);
	}

 ?>