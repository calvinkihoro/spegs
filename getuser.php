<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 1px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php


$con = mysqli_connect('localhost','root','','seat');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$qry=mysqli_query($con,"SELECT * FROM `classroom` WHERE id='1'");
$fet=mysqli_fetch_assoc($qry);
$name=$fet['roomname'];
 $col =$fet['cols'];
 echo $row = $fet['_rows'];

mysqli_select_db($con,"ajax_demo");
$sl="SELECT * FROM `exam_no` WHERE e_department = 'civil' AND e_course = 'C' && e_levels = '4' LIMIT $row";
$rest = mysqli_query($con,$sl);

$sq="SELECT * FROM `exam_no` WHERE e_department = 'ict' AND e_course = 'CS' && e_levels = '8' LIMIT $row";
$res = mysqli_query($con,$sq);

$syq="SELECT * FROM `exam_no` WHERE e_department = 'electrical' AND e_levels = '4' OR e_levels = '7' ORDER BY rand() LIMIT $row";
$resy = mysqli_query($con,$syq);

$syql="SELECT * FROM `exam_no` WHERE e_department = 'laboratory' AND e_course = 'L' && e_levels = '4' LIMIT $row";
$rey = mysqli_query($con,$syql);

echo "<table>
<tr>
<th>NTA 4</th>
<th>NTA 8</th>
<th>NTA 6</th>
<th>NTA 4</th>
</tr>";
foreach ($variable as $key => $value) {
	# code...
}
while($row = mysqli_fetch_array($rest) AND $rows = mysqli_fetch_array($res) AND $rw = mysqli_fetch_array($resy)AND $rws = mysqli_fetch_array($rey)) {
  echo "<tr>";
  echo "<td>" . $row['e_number'] . "<br/>". $rw['e_number'] . "</td>"."<td>" . $rows['e_number'] . "</td>"."<td>". $rw['e_number'] . "</td>"."<td>". $rws['e_number'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>