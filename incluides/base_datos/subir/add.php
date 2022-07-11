<?php
if (empty($_POST['id_empleado']) || empty($_POST['nombre']) || empty($_POST['ap']) || empty($_POST['am']) || empty($_POST['sm']) 
    || empty($_POST['fecha']) || empty($_POST['dep'])) {

} else {
	require "../conexion.php";
	$tips = 'jpg';
	$type = array('image/jpg' => 'jpg');
	$id = $_POST['id_empleado'];
	$id = preg_replace('([^A-Za-z0-9])', '', $id);

	$nombrefoto1 = $_FILES['image']['name'];
	$ruta1 = $_FILES['image']['tmp_name'];
	$name = $id . 'A.' . $tips;
	if (is_uploaded_file($ruta1)) {
		$destino = "imagenes_nomina/" . $name;
		copy($ruta1, $destino);
	}
	$id = $_POST['id_empleado'];
	$nombre = $_POST['nombre'];
	$ap = $_POST['ap'];
	$am = $_POST['am'];
	$sm = $_POST['sm'];
	$sd = $_POST['sm'] / 30.4;
	$fecha = $_POST['fecha'];
	$dep = $_POST['dep'];
	$fp = $_POST['fp'];
	$status = 1;

	$sql = mysqli_query($conexion, "INSERT INTO empleados (id_empleado, nombre, apellido_paterno, apellido_materno, fecha_ingreso, sueldo_mensual, sueldo_diario, departamento, frecuencia_pago, status,foto)
        VALUES ('$id','$nombre','$ap','$am','$fecha','$sm','$sd','$dep','$fp','$status','$destino')");

	mysqli_close($conexion);

	header("location: empleados_activos.php");
}
?>