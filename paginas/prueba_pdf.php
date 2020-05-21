<?php
require('../pdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('../imagenes/logos/Logo.jpg',30,8,40);

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de productos',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(70,10,'Datos esenciales',0,0,'C');
    $this->ln();
    $this->cell(10,10, 'id', 1, 0, 'C', 0);
	$this->cell(30,10, 'Fecha', 1, 0, 'C', 0);
	$this->cell(35,10, 'Diligenciador', 1, 0, 'C', 0);
	$this->cell(30,10, 'Comprador', 1, 0, 'C', 0);
	$this->cell(30,10, 'Empresa', 1, 0, 'C', 0);
	$this->cell(30,10, 'Ciudad', 1, 0, 'C', 0);
	$this->ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}

require_once("../modelos/crud_basicos.php");
$res=new datosBasicos();
$result=$res->mostrar();


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
for ($i=0; $i <count($result) ; $i++) { 
	$pdf->cell(10,10, $result[$i]['id'], 1, 0, 'C', 0);
	$pdf->cell(30,10, $result[$i]['fecha'], 1, 0, 'C', 0);
	$pdf->cell(35,10, $result[$i]['diligenciador'], 1, 0, 'C', 0);
	$pdf->cell(30,10, $result[$i]['comprador'], 1, 0, 'C', 0);
	$pdf->cell(30,10, $result[$i]['empresa'], 1, 0, 'C', 0);
	$pdf->cell(30,10, $result[$i]['ciudad'], 1, 0, 'C', 0);
	$pdf->ln();
	$pdf->cell(30,10, $result[$i]['ciudad'], 1, 0, 'C', 0);

	



}
$pdf->Output();
?>