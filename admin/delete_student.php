<?php
require_once'./dbcon.php';
echo $id=base64_decode($_GET['id']);

mysqli_query($link,"DELETE FROM `student_info`WHERE `id`='$id'");

header("location:all-student.php");
?>