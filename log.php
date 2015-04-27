<html>
<head>
<title>Motor Log</title>
  <style type="text/css">
table,tr,th,td{

border:1px solid red;
}
.transbox{
  background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.8;
    filter: alpha(opacity=60);
    padding-bottom: 30px;
}

</style>

<?php
include 'header.php';
echo "<div class='transbox'>";

include 'connect.php';

$qry='select * from motor1_log';

$res_motor1=mysqli_query($con,$qry);

$qry='select * from motor2_log';
$res_motor2=mysqli_query($con,$qry);

$qry='select * from motor3_log';
$res_motor3=mysqli_query($con,$qry);

$qry='select * from motor4_log';
$res_motor4=mysqli_query($con,$qry);

?>
<br><br>

<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="" class="thumbnail">
     <center>PLOT NO. 2.. IRRIGATION LOG.</center> 
    </a>
    <table border>
    	<tr>
    		<th><center>Start Time</center></th>
    		<th><center>Stop Time</center></th>
    	</tr>
    <?php
    while($row=mysqli_fetch_assoc($res_motor1)){
    	echo "<tr>";
    	echo "<td>".$row['start_time']."</td>";
    	echo "<td>".$row['end_time']."</td>";
    	echo "</tr>";
    }
?>
<html>
<body>
</table>
  </div>

  <div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="" class="thumbnail">
      <center>PLOT NO. 2.. IRRIGATION LOG.</center>
	</a>

  <table>
      <tr>
        <th><center>Start Time</center></th>
        <th><center>Stop Time</center></th>
      </tr>
    <?php
    while($row=mysqli_fetch_assoc($res_motor2)){
      echo "<tr>";
      echo "<td>".$row['start_time']."</td>";
      echo "<td>".$row['end_time']."</td>";
      echo "</tr>";
    }
?>
</table>
  </div>

  <div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="" class="thumbnail">
      <center>PLOT NO. 3.. IRRIGATION LOG.</center>
    </a>
    <table>
      <tr>
        <th><center>Start Time</center></th>
        <th><center>Stop Time</center></th>
       </tr>
    <?php
    while($row=mysqli_fetch_assoc($res_motor3)){
      echo "<tr>";
      echo "<td>".$row['start_time']."</td>";
      echo "<td>".$row['end_time']."</td>";
      echo "</tr>";
    }
?>
</table>
  </div>

  <div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="" class="thumbnail">
      <center>PLOT NO. 4.. IRRIGATION LOG.</center>
    </a>
  
<table>
      <tr>
        <th><center>Start Time</center></th>
        <th><center>Stop Time</center></th>
      </tr>
    <?php
    while($row=mysqli_fetch_assoc($res_motor4)){
      echo "<tr>";
      echo "<td>".$row['start_time']."</td>";
      echo "<td>".$row['end_time']."</td>";
      echo "</tr>";
    }
?>
</table>
  </div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>