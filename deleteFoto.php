<?php
include "conexion/conexion.php";

include "partes/cabeza.php";
include "partes/mainmenu.php";

$id=$_GET['id'];
    $sql = "DELETE FROM  fotografia WHERE idFoto='$id'"  ;
    $query = $conexion->query($sql);   
 
header('Location: index.php');
?>