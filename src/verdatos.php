<?php
include("conectar.php");

include("bin/header.php");
?>

<table class="table" style="margin-top:50px; box-shadow: 5px 5px 5px 5px; ">
  <thead>
    <tr>
      <th scope="col" style="color: #7f4ca5; font-family: Century Schoolbook; background-color:  #dbb6ee;">nombre de usuario</th>
      <th scope="col" style="color: #7f4ca5; font-family: Century Schoolbook; background-color:  #dbb6ee;">edad</th>
      <th scope="col" style="color: #7f4ca5; font-family: Century Schoolbook; background-color:  #dbb6ee;">contraseña</th>
      <th scope="col" style="color: #7f4ca5; font-family: Century Schoolbook; background-color:  #dbb6ee;">genero</th>
    </tr>
  </thead>

<?php
$consultar_datos=mysqli_query($conectar,"select * from iniciosesion");

while($resultado=mysqli_fetch_array($consultar_datos))
{


?>
  <tbody>
    <tr>

            <td style="font-family: Century Schoolbook; background-color: #dcbadb;">
                <?php    
                    echo "<li>".$resultado["nombre"];
                    echo "<br>"; 
                ?>
            </td>


            <td style="font-family: Century Schoolbook; background-color: #e8d1e7;">
                <?php
                    echo "<li>".$resultado["apellido"];
                ?>
            </td>



            <td style="font-family: Century Schoolbook; background-color: #c493d3;">
                <?php    
                    echo "<li>".$resultado["contrasena"];
                    echo "<br>"; 
                ?>
            </td>

            <td style="font-family: Century Schoolbook; background-color: #b988b8;">
                <?php    
                    echo "<li>".$resultado["confirmar"];
                    echo "<br>"; 
                }
                ?>
            </td>
    </tr>
  </tbody>
</table>

<?php
include("bin/footer.php")
?>