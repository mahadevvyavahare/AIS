<?php
include 'header.php';
include 'connect.php';
$qry='select * from motor1_log';
$res_motor1=mysql_query($qry);

$qry='select * from motor2_log';
$res_motor2=mysql_query($qry);

$qry='select * from motor3_log';
$res_motor3=mysql_query($qry);

$qry='select * from motor4_log';
$res_motor4=mysql_query($qry);

?>
<br><br>

<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="" class="thumbnail">
     PLOT NO. 1.. IRRIGATION LOG. 
    </a>
    <table border>
    	<tr>
    		<th>Start Time</th>
    		<th>Stop Time</th>
    	</tr>
    <?php
    while($row=mysql_fetch_assoc($res_motor1)){
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
      PLOT NO. 2.. IRRIGATION LOG.
	</a>

  <table border>
      <tr>
        <th>Start Time</th>
        <th>Stop Time</th>
      </tr>
    <?php
    while($row=mysql_fetch_assoc($res_motor2)){
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
      PLOT NO. 3.. IRRIGATION LOG.
    </a>
    <table border>
      <tr>
        <th>Start Time</th>
        <th>Stop Time</th>
      </tr>
    <?php
    while($row=mysql_fetch_assoc($res_motor3)){
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
      PLOT NO. 4.. IRRIGATION LOG.
    </a>
  
<table border>
      <tr>
        <th>Start Time</th>
        <th>Stop Time</th>
      </tr>
    <?php
    while($row=mysql_fetch_assoc($res_motor4)){
      echo "<tr>";
      echo "<td>".$row['start_time']."</td>";
      echo "<td>".$row['end_time']."</td>";
      echo "</tr>";
    }
?>
</table>
  </div>

</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>