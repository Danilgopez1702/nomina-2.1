<?php
    require("../conexion/conexion.php");

    $sql = mysqli_query($conexion, "DELETE FROM empleados WHERE id_empleado = '".$_GET['id']."'");
    header('location: ../../admin/empleados_activos.php');

?>