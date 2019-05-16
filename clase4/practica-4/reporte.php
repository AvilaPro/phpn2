<?php
require_once 'fpdf/fpdf.php';

$usuarios = Array(
    "Eduardo" => 13,
    "miguel" => 30,
    "luis" => 50,
    "franklin" =>35);


$fpdf = new FPDF();

$fpdf->AddPage();
$fpdf->SetFont('Arial','B',16);
$fpdf->Cell(40,10,"NOMBRE",1);
$fpdf->Cell(40,10,"EDAD",1);
$fpdf->Ln();
foreach ($usuarios as $nombre => $edad){
    $fpdf->Cell(40,10,$nombre,1);
    $fpdf->Cell(40,10,$edad,1);
    $fpdf->Ln();
}
$fpdf->Cell(40,10,'¡Hola Mundo!');
$fpdf->Output("reporte.pdf","D");

?>