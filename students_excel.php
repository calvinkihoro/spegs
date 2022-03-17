<?php
	error_reporting(E_ALL); ini_set('display_errors', 'Off');
	require_once('connection.php');
	$filename="spms_template.csv";
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
/** Include PHPExcel */
require_once dirname(__FILE__) . '../Classes/PHPExcel.php';

// Create new PHPExcel object
echo date('H:i:s') , " Cre	ate new PHPExcel object" , EOL;
$objPHPExcel = new PHPExcel();

// Set document properties
echo date('H:i:s') , " Set document properties" , EOL;
$objPHPExcel->getProperties()->setCreator("SPMS")
							 ->setLastModifiedBy("SPEGS")
							 ->setTitle("SEATING PLAN AND EXAMINATION NUMBER GENERATOR SYSTEM")
							 ->setSubject("List of Users")
							 ->setDescription("SAMPLE FILE TO UPLOAD USER.")
							 ->setKeywords("office PHPExcel php")
							 ->setCategory("Student Report");
//set font size for the whole document
//$objPHPExcel->getActiveSheet()->getStyle("F1:G1")->getFont()->setSize(16);//for some cells
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(11);
// Add some data
echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1', 'First Name ')
->setCellValue('B1', 'Middle Name ')
->setCellValue('C1', 'Last Name ')
->setCellValue('D1', 'Gender ')
->setCellValue('E1', 'Admission ')
->setCellValue('F1', 'Department ')
->setCellValue('G1', 'Course')
->setCellValue('H1', 'Level ');


$sql= "SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.admission";
$rn=mysql_query($sql);
$g=5;
while($data=mysql_fetch_array($rn))
{
    $id =$row['id'];
    $fn =$row['firstname'];
    $sn =$row['middlename'];
    $ln =$row['lastname'];
    $gn =$row['gender'];
    $ad =$row['admission'];
    $de =$row['department'];
    $cs =$row['course'];
    $lev =$row['levels'];
    $e_num=$row['e_number'];

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
// Rename worksheet
echo date('H:i:s') , " Rename worksheet" , EOL;
$objPHPExcel->getActiveSheet()->setTitle('SPMS-Registered');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

ob_end_clean();
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename='.$filename);
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
