<?php

require_once 'conexion.php';

$salida = "";

if(!empty($_POST['consulta'])) {
    $consulta = filter_var($_POST['consulta']) ;
    $sql = "SELECT * FROM cotejo_sfp WHERE id_empleado LIKE '%".$consulta."%' OR nombre_empleado LIKE '%".$consulta."%' OR apellido_paterno LIKE '%".$consulta."%' 
    OR apellido_materno LIKE '%".$consulta."%' OR fecha_ingreso LIKE '%".$consulta."%' OR sueldo_mensual LIKE '%".$consulta."%' OR sueldo_diario LIKE '%".$consulta."%' OR foto";
    $query = $pdo->prepare($sql);
    $query->execute();
}


if($resultado = $query->rowCount() > 0) {
    while($fila = $query->fetch(PDO::FETCH_ASSOC)) {
      $salida .= 
      '           <div class="row ">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Empleados</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> Numero de empleado </th>
                    <th> Nombre del empleado </th>
                    <th> fecha ingreso </th>
                    <th> Salario Mensual </th>
                    <th> Salario diario </th>
                    <th> Departamento </th>
                    <th> acciones </th>
                    <th> Carta de renuncia </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                                $query = mysqli_query($conexion, "SELECT * FROM empleados ORDER BY id_empleado");
                                $result = mysqli_num_rows($query);
                                if ($result > 0) {
                                    while ($data = mysqli_fetch_assoc($query)) { 
                                    if ('. $data['status'] .' == 1){?>
                    <td>'. $data['id_empleado'] .' </td>
                    <td>
                      <img width="150px" height="130px" src="../imagenes/0000000045A.jpg" />
                      <a href="caratula.php?id='.$data['id_empleado'] .'"> '. $data['nombre_empleado'] . $data['apellido_paterno'] . $data['apellido_materno'].'</a></td>
                    </td>
                    <td> '. $data['fecha_ingreso'] .' </td>
                    <td>  $x = number_format('.  $data['sueldo_mensual'] .', 2, '.', ',');  $'. $x .' </td>
                    <td> $n = '. $data['sueldo_diario'] .' $m =number_format(' . $n .', 2, '.', ',' );  $  '. $m .' </td>
                    <td> <?php echo $data['nombre_departamento']; ?> </td>
                    <td> <a href="baja_empleado.php?id= '. $data['id_empleado'] .' " class="btn btn-danger" style="border-radius:20px">Eliminar </a> </td>
                    <td>
                      <div class="badge badge-outline-success">Approved</div>
                    </td>
                    <?php
                                  }  
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