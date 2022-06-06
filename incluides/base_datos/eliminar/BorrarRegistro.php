<?php
    require("../conn/conexion.php");

    $sql = mysqli_query($conexion, "DELETE FROM principal WHERE id_p = '".$_GET['id']."'");
    header('location: ../../admin/mk.php');

?>