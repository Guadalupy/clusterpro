
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
<br><br><br><br><br>
<center>

<h1>Requisitos de la empresa</h1></center>



<div class="d-flex justify-content-center">
  <div class="card" style="width: 18rem; margin-right: 10px;">
    <img src="http://localhost/cluster/resources/views/img/gerente.png" class="card-img-top" alt="Imagen de ejemplo 1">
    <div class="card-body">
    <h5 class="card-title"> <b><i> Gerente</i></b></h5>
      <p class="card-text">
      <p class="card-text"><li align="left" type="circle">Gestión de la tecnología de la información y de los sistemas informáticos</li>
                           <li align="left" type="circle">Control y evaluación de las operaciones de datos electrónicos e informáticos</li>
                           <li align="left" type="circle">Gestión del personal del departamento de TI</li>
                           <li align="left" type="circle">3 años de experiencia</li>
      
      



    </div>
  </div>
  <div class="card centrar" style="width: 18rem;">
     <img src="http://localhost/cluster/resources/views/img/informacion.png" class="card-img-top" alt="imagen" align="right">  
    <div class="card-body">
      <h5 class="card-title"><b>Información de la empresa</b></h5>
      <p class="card-text">  <li align="left" type="circle">Calle Osa Mayor 2523, Reserva Territorial Atlixcáyotl, Corredor Comercial Desarrollo Atlixcayotl, 72193 Puebla, Puebla</li>
                             <li align="left" type="circle">Teléfono:(222) 679-1544</li>
                             <li align="left" type="circle">Email:
                              clusterautomotriz23@gmail.com</li> 
        


     

    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="http://localhost/cluster/resources/views/img/programador.png" class="card-img-top" alt="Imagen de ejemplo 2">
    <div class="card-body">
      <h5 class="card-title"><b>Desarrollador</b></h5>
      <p class="card-text"><li align="left" type="circle">Contar con formación en programación.</li>
                           <li align="left" type="circle">Ser capaz de resolver problemas.</li>
                           <li align="left" type="circle">Contar con habilidades para la comunicación.</li>
                           <li align="left" type="circle">Conocer diversos lenguajes de programación.</li>
                           <li align="left" type="circle">Contar con habilidades analíticas.</li>
                            
    </div>
  </div>
</div>

<br>
<center>
<a href ="http://127.0.0.1:8000/register" class="btn btn-primary">  Quieres ser parte de nuestro equipo. Da click aqui</a>
<br>
<br>
<br>
</center> 
<br>

<h2 class="titulos">ENCUENTRANOS</h2>
    <center>
  
  <a href="https://www.google.com/maps/place/Cluster+Automotriz+Zona+Centro+A.C.+(CLAUZ)/data=!4m7!3m6!1s0x85cfc725a47e5c8f:0x50bb54ef6c402e30!8m2!3d19.0433371!4d-98.2341201!16s%2Fg%2F11gh2vpy_m!19sChIJj1x-pCXHz4URMC5AbO9Uu1A?authuser=0&hl=es-419&rclk=1">
         <img class="centra" src="http://localhost/cluster/resources/views/img/ubicacion.png" alt="" width="800" height="450">
  </a>
    <center>
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
            <h2>AVISO DE PRIVACIDAD</h2>
            <a href="http://localhost/cluster/resources/views/AVISO_DE_PRIVACIDAD.pdf">AVISO DE PRIVACIDAD</a>
            <br>
            <br>
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