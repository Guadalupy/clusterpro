<?php
$nombre=$_POST["Nombre"];
$foto=addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
$link=mysqli_connect("localhost","root","") or die('No se puedo conectar:'.mysqli_error());
echo"conexion exitosa";

$db=mysqli_select_db($link,"cocacola") or die("No se pudo seleccionar la base de datos".mysqli_error());

$query="INSERT INTO productos(nombre,foto) VALUES('$nombre','$foto')";
$result=mysqli_query($link,$query) or die("no se realiza la insercion".mysqli_error());

echo "se realizo satisfactoriamente el Alta de los datos.\n";
?>