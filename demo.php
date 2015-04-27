<?php
include 'connect.php';
$query="update motor1_status set status='ON' where status='OFF'";
mysqli_query($con,$query);
?>