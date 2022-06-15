<?php 
  include_once "../header/header.php"; 
  require("../base_datos/conexion/conexion.php");
?>
<div class="row">
  <div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <h3 class="card-title">Usuarios</h3>
    
      <form class="container-fluid py-6">
        <input type="search" id="busqueda" name="busqueda" style = "border-radius: 5px;" placeholder="Search">
      </form>
    
  </div>
</div>
    <div class="container-fluid py-4">
        <div class = "row" id="datos">

        </div>
    </div>

   

    <script src="js/usuarios.js"></script>

<?php
    include_once "../header/header2.php"; 
?>