<?php   
include "conexion/conexion.php";
        $titulo=   $_POST['titulo'];
        $descrip = $_POST['descrip'];
        $nombre_archivo = $_FILES['foto']['name'];
       
        if (move_uploaded_file($_FILES['foto']['tmp_name'],  'lib/fotos/'.$nombre_archivo)){
                var_dump($nombre_archivo );
        }
        $query = "INSERT INTO fotografia  ( titulo, foto, descripcion ) VALUES ( '$titulo', '$nombre_archivo','$descrip')";
       mysqli_query($conexion,$query);
      header('Location: index.php');
           
