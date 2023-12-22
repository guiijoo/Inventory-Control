<?php
require "./pages/FPDF/fpdf.php";
require "./pages/config.php";


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B','16');
$pdf->Cell(190,10,utf8_decode("Pedido de tonner"),0,0,"C");
$pdf->Ln(15);

$pdf->setFont("Arial","",7);
$pdf->Cell(45,7,utf8_decode("Produto"),1,0,"C");
$pdf->Cell(45,7,utf8_decode("Quantidade"),1,0,"C");
$pdf->Cell(45,7,utf8_decode("Minimo"),1,0,"C");
$pdf->Cell(45,7,utf8_decode("Pedir"),1,0,"C");
$pdf->Ln();

$sql = "SELECT * FROM estoque";
$declaracaoSql = $conexao->prepare($sql);
$declaracaoSql->execute();
$produtos = $declaracaoSql->fetchAll();

foreach($produtos as $prod){

    $minimo = $prod['minimo'];
    $quantidade = $prod['quantidade'];
    $ideal = $prod['ideal'];

    $pedir = $ideal - $quantidade;
    if($minimo>$quantidade)
    {
        $pdf->Cell(45,7,utf8_decode($prod['produto']),1,0,"C");
        $pdf->Cell(45,7,utf8_decode($prod['quantidade']),1,0,"C");
        $pdf->Cell(45,7,utf8_decode($prod['minimo']),1,0,"C");
        $pdf->Cell(45,7,utf8_decode($pedir),1,0,"C");
        $pdf->Ln();
    }
}

$pdf->Output();

?>