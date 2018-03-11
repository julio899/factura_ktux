<?php namespace ktux\models;
 use FPDF;
class PDF extends FPDF{
	var $razon	="";
	var $rif	="";
	var $direccion1	="";
	var $direccion2	="";
	var $fecha	="";
	var $productos	=NULL;
	var $totalMontoBruto=0;

function set_data($datos)
{
		$this->razon=$datos['razon'];
		$this->rif=$datos['rif'];
		$this->direccion1=$datos['direccion1'];
		$this->direccion2=$datos['direccion2'];
		$this->fecha=$datos['fecha'];
		$this->productos=$datos['productos'];
}//fin de set_data();

function menbrete()
{
	$this->Ln(4);
	$this->Ln(4);
	$this->setY(55);
	$this->setX(40);
	$this->Cell(24,7,$this->fecha,1,1,'c');

	/*datos del cliente*/
	$this->setY(48);
	//$this->setx(75);
	$this->SetFont('Arial','',8);
	$this->cell(70);
	$this->Cell(100,4,utf8_decode('Nombre o Razón Social: '.$this->razon),0,0,'c');
	$this->Ln(4);
	$this->cell(70);
	$this->Cell(100,4,utf8_decode('Cedula o Rif:'.$this->rif),0,0,'c');
	$this->Ln(4);
	$this->cell(70);
	$this->Cell(100,4,utf8_decode('Dirección: '.$this->direccion1),0,0,'c');
	$this->Ln(4);
	$this->cell(70);
	$this->Cell(100,4,utf8_decode($this->direccion2),0,0,'c');

} // fin de funcion menbrete()

function detalle($productos)
{

	$this->SetFont('Arial','',12);
	$this->setX(10);
	$this->setY(90);
	//$this->Ln(4);
	for ($i=0; $i <count($productos) ; $i++) 
	{
		$this->cell(8);		
			if($productos[$i]['cantidad']==0)
			{
				$this->Cell(10,5,'',0,1,'c');
			}else{
				$this->Cell(10,5,utf8_decode($productos[$i]['cantidad']),0,1,'c');
			     }
		$this->Ln(2);
	}
	
	$this->setX(10);
	$this->setY(90);
	
	for ($i=0; $i <count($productos) ; $i++) 
	{
		$this->cell(20);
		$this->Cell(90,5,utf8_decode($productos[$i]['descripcion']),0,1,'c');
		$this->Ln(2);
	}

	$this->setX(10);
	$this->setY(90);
	
	for ($i=0; $i <count($productos) ; $i++) 
	{
		$this->cell(139);
			if($productos[$i]['precioUnitario']==0)
			{
				$this->Cell(15,5,'',0,1,'c');

			}else{
				$this->Cell(15,5,utf8_decode(number_format($productos[$i]['precioUnitario'],2,",",".")),0,1,'R');
			}
		$this->Ln(2);
	}

	$this->setX(10);
	$this->setY(90);
	$montobrutoproducto=0;
	
	for ($i=0; $i <count($productos) ; $i++) 
	{
		$this->cell(162);
		$montobrutoproducto=($productos[$i]['precioUnitario']*$productos[$i]['cantidad']);

		$this->totalMontoBruto+=$montobrutoproducto;
			if($montobrutoproducto==0)
			{
				$this->Cell(15,5,'',0,1,'c');
			}else{
				$this->Cell(15,5,utf8_decode(number_format(($montobrutoproducto),2,",",".")),0,1,'R');
			}
		$this->Ln(2);
	}

	$cordX=159;
	$this->setY(202);
	$this->setX($cordX);
	/*subtotal*/
	$this->Cell(20,5,utf8_decode(number_format(($this->totalMontoBruto),2,",",".")),0,0,'c');
	//$this->Ln(18);

	/*iva*/
	$montoIva=((($this->totalMontoBruto)*12)/100);
	$this->setY(219);
	$this->setX(144);
	$this->Cell(6,5,'12',0,0,'c');
	if($montoIva>1000){
		$this->cell(10);
	$this->Cell(20,5,utf8_decode(number_format(($montoIva),2,",",".")),0,0,'c');
	}else{
	$this->cell(11);
	$this->Cell(20,5,utf8_decode(number_format(($montoIva),2,",",".")),0,0,'c');

	}

	/*TOTAL a pagar*/
	$total=($this->totalMontoBruto+$montoIva);
	$this->setY(227);
	$this->setX($cordX);
	$this->SetFont('Arial','B',12);
	$this->Cell(20,5,utf8_decode(number_format(($total),2,",",".")),0,0,'c');
} // fin de funcion detalle($productos)

}
