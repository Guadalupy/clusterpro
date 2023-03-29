<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cluster Automotriz</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="http://localhost/cluster/public/css/estilos.css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>


      
    </head>
<body>
    <header class="header">
        <div class="container logo_nav_container">
            <a href="#" class="logo">
                <img src="http://localhost/cluster/resources/views/img/logo4.png" alt="">
                    </a>
                  
                    <nav class="Navigation">
                        <ul>
                            <li><a class="nav-link" href="http://127.0.0.1:8000">Inicio</a></li>        
                            <li><a class="nav-link" href="http://127.0.0.1:8000/Multimedia">Multimedia</a></li>
                            <li><a class="nav-link" href="http://127.0.0.1:8000/nosotros">Nosotros</a></li>
                            <li><a class="nav-link" href="http://127.0.0.1:8000/noticias">Boletines</a></li>
                            <li><a class="nav-link" href="http://127.0.0.1:8000/solicitud">Solicitudes</a></li>
                            <li><a class="nav-link" href="http://127.0.0.1:8000/login">Iniciar sesion</a></li>
                            
                        </ul>
                    </nav>
        </div> 
    </header>
<?php


$conn= mysqli_connect(
    'localhost',
    'root',
    '',
    'cluster');

if (!$conn) //fue falso y con el not lo volvemos true//
{
    echo 'Error en la conexión';
    exit;
}
echo 'Conexión Correcta';//





?>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="col md-8">
<table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre del boletin </th>
                <th> Descripcion </th>
                <th> Fecha</th>

                
            </tr>
       </thead>
       <tbody>
           <?php 
           $query="SELECT * from boletines";
           $result_tasks=mysqli_query($conn,$query);
           while($row = mysqli_fetch_array($result_tasks)){ ?>
           <tr>
               <td> <?php echo $row["nombre"]?> </td>
               <td> <?php echo $row["descripcion"]?></td>
               <td> <?php echo $row["fecha"]?></td>
    
              
              </tr> 
              
          <?php }
          

          ?>
    </tbody>
    </table>

      </div>
  </div>
</div> 
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="http://localhost/cluster/resources/views/img/logo3.png" alt="Logo de SLee Dw">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>Contacto</h2>
            <p>Calle Osa Mayor 2523, Reserva Territorial Atlixcáyotl, Corredor Comercial Desarrollo Atlixcayotl, 72193 Puebla, Puebla</p>
            <p>Número de Teléfono : (222) 679-1544</p>
            <p>Email : clusterautomotriz23@gmail.com</p>
            
        </div>
        <div class="box">
            
            <a href="http://localhost/cluster/resources/views/AVISO_DE_PRIVACIDAD.pdf">AVISO DE PRIVACIDAD</a>
            <br>
            <br>
            <a
             href="https://www.mozilla.org/es-ES/"
             title="El mejor lugar para encontrar más información acerca de la misión de Mozilla
            y cómo contribuir"
             >la página de inicio de Mozilla</a
              >.

            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="https://www.facebook.com/profile.php?id=100090775326007" class="fa fa-facebook"></a>
                <a href="https://twitter.com/clauz_mx/" class="fa fa-twitter"></a>
                <a href="https://www.instagram.com/cluzterpuebla/" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com/in/cluster-automotriz-zona-centro-8b2945268" class="fa fa-linkedin"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2022 <b> Clauz</b> Todos los Derechos Reservados. </small>
    </div>
</footer>
</html>