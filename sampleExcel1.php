
<?php
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
require_once("codelibrary/inc/variables.php");

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("RN Kushwaha")
->setLastModifiedBy("Aryan")
->setTitle("Reports")
->setSubject("CSV Download")
->setDescription("Test document ")
->setKeywords("phpExcel")
->setCategory("Test file");
 
// Create a first sheet, representing sales data
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Name');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Email');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Phone');

$n=2;
$qry=executeQuery("select * from tbl_agent ");
while($d= mysql_fetch_array($qry)){
$objPHPExcel->getActiveSheet()->setCellValue('A'.$n, $d['id']);
$objPHPExcel->getActiveSheet()->setCellValue('B'.$n, $d['name']);
$objPHPExcel->getActiveSheet()->setCellValue('C'.$n, $d['email']);
$objPHPExcel->getActiveSheet()->setCellValue('D'.$n, $d['contact_no']);
  $n++;
}                
                
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Agents');
header("Content-Disposition: attachment; filename='data.csv' ");
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
$objWriter->save('php://output');
