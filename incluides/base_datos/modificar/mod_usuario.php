<?php
    require("../conn/conexion.php");
    $id = $_POST['id'];
    if(isset($_POST['Enviar']) && !empty($_FILES['file']['name'])){ 
        
        if(move_uploaded_file($_FILES['file']['tmp_name'],"../img/imagenes_nomina".$_FILES['file']['na
        me'])){ 
        echo Archivo subido correctamente.'; 
        }else{ 
            echo Ocurrió algunos problemas. Inténtelo más tarde.'; 
        } 
        }

    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
    $rol = $_POST['rol'];
    
    $sql = mysqli_query($conexion, "UPDATE usuarios SET `id_usuario`='$id',`nombre`='$nombre',`pass`='$pass',`rol`='$rol' WHERE id_usuario = $id");
    header('location: ../asoatt.php');
?>