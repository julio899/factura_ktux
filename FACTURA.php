<?php
require('class_factura.php');

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

new Factura($nueva_factura);
