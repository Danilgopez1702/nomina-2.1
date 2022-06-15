<?php

require_once 'conexion.php';

$salida = "";

$salida = "";
$sql = "SELECT * FROM puerto ORDER BY link_down DESC";
$query = $pdo->prepare($sql);
$query->execute();


if($resultado = $query->rowCount() > 0) {
    while($fila = $query->fetch(PDO::FETCH_ASSOC)) {
      $salida .= 
      ' <div class="row ">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Empleados</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                  <th> ID </th>
                  <th> Nombre </th>
                  <th> Contraseña </th>
                  <th> Rol </th>
                  <th> acciones </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                                $query = mysqli_query($conexion, "SELECT * FROM empleados ORDER BY id_empleado");
                                $result = mysqli_num_rows($query);
                                if ($result > 0) {
                                    while ($data = mysqli_fetch_assoc($query)) { 
                                    
                                        <td>'. $data['id_usuario'] .' </td>
                                        <td>
                                        <td> '. $data['nombre'] .' </td>
                                        </td>
                                        <td> '. $data['fecha_ingreso'] .' </td>
                                        <td> '. $data['pass'] .' </td>
                                        <td> '. $data['rol'] .' </td>
                                        <td> <a href="baja_empleado.php?id= '. $data['id_usuario'] .' " class="btn btn-danger" style="border-radius:20px">Eliminar </a> </td>
                                    
                                }
                              }
                                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>';
      }
  
      $salida.="</tbody></table>";
  
  }
  echo $salida;