<?php

require_once 'conexion.php';

$salida = "";
$sql = "SELECT * FROM empleados WHERE status = 1 ORDER BY DESC";
$query = $pdo->prepare($sql);
$query->execute();


if($resultado = $query->rowCount() > 0) {
  while($fila = $query->fetch(PDO::FETCH_ASSOC)) {
    $salida .= 
    '<div class="row">
    <div class="col-sm-3 grid-margin">
      <div class="card">
        <div class="card-body">
          <h5>'. $fila['id_empleado'].'</h5>
          <h5>'. $fila['nombre'].$fila['apellido_paterno'].$fila['apellido_materno'].'</h5>
          <p class="text-success ml-2 mb-0 font-weight-medium">'. $fila['departamento'].'</p>
          <div class="row">
            <div class="col-5 col-sm-8 col-xl-5 my-auto">
              <div class="d-flex d-sm-block d-md-flex align-items-center">
                <h2 class="mb-0">Fecha de ingreso: '. $fila['fecha_ingreso'].'</h2>
                <h2 class="mb-0">Sueldo mensual: $'. $fila['sueldo_mensual'].'</h2>
                <h2 class="mb-0">Sueldo diario: $'. $fila['sueldo_diario'].'</h2>
              </div>
            </div>
            <div class="col-8 col-sm-8 col-xl-7 text-center text-xl-right">
              <img class="icon-lg text-primary ml-auto" src =" '. $fila['foto'].' ">
            </div>
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