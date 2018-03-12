<?php use ktux\models\FacturaModel as FacturaModel;
require_once('vendor/autoload.php');
/* Probador */
$productos[]=array(	'cantidad' => 100,
			'descripcion' => strtoupper("Estuches usos mixtos"),
			'precioUnitario' =>60.00
		);

$nueva_factura = array(
			'razon'		=>'Julio Vinachi',
			'rif'		=>'V-18266159',
			'direccion1'	=>'sector santa rita, urb. el valle',
			'direccion2'	=>'Maracay, Edo. Aragua',
			'fecha'		=>'19/11/2015',
			'productos'	=>$productos
		      );

$t = new FacturaModel($nueva_factura);
 ?>