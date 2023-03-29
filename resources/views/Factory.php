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
//$sql = ;
    //if ($result=mysqli_query($conn,$sql)) {
       // $rowcount=mysqli_num_rows($result);
     //   echo "The total number of rows are: ".$rowcount; 
   // }


abstract class Solicitud{
    protected $result;
    protected $rowcount;
	protected $puesto;
	public function getPuesto(){
        include_once "conexion.php";
            $puesto= "SELECT * FROM solicitudes WHERE puesto='Desarrollador'";
         if ($result=mysqli_query($conn,$puesto)) {
        $rowcount=mysqli_num_rows($result);
        echo $rowcount; 
    }
		return $this->puesto;
	}

    public function getPuestop(){
        $conn= mysqli_connect(
            'localhost',
            'root',
            '',
            'cluster');
            $puesto= "SELECT * FROM solicitudes WHERE puesto='Gerente'";
         if ($result=mysqli_query($conn,$puesto)) {
        $rowcount=mysqli_num_rows($result);
        echo $rowcount; 
    }
		return $this->puesto;
	}


}
 
class Desarrollador extends Solicitud{
	protected $puesto;

    
}
 
class Gerente extends Solicitud{
	protected $puesto;
}
 
class PuestoFactory{
	public static function crearPuesto($tipo){
		$clasebase = 'Solicitud';
		if(class_exists($tipo) && is_subclass_of($tipo, $clasebase))
			return new $tipo;
		else
			throw new Exception("No se reconoce el tipo de solicitud $tipo");
 
	}
 
}
$puesto = Array('Desarrollador');
$puestop = Array('Gerente');

 
foreach ($puesto as $v) {
    echo "  Vacantes de $v:  ";
	echo PuestoFactory::crearPuesto($v)->getPuesto(). "<br />";
    
}
foreach ($puestop as $p) {
	echo "  Vacantes de $p:  ";
	echo PuestoFactory::crearPuesto($p)->getPuestop(). "<br />";
    
}

?>