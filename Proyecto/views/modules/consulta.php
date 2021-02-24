<div class="jumbotron text-center bg-warning" style="margin-bottom:0;">
  <h1 class="font-weight-bold"><em>CONSULTA</em></h1>
</div>


<div class="container-fluid mx-auto bg-white text-center rounded border border-warning mt-5" style="width: 80%;">
<?php
	require_once("contacto.php");
	$obj = new Contacto();
	$resultado = $obj->consultar();
?>
	<table class="table table-striped">
		<thead>
    		<tr>
    			<th scope="col">#</th>
      			<th scope="col">Nombre</th>
     			<th scope="col">Apellido</th>
      			<th scope="col">Correo</th>
     			<th scope="col">Telefono</th>
    		</tr>
  		</thead>
	
<?php
	$n=0;
	while($registro=$resultado->fetch_assoc()){
		$n++;
		echo "<tbody>";
			echo "<tr>";
				echo "<th scope='row'>$n</th>";
				echo "<td>".$registro["nombre"]."</td>";
				echo "<td>".$registro["apellidos"]."</td>";
				echo "<td>".$registro["correo"]."</td>";
				echo "<td>".$registro["telefono"]."</td>";
	}
			echo "</tr>";
		echo "</tbody>";
	echo "</table>";
?>
</div>