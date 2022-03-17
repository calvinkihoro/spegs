<?php
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
error_reporting(E_ALL); ini_set('display_errors', 'Off');
require_once("connection.php");//to connect to database and some core functions

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("II Shekibua")
->setLastModifiedBy("SPMS")
->setTitle("SPMS REPORT")
->setSubject("List of Exam Number")
->setDescription("Exam Number.")
->setKeywords("office PHPExcel php")
->setCategory("Student Report");

// Add some data
// echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1', 'First Name ')
->setCellValue('B1', 'Middle Name ')
->setCellValue('C1', 'Last Name ')
->setCellValue('D1', 'Gender ')
->setCellValue('E1', 'Admission ')
->setCellValue('F1', 'Department ')
->setCellValue('G1', 'Course')
->setCellValue('H1', 'Level ');


/*$sql="SELECT firstname,middlename,lastname FROM user";
$rn=mysql_query($sql);
$g=5;l
while($data=mysql_fetch_array($rn))
{
$f=$data['firstname'];
$m=$data['middlename'];
$l=$data['lastname'];


$objPHPExcel->getActiveSheet()->SetCellValue('A'.$g, $f);
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$g, $m);
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$g, $l);
$g++;

}


//merge cells
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:C1');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:C2');

//bold */
$objPHPExcel->getActiveSheet()->getStyle('A1:H1')->getFont()->setBold(true);

// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Students');

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="students_template.csv"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
$objWriter->save('php://output');
exit;
