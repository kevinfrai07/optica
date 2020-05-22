<?php 
	require_once "conexion.php";

	/**
	 * 
	 */
	class  datosBasicos extends conexion
	{
		
		function insertarDatos($fecha, $hora, $diligenciador, $comprador, $empresa, $ciudad, $direccion, $correo, $telefono, $esf1, $cil1, $eje1, $add1, $tipo_lente, $esf2, $cil2, $eje2, $add2, $tipo_lente2, $filtro, $montadura,$tipo_talla, $fecha1, $diagonal, $dnp, $dv, $filtro2, $vertical, $puente, $altura_focal, $dt, $color, $dtrabajo, $pant, $observaciones, $otras_observaciones)


		{
			$sql=$this->conexion->query("INSERT INTO datos_basicos VALUES(null, '$fecha', '$hora', '$diligenciador', '$comprador', '$empresa', '$ciudad', '$direccion', '$correo', '$telefono')");
			$maxid1=$this->conexion->query("SELECT MAX(id_datos_basicos) AS id FROM datos_basicos )");
			$max=$maxid1->fetch_row(MYSQLI_ASSOC);
			return $max;

			var_dump($max);
			die();

			$sql2=$this->conexion->query("INSERT INTO formula_datos_especificos VALUES(null, '$esf1', '$cil1', '$eje1', '$add1', '$tipo_lente', '$esf2', '$cil2', '$eje2', '$add2', '$tipo_lente2', ' $filtro', '$montadura', '$tipo_talla')");

			$maxid2=$this->conexion->query("SELECT MAX(id_datos_basicos AS id FROM )");

			$sql3=$this->conexion->query("INSERT INTO talla_observaciones VALUES (null, '$fecha1', '$diagonal', '$dnp', '$dv', '$filtro2', '$vertical', '$puente', '$altura_focal', '$dt', '$color', '$dtrabajo', '$pant', '$observaciones', '$otras_observaciones')");
			$maxid3=$this->conexion->query("SELECT MAX(id_datos_basicos AS id FROM )");


			echo "<script >alert('Datos enviados con éxito');
					window.location='../index.php';
					</script>"; 

				
		}

		function mostrar_datos_basicos()
		{
			$sql4=$this->conexion->query("SELECT * FROM  datos_basicos");
			$req=$sql4->fetch_all(MYSQLI_ASSOC);

			return $req;
		}

		function mostrar_datos_especificos(){
			$sql4=$this->conexion->query("SELECT * FROM  formula_datos_especificos");
			$req=$sql4->fetch_all(MYSQLI_ASSOC);

			return $req;
		}
		


	}
 ?>