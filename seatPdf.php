<?php

require_once('connection.php');
require_once('fpdf/fpdf.php');
//data from databasee attached
if(isset($_POST['excel'])){
	echo $room=$_POST['room'];
	$levl=$_POST['level'];
	$cou=$_POST['course'];

//A4 width : 219 mm
// default margin
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A5');

$pdf->AddPage();

//set font Arial , Bold, 14pt
$pdf->SetFont('Arial','B',16);

//Cell(widt, height,text, bold,end line ,[align])

$pdf->Cell(110 ,7,'ARUSHA TECHINICAL COLLEGE',0,0,'C');
$pdf->Cell(59 ,7, '',0,1);//end of line



$que = mysqli_query($connection,"SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.e_admission WHERE room='$room' AND e_levels='$levl'AND e_course='$cou' ");
$as=mysqli_fetch_assoc($que);
$d=$as['department'];
$v=$as['levels'];
echo $c=$as['course'];



//header two of cell
$pdf->SetFont('Arial','B',12);

$pdf->Cell(50 ,7,'Department :'.$d ,0,0);
$pdf->Cell(50 ,7, 'Level: '.$v ,0,1);
$pdf->Cell(60 ,7, 'Course: '.$c ,0,1);

$pdf->Cell(189 ,8, '',0,1);//space

$pdf->Cell(40 ,7,'First Name :',0,0);
$pdf->Cell(10 ,7, 'Middle Name',0,1);
$pdf->Cell(10 ,7,'Last Name :',0,1);
$pdf->Cell(20 ,7, 'Admission',0,1);
$pdf->Cell(20 ,7, 'Exam Number',0,1);
$pdf->Cell(20 ,7,'Sheet Number :',0,1);
$pdf->Cell(20 ,7, 'Signature',0,1);
$sn=1;
while($ass= mysqli_fetch_array($que)){
$f =$ass['firstname']);
$m =$ass['middlename']);
$l =$ass['lastname']);
$a =$ass['e_admission']);
$n =$ass['e_number']);

$pdf->Cell(3 ,7,$sn,0,0);
$pdf->Cell(40 ,7,$f,0,1);
$pdf->Cell(10 ,7, $m,0,1);
$pdf->Cell(10 ,7,$l,0,1);
$pdf->Cell(20 ,7, $a,0,1);
$pdf->Cell(20 ,7, $n,0,1);
$pdf->Cell(20 ,7, '............',0,1);
$pdf->Cell(20 ,7, '............',0,1);

sn++;}
$pdf->Cell(110 ,7,'****Thanks Welcom Again*****',1,0,'C');//END OF LINE


$pdf->Output();

?>