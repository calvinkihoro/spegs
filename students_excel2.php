<?php
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
error_reporting(E_ALL); ini_set('display_errors', 'Off');
require_once("connection.php");//to connect to database and some core functions

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("CH Kihoro")
->setLastModifiedBy("SPEGS")
->setTitle("SPEGS REPORT")
->setSubject("List of Exam Number")
->setDescription("Exam Number.")
->setKeywords("office PHPExcel php")
->setCategory("Student Report");

// Create a first sheet, representing EXAM data
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1', 'First Name ')
->setCellValue('B1', 'Middle Name ')
->setCellValue('C1', 'Last Name ')
->setCellValue('D1', 'Gender ')
->setCellValue('E1', 'Admission ')
->setCellValue('F1', 'Department ')
->setCellValue('G1', 'Course')
->setCellValue('H1', 'Level ')
->setCellValue('I1', 'E_Number ');

$dept="ict";
$n=2;
$qry= mysqli_query($connection,"SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.e_admission WHERE department='$dept'");
while($d= mysqli_fetch_array($qry)){
$objPHPExcel->getActiveSheet()->setCellValue('A'.$n, $d['firstname']);
$objPHPExcel->getActiveSheet()->setCellValue('B'.$n, $d['middlename']);
$objPHPExcel->getActiveSheet()->setCellValue('C'.$n, $d['lastname']);
$objPHPExcel->getActiveSheet()->setCellValue('D'.$n, $d['gender']);
$objPHPExcel->getActiveSheet()->setCellValue('E'.$n, $d['e_admission']);
$objPHPExcel->getActiveSheet()->setCellValue('F'.$n, $d['e_department']);
$objPHPExcel->getActiveSheet()->setCellValue('G'.$n, $d['e_course']);
$objPHPExcel->getActiveSheet()->setCellValue('H'.$n, $d['levels']);
$objPHPExcel->getActiveSheet()->setCellValue('I'.$n, $d['e_number']);
   $n++;
} 
//bold */
$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFont()->setBold(true);

// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle($dept);

// Create a second worksheet, after the default sheet
$objPHPExcel->createSheet();

// Add some data to the second sheet, resembling some different data types
$objPHPExcel->setActiveSheetIndex(1)
->setCellValue('A1', 'First Name ')
->setCellValue('B1', 'Middle Name ')
->setCellValue('C1', 'Last Name ')
->setCellValue('D1', 'Gender ')
->setCellValue('E1', 'Admission ')
->setCellValue('F1', 'Department ')
->setCellValue('G1', 'Course')
->setCellValue('H1', 'Level ')
->setCellValue('I1', 'E_Number ');

$dept="civil";
$n=2;
$qry= mysqli_query($connection,"SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.e_admission WHERE department='$dept'");
while($d= mysqli_fetch_array($qry)){
$objPHPExcel->getActiveSheet()->setCellValue('A'.$n, $d['firstname']);
$objPHPExcel->getActiveSheet()->setCellValue('B'.$n, $d['middlename']);
$objPHPExcel->getActiveSheet()->setCellValue('C'.$n, $d['lastname']);
$objPHPExcel->getActiveSheet()->setCellValue('D'.$n, $d['gender']);
$objPHPExcel->getActiveSheet()->setCellValue('E'.$n, $d['e_admission']);
$objPHPExcel->getActiveSheet()->setCellValue('F'.$n, $d['e_department']);
$objPHPExcel->getActiveSheet()->setCellValue('G'.$n, $d['e_course']);
$objPHPExcel->getActiveSheet()->setCellValue('H'.$n, $d['levels']);
$objPHPExcel->getActiveSheet()->setCellValue('I'.$n, $d['e_number']);
   $n++;
} 
//bold */
$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFont()->setBold(true);

// Rename 2nd sheet
$objPHPExcel->getActiveSheet()->setTitle($dept);

// Create a third worksheet, after the default sheet
$objPHPExcel->createSheet();

// add some data third sheet, representing EXAM data
$objPHPExcel->setActiveSheetIndex(2)
->setCellValue('A1', 'First Name ')
->setCellValue('B1', 'Middle Name ')
->setCellValue('C1', 'Last Name ')
->setCellValue('D1', 'Gender ')
->setCellValue('E1', 'Admission ')
->setCellValue('F1', 'Department ')
->setCellValue('G1', 'Course')
->setCellValue('H1', 'Level ')
->setCellValue('I1', 'E_Number ');

