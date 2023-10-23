<?php
include "conexion/conexion.php";

include "partes/cabeza.php";


$id=$_GET['id'];
    $sql = "SELECT * FROM  fotografia WHERE idFoto='$id'"  ;
    $query = $conexion->query($sql);   
   $row=mysqli_fetch_array($query);
  

?>
<div class="jumbotron">
    <h1 class="text-primary text-uppercase text-center">Detalle Foto</h1>
    
    <div class="container">
        <div class="row">
            <div class="col-4 p-3 bg-warning">
                <h3 class="bg-primary text-uppercase text-white p-2"><?= $row['titulo'] ?></h3>
                <small class="bg-success text-white p-2"><?= $row['fecha'] ?></small>
                <p class="m-2"><?= $row['descripcion'] ?></p>
                <br><br><br>
                <a class="btn btn-primary btn-block" href="index.php">Volver Princial</a>
            </div>
            <div class="col-8">
                <div class="container">
                    <img src="lib/fotos/<?= $row['foto'] ?> " class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "partes/rodapie.php";
?>