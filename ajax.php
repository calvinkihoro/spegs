<?php
//Including Database configuration file.
include "connection.php";
error_reporting();
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT admission FROM `register_student` LIKE '%$Name%' LIMIT 5";
//Query execution
   $ExecQuery = MySQLi_query($connection, $Query);
//Creating unordered list to display result.
   echo '<br/><ul style="color: blue">';
   //Fetching result from database.
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
    $movie_id=base64_encode($Result['id']); 
 ?>

   <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "script.js" file.
        By passing fetched result as parameter. -->
   <li style='list-style: none;' onclick='fill("<?php echo $Result['admission']; ?>")'>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->

       <?php echo $Result['admission']; die(); ?>

   </li></a>
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->

   <?php
}}
?>

</ul>