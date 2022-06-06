<?php
session_start();
if (!empty($_SESSION['active'])) {
	header('location: incluides/admin/');
  } else {
		if (!empty($_POST)) {
	  		if (empty($_POST['usuario']) || empty($_POST['clave'])) {
				$alert = '<div class="alert alert-danger" role="alert">Ingrese su usuario y su clave</div>';
			} else{
				require_once "incluides/base_datos/conexion/conexion.php";
				$user = mysqli_real_escape_string($conexion, $_POST['usuario']);
      			//$clave = mysqli_real_escape_string($conexion, md5($_POST['clave']));
      			$clave = mysqli_real_escape_string($conexion, $_POST['clave']);
			
			  	$query = mysqli_query($conexion, "SELECT `id_usuario`, `nombre`, `pass`, `rol` FROM `usuarios` WHERE nombre = '$user' AND pass = '$clave'");
			  	$resultado = mysqli_num_rows($query);
			  	if ($resultado > 0) {
					$dato = mysqli_fetch_array($query);
					$_SESSION['active'] = true;
					$_SESSION['id_usuario'] = $dato['id_usuario'];
					$_SESSION['nombre'] = $dato['nombre'];
					$_SESSION['rol'] = $dato['rol'];
					header('location: incluides/admin/');
				
			  	} else {
					$alert = '<div class="alert alert-danger" role="alert"> Usuario o Contraseña Incorrecta </div>';
					session_destroy();
			  	}
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DigitalNet Nominas</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="incluides/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="incluides/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="incluides/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="incluides/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h2 class="card-title text-left mb-3">Ingresa</h2>
                <form class="user" method="POST">
                  <div class="form-group">
                    <h5>Usuario</h5>
                    <input type="text" class="form-control p_input" name = "usuario">
                  </div>
                  <div class="form-group">
                    <h5>Contraseña</h5>
                    <input type="text" class="form-control p_input" name = "clave">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">  
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="incluides/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="incluides/assets/js/off-canvas.js"></script>
    <script src="incluides/assets/js/hoverable-collapse.js"></script>
    <script src="incluides/assets/js/misc.js"></script>
    <script src="incluides/assets/js/settings.js"></script>
    <script src="incluides/assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>