<?php
session_start();

require 'funciones.php';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>La única esperanza</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
  </head>

  <body>
    

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Servicios</a>
          <a class="navbar-brand" href="nosotros.php">Sobre Nosotros</a>
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="carrito.php" class="btn">CARRITO<span class="badge"><?php print cantidadPeliculas(); ?></span></a>
            </li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
       <!-- /container -->
    <div class="container" id="main">

    <div class="row">
    <div class="jumbotron text-center">
        <h1>Funeria La Única Esperanza</h1>
        <p>Funeraria "La Única Esperanza" fue fundada en el año 1998 en Sonsonate por Carlos     Reyes,
            tenemos 22 años en la industria de servicios funerales proporcionando a nuestros clientes los servicios
            necesarios de la mejor manera y con la mejor actitud posible, a lo largo de los años hemos ido actualizando y
            agregando más servicios con el único propósito de que los clientes encuentren el producto adecuado.
            Luego en 2002 la Funeraria se expandió a Santa Ana, implementando así el local de dicho departamento,
            el cual de igual manera fue fundado por Carlos Reyes.</p> 
    </div>
    
        <br><br>
        
        <table class="table table-sm" style="text-align:center;">
            <tr class="info">
                <td > Misión</td>
                <td >Visión</td>
            </tr>
            <tr>
                <td><p>" Brindar el mejor servicio hacía nuestros clientes demostrando así, el compromiso con la sociedad, ofreciéndoles de la manera más amable y humana asistencia en los momentos difíciles velando por la tranquilidad de quiénes deposita la confianza en nosotros."</p></td>

                <td><p>" Ser la empresa líder de servicios funerarios en El Salvador, logrando satisfacer las necesidades de nuestros clientes, para lograr así un mayor prestigio para la compañía y de esta forma poder, a nivel nacional, brindar nuestros servicios con la mayor calidad y amabilidad posible."</p></td>
            </tr>
        </table>
            <br>
            <br>

            <p class="text-center">Somos una empresa dedicada a brindar servicios funerarios a nuestros clientes, tenemos varios tipos de servcios buscando así, darle al cliente la oportunidad
            de obtener lo que mejor se acople a lo que estás buscando. <br> <br>
            Nuestros locales se encuentran ubicados en:</p>

            <table class="table table-sm" style="text-align:center;">
                <tr>
                    <td>Santa Ana</td>
                    <td>Sonsonate</td>
                </tr>
                <tr>
                    <td><img src="assets/imagenes/local1.png" class="img-circle" alt="Cinque Terre" width="304" height="236" alt="" width="500px"></td>
                    <td><img src="assets/imagenes/local2.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236" alt="" width="500px"></td>
                </tr>
            </table>
            <br>
            <br>
            <table class="table table-sm" style="text-align:center;">
                <tr>
                    <td>
                    <h3>Estamos ubicados en:</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1368.7261661571738!2d-89.55904162177129!3d13.997711494537834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f62e9a205fb7415%3A0x16af37cc3d6635bb!2sLa%20%C3%9Anica%20Esperanza.!5e0!3m2!1ses-419!2ssv!4v1622520116804!5m2!1ses-419!2ssv" class="img-thumbnail" alt="Cinque Terre" width="100%" height="600vh" style="border:10;" allowfullscreen="" loading="lazy" class="mapa"></iframe>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <table class="table table-sm" style="text-align:center;">
            <STYLE>A {text-decoration: none;} </STYLE>
                <tr class="success">
                    <td><h4>Horarios de atención</h4></td>
                    <td><h4>Contactos</h4></td>
                </tr>
                <tr class="active">
                    <td><h3>Nuestros locales están abiertos y disponibles para tí 24/7, en el momento que
                            necesites nuestros servicios puedes llamar o cosultar</h3> <br>

                            <h3>Visítanos en:</h3>
                            <h5>6ta Av. Norte (entre 6ta y 8va), Calle poniente, Barrio San Juan, Santa Ana.</h5>
                    </td>
                    <td>
                     

                    
                    <a href="https://www.facebook.com/funeraleslaunicaesperanza" class="btn btn-primary">facebook</a> <br> <br>
                    
                    <a href="mailto:unicaesperanza@gmail.com" class="btn btn-danger">Correo Electronico</a> <br> <br>
                     
                        <img src="assets/imagenes/tel.PNG" width="50px"> 6118-9645 <br>
                        <img src="assets/imagenes/telfijo.png" width="50px"> 2441-1926

                    </td>
                </tr>
            </table>
      

    </div> 
 


    <!-- Bootstrap core JavaScript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
