<?php

require_once 'conexion.php';

$salida = "";
$sql = "SELECT * FROM empleados WHERE status = 1 ORDER BY DESC";
$query = $pdo->prepare($sql);
$query->execute();


if($resultado = $query->rowCount() > 0) {
  while($fila = $query->fetch(PDO::FETCH_ASSOC)) {
    $salida .= 
    '<div class="col-xl-5 col-sm-8 mb-xl-2 mb-6">
    <div class="card">
        <div class="card-header" style="background: #4BB545;">
            <font color="white">
                <div class="text-center">
                  <h4 class="card-title"> '. $fila['fibra_s'].'</h4>
                </div>
                <hr style=" background: black;">
                <div class="text-start">
                  <h6 class="card-text">Ip: '. $fila['ip1'].'</h6>
                  <h6 class="card-text">Tx: '. $fila['tx_s'].'</h6>
                  <h6 class="card-text">Rx: '. $fila['rx_s'].'</h6>
                  <h6 class="card-text">Diferencia: -'. $fila['dif'].'</h6>
                </div>
              </font>
            </div>
            <div class="card-footer p-3" style="background: #4BB545;">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
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