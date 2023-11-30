<?php
require('class_factura.php');

$productos[]=array(	'cantidad' => 1,
					'descripcion' => strtoupper("Servicios de desarrollo de software"),
					'precioUnitario' =>1000.00
			);
$nueva_factura = array(
							'razon'			=>'Neogaleno S A de C V',
							'rif'			=>'NEO220704EP6',
							'direccion1'	=>'Lago Alberto 320 2512, Anahuac I Secc.',
							'direccion2'	=>'Miguel Hidalgo, CP 11320. CDMX.',
							'fecha'			=>'31/11/2023', // '29/09/2023',
							'productos'		=>$productos,
							'nro'			=> '129',
						);

new Factura($nueva_factura);
