<html>
</head>
<title>
	Manage Irrigation
</title>
<script type="text/javascript">
function sure(){
  return(confirm("Are You sure want to have water on this plat"));
}
</script>
<style>
.transbox
{
  border: 1px solid black;
  //opacity:0.3;
  //filter:alpha(opacity=60); /* For IE8 and earlier */
  background: url(img/structure.jpg);
  background-repeat: no-repeat;
  width:820px;
  height:661px;    
  
  //w:820
  //h:661
  margin-top: 10%;
}
</style>
</head>

<?php
include 'header.php';
session_start();
include 'connect.php';
$i=0;
$motor_status;
while($i<4){
$d=$i+1;
$res=mysql_query("select * from motor1_status");
$row=mysql_fetch_assoc($res);
$motor_status[$i]=$row['status'];
//$motor_status[$i];
$i++;
}
?> 
<center>
<div class="transbox">
	<div id='motor1_status' style="margin-left:-40%;margin-top:10%;">
    Status 1
  </div>
  <form action="turnOn.php" onSubmit="return sure();" method='get'>
    <input type="text" name=motor value='1' style="display:none;">
    <div style="margin-left:-40%;margin-top:2%">
    Tap Status <b><?php echo $motor_status[0];
    $val='OFF';

    if(!strcmp($motor_status[0],'OFF')){
      $val='ON';
    }
      echo '</b>';
      echo "  <input type='submit' value='Turn ".$val." To This Plot No 1'>"
      ?>

  
    
    </div>
    </form>
    <div id='motor1_status' style="margin-left:40%;margin-top:-10%;">
    Status 2
  </div>
    <form action="turnOn.php"onSubmit="return sure();method='get'">
    <div style="margin-left:40%;margin-top:3%">
     Tap Status <b><?php echo $motor_status[0];
    $val='OFF';

    if(!strcmp($motor_status[1],"OFF")){
      $val='ON';
    }
      echo '</b>';
      echo "  <input type='submit' value='Turn ".$val." To This Plot No 2'>"
      ?>
    </div>  
    <input type="text" name=motor value='2' style="display:none;">
    </form>
    <br>
    <form action="turnOn.php"onSubmit="return sure();"method='get'>
      <input type="text" name=motor value='3' style="display:none;"> 
     <div  style="margin-left:-40%;margin-top:10%">
      Tap Status <b><?php echo $motor_status[0];
    $val='OFF';

    if(!strcmp($motor_status[2],"OFF")){
      $val='ON';
    }
      echo '</b>';
      echo "<input type='submit' value='Turn ".$val." To This Plot no 3'>"
      ?>
 </div>
     </form>

     <div id='motor1_status' style="margin-left:-30%;margin-top:5%">
    Status motor 3
  </div>


    <form action="turnOn.php"onSubmit="return sure();"method='get'>
    <input type="text" name=motor value='4' style="display:none;"> 
     
     <div  style="margin-left:40%;margin-top:-10%">
      Tap Status <b><?php echo $motor_status[3];
    $val='OFF';

    if(!strcmp($motor_status[3],"OFF")){
      $val='ON';
    }
      echo '</b>';
      echo "<input type='submit' value='Turn ".$val." To This Plot No 4'>"
      ?>
</div>
</form>
<div id='motor1_status' style="margin-left:40%;margin-top:6%">
    Status Motor 4
  </div>
</div>
</center>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>