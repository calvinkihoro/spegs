<?php
require_once("connection.php");//to connect to database and some core functions

// Create new PHPExcel object
// Create a first sheet, representing EXAM data
$columnHeader= '';
$columnHeader=  "col1" ."\t"."col2" ."\t". "col3" ."\t". "col4";

$setData= '';
$r=1;
$max_cols = mysqli_query($connection,"select max(s_cols) as maxCol from seat WHERE class_id='2'");
$max_cols = mysqli_fetch_array($max_cols)['maxCol'];
$qry= mysqli_query($connection,"SELECT e_number FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id LEFT JOIN classroom ON classroom.id=seat.class_id WHERE s_cols='$r' AND class_id='2' LIMIT $max_cols");
 
		while($d= mysqli_fetch_array($qry)){
			$rowData= '';
			foreach ($d as $value) {
				$value = '"' . $value .'"' ."\n";
				$rowData .=$value;
			}
			$setData .=trim($rowData) ."\t";
			
	$r++;
	} 


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/octer-stream');
header('Content-Disposition: attachment;filename="exam_no.xls"');
header('Pragma: no-cache');
header("Expires: 0");

echo ucwords($columnHeader) ."\n". $setData . "\n";


?>