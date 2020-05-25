<?php 
require_once "conexion.php";

	/**
	 * 
	 */
	class  datosBasicos extends conexion{
		
		function insertarDatos($fecha, $hora, $diligenciador, $comprador, $empresa, $ciudad, $direccion, $correo, $telefono, $esf1, $cil1, $eje1, $add1, $tipo_lente, $esf2, $cil2, $eje2, $add2, $tipo_lente2, $filtro, $montadura,$tipo_talla, $fecha1, $diagonal, $dnp, $dv, $filtro2, $vertical, $puente, $altura_focal, $dt, $color, $dtrabajo, $pant, $observaciones, $otras_observaciones){
			$sql=$this->conexion->query("INSERT INTO datos_basicos VALUES(null, '$fecha', '$hora', '$diligenciador', '$comprador', '$empresa', '$ciudad', '$direccion', '$correo', '$telefono')");
			$maxid1=$this->conexion->query("SELECT MAX(id_datos_basicos) as id_basicos FROM datos_basicos");
			$max=$maxid1->fetch_all(MYSQLI_ASSOC);
			$id_basicos=$max[0]['id_basicos'];			

			

			$sql2=$this->conexion->query("INSERT INTO formula_datos_especificos VALUES(null, '$esf1', '$cil1', '$eje1', '$add1', '$tipo_lente', '$esf2', '$cil2', '$eje2', '$add2', '$tipo_lente2', ' $filtro', '$montadura', '$tipo_talla')");

			$maxid2=$this->conexion->query("SELECT MAX(id_datos_especificos) as id_especificos FROM formula_datos_especificos");
			$max2=$maxid2->fetch_all(MYSQLI_ASSOC);
			$id_especificos=$max2[0]['id_especificos'];	

			$sql3=$this->conexion->query("INSERT INTO talla_observaciones VALUES (null, '$fecha1', '$diagonal', '$dnp', '$dv', '$filtro2', '$vertical', '$puente', '$altura_focal', '$dt', '$color', '$dtrabajo', '$pant', '$observaciones', '$otras_observaciones')");
			$maxid3=$this->conexion->query("SELECT MAX(id_observaciones) as id_observaciones FROM talla_observaciones");
			$max3=$maxid3->fetch_all(MYSQLI_ASSOC);
			$id_observaciones=$max3[0]['id_observaciones'];	
			
			

			$sql6=$this->conexion->query("INSERT INTO factura VALUES('$id_basicos', '$id_especificos', '$id_observaciones')");
			
			
			echo "exitoso";


			/*echo "<script >alert('Datos enviados con éxito');
					window.location='../index.php';
					</script>"; */


				}

				function mostrar_datos_basicos(){
					$sql4=$this->conexion->query("SELECT * FROM  datos_basicos");
					$req=$sql4->fetch_all(MYSQLI_ASSOC);

					return $req;
				}
				function mostrar_datos_basicos_id($id){
					$sql=$this->conexion->query("SELECT * FROM factura WHERE id_datos_basicos='$id'");
					$ids=$sql->fetch_all(MYSQLI_ASSOC);
					$id_datos_basicos=$ids[0]['id_datos_basicos'];
					$id_datos_especificos=$ids[0]['id_datos_especificos'];
					$id_observaciones=$ids[0]['id_observaciones'];

					$sql4=$this->conexion->query("SELECT db.*, fd.*, talla.* FROM datos_basicos as db, formula_datos_especificos as fd, talla_observaciones as talla WHERE db.id_datos_basicos = '$id_datos_basicos' and fd.id_datos_especificos = '$id_datos_especificos' and talla.id_observaciones='$id_observaciones'");
					$req=$sql4->fetch_all(MYSQLI_ASSOC);
					return $req;
				}



			}
			?>