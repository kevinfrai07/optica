<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="diseno/css/styles.css">
	<link rel="stylesheet" href="diseno/fontawesome/css/all.css">
	<?php 
	require_once 'diseno/estilos.php';
	

	?>
	

	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body class="">
	<div class="container-fluid" ><!-- este container termina hasta el final-->
		<div class="row" >
			<div class="col-4 color-container "><!--inicio del recuadro imagenes-->
				<div class="pantalla">
					<img src="imagenes/logos/logo.jpg" class="card-img-top">
					<div class="container">
						<div class="row my-2" id="">
							<div class="col-sm-6 my-1">
								<img src="imagenes/logos/img1.jpg" alt="" class="img-izq">
							</div>
							<div class="col-sm-6 my-1">
								<img src="imagenes/logos/img1.jpg" alt="" class="img-izq">
							</div>
							<div class="col-sm-6 my-1">
								<img src="imagenes/logos/img1.jpg" alt="" class="img-izq">
							</div>
							<div class="col-sm-6 my-1">
								<img src="imagenes/logos/img1.jpg" alt="" class="img-izq">
							</div>
							<div class="col-sm-6 my-1">
								<img src="imagenes/logos/img1.jpg" alt="" class="img-izq">
							</div>
							<div class="col-sm-6 my-1">
								<img src="imagenes/logos/img1.jpg" alt="" class="img-izq">
							</div>
							<div class="col-sm-6 my-1">
								<img src="imagenes/logos/img1.jpg" alt="" class="img-izq">
							</div>
							<div class="col-sm-6 my-1">
								<img src="imagenes/logos/img1.jpg" alt="" class="img-izq">
							</div>

						</div>
					</div><!--termina la parte de las imagenes-->
				</div>
			</div>
			<!--inica el fromulario -->
			<div class="col-8">
				<div class="pantalla">
					<h2 class="text-center">Relizar pedido</h2>
					<!--boton ayuda-->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ayuda">
						Ayuda
					</button>
					<a href="paginas/ver_datos.php">
						<button type="button" class="btn btn-primary" >
							Buscar  <i class="fas fa-search"></i>
						</button>
					</a>

					<form action="controlador/insert_todo.php" method="POST" class="color-container-der">
						<h3 class="mx-2">Datos esenciales</h3>
						<div class="container">
							<div class="form-row">
								<div class="form-group col-md-3">
									<label for="">Fecha</label>
									<input type="date" class="form-control" name="fecha" >
								</div>

								<div class="form-group col-md-2">
									<label for="inputEmail4">Hora</label>
									<input type="time" class="form-control">
								</div>

								<div class="form-group col-md-2">
									<label for="">Digilenciador*</label>
									<input type="text" name="diligenciador" class="form-control" placeholder="Digilenciador">
								</div>

								<div class="form-group col-md-2">
									<label for="">Comprador*</label>
									<input type="text" class="form-control" name="comprador" required="" placeholder="Comprador">

								</div>

								<div class="form-group col-md-3">
									<label for="inputPassword4">Empresa*</label>
									<input type="text" class="form-control" name="empresa" required="" placeholder="Empresa">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-2">
									<label for="">Ciudad*</label>
									<input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
								</div>
								<div class="form-group col-md-3">
									<label for="">Dirección*</label>
									<input type="text" class="form-control"  name="direccion" required="" placeholder="Dirección">
								</div>

								<div class="form-group col-md-3">
									<label for="">Correo electrónico*</label>
									<input type="email" class="form-control"  name="correo" required="" placeholder="Correo electrónico">
								</div>

								<div class="form-group col-md-3">
									<label for="">Teléfono*</label>
									<input type="text" class="form-control" name="telefono" required="" placeholder="Teléfono">
								</div>
							</div>
						</div>
						<hr>
						<!---------------------------------------------------- formula --------------------------------------------------------->
						<h3 class="mx-2">Fórmula</h3>
						<div class="container">
							<div class="form-row">
								<div class="form-group col-md-2">
									<label for="">ESF</label>
									<input type="text" name="esf1" class="form-control" placeholder="ESF">
								</div>
								<div class="form-group col-md-2">
									<label for="inputEmail4">CIL</label>
									<input type="text" name="cil1" class="form-control" placeholder="CIL">
								</div>
								<div class="form-group col-md-2">
									<label for="">EJE</label>
									<input type="text" name="eje1" class="form-control" placeholder="EJE">
								</div>
								<div class="form-group col-md-3">
									<label for="">ADD</label>
									<input type="text" name="add1" class="form-control" placeholder="ADD">
								</div>
								<div class="form-group col-md-3">
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
								<div class="form-group col-md-2">
									<input type="text" name="esf2" class="form-control" placeholder="ESF">
								</div>
								<div class="form-group col-md-2">
									<input type="text" name="cil2" class="form-control" placeholder="CIL">
								</div>
								<div class="form-group col-md-2">
									<input type="text" class="form-control" name="eje2" placeholder="EJE">
								</div>
								<div class="form-group col-md-3">
									<input type="text" name="add2" class="form-control" placeholder="ADD">
								</div>
								<div class="form-group col-md-3">
									<select name="tipo_lente2" class="form-control" id="">
										<option selected="">Tipo de lente</option>
										<option value="Progresivo blanco image">Progresivo blanco Image</option>
										<option value="Progresivo transition 8 generacion">Progresivo transition 8 Generación</option>
										<option value="Progresivo transltion 8 generacion">Bifocal flat top</option>
									</select>
								</div>
							</div>
						</div>
						<!--termina el menu-->
						<hr>
						<h3 class="mx-2">Datos específicos</h3>

						<div class="container">
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
						<!--------------------------------- DATOS TALLA ---------------------------------------->
						<hr>
						<h3 class="mx-2">Datos de talla</h3>
						<div class="container">
							<div class="form-row">
								<div class="form-group col-md-2">
									<label for="">Fecha</label>
									<input type="text" name="fecha1" class="form-control" placeholder="Horizontal">
								</div>
								<div class="form-group col-md-2">
									<label for="">Diagonal</label>
									<input type="text" name="diagonal" class="form-control" placeholder="Diagonal">
								</div>
								<div class="form-group col-md-2">
									<label for="">DNP</label>
									<input type="text" name="dnp" class="form-control" placeholder="DNP">
								</div>
								<div class="form-group col-md-2">
									<label for="">DV</label>
									<input type="text" name="dv" class="form-control" placeholder="DV">
								</div>
								<div class="form-group col-md-2">
									<label for="">Filtro</label>
									<input type="text" name="filtro2" class="form-control" placeholder="Filtro">
								</div>
								<div class="form-group col-md-2">
									<label for="">Vertical</label>
									<input type="text" name="vertical" class="form-control" placeholder="Vertical">
								</div>
								<div class="form-group col-md-2">
									<label for="">Puente</label>
									<input type="text" name="puente" class="form-control" placeholder="Puente">
								</div>
								<div class="form-group col-md-2">
									<label for="">Altura focal</label>
									<input type="text" name="altura_focal" class="form-control" placeholder="Altura focal">
								</div>



								<div class="form-group col-md-2">
									<label for="">DT</label>
									<input type="text" name="dt" class="form-control" placeholder="DT">
								</div>
								<div class="form-group col-md-2">
									<label for="">Color</label>
									<input type="text" name="color" class="form-control" placeholder="Color">
								</div>
								<div class="form-group col-md-2">
									<label for="">D.Trabajo</label>
									<input type="text" name="dtrabajo" class="form-control" placeholder="D.Trabajo">
								</div>
								<div class="form-group col-md-2">
									<label for="">PANT</label>
									<input type="text" name="pant" class="form-control" placeholder="PANT">
								</div>
							</div>
						</div>
						<hr>
						<h3 class="mx-2">Observaciones</h3>
						<div class="container">
							<select name="observaciones" id="" class="form-control">
								<option selected="">Elige las observaciones</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
							<br>
							<textarea name="otras_observaciones" id="" cols="10" rows="5" class="form-control" placeholder="Otras observaciones"></textarea>
						</div>


						<!-- boton de alerta -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Enviar
						</button>

						<!-- cuerpo del boton alerta -->
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
	</div>
</body>
</html>
<!--<script>
	$(document).ready(function($){
		var ventana_ancho = $(window).width();
		var ventana_alto = $(window).height();
		var height= ventana_alto-30;
		// $('.color-container-der').css('height',ventana_alto+'px !important');
		$('.color-container-der').css('height',height+'px !important');
		$('.color-container-der').css('max-width',height+'px !important');
	});
</script>-->


<!-- cuerpo del boton ayuda -->
<div class="modal fade" id="ayuda" tabindex="-1" role="dialog" aria-labelledby="ayuda" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="text-center">Ingresar para la ayuda</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h3 class="text-center">Ayuda para el usuario</h3>
			</div>
			<div class="modal-footer">
				<a href="paginas/ayuda.html"><input  name="btnEnviar" value="Aceptar"class="btn btn-primary"></a>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
			</div>
		</div>
	</div>
</div><!--termina cuerpo boton alerta-->