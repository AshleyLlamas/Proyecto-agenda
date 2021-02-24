<div class="jumbotron text-center bg-warning" style="margin-bottom:0;">
	<h1 class="font-weight-bold"><em>EDITAR</em></h1>
</div>

	<div class="container-fluid mx-auto rounded border border-warning mt-5" style="width: 80%;">
		<div class="row">
			<div class="col-6 bg-white">
				<div class="text-center my-3">
					<div class="container-fluid bg-warning rounded my-3 py-1"><h4 class="font-weight-bold">Selecciona para editar</h1></div>
					<form method="post" >
							<select class="form-select mx-auto" style="width: 80%;" multiple aria-label="multiple select example" name="idmodificar">
								<?php
								require_once("contacto.php");
								$obj=new Contacto();
								$resultado=$obj->consultar();
								while ($registro=$resultado->fetch_assoc()) {
									echo "<option value='".$registro["id"]."'>".$registro["nombre"]." ".$registro["apellidos"]."</option>";
								}
								?>
							</select>
							<input type="submit" name="cargar" value="Cargar contacto" class="btn btn-danger my-1">
					</form>
				</div>
			</div>
			<div class="col-6 bg-warning">
				<div class="my-5">
					<div class="container">
						<div class="row">
										<div class="col-4">
											<?php
												if(isset($_POST["cargar"])){
													if(isset($_POST["idmodificar"])){

													
														require_once("contacto.php");
														$obj = new Contacto();
														$resultado = $obj->cargar($_POST["idmodificar"]);
														while ($registro = $resultado->fetch_assoc()) {
											?>
														<form method="post">

														Nombre:<br><br>
														Apellidos:<br><br>
														Correo:<br><br>
														Telefono:<br><br>
										</div>
										<div class="col-8 text-center">
														<input type="text" name="nombre" value="<?php echo $registro["nombre"]; ?>" style="width: 100%;"><br><br>
														<input type="text" name="apellido" value="<?php echo $registro["apellidos"]; ?>"style="width: 100%;"><br><br>
														<input type="text" name="correo" value="<?php echo $registro["correo"]; ?>" style="width: 100%;"><br><br>
														<input type="text" name="telefono" value="<?php echo $registro["telefono"]; ?>" style="width: 100%;"><br><br>
														<input type="hidden" name="id" value="<?php echo $_POST["idmodificar"]; ?>">
														<input type="submit" name="modificar" value="Modificar Contacto" class="btn btn-danger my-1">

											<?php
														}
													}else{
														echo "<div class = bg-white>";
														echo "<center><img src='img/precaucion.svg' width='50'>";
														echo "<p class='text-danger bg-dark'>Selecciona para modificar.</p></center>";
														echo "</div>";
													}
												}
											if(isset($_POST["modificar"])){
												$id=$_POST["id"];
												$nombre=$_POST["nombre"];
												$apellido=$_POST["apellido"];
												$correo=$_POST["correo"];
												$telefono=$_POST["telefono"];
												require_once("contacto.php");
												$obj=new Contacto();
												$obj->modificar($id, $nombre,$apellido,$correo,$telefono);
												echo "<div class = bg-white>";
												echo "<center><img src='img/correcto.svg' width='50'>";
												echo "<p class='text-white bg-success'>Contacto modificado.</p></center>";
												echo "</div>";
											}
											?>
										</div>
									</form>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
