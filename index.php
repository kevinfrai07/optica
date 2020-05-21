<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="diseno/css/styles.css">
	<?php 
	include 'diseno/estilos.php';

	?>
	

	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<div class="container-fluid"><!-- este container termina hasta el final-->
		<div class="row">
			<div class="col-sm"><!--inicio del recuadro imagenes-->
				<div>
					<div class="fondo">
						<div class="form-row">
							<div class="form-group col" >
								<img src="imagenes/logos/logo.jpg"  >
							</div>

						<div class="form-group col-md-1">
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

						<div class="form-group col-md-1" >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

						</div>

						<div class="form-row">
						
							<div class="form-group "  >
								<img src="imagenes/logos/img1.jpg" alt="">
							</div>

						<div class="form-group col-md-1" >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

					</div>

					<div class="form-row">
						
						<div class="form-group "  >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

						<div class="form-group col-md-1" >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

					</div>

					<div class="form-row">
						
						<div class="form-group "  >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

						<div class="form-group col-md-1" >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

					</div>

					<div class="form-row">
						
						<div class="form-group "  >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

						<div class="form-group col-md-1" >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

					</div>

					<div class="form-row">
						
						<div class="form-group "  >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

						<div class="form-group col-md-1" >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

					</div>

					<div class="form-row">
						
						<div class="form-group "  >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

						<div class="form-group col-md-1" >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

					</div>
					<div class="form-row">
						
						<div class="form-group "  >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

						<div class="form-group col-md-1" >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

					</div>
					<div class="form-row">
						
						<div class="form-group "  >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

						<div class="form-group col-md-1" >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

					</div>

					<div class="form-row">
						
						<div class="form-group "  >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

						<div class="form-group col-md-1" >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

					</div>

					<div class="form-row">
						
						<div class="form-group "  >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

						<div class="form-group col-md-1" >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

					</div>

					<div class="form-row">
						
						<div class="form-group "  >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

						<div class="form-group col-md-1" >
							<img src="imagenes/logos/img1.jpg" alt="">
						</div>

					</div>

					

					


				</div>
			</div>	
				
			</div><!--termina la parte de las imagenes-->

			<!--inica el fromulario -->
			<div class="row">
				<div class="col-lg">
					
						<center>
						<h2>Relizar pedido</h2></center>
			<form action="controlador/insert_todo.php" method="POST">
						<div class="jumbotron">
							
							<h3>Datos esenciales</h3>
							<div class="form-row">
								<div class="form-group col-md-3">
									<label for="">fecha</label>
									<input type="date" class="form-control" name="fecha" >
								</div>

								<div class="form-group col-md-3">
									<label for="inputEmail4">Hora</label>
									<input type="time" class="form-control" name="hora" id="" >
								</div>

								<div class="form-group col-md-3">
										<label for="">Digilenciador</label>
										<select name="diligenciador" id="" class="form-control">
											<option selected="">Seleccionar...</option>
											<option value="Opcion1">Opcion1</option>
										</select>

								</div>

								<div class="form-group col-md-3">
										<label for="">Comprador</label>
										<input type="text" class="form-control" name="comprador">

								</div>

								<div class="form-group col-md-3">
										<label for="inputPassword4">Empresa</label>
										<input type="text" class="form-control" name="empresa">
								</div>




								</div>





								<div class="form-row">

									<div class="form-group col-md-3">
										<label for="">Ciudad</label>
										<select name="ciudad" id="" class="form-control">
											<option selected="">Seleccionar...</option>
											<option value="Opcion1">Opcion1</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label for="">Direccion</label>
										<input type="text" class="form-control"  name="direccion">
									</div>

									<div class="form-group col-md-3">
										<label for="">Correo</label>
										<input type="email" class="form-control"  name="correo">
									</div>

									<div class="form-group col-md-3">
										<label for="">Telefono</label>
										<input type="text" class="form-control" name="telefono">

									</div>


								</div>
							</div>
							
				
					
							<div class="row-my-12">
								
							<div class="row-2">
								<div class="jumbotron">
									<h3>Fórmula</h3>
				
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

							</div>


						</div>
						<!--termina el menu-->

						<div class="row">
							
							<div class="col-lg">
								<div class="jumbotron">
									<h3>Datos específicos</h3>
									<div class="form-group">
										<div class="form-group col">
											<label for="">Filtro</label>
											<select name="filtro" id="" class="form-control">
													<option selected="">Seleccionar...</option>
													<option value="Opcion1">Opcion1</option>
												
											</select>
										</div>

										<div class="form-group col">
											<label for="">Montura</label>
											<select name="montadura" id="" class="form-control">
												<option selected="">Seleccionar...</option>
												<option value="Opcion1">Opcion1</option>
											</select>
										</div>

										<div class="form-group col">
											<label for="tipo_talla">Tipo de talla</label>
											<select name="tipo_talla" id="" class="form-control">
												<option selected="">Seleccionar...</option>
												<option value="Opcion1">Opcion1</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							
							
						</div>	

								
			

							<div class="jumbotron">
								<h3>Datos de talla</h3>
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

							

						

						<div class="row-my-12">
								
								<div class="row-2">
									<div class="jumbotron">
										<h3>Observaciones</h3>
										<select name="observaciones" id="" class="form-control">
											<option selected="">Seleccionar...</option>
											<option value="Opcion1">Opcion1</option>
										</select>
										<br>
										<textarea name="otras_observaciones" id="" cols="10" rows="5" class="form-control"></textarea>
										
									</div>

								</div>
								
							</div>
							<input type="submit" name="btnEnviar" value="enviar">

				</form><!--termina el unico form-->

					
				</div>
			</div>
		</div>
	</div>
</body>
</html>