<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="diseno/css/styles.css">
	<?php 
	require_once 'diseno/estilos.php';
	

	?>
	

	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<div class="container-fluid"><!-- este container termina hasta el final-->
		<div class="row">
			<div class="col-sm-4 color-container"><!--inicio del recuadro imagenes-->
				<img src="imagenes/logos/logo.jpg" class="card-img-top">
				<div class="container">
					<div class="row my-2">
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
			<!--inica el fromulario -->
			<div class="col-lg-8">
				<h2 class="text-center">Relizar pedido</h2>
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
								<input type="time" class="form-control" value="23:59" name="hora" id="" >
							</div>

							<div class="form-group col-md-3">
								<label for="">Digilenciador</label>
								<select name="diligenciador" id="" class="form-control" required="">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>

							<div class="form-group col-md-3">
								<label for="">Comprador</label>
								<input type="text" class="form-control" name="comprador" required="">

							</div>

							<div class="form-group col-md-3">
								<label for="inputPassword4">Empresa</label>
								<input type="text" class="form-control" name="empresa" required="">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-3">
								<label for="">Ciudad</label>
								<select name="ciudad" id="" class="form-control" required="">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>
							<div class="form-group col-md-3">
								<label for="">Direccion</label>
								<input type="text" class="form-control"  name="direccion" required="">
							</div>

							<div class="form-group col-md-3">
								<label for="">Correo</label>
								<input type="email" class="form-control"  name="correo" required="">
							</div>

							<div class="form-group col-md-3">
								<label for="">Telefono</label>
								<input type="text" class="form-control" name="telefono" required="">
							</div>
						</div>
					</div>
					<hr>
					<!---------------------------------------------------- formula --------------------------------------------------------->
					<h3 class="mx-2">Fórmula</h3>
					<div class="container">
						<div class="form-row">
							<div class="form-group col-md-1">
								<label for="">ESF:</label>
								<select name="esf1" id="" class="form-control">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>
							<div class="form-group col-md-1">
								<label for="inputEmail4">CIL</label>
								<select name="cil1" id="" class="form-control">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>
							<div class="form-group col-md-1">
								<label for="">EJE</label>
								<select name="eje1" id="" class="form-control">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>
							<div class="form-group col-md-1">
								<label for="">ADD</label>
								<select name="add1" id="" class="form-control">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>
							<div class="form-group col-md-8">
								<label for="">Tipo de Lente </label>
								<select name="tipo_lente1" id="" class="form-control">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-1">
								<select name="esf2" id="" class="form-control">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>
							<div class="form-group col-md-1">
								<select name="cil2" id="" class="form-control">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>
							<div class="form-group col-md-1">
								<select name="eje2" id="" class="form-control">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>
							<div class="form-group col-md-1">
								<select name="add2" class="form-control" id="">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>
							<div class="form-group col-md-8">
								<select name="tipo_lente2" class="form-control" id="">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
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
								<label for="">Filtro</label>
								<select name="filtro" id="" class="form-control" required="">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>
							<div class="form-group col">
								<label for="">Montura</label>
								<select name="montadura" id="" class="form-control" required="">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
								</select>
							</div>
							<div class="form-group col">
								<label for="tipo_talla">Tipo de talla</label>
								<select name="tipo_talla" id="" class="form-control" required="">
									<option selected="">Seleccionar...</option>
									<option value="Opcion1">Opcion1</option>
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
								<input type="text" name="fecha1" class="form-control">
							</div>
							<div class="form-group col-md-2">
								<label for="">Diagonal</label>
								<input type="text" name="diagonal" class="form-control">
							</div>
							<div class="form-group col-md-2">
								<label for="">DNP</label>
								<input type="text" name="dnp" class="form-control">
							</div>
							<div class="form-group col-md-2">
								<label for="">DV</label>
								<input type="text" name="dv" class="form-control">
							</div>
							<div class="form-group col-md-2">
								<label for="">Filtro</label>
								<input type="text" name="filtro2" class="form-control">
							</div>
							<div class="form-group col-md-2">
								<label for="">Vertical</label>
								<input type="text" name="vertical" class="form-control">
							</div>
							<div class="form-group col-md-2">
								<label for="">Puente</label>
								<input type="text" name="puente" class="form-control">
							</div>
							<div class="form-group col-md-2">
								<label for="">Altura focal</label>
								<input type="text" name="altura_focal" class="form-control">
							</div>



							<div class="form-group col-md-2">
								<label for="">DT</label>
								<input type="text" name="dt" class="form-control">
							</div>
							<div class="form-group col-md-2">
								<label for="">Color</label>
								<input type="text" name="color" class="form-control">
							</div>
							<div class="form-group col-md-2">
								<label for="">D.Trabajo</label>
								<input type="text" name="dtrabajo" class="form-control">
							</div>
							<div class="form-group col-md-2">
								<label for="">PANT</label>
								<input type="text" name="pant" class="form-control">
							</div>
						</div>
					</div>
					<hr>
					<h3 class="mx-2">Observaciones</h3>
					<div class="container">
						<select name="observaciones" id="" class="form-control">
							<option selected="">Seleccionar...</option>
							<option value="Opcion1">Opcion1</option>
						</select>
						<br>
						<textarea name="otras_observaciones" id="" cols="10" rows="5" class="form-control"></textarea>
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
									<h2 class="text-center">!Alerta!</h2>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h3 class="text-center">Desea Enviar el Formulario</h3>
								</div>
								<div class="modal-footer">
									<input type="submit" name="btnEnviar" value="Aceptar" class="btn btn-primary">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

								</div>
							</div>
						</div>
					</div>
				</form><!--termina el unico form-->
			</div>
		</div>
	</div>
</body>
</html>