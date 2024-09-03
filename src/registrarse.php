<?php
include("../bin/header.php");
?>
<br>
<br>

<form action="registrarse.php"  method="POST">

    
        <h2>
        ¡Regístrate en MKSF!

¡Únete a nuestra comunidad de amantes del maquillaje!

<br>
Completa el registro para acceder
 a contenido exclusivo, ofertas especiales y mucho más. 💖💋
 <br>
 ¡Es hora de desatar tu creatividad!
</h2>
<center>
<div>
    <img src="IMAGENESPRINCIPAL/6.png"style=" width: 300px;">
</div>     
</center> 
<br>
<br>
     

<center>
<div id="sesion1">
    <br>
        <label>INGRESA TU NOMBRE</label>
        <br>
        <br>
        <input type="text" name="nombre" id="">
        <br>
        <br>
        <label>INGRESA TU APELLIDO</label>
        <br>
        <br>
        <input type="text" name="apellido" id="">
        <br>
        <br>
        <label>CREA TU COONTRASEÑA</label>
        <br>
        <br>
        <input type="password" name="contraseña" id="">
        <br>
        <br>
        <label>CONFIRMA TU COONTRASEÑA</label>
        <br>
        <br>
        <input type="password" name="confirmar" id="">
        <br>
        <br>
        <input type="submit" value="ENVIAR" id="boton1">
        <br>
        <?php
        ERROR_REPORTING(0);
        $contraseña=$_POST["contraseña"];
        $confirmar=$_POST["confirmar"]; 
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"]; 
        

        if(($contraseña == $confirmar )) {
            echo "¡BIENVENIDO!";
        }
        else {
            echo "LA CONTRASEÑA NO COINCIDE";
        }
?>


    </div>
    </center>
    </form>
    <br>
    <br>
    <br>
    <br>
    <section id="informacion-adicional">
              <h2>Más sobre MK SOFÍA</h2>
              <br>
              <p>En MK SOFÍA, nos apasiona no solo resaltar tu belleza exterior, sino también empoderarte con conocimientos y técnicas que te permitan expresar tu creatividad a través del maquillaje. Explora nuestras secciones especiales:</p>
              <ul>
                  <li><strong>Blog de Belleza:</strong> Artículos informativos sobre las últimas tendencias y productos.</li>
                  <br>
                  <li><strong>Tutoriales Exclusivos:</strong> Accede a tutoriales detallados y exclusivos para crear looks impresionantes.</li>
                  <br>
                  <li><strong>Comunidad MK SOFÍA:</strong> Únete a nuestra comunidad, comparte tus experiencias y aprende de otros amantes del maquillaje.</li>
              </ul>
              <p>¡Sumérgete en nuestro universo de belleza y descubre todo lo que MK SOFÍA tiene para ofrecer!</p>
        </section>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>

          <div class="col-12">
          <center>  <img src="IMAGENESPRINCIPAL/8.png" style="border-radius: 50%; width: 300px;"></center>
          </div>
        </div>
    
          
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</head>




<?php
include("../bin/footer.php");
?>