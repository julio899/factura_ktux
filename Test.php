 <?php require_once('vendor/autoload.php');
use ktux\models\FacturaModel as FacturaKtux;
/* Probador */
$productos[]=array(	'cantidad' => 100,
			'descripcion' => strtoupper("Estuches usos mixtos"),
			'precioUnitario' =>1600.00
		);

$nueva_factura = array(
			'razon'		=>'Probando Tester',
			'rif'		=>'V-12345678',
			'direccion1'	=>'sector las delicias, urb. canta rana',
			'direccion2'	=>'Maracay, Edo. Aragua',
			'fecha'		=>'19/11/2015',
			'productos'	=>$productos
		      );

$f = new FacturaKtux($nueva_factura);
 
 ?>