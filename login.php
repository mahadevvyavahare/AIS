 <?php
include 'header.php';
        //echo 'in admin';if(isset($_POST['username'])&&isset($_POST['password']))
        if(isset($_POST['username'])&&isset($_POST['password'])){
        $uname=$_POST['username'];
        $pass=$_POST['password'];
  if(!empty($uname)&&!empty($pass))
        {
         if($con=mysqli_connect('localhost','root',''))
         {
             if(mysqli_select_db($con,'ais'))
             {
                $pass=md5($pass);

                 $query='select * from admin where username=\''.$uname. '\'AND password=\''.$pass.'\'';
                 //echo $query;

                 $result=mysqli_query($con,$query);
                 $count=@mysqli_num_rows($result);
                  if($count==1)
                  {  session_start();
                      $query_row=mysqli_fetch_assoc($result);
                      $_SESSION['id']=$query_row['username'];
                      header('location:manage.php');
                    //  echo('Login successfully.');
                      die();
                      //session_end();
                  }
                 else
                     echo('<div class="alert alert-danger" role="alert">
        Incorrect Username Or Password.
</div>');
                 unset($_POST['username']);
                 unset($_POST['password']);

             }
         }


        }
        else
        {
            echo(' <div class="alert alert-danger" role="alert">
        Please Enter Username And Password.
</div>');
        }
      }
?>


   
    <center>

     <form action="login.php" method="post" id="loginform">
       <div class="row ">
           <div class="col-md-4 col-md-offset-4">
       <div class="" style="padding:6%;margin-top:20%;">
  
                            <div class="form-group">
    
                                <label for="exampleInputEmail1">Username</label>
    
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username" id="username">
  
                            </div>
  
    <div class="form-group">
    
    <label for="exampleInputPassword1">Password</label>
    
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" id="username">
  <br>
    <input type="submit" class="btn btn-success" value="Sign in" onclick="progress();">
        
        
        &nbsp; <a href="forgotpass.php">Forgot password?</a>
        </div>
                   

               </div>
           </div>
  
  </form>
</center>
  </div>

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>

 