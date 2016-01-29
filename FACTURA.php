<?php
require('class_factura.php');

$productos[]=array(	'cantidad' => 3,
					'descripcion' => strtoupper("Cartucho (GENERICO) XL #122 Negro"),
					'precioUnitario' =>10714.29
			);
$nueva_factura = array(
							'razon'			=>'COMPACTO C.A.',
							'rif'			=>'J-30072142-6',
							'direccion1'	=>'AV INTERCOMUNAL TURMERO LOCAL PARCELA NRO 33 SECTOR',
							'direccion2'	=>'LA PROVIDENCIA, SAN JOAQUIN DE TURMERO ARAGUA ZONA POSTAL 210',
							'fecha'			=>'28/11/2015',
							'productos'		=>$productos
						);

new Factura($nueva_factura);