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
    <br>
    <br><br><br>
    <br>
<div class="container">
<a class="btn btn-danger btn-sm float-right" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
<div class="float-right">
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
        
        
            
                <center>
                <div class="card-header">{{ __('Cluster Automotriz') }}</div>
                </center>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center>
                          
                  <h1>  {{ __( 'Bienvenido') }}</h1>
                    <br>
                    <br>  
                    <a href="http://127.0.0.1:8000/boletines"><button class="btn btn-primary">Clic para editar los boletines</button></a> 
                    <br>
                    <br>
                    <a href="http://127.0.0.1:8000/solicitudes"> <button class="btn btn-secondary"> Clic para ser parte de nuestra empresa </button></a>
                    </center>
                </div>
            </div>
        </div>
    </div>


