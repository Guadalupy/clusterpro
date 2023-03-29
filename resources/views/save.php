<?php
include("conexion.php");
if (isset($_POST["save-task"])){
    $nombre =$_POST["nombre"];
    $numero =$_POST["email"];
    $nombre =$_POST["numero"];
    $puesto =$_POST["puesto"];

    // echo $title;
   // echo $descripcion;

   $query= "INSERT INTO solicitudes( nombre, email, numero, puesto) values ('$nombre', '$email', '$numero', '$puesto')";
   $result=mysqli_query($conn, $query);
   if(!$result){
       die("Query failed");  
   }
    $_SESSION["message"]='Producto Guardado satisfactoriamente';
    $_SESSION["message_type"]='sucess'; 

 header("Location: http://127.0.0.1:8000/save.php");
   }
?>