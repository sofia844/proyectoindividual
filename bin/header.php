<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKSF2024</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



</head>
<body>
<?php
$nombre_archivo=$_SERVER["PHP_SELF"];
$menu=["INICIO","PROYECTOS","INICIO SESION","REGISTRARSE","¿QUIENES SOMOS?","GALERIA"];
if($nombre_archivo=="/MKSF2024/inicio.php")
{
  $enlaces=["inicio.php","src/proyectos.php","src/inicioseccion.php","src/registrarse.php","src/quienessomos.php", "src/galeria.php"];
}
  else
  {
    $enlaces=["../inicio.php","proyectos.php","inicioseccion.php","registrarse.php","quienessomos.php","galeria.php"];

  }


$cantidaddeelementos=count($menu)-1;
?>
    
<div class="container-fluid text-center">

        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid" style="background-color: #ffbce5; box-shadow: 0px 0px 10px 15px #ffbce5;">
                    <?php
                    if($nombre_archivo=="/MKSF2024/inicio.php")
                    {
                      ?>
                       <img src="IMAGENESLOGOS/MKSF.png" style="width: 100px; height: 100px;">
                      <?php
                    }
                    else
                    {
                      ?>
                      <img src="../IMAGENESLOGOS/MKSF.png" style="width: 100px; height: 100px;">
                     <?php
                    }
                    ?>
                     
                      <a class="navbar-brand" href="#" style="font-size: 25px;"> ...SF </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav" style="font-family: cursive; font-size: 18px;">
                          <li class="nav-item">
                        
                            <?php
      for($i=0; $i<=$cantidaddeelementos; $i++){
      ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $enlaces[$i];?>">
          <?php echo $menu[$i]; ?>
          </a>
        </li>

        <?php 
      }
      ?>
        
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>


       
