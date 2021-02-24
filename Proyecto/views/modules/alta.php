<div class="jumbotron text-center bg-warning" style="margin-bottom:0;">
	<h1 class="font-weight-bold"><em>REGISTRO</em></h1>
</div>


<div class="container-fluid mx-auto rounded border border-warning mt-5" style="width: 60%;">
	<div class="row">
		<div class="col-4 bg-info text-white">
			<div class="text-center mt-3 mb-5">
				<h1><strong></strong> <em>SE PARTE DE LA</em></strong></h1>
				<img src="img/lla.png" class="img-fluid" alt="Responsive image">
			</div>
		</div>
		<div class="col-8 bg-white">
			<div class="my-3">
				<div class="container">
					<form method="post">
						<div class="row">
							<div class="col-3">
								Nombre:<br><br>
								Apellidos:<br><br>
								Correo:<br><br>
								Telefono:<br><br>
							</div>
							<div class="col-9">
								<input type="text" name="nombre" placeholder="Nombre" style="width: 100%;"><br><br>
								<input type="text" name="apellido" placeholder="Apellidos" style="width: 100%;"><br><br>
								<input type="text" name="correo" placeholder="Correo" style="width: 100%;"><br><br>
								<input type="text" name="telefono" placeholder="Telefono" style="width: 100%;"><br><br>
								<input type="submit" name="insertar" value="Guardar Contacto" class="btn btn-danger my-1">
							</div>
						</div>
					</form>

					<?php
					if(isset($_POST["insertar"])){
						$nombre=$_POST["nombre"];
						$apellido=$_POST["apellido"];
						$correo=$_POST["correo"];
						$telefono=$_POST["telefono"];
						if($nombre=="" ||
							$apellido=="" ||
							$correo=="" ||
							$telefono==""){
							echo "<center><p class='text-danger'>Por favor, rellene todos los campos.</p></center>";
					}else{
						if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
							require_once("contacto.php");
							$obj=new Contacto();
							$obj->alta($nombre,$apellido,$correo,$telefono);
							echo "<center><p class='text-success'>Contacto insertado.</p></center>";
						}else{
							echo "<center><p class='text-danger'>Por favor, ingrese un correo electronico valido.</p></center>";
						}

					}
				}
				?>


			</div>
		</div>
	</div>
</div>
