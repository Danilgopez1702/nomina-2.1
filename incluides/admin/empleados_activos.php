<?php 
  include_once "../header/header.php"; 
  require("../base_datos/conexion/conexion.php");
  include "../modal/empleados.php";
?>

<div style="left: 20px;">
      <a data-toggle="modal" href="#myModal1" class="btn btn-primary" style="border-radius: 15px;">Agregar usuario</a>  
    </div>   
<div class="col-md-5 col-xl-11 grid-margin stretch-card" style="top: 20px;">
    <div class="col-md-10 grid-margin stretch-card">
      <h2 class="card-title">Empleados Activos</h2> 
    </div> 
    <form>
      <input type="text" id="buscar" name="buscar" class="form-control" style="border-radius: 15px;" placeholder="Buscar Empleados">
    </form> 
  </div>
  <div class="container-fluid py-4">
    <div class="table-responsive table-striped">
      <table class="table " id="table">
        <thead>
          <th> ID </th>
          <th> Foto </th>
          <th> Nombre</th>
          <th> Fecha de Ingreso </th>
          <th> Sueldo Mensual </th>
          <th> Sueldo Diario </th>
          <th> Departamento </th>
          <th> Acciones </th>
        </thead>
        <tbody id="myTable">
          <?php
            $query = mysqli_query($conexion, "SELECT * FROM empleados WHERE status = 0 ");
            $result = mysqli_num_rows($query);
            if ($result > 0) {
              while ($data = mysqli_fetch_assoc($query)) { ?>
                <tr>
                  <td><?php echo $data['id_empleado'] ?></td>
                  <td>
                    <img src="<?php echo $data['foto'] ?>" alt="image" class="rounded-circle"/> 
                  </td>
                  <td><a href="caratula.php"><?php echo $data['nombre_empleado'] . " " . $data['apellido_paterno'] . " " . $data['apellido_materno'] ?></a> </td>
                  <td><?php echo $data['fecha_ingreso'] ?></td>
                  <td><?php echo $data['sueldo_mensual'] ?></td>
                  <td><?php echo $data['sueldo_diario'] ?></td>
                  <td><?php echo $data['nombre_departamento'] ?></td>
                  <td><a href="../base_datos/eliminar/eliminar_empleado.php?id=<?php echo $data['id_empleado'] ?> " class="btn btn-danger" style="border-radius:20px">Eliminar </a></td>
                  <td><a href="baja_empleado.php?id=<?php echo $data['id_empleado'] ?> " class="btn btn-warning" style="border-radius:20px">Carta de renuncia </a></td>
                </tr>
              <?php
              }
            } 
          ?>
        </tbody>
      </table>
    </div>
  </div>
    <script type="text/javascript">
      var busqueda = document.getElementById('buscar');
        var table = document.getElementById("table").tBodies[0];
        buscaTabla = function(){
          texto = busqueda.value.toLowerCase();
          var r=0;
          while(row = table.rows[r++]){
            if ( row.innerText.toLowerCase().indexOf(texto) !== -1 ){
              row.style.display = null;
            }else{
              row.style.display = 'none';
            }
          }
        }

        busqueda.addEventListener('keyup', buscaTabla);
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        [].forEach.call(document.querySelectorAll('.dropimage'), function(img) {
            img.onchange = function(e) {
            var inputfile = this,
            reader = new FileReader();
            reader.onloadend = function() {
              inputfile.style['background-image'] = 'url(' + reader.result + ')';
            }
            reader.readAsDataURL(e.target.files[0]);
          }
        });
      });
    </script>

<?php
    include_once "../header/header2.php"; 
?>