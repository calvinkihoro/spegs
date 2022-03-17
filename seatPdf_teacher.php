<?php
require("fpdf/fpdf.php");

$jina ="report all";
class myPDF extends FPDF{
  function header(){
    $this->Image('img/atc.png',10,5,26,26);

    $this->Ln();
    $this->SetFont('Arial','B',14);
    $this->Cell(180,5,'ARUSHA TECHNICAL COLLEGE',0,0,'C');
    $this->Ln();
    global $room,$levl,$cou;
    $conn =mysqli_connect('localhost','suma','suma@123','seat') or die("Failed To Connect".mysqli_error($conn));
    $que = mysqli_query($conn,"SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.e_admission WHERE room='$room' AND e_levels='$levl'AND e_course='$cou' ");
$as=mysqli_fetch_assoc($que);
    $this->SetFont('Times','',12);
    $this->Cell(180,5,'Department '.$as['department'],0,0,'C');
    $this->Ln();
    $this->Cell(180,5,'Level '.$as['e_levels'],0,0,'C');
    $this->Ln();
    $this->Cell(180,5,'Course '.$as['course'],0,0,'C');
    $this->Ln(10);
    
  }
  function footer(){
    $this->SetY(-15);
    $this->SetFont('Arial','',8);
    $this->Cell(0,10,'page'.$this->PageNo().'/{nb}',0,0,'C');

  }
  function headerTable(){
    $this->SetFont('Times','B',11);
    $this->Cell(10,10,'No',1,0,'C');
    $this->Cell(50,10,'FULL NAME',1,0,'C');
    // $this->Cell(40,10,'SECOND NAME',1,0,'C');
    // $this->Cell(40,10,'LAST NAME',1,0,'C');
    $this->Cell(30,10,'ADMISSION',1,0,'C');
    $this->Cell(30,10,'EXAM NO',1,0,'C');
    $this->Cell(30,10,'SHEET NO',1,0,'C');
    $this->Cell(30,10,'SIGNATURE',1,0,'C');
    $this->Ln();
  }
  function viewTable($room,$levl,$cou){
        $this->SetFont('Times','',12);
        $conn =mysqli_connect('localhost','suma','suma@123','seat') or die("Failed To Connect".mysqli_error($conn));
        $que = mysqli_query($conn,"SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.e_admission WHERE room='$room' AND e_levels='$levl'AND e_course='$cou' ");
        $n=1;
while($row= mysqli_fetch_array($que)){
        $this->Cell(10,10,$n,1,0,'L');
    $this->Cell(50,10,$row['firstname'],1,0,'L');
    // $this->Cell(45,10,$row['middlename'],1,0,'L');
    // $this->Cell(45,10,$row['lastname'],1,0,'L');
    $this->Cell(30,10,$row['e_admission'],1,0,'L');
    $this->Cell(30,10,$row['e_number'],1,0,'L');
    $this->Cell(30,10,'....................',1,0,'L');
    $this->Cell(30,10,'....................',1,0,'L');
    $this->Ln();
    $n++;
        }
  }
}
if(isset($_POST['pdff'])){
  $room=$_POST['room'];
  $levl=$_POST['level'];
  $cou=$_POST['course'];

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('P','A4',0);
$pdf->headerTable();
$pdf->viewTable($room,$levl,$cou);
$pdf->Output($room.$cou.$levl,'I'); 
}
?>
