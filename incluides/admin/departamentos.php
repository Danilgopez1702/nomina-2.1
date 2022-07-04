<?php 
  include_once "../header/header.php"; 
  require("../base_datos/conexion/conexion.php");
?>

  <div class="col-md-12 col-xl-12 grid-margin stretch-card">
    <div class="col-md-10 grid-margin stretch-card">
      <h2 class="card-title">Departamentos</h2> 
    </div> 
    <form>
      <input type="text" id="buscar" name="buscar" class="form-control" style="border-radius: 15px;" placeholder="Buscar Departamentos">
    </form>   
  </div>
  <div class="container-fluid py-4">
    <div class="table-responsive">
      <table class="table" id="table">
        <thead>
          <tr>
            <th> ID </th>
            <th> Nombre </th>
            <th> Horario </th>
            <th> Turno </th>
            <th> Acciones </th>
          </tr>
        </thead>
        <tbody id="myTable">
          <?php
            $query = mysqli_query($conexion, "SELECT * FROM departamento");
            $result = mysqli_num_rows($query);
            if ($result > 0) {
              while ($data = mysqli_fetch_assoc($query)) { ?>
                <tr>
                <td><?php echo $data['id_departamento'] ?> </td>
                <td><?php echo $data['nombre_departamento'] ?> </td>
                <td><?php echo $data['horario_departamento'] ?> </td>
                <td><?php echo $data['turno_departamento'] ?> </td>
                <td> 
                  <a href="baja_empleado.php?id=<?php echo $data['id_departamento'] ?> " class="btn btn-primary btn-rounded" >Modificar </a>                                    
                  <a href="baja_empleado.php?id=<?php echo $data['id_departamento'] ?> " class="btn btn-danger btn-rounded" >Eliminar </a> 
                </td>
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