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

// Create a first sheet, representing EXAM data
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1', 'Column 1 ')
->setCellValue('B1', 'Column 2 ')
->setCellValue('C1', 'Column 3 ')
->setCellValue('D1', 'Column 4')
->setCellValue('E1', 'Column 5 ')
->setCellValue('F1', 'Column 6 ')
->setCellValue('G1', 'Column 7')
->setCellValue('H1', 'Column 8 ')
->setCellValue('I1', 'Column 9 ');

$dept="ict";
$n=2;$r=1;
$max_cols = mysqli_query($connection,"select max(s_cols) as maxCol from seat WHERE class_id='2'");
$max_cols = mysqli_fetch_array($max_cols)['maxCol'];
$qry= mysqli_query($connection,"SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id LEFT JOIN classroom ON classroom.id=seat.class_id WHERE s_cols='$r' AND class_id='2'");
     while($d= mysqli_fetch_array($qry)){
       $j='A';
	for ($c=2; $c <$max_cols ; $c++) { 
		
			
		$objPHPExcel->getActiveSheet()->setCellValue($j.$n, $d['e_number']);
		break;
	}

   $n++;$j++;
} 
//bold */
$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFont()->setBold(true);

// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle($dept);



// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="exam_no.xls"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');

?>