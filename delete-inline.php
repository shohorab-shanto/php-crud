<?php

echo $stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE sid = {$stu_id}"; //write query
$result = mysqli_query($conn , $sql) or die("Query Unsuccessful.");  //run query

header("Location: http://localhost/php-crud/index.php"); //database e data jawar por ei page e redirect korbe

mysqli_close($conn);


?>