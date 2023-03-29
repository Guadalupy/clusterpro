


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
<center>
<h1>Requisitos de la empresa</h1>
</center>


<div class="d-flex justify-content-center">
  <div class="card" style="width: 18rem; margin-right: 10px;">
    <img src="http://localhost/cluster/resources/views/img/gerente.png" class="card-img-top" alt="Imagen de ejemplo 1">
    <div class="card-body">
      <h5 class="card-title">Título de la tarjeta 1</h5>
      <p class="card-text">Texto de ejemplo para la tarjeta 1</p>
      
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="http://localhost/cluster/resources/views/img/gerente.png" class="card-img-top" alt="Imagen de ejemplo 2">
    <div class="card-body">
      <h5 class="card-title">Título de la tarjeta 2</h5>
      <p class="card-text">Texto de ejemplo para la tarjeta 2</p>
      <a href="#" class="btn btn-primary">Ir a algún lugar</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="http://localhost/cluster/resources/views/img/gerente.png" class="card-img-top" alt="Imagen de ejemplo 2">
    <div class="card-body">
      <h5 class="card-title">Título de la tarjeta 2</h5>
      <p class="card-text">Texto de ejemplo para la tarjeta 2</p>
      <a href="#" class="btn btn-primary">Ir a algún lugar</a>
    </div>
  </div>
</div>

<br>
   
<form action="{{ route('Formulario') }}" method="post">
    @csrf

    <div>
        <input type="text" name="nombre" placeholder="Título" >
    </div>

    <div>
        <textarea name="email" placeholder="Cuerpo"></textarea>
    </div>

    <div>
        <button type="submit">Crear Post</button>
    </div>
</form>

  <section>
    <div class="container">
    <form action="/posts">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center">
              <h1>Datos del solicitante</h1>
              <p class="text-h3"> </p>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col mt-4">
              <input type="text" class="form-control" placeholder="Nombre" id="nombre">
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="email" class="form-control" placeholder="Email" id="email">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col mt-4">
              <input type="tel" class="form-control" placeholder="Numero de telefono" id="numero">
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="file"  >
            </div>
            </div>
          <div class="row justify-content-start mt-4">
            <div class="col">
              <button class="btn btn-primary mt-4">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </section>


  
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
            <p>Email : rguzman@clauz.mx</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4637568254925!2d-98.2384974651123!3d19.0433371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc725a47e5c8f%3A0x50bb54ef6c402e30!2sCluster%20Automotriz%20Zona%20Centro%20A.C.%20(CLAUZ)!5e0!3m2!1ses!2smx!4v1678294830546!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="box">
            
            <a href="http://localhost/cluster/resources/views/AVISO_DE_PRIVACIDAD.pdf">AVISO DE PRIVACIDAD</a>
                <br>
                <br>

            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="https://www.facebook.com/clauzmx/" class="fa fa-facebook"></a>
                <a href="https://twitter.com/clauz_mx/" class="fa fa-twitter"></a>
                <a href="https://www.instagram.com/clauzmx/" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com/company/clauz/?original_referer=http%3A%2F%2Fclauz.mx%2F" class="fa fa-linkedin"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2022 <b> Clauz</b> Todos los Derechos Reservados. </small>
    </div>
</footer>
</html>