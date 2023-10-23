<?php
include "conexion/conexion.php";

include "partes/cabeza.php";
// include "partes/mainmenu.php";
    $sql = "SELECT * FROM  fotografia ORDER BY idFoto DESC"  ;
    $query = $conexion->query($sql);   
    $c=0;
?>

<div class="container-fluid">
        <div class="bg-dark text-white ">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <img  class="w-50 m-2 text-center" src="lib/camara.png">  
                            <h4 class="text-uppercase m-5">fotos del album</h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <img  class="w-50 m-2" src="lib/mifoto.jpg">  
                            <h4 class="">Hecho Por Mi</h4>
                        </div>
                    </div>
                          
                        
                </div>
                <div class="col-lg-6 col-sm-12 bg-success p-2">
                    <div class="container">
                        <h3>Agregar Foto Nueva</h3>
                    </div>
                <form class=" form-group" name="savePict" id="savePict"  action="salvarFoto.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo"
                aria-describedby="titulo" placeholder="Enter Titulo">
                </div>

                <div class="form-group">
                <label for="fotos">Fotografia</label>
                <input type="file" class="form-control" id="foto" name="foto">
                </div>
               
                <div class="form-group">
                <label for="descrip">Descripcion</label>
                <input type="text" class="form-control" id="descrip" name="descrip"
                aria-describedby="descrip" placeholder="Enter Descripcion">
                </div>
                <div class="form-group">
                    <input name="saveFoto" class="form-control btn-primary" type="submit" value="Guardar Fotos">
                </div>
        </form>
                </div>
            </div>
         
        </div>
    

    <div class="container">
       
        
        <?php while($r = $query->fetch_assoc()) {   ?>
                <?php if($c==0){ ?> 
                    <div class="row">
                <?php } $c++; ?>
                <div class="col-lg-3 col-sm-12 mt-2  mb-2">
                    <div class="p-1 bg-success text-white text-uppercase text-center">
                        <div class="row ">
                            <div class="col-lg-7 col-sm-12">
                                    <h5><?= $r['titulo'] ?></h5>  
                                <small class="text-warning"><?= $r['fecha'] ?></small>
                            </div>
                            <div class="col-5 p-1">
                                    <a href="deleteFoto.php?id= <?= $r['idFoto'] ?> " class="btn btn-danger mt-2 p-1">Eliminar</a>
                            </div>
                        </div>
                         
                    </div>
                <img class="img-round w-100" src="lib/fotos/<?= $r['foto'] ?>"  alt="">
                    <div class="bg-dark text-white text-uppercase p-2">
                    <a href="detalleFoto.php?id= <?= $r['idFoto'] ?> " class="btn btn-danger mt-2 p-1">Ver Mas...</a>
                    </div>
              </div>
              <?php  if($c==4){ ?>                                            
            </div>
            <?php $c=0; }  ?>
            <?php  } ?>  
        
       
        
    </div> 
</div>
<?php
include "partes/rodapie.php";
?>