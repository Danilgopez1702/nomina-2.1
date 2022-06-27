<?php 
  include_once "../header/header.php"; 
  require("../base_datos/conexion/conexion.php");
  $query = mysqli_query($conexion, "SELECT * FROM usuarios");
     $result = mysqli_num_rows($query);
     
     $query_p = mysqli_query($conexion, "SELECT * FROM empleados WHERE status = 0" );
     $result_p = mysqli_num_rows($query_p);     
     
     $query_p1 = mysqli_query($conexion, "SELECT * FROM empleados WHERE status = 1" );
     $result_p1 = mysqli_num_rows($query_p1);
     
     $query_d = mysqli_query($conexion, "SELECT * FROM departamento" );
     $result_d = mysqli_num_rows($query_d);
?>
            <div class="row">
              <div class="col-sm-3 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Admins</h5>
                    <div class="row">
                      <div class="col-5 col-sm-8 col-xl-5 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo $result; ?></h2>
                        </div>
                      </div>
                      <div class="col-8 col-sm-8 col-xl-7 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-account text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Empleados Activos</h5>
                    <div class="row">
                    <div class="col-5 col-sm-8 col-xl-5 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo $result_p; ?></h2>
                        </div>
                      </div>
                      <div class="col-8 col-sm-8 col-xl-7 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-worker text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Empleados Inactivos</h5>
                    <div class="row">
                    <div class="col-5 col-sm-8 col-xl-5 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo $result_p1; ?></h2>
                        </div>
                      </div>
                      <div class="col-8 col-sm-8 col-xl-7 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-account-off  text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Departamentos</h5>
                    <div class="row">
                    <div class="col-5 col-sm-8 col-xl-5 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo $result_d; ?></h2>
                        </div>
                      </div>
                      <div class="col-8 col-sm-8 col-xl-7 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-hospital-building text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
<?php
    include_once "../header/header2.php"; 
?>