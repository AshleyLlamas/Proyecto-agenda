<div class="jumbotron text-center bg-warning" style="margin-bottom:0;">
	<h1 class="font-weight-bold"><em>ELIMINAR</em></h1>
</div>

<div class="container-fluid mx-auto text-center bg-white rounded border border-warning mt-5" style="width: 60%;">

	<div class="container">
		<div class="row">
			<div class="col-4">
				<div class="text-center mt-3">
					<img src="img/baja.png" class="img-fluid" alt="Responsive image">
				</div>
			</div>
			<div class="col-8">
				<div class="text-center mt-3">
					<div class="container-fluid bg-warning rounded my-3 py-1"><h4 class="font-weight-bold">Selecciona para eliminar</h4></div>

						<form method="post" > 
							<select class="form-select mx-auto" id="" multiple aria-label="multiple select example" name="ideliminar">
								<?php
								require_once("contacto.php");
								$obj=new Contacto();
								$resultado=$obj->consultar();
								while ($registro=$resultado->fetch_assoc()) {
									echo "<option value='".$registro["id"]."'>".$registro["nombre"]." ".$registro["apellidos"]."</option>";
								}
								?>
							</select>
							<input type="submit" name="eliminar" value="Eliminar" class="btn btn-danger my-1">
						</form>
				</div>
			</div>
		</div>
			<?php
			if(isset($_POST["eliminar"])){

				if(isset($_POST["ideliminar"])){
					$obj->baja($_POST["ideliminar"]);
					echo "<p class='text-success'>Contacto Eliminado.</p>";
				}else{
					echo "<p class='text-danger'>Selecciona para eliminar.</p>";
				}
			}

			?>
	</div>
</div>