$dept="electrical";
$n=2;
$qry= mysqli_query($connection,"SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.e_admission WHERE department='$dept'");
while($d= mysqli_fetch_array($qry)){
$objPHPExcel->getActiveSheet()->setCellValue('A'.$n, $d['firstname']);
$objPHPExcel->getActiveSheet()->setCellValue('B'.$n, $d['middlename']);
$objPHPExcel->getActiveSheet()->setCellValue('C'.$n, $d['lastname']);
$objPHPExcel->getActiveSheet()->setCellValue('D'.$n, $d['gender']);
$objPHPExcel->getActiveSheet()->setCellValue('E'.$n, $d['e_admission']);
$objPHPExcel->getActiveSheet()->setCellValue('F'.$n, $d['e_department']);
$objPHPExcel->getActiveSheet()->setCellValue('G'.$n, $d['e_course']);
$objPHPExcel->getActiveSheet()->setCellValue('H'.$n, $d['levels']);
$objPHPExcel->getActiveSheet()->setCellValue('I'.$n, $d['e_number']);
   $n++;
} 
//bold */
$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFont()->setBold(true);

// Rename 3rd sheet
$objPHPExcel->getActiveSheet()->setTitle($dept);

// Create a fouth worksheet, after the default sheet
$objPHPExcel->createSheet();

// Add some data to the fouth sheet, resembling some different data types
$objPHPExcel->setActiveSheetIndex(3)
->setCellValue('A1', 'First Name ')
->setCellValue('B1', 'Middle Name ')
->setCellValue('C1', 'Last Name ')
->setCellValue('D1', 'Gender ')
->setCellValue('E1', 'Admission ')
->setCellValue('F1', 'Department ')
->setCellValue('G1', 'Course')
->setCellValue('H1', 'Level ')
->setCellValue('I1', 'E_Number ');

$dept="mechanical";
$n=2;
$qry= mysqli_query($connection,"SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.e_admission WHERE department='$dept'");
while($d= mysqli_fetch_array($qry)){
$objPHPExcel->getActiveSheet()->setCellValue('A'.$n, $d['firstname']);
$objPHPExcel->getActiveSheet()->setCellValue('B'.$n, $d['middlename']);
$objPHPExcel->getActiveSheet()->setCellValue('C'.$n, $d['lastname']);
$objPHPExcel->getActiveSheet()->setCellValue('D'.$n, $d['gender']);
$objPHPExcel->getActiveSheet()->setCellValue('E'.$n, $d['e_admission']);
$objPHPExcel->getActiveSheet()->setCellValue('F'.$n, $d['e_department']);
$objPHPExcel->getActiveSheet()->setCellValue('G'.$n, $d['e_course']);
$objPHPExcel->getActiveSheet()->setCellValue('H'.$n, $d['levels']);
$objPHPExcel->getActiveSheet()->setCellValue('I'.$n, $d['e_number']);
   $n++;
} 
//bold */
$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFont()->setBold(true);

// Rename 4th sheet
$objPHPExcel->getActiveSheet()->setTitle($dept);

// Create a fifth worksheet, after the default sheet
$objPHPExcel->createSheet();

// add some data fith sheet, representing EXAM data
$objPHPExcel->setActiveSheetIndex(4)
->setCellValue('A1', 'First Name ')
->setCellValue('B1', 'Middle Name ')
->setCellValue('C1', 'Last Name ')
->setCellValue('D1', 'Gender ')
->setCellValue('E1', 'Admission ')
->setCellValue('F1', 'Department ')
->setCellValue('G1', 'Course')
->setCellValue('H1', 'Level ')
->setCellValue('I1', 'E_Number ');

$dept="laboratory";
$n=2;
$qry= mysqli_query($connection,"SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.e_admission WHERE department='$dept'");
while($d= mysqli_fetch_array($qry)){
$objPHPExcel->getActiveSheet()->setCellValue('A'.$n, $d['firstname']);
$objPHPExcel->getActiveSheet()->setCellValue('B'.$n, $d['middlename']);
$objPHPExcel->getActiveSheet()->setCellValue('C'.$n, $d['lastname']);
$objPHPExcel->getActiveSheet()->setCellValue('D'.$n, $d['gender']);
$objPHPExcel->getActiveSheet()->setCellValue('E'.$n, $d['e_admission']);
$objPHPExcel->getActiveSheet()->setCellValue('F'.$n, $d['e_department']);
$objPHPExcel->getActiveSheet()->setCellValue('G'.$n, $d['e_course']);
$objPHPExcel->getActiveSheet()->setCellValue('H'.$n, $d['levels']);
$objPHPExcel->getActiveSheet()->setCellValue('I'.$n, $d['e_number']);
   $n++;
} 
//bold */
$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFont()->setBold(true);

