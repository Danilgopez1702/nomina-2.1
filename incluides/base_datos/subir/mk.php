<?php
    require("../conn/conexion.php");
    $nombre = $_POST['nombre'];
    $ip = $_POST['ip'];
    $rol = $_POST['rol'];
    
    $sql = mysqli_query($conexion, "INSERT INTO `principal`( `nombre`, `ip_mk`, `tipo`) VALUES ('$nombre','$ip','$rol')");
    
    header('location: ../../admin/mk.php');
?>