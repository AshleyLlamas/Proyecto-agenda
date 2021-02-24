
<div class="container-fluid navbar-inverse bg-light">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <!--Icon-->
    <a title="EL GAME" href="index.php?action=index">
      <img src="img/icon-dark.svg" width="50">
    </a>
      <!--Fin de icon-->

      <!--Navbar-->
    <a class="navbar-brand" href="index.php?action=index"><strong>EL GAME</strong></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="index.php?action=index">Inicio</a></li>
        <!--Navbar desplegable-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-danger" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">SQL</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item text-danger" href="index.php?action=alta">Alta</a></li>
            <li><a class="dropdown-item text-danger" href="index.php?action=baja">Baja</a></li>
            <li><a class="dropdown-item text-danger" href="index.php?action=consulta">Consulta</a></li>
            <li><a class="dropdown-item text-danger" href="index.php?action=modificacion">Modificacion</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

</div>