# factura_ktux
creacion del pdf del talonario de facturas de ktux

Migrando al standar psr-4

depende de la libreria fpdf "setasign/fpdf": "1.7"
*(Pendiente a estandarizar a psr4  o psr0)
* agregada a (like https://packagist.org/packages/julio899/factura_ktux) para el uso con composer
*** composer require julio899/factura_ktux **
	> instalar composer
	> correr composer install

```
require_once('vendor/autoload.php');
use ktux\models\FacturaModel as FacturaKtux;

$productos[]=array(	
					'cantidad' => 100,
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
```
