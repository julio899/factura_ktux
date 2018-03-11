<?php namespace ktux\models;
class FacturaModel{

	function __construct($datos)
	{
			
			$pdf=new PDF(); 
			// [ Establesco Todos los datos que conendra la Factura ]
			$pdf->set_data($datos);
			$pdf->FPDF('P','mm','Letter');
			// Esta funcion la uso cuando voy a imprimir  al final el numero de la paguina $pdf->AliasNbPages();
			$pdf->AddPage();
			$pdf->SetFont('Arial','',12);
			//$pdf->SetTextColor(20,20,250); COLOR AZUL
			$pdf->SetTextColor(0,0,0);
			$pdf->menbrete();
			$pdf->detalle($datos['productos']);
			$pdf->Output();	
	}



}//fin de clase factura

