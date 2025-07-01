<?php
require('class_factura.php');

$productos[]=array(	'cantidad' => 1,
					'descripcion' => strtoupper("Servicios de desarrollo de software"),
					'precioUnitario' => 1050
					// 1050.00
					// dic 15/12/2024 1575
			);
$nueva_factura = array(
							'razon'			=>'Neogaleno S A de C V',
							'rif'			=>'NEO220704EP6',
							'direccion1'	=>'Lago Alberto 320 2512, Anahuac I Secc.',
							'direccion2'	=>'Miguel Hidalgo, CP 11320. CDMX.',
							'fecha'			=>'30/06/2025',
							'productos'		=>$productos,
							'nro'			=> '149',
						);

new Factura($nueva_factura);
