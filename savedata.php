<?php

    $stu_name = $_POST['sname'];
    $stu_address = $_POST['saddress'];
    $stu_class = $_POST['class'];
    $stu_phone = $_POST['sphone'];

    $conn = mysqli_connect("localhost","root","","php-crud") or die("connection failed");
    $sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')"; //write query
    $result = mysqli_query($conn , $sql) or die("Query Unsuccessful.");  //run query

    header("Location: http://localhost/php-crud/index.php"); //database e data jawar por ei page e redirect korbe

    mysqli_close($conn);

?> 