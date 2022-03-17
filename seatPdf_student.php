<?php
require("fpdf/fpdf.php");

$jina ="report all";
class myPDF extends FPDF{
  function header(){
    $this->Image('img/atc.png',10,5,26,26);

    $this->Ln();
    $this->SetFont('Arial','B',15);
    $this->Cell(190,5,'ARUSHA TECHNICAL COLLEGE',0,0,'C');
    $this->Ln();
    $this->SetFont('Times','',12);
    $this->Cell(190,5,'SEATING PLANNING',0,0,'C');
    $this->Ln();
    global $dept; 
    $conn =mysqli_connect('localhost','suma','suma@123','seat') or die("Failed To Connect".mysqli_error($conn));
    $que= mysqli_query($conn,"SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id LEFT JOIN classroom ON classroom.id=seat.class_id WHERE e_department='$dept'  ORDER BY `e_levels` ,`roomname` ,s_cols, s_rows ASC ");
    $as=mysqli_fetch_assoc($que);
    $this->SetFont('Times','',12);
    $this->Cell(190,10,'Department '.$as['e_department'],0,0,'C');
    $this->Ln(13);

    
    
  }
  function footer(){
    $this->SetY(-15);
    $this->SetFont('Arial','',8);
    $this->Cell(0,10,'page'.$this->PageNo().'/{nb}',0,0,'C');

  }
  function headerTable(){
    $this->SetFont('Times','B',11);
    $this->Cell(10,10,'No',1,0,'C');
    $this->Cell(30,10,'ADMISSION',1,0,'C');
    $this->Cell(30,10,'EXAM NO',1,0,'C');
    $this->Cell(23,10,'LEVLEL',1,0,'C');
    $this->Cell(28,10,'ROOM NAME',1,0,'C');
    $this->Cell(22,10,'COLUMN',1,0,'C');
    $this->Cell(22,10,'ROWS',1,0,'C');
    $this->Cell(25,10,'SEAT NO',1,0,'C');
    $this->Ln();
  }
  function viewTable($dept){
        $this->SetFont('Times','',11);
        $conn =mysqli_connect('localhost','suma','suma@123','seat') or die("Failed To Connect".mysqli_error($conn));
         $quer= mysqli_query($conn,"SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id LEFT JOIN classroom ON classroom.id=seat.class_id WHERE e_department='$dept'  ORDER BY `e_levels` ,`roomname` ,s_cols, s_rows ASC");
        $n=1;
while($row= mysqli_fetch_array($quer)){
        $this->Cell(10,10,$n,1,0,'L');
    $this->Cell(30,10,$row['e_admission'],1,0,'L');
    $this->Cell(30,10,$row['e_number'],1,0,'L');
    $this->Cell(23,10,$row['e_levels'],1,0,'L');
    $this->Cell(28,10,$row['roomname'],1,0,'L');
    $this->Cell(22,10,$row['s_cols'],1,0,'L');
    $this->Cell(22,10,$row['s_rows'],1,0,'L');
    $this->Cell(25,10,$row['seat_no'],1,0,'L');
    $this->Ln();
    $n++;
        }
  }
}

$dept=$_GET['dep']; 
$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('P','A4',0);
$pdf->headerTable();
$pdf->viewTable($dept);
$pdf->Output($dept,'I'); 
//printed and programmed by Shekibua(IIS)
?>