// Rename 5th sheet
$objPHPExcel->getActiveSheet()->setTitle($dept);

// Create a sixth worksheet, after the default sheet
$objPHPExcel->createSheet();

// Add some data to the sixth sheet, resembling some different data types
$objPHPExcel->setActiveSheetIndex(5)
->setCellValue('A1', 'First Name ')
->setCellValue('B1', 'Middle Name ')
->setCellValue('C1', 'Last Name ')
->setCellValue('D1', 'Gender ')
->setCellValue('E1', 'Admission ')
->setCellValue('F1', 'Department ')
->setCellValue('G1', 'Course')
->setCellValue('H1', 'Level ')
->setCellValue('I1', 'E_Number ');

$dept="automotive";
$n=2;
$qry= mysqli_query($connection,"SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.e_admission WHERE department='$dept'");
while($d= mysqli_fetch_array($qry)){
$objPHPExcel->getActiveSheet()->setCellValue('A'.$n, $d['firstname']);
$objPHPExcel->getActiveSheet()->setCellValue('B'.$n, $d['middlename']);
$objPHPExcel->getActiveSheet()->setCellValue('C'.$n, $d['lastname']);
$objPHPExcel->getActiveSheet()->setCellValue('D'.$n, $d['gender']);
$objPHPExcel->getActiveSheet()->setCellValue('E'.$n, $d['e_admission']);
$objPHPExcel->getActiveSheet()->setCellValue('F'.$n, $d['e_department']);
$objPHPExcel->getActiveSheet()->setCellValue('G'.$n, $d['e_course']);
$objPHPExcel->getActiveSheet()->setCellValue('H'.$n, $d['levels']);
$objPHPExcel->getActiveSheet()->setCellValue('I'.$n, $d['e_number']);
   $n++;
} 
//bold */
$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFont()->setBold(true);

// Rename 6th sheet
$objPHPExcel->getActiveSheet()->setTitle($dept);

// Create a seventh worksheet, after the default sheet
$objPHPExcel->createSheet();

// Add some data to the second sheet, resembling some different data types
$objPHPExcel->setActiveSheetIndex(6)
->setCellValue('A1', 'First Name ')
->setCellValue('B1', 'Middle Name ')
->setCellValue('C1', 'Last Name ')
->setCellValue('D1', 'Gender ')
->setCellValue('E1', 'Admission ')
->setCellValue('F1', 'Department ')
->setCellValue('G1', 'Course')
->setCellValue('H1', 'Level ')
->setCellValue('I1', 'E_Number ');

$dept="electronic";
$n=2;
$qry= mysqli_query($connection,"SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.e_admission WHERE department='$dept'");
while($d= mysqli_fetch_array($qry)){
$objPHPExcel->getActiveSheet()->setCellValue('A'.$n, $d['firstname']);
$objPHPExcel->getActiveSheet()->setCellValue('B'.$n, $d['middlename']);
$objPHPExcel->getActiveSheet()->setCellValue('C'.$n, $d['lastname']);
$objPHPExcel->getActiveSheet()->setCellValue('D'.$n, $d['gender']);
$objPHPExcel->getActiveSheet()->setCellValue('E'.$n, $d['e_admission']);
$objPHPExcel->getActiveSheet()->setCellValue('F'.$n, $d['e_department']);
$objPHPExcel->getActiveSheet()->setCellValue('G'.$n, $d['e_course']);
$objPHPExcel->getActiveSheet()->setCellValue('H'.$n, $d['levels']);
$objPHPExcel->getActiveSheet()->setCellValue('I'.$n, $d['e_number']);
   $n++;
} 
//bold */
$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFont()->setBold(true);

// Rename 7th sheet
$objPHPExcel->getActiveSheet()->setTitle($dept);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="exam_no.xls"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');

?>