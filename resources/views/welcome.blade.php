<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cluster Automotriz</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
    



    <body data-bs-theme="light" class="antialiased" >
    <header class="header">
        <div class="container logo_nav_container">
            <a href="#" class="logo">
                <img src="http://localhost/cluster/resources/views/img/logo4.png" alt="">
                    </a>
                  
                    <nav class="Navigation">
                        <ul>
 
                            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    
                        <li><a class="nav-link" href="#">Inicio</a></li>        
                            <li><a class="nav-link" href="http://127.0.0.1:8000/Multimedia">Multimedia</a></li>
                            <li><a class="nav-link" href="http://127.0.0.1:8000/nosotros">Nosotros</a></li>
                            <li><a class="nav-link" href="http://127.0.0.1:8000/noticias">Boletines</a></li>
                            <li><a class="nav-link" href="http://127.0.0.1:8000/solicitud">Solicitudes</a></li>
                            <li><a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline nav-link">Editar</a></li>   
                    @else
                        
                        <li><a class="nav-link" href="#">Inicio</a></li>        
                            <li><a class="nav-link" href="http://127.0.0.1:8000/Multimedia">Multimedia</a></li>
                            <li><a class="nav-link" href="http://127.0.0.1:8000/nosotros">Nosotros</a></li>
                            <li><a class="nav-link" href="http://127.0.0.1:8000/noticias">Boletines</a></li>
                            <li><a class="nav-link" href="http://127.0.0.1:8000/solicitud">Solicitudes</a></li>
                            <button class="btn rounded-fill" ><i class= "bi bi moon-fill" ></i></button>
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline nav-link">Iniciar sesion</a></li>
                        @if (Route::has('register'))
                            
                        @endif
                    @endauth
                </div>
            @endif
                            
                        </ul>
                    </nav>
                    
        </div>
        </div>
       
</header>
<br>
<br>

<h1>  </h1>
 
 /*aqui nos quedamos
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://scontent.fpbc6-1.fna.fbcdn.net/v/t39.30808-6/335154671_900747411171864_1986993808391298936_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_ohc=LtoGCL0S05AAX8_ZPhF&_nc_ht=scontent.fpbc6-1.fna&oh=00_AfCQvrPdRdr0sTnym68eLLYQo7TE1EzQtbqcH8WWj27nDA&oe=64243DB8" class="d-block w-100" alt="banner 1">
    </div>
    <div class="carousel-item">
      <img src="https://scontent.fpbc6-1.fna.fbcdn.net/v/t39.30808-6/331322013_6112578005472849_7334591198393335497_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_ohc=JB5XVhQKwxYAX-Uvgf_&_nc_ht=scontent.fpbc6-1.fna&oh=00_AfC9jHGx9mmg0mWhmmHYU2LuRqgesxIgJMAw010rqw6TWw&oe=642346D6" class="d-block w-100" alt="banner 2">
    </div>
    <div class="carousel-item">
      <img src="https://scontent.fpbc6-1.fna.fbcdn.net/v/t39.30808-6/331232245_1412944642868510_229723035242670019_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_ohc=L2wjo82rGZkAX8UakMy&_nc_ht=scontent.fpbc6-1.fna&oh=00_AfC1BezJVUZL23N1jqZ_SQvC9EKFR7EieOXsna-1h7zWnA&oe=64238E47" class="d-block w-100" alt="banner 3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 

    <div class="org">
        <h2 class="titulos">Mensaje de Bienvenida</h2>
    <p class="letra"> El Clúster Automotriz Zona Centro te da la más cordial bienvenida y te invita a conocer cada uno de los servicios y beneficios que ofrecemos desde cada uno de los comités que conforman nuestro organismo, y que llevamos a cabo para elevar el desarrollo y competitividad de uno de los sectores más importantes del país a nuestros socios afiliados y así, cumplir con el propósito de fortalecer al sector Automotriz en la región de Puebla – Tlaxcala y alrededores.
<br>
<br>
    Así pues, trabajaremos hombro a hombro para ser referentes y punta de lanza por una industria solvente y con certidumbre 
    laboral, económica y de desarrollo
    </p>
<br>

    <i class="fa fa-check-circle" style="font-size:15px;color:rgb(0, 255, 8)"></i> Consejo Directivo del Clúster Automotriz Zona Centro (CLAUZ)
<br>
<br>
<br>
    
        <h2 class="titulos">¿Quienes Somos?</h2>
        <div class="cuadro1">
            <div class="tarjeta">
                <div class="contenido">
                <figure>
                <img src="http://localhost/cluster/resources/views/img/mision.png" alt="" width="100px">
        </figure>
        
        <h3 style="color:Black ;">MISION</h3>
        <h5 class="letra">Ser el espacio de encuentro del ecosistema de la industria automotriz de la región Puebla -Tlaxcala que facilita e instrumenta la vinculación, la colaboración y la coordinación entre empresas, instituciones académicas y gobierno para promover y fortalecer las capacidades y competencias humanas, tecnológicas y productivas de las empresas de la industria, así como construir las condiciones para un ambiente que favorezca el desarrollo integral y sustentable de toda la cadena de valor en la región</h5>
        </div>
        
    </div>
    <div class="tarjeta">
        <div class="contenido">
        <figure>
    <img src="http://localhost/cluster/resources/views/img/vision.png" alt="" width="100px">
        </figure>
    
        <h3 style="color:Black ;">VISION</h3>
        <h5 class="letra"> La misión de Clúster es que Puebla y Tlaxcala sea una de las regiones lideres en desarrollo y competitividad para la industria automotriz de la región en todo la rama del sector automotriz. </h5>
    </div>
    
    </div>
    </div>
    <br>
    <br>

    <div class="cuadro1">
        <div class="tarjeta">
            <div class="contenido">
            <figure>
        <img src="http://localhost/cluster/resources/views/img/objetivo.png" alt="" width="100px">
    </figure>
    
    <h3 style="color:Black ;">OBJETIVO</h3>
    <h5 class="letra">Contribuir a la construcción de una región prospera, de progreso, de vanguardia y bienestar cuya imagen sea reconocida como tal en Norteamérica y en el resto del Mundo.</h5>
    </div>
</div>
<div class="tarjeta">
    <div class="contenido">
    <figure>
<img src="http://localhost/cluster/resources/views/img/nosotros.png" alt="" width="100px">
    </figure>

    <h3 style="color:Black ;">NOSOTROS</h3>
    <h5 class="letra">Somos una Asociación que agrupa a empresas del sector automotriz, universidades y gobierno que conjuntamente colaboran para lograr alcances competitivos en pro al desarrollo Industrial Automotriz de Puebla y Tlaxcala.</h5>

</div>

</div>
</div>
</div>
<br>
<br>
<center>
<h2 class="titulos">ENCUENTRANOS</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4637568254925!2d-98.2384974651123!3d19.0433371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc725a47e5c8f%3A0x50bb54ef6c402e30!2sCluster%20Automotriz%20Zona%20Centro%20A.C.%20(CLAUZ)!5e0!3m2!1ses!2smx!4v1678294830546!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</center>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        </body>
        
</html>
          