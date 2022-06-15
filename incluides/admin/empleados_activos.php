<?php 
  include_once "../header/header.php"; 
  require("../base_datos/conexion/conexion.php");
?>
                <h3 class="card-title">Empleados Activos</h3>
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="search" id="busqueda" name="busqueda" class="form-control" style = "border-radius: 5px;" placeholder="Search products">
                </form>
                <script src="js/empleado_activo.js"></script>
<?php
    include_once "../header/header2.php"; 
?>