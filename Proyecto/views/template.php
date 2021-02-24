<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EL GAME</title>

<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body background="img/double-bubble-dark.png">

<?php
	include "modules/navegacion.php";
?>

<section>

<?php
$mvc=new MvcController();
$mvc->enlacesPaginasController();
?>

</section>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>

</body>
</html>