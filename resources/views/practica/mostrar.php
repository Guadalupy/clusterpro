<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Catalogo de productos</h1>
    <div class="catalog">
        <table border="1">
            <tr>
                <td>NOMBRE</td> <td>FOTOGRAFIA</td>
            </tr>
<?php
$link=mysqli_connect("localhost","root","") or die('No se puedo conectar:'.mysqli_error());
echo"conexion exitosa";

$db=mysqli_select_db($link,"cocacola") or die("No se pudo seleccionar la base de datos".mysqli_error());

$query="SELECT * FROM productos";
$result=mysqli_query($link,$query) or die("no se realiza la insercion".mysqli_error());
while($line=mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>".$line['Nombre']."</td>
    <td>"."<img height='70px' src='data:image/jpg;base64,".base64_encode($line['Foto'])."'/>"."</td>
    </tr>";
}
mysqli_free_result($result);
mysqli_close($link);
?>
</table>
</div>


</body>
</html>