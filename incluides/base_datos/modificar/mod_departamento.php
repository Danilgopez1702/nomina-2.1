<?php
    require("../conn/conexion.php");
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    $sql = mysqli_query($conexion, "UPDATE `departamentos` SET `nombre`='$nombre' WHERE id_departamento = $id");

    header('location: ../../admin/departamentos.php');
?>