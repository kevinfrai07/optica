<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="imagenes/logos/2.jpg">
	<link rel="stylesheet" href="diseno/css/styles.css">
	<link rel="stylesheet" href="diseno/fontawesome/css/all.css">
	<?php 
		date_default_timezone_set('America/Bogota');
	require_once 'diseno/estilos.php';
	?>
	
	

	<meta charset="UTF-8">
	<title>Óptica</title>
	


</head>
<body class="">
	<div class="container-fluid" ><!-- este container termina hasta el final-->
		<div class="row" >
			<div class="col-sm-4 color-container "><!--inicio del recuadro imagenes-->
				<img src="imagenes/logos/logo.jpg" class="card-img-top">
				<div class="container">
					<div class="row my-2" id="">
						<?php for ($i=0; $i < 7; $i++) { 
							?>
							<div class="col-sm-6 my-1">
								<img src="imagenes/logos/img1.jpg" alt="" class="img-izq">
							</div>
							<div class="col-sm-6 my-1">
								<img src="imagenes/logos/img1.jpg" alt="" class="img-izq">
							</div>
						<?php } ?>
					</div>
				</div><!--termina la parte de las imagenes-->
			</div>
			<!--inica el fromulario -->
			<div class="col-md-8">
				<h2 class="text-center">Relizar pedido</h2>
				<!--boton ayuda-->
				<div class="float-right btnup" style="min-width: 174px; margin-top: -46px !important;">
					<button type="button" class="btn" data-toggle="modal" data-target="#ayuda">
						<img class="imgayuda" src="imagenes/logos/ayuda.png" alt="">
					</button>
					<a href="paginas/ver_datos.php">
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#buscar">
							Buscar <i class="fas fa-search"></i>
						</button>
					</a>
				</div>

				<form action="controlador/insert_todo.php" method="POST" class="color-container-der">
					<!--inicia el acordion-->
					<div class="accordion" id="accordionExample">
						<!--opcion 1 ------->
						<div class="card">
							<div class="card-header" id="headingOne">
								<h3 class="mb-0">
									<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Datos esenciales
									</button>
								</h3>
							</div>
							<!--termina el primer boton-->
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="container-fluid" id="color-container-acordeon">
									<div class="form-row">
										<div class="form-group col-md-2">
											<label for="">Fecha</label>
											<input type="text" name="" class="form-control" value="<?php echo date('o-m-d'); ?>" disabled="">
										</div>
										<div class="form-group col-md-2">
											<label for="">Hora*</label>
											<input type="text"  class="form-control" disabled="" value="<?php echo date('h:i:s a'); ?>">
										</div>
										<div class="form-group col-md-3">
											<label for="">Digilenciador*</label>
											<input type="text" name="diligenciador" class="form-control" placeholder="Digilenciador" required="">
										</div>

										<div class="form-group col-md-3">
											<label for="">Comprador*</label>
											<input type="text" class="form-control" name="comprador" required="" placeholder="Comprador">

										</div>

										<div class="form-group col-md-2">
											<label for="inputPassword4">Empresa*</label>
											<input type="text" class="form-control" name="empresa" required="" placeholder="Empresa">
										</div>
										<div class="form-group col-md-2">
											<label for="">Ciudad*</label>
											<input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
										</div>
										<div class="form-group col-md-3">
											<label for="">Dirección*</label>
											<input type="text" class="form-control"  name="direccion" required="" placeholder="Dirección">
										</div>

										<div class="form-group col-md-4">
											<label for="">Correo electrónico*</label>
											<input type="email" class="form-control"  name="correo" required="" placeholder="Correo electrónico">
										</div>

										<div class="form-group col-md-3">
											<label for="">Teléfono*</label>
											<input type="text" class="form-control" name="telefono" required="" placeholder="Teléfono">
										</div>
									</div>
								</div>
							</div>

							<!---------------------------------------------------- formula --------------------------------------------------------->
							<div class="card">
								<!--segundo boton-->
								<div class="card-header" id="headingThree">
									<h3 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
										aria-expanded="false" aria-controls="collapseTwo">
										Fórmula
									</button>
								</h3>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="container-fluid" id="color-container-acordeon">
									<div class="form-row">
										<div class="form-group col-md-1">
											<label for="">ESF</label>
											<input type="number" name="esf1" class="form-control" placeholder="ESF" min="-10" max="10">
										</div>
										<div class="form-group col-md-1">
											<label for="inputEmail4">CIL</label>
											<input type="number" name="cil1" class="form-control" placeholder="CIL" min="-10" max="10">
										</div>
										<div class="form-group col-md-1">
											<label for="">EJE</label>
											<input type="number" name="eje1" class="form-control" placeholder="EJE" min="-10" max="10">
										</div>
										<div class="form-group col-md-1">
											<label for="">ADD</label>
											<input type="number" name="add1" class="form-control" placeholder="ADD" min="-10" max="10">
										</div>
										<div class="form-group col-md-8">
											<label for="">Tipo de lente </label>
											<select name="tipo_lente1" id="" class="form-control">
												<option selected="">Tipo de lente...</option>
												<option value="Progresivo blanco image">Progresivo blanco Image</option>
												<option value="Progresivo transition 8 generacion">Progresivo transition 8 Generación</option>
												<option value="Progresivo transltion 8 generacion">Bifocal flat top</option>
											</select>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-1">
											<input type="number" name="esf2" class="form-control" placeholder="ESF" min="-10" max="10">
										</div>
										<div class="form-group col-md-1">
											<input type="number" name="cil2" class="form-control" placeholder="CIL" min="-10" max="10">
										</div>
										<div class="form-group col-md-1">
											<input type="number" class="form-control" name="eje2" placeholder="EJE" min="-10" max="10">
										</div>
										<div class="form-group col-md-1">
											<input type="number" name="add2" class="form-control" placeholder="ADD" min="-10" max="10">
										</div>
										<div class="form-group col-md-8">
											<select name="tipo_lente2" class="form-control" id="">
												<option selected="">Tipo de lente</option>
												<option value="Progresivo blanco image">Progresivo blanco Image</option>
												<option value="Progresivo transition 8 generacion">Progresivo transition 8 Generación</option>
												<option value="Progresivo transltion 8 generacion">Bifocal flat top</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<!--termina el menu-->
							<div class="card">
								<!--tercer boton-->
								<div class="card-header" id="headingThree">
									<h3 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
										aria-expanded="false" aria-controls="collapseThree">
										Datos específicos y Datos de talla
									</button>
								</h3>
							</div>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="container-fluid" id="color-container-acordeon">
								<div class="row" style="font-size: 13px">
									<!--container unido 1  -->
									<div class="col-6">
										<div class="form-group">
											<div class="form-group col">
												<label for="">Filtro*</label>
												<select name="filtro" id="" class="form-control" required="">
													<option selected="">Elige el filtro</option>
													<option value="Verde">Verde</option>
													<option value="Azul">Azul</option>

												</select>
											</div>
											<div class="form-group col">
												<label for="">Montura*</label>
												<select name="montadura" id="" class="form-control" required="">
													<option selected="">Elige la montura</option>
													<option value="Abierta">Abierta</option>
													<option value="Cerrada">Cerrada</option>
													<option value="Tres Piezas">Tres Piezas</option>
												</select>
											</div>
											<div class="form-group col">
												<label for="tipo_talla">Tipo de talla*</label>
												<select name="tipo_talla" id="" class="form-control" required="">
													<option selected="">Elige la talla</option>
													<option value="Convencional">Convencional</option>
													<option value="Digital">Digital</option>
												</select>
											</div>
										</div>
									</div>
									<!-- fin container unido 1 -->
									<!-- container unido 2     -->
									<div class="col-6" style="border-left-style: ridge; background-color: #e9ecef;opacity: 0.8">
										<div class="form-row">
											<div class="form-group col-md-3">
												<label for="">Horizontal</label>

												<input type="text" name="horizontal" class="form-control" placeholder="Horizontal">

												

											</div>
											<div class="form-group col-md-3">
												<label for="">Diagonal</label>
												<input type="text" name="diagonal" class="form-control" placeholder="Diagonal">
											</div>
											<div class="form-group col-md-3">
												<label for="">DNP</label>
												<input type="text" name="dnp" class="form-control" placeholder="DNP">
											</div>
											<div class="form-group col-md-3">
												<label for="">DV</label>
												<input type="text" name="dv" class="form-control" placeholder="DV">
											</div>
											<div class="form-group col-md-3">
												<label for="">Filtro</label>
												<input type="text" name="filtro2" class="form-control" placeholder="Filtro">
											</div>
											<div class="form-group col-md-3">
												<label for="">Vertical</label>
												<input type="text" name="vertical" class="form-control" placeholder="Vertical">
											</div>
											<div class="form-group col-md-3">
												<label for="">Puente</label>
												<input type="text" name="puente" class="form-control" placeholder="Puente">
											</div>
											<div class="form-group col-md-3">
												<label for="">Altura focal</label>
												<input type="text" name="altura_focal" class="form-control" placeholder="Altura focal">
											</div>



											<div class="form-group col-md-3">
												<label for="">DT</label>
												<input type="text" name="dt" class="form-control" placeholder="DT">
											</div>
											<div class="form-group col-md-3">
												<label for="">Color</label>
												<input type="text" name="color" class="form-control" placeholder="Color">
											</div>
											<div class="form-group col-md-3">
												<label for="">D.Trabajo</label>
												<input type="text" name="dtrabajo" class="form-control" placeholder="D.Trabajo">
											</div>
											<div class="form-group col-md-3">
												<label for="">PANT</label>
												<input type="text" name="pant" class="form-control" placeholder="PANT">
											</div>
										</div>
									</div>
									<!-- fin container unido 2 -->
								</div>
							</div>
						</div>
						<!--------------------------------- DATOS TALLA ---------------------------------------->

						<!--inician las observaciones-->
						<div class="card">
							<div class="card-header" id="headingFive">
								<h3 class="">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive"
									aria-expanded="false" aria-controls="collapseFive">Observaciones</button>
								</h3>
							</div>
						</div>
						<div id="collapseFive" class="collapse my-2" aria-labelledby="headingFive" data-parent="#accordionExample">
							<div class="container-fluid" id="color-container-acordeon">
								<select name="observaciones" id="" class="form-control">
									<option selected="">Elige las observaciones</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
								<br>
								<textarea name="otras_observaciones" id="" cols="10" rows="5" class="form-control" placeholder="Otras observaciones"></textarea>
							</div>
						</div>
					</div>
					<!-- boton de alerta -->
					<button type="button" class="imgenviar my-1 mx-auto" data-toggle="modal" data-target="#exampleModal">
						<img class="imgenviar" src="imagenes/logos/enviar.png" alt="">
					</button>
				</div>
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h2 class="text-center">Alerta!</h2>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<h3 class="text-center">Desea Enviar el Formulario</h3>
							</div>
							<div class="modal-footer">
								<input type="submit" name="btnEnviar" value="Aceptar" class="btn btn-primary" >
								<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

							</div>
						</div>
					</div>
				</div><!--termina cuerpo boton alerta-->
			</form><!--termina el unico form-->
		</div>
	</div>
</div>
</body>
</html>
<script>
	$(document).ready(function($){
		var ventana_alto = $(window).height();
		var ventana_ancho = $(window).width();
		var width_modal=ventana_ancho-100;
		var height_der =ventana_alto-55;
		$('.color-container-der').css('height',height_der+'px');
		$('.color-container').css('height',ventana_alto+'px');
		$('#prueba').css('height',height_der+'px');
		$('#contenedor-modal').css('width',width_modal+'px');

	});
</script>


<!-- cuerpo del boton ayuda -->
<div class="modal fade" id="ayuda" tabindex="-1" role="dialog" aria-labelledby="ayuda" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<img src="imagenes/logos/glosario.png" class="img-fluid rounded mx-auto d-block" style="width: 95.3%;" alt="">
	</div>
</div>
<!--termina cuerpo boton alerta-->
<!-- cuerpo del boton alerta -->
