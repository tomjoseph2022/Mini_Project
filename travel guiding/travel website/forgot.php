<?php 
 include 'connection.php';
 session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/forgotstyle.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="forgot.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your Registered phone and email</p>
                    
                    <div class="form-group">
                        <input class="form-control" type="email" name="emas" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="phones" placeholder="phone no" required>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Reset">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php
   if(isset($_POST["login"])){
      
         $uname=$_POST["emas"];
         $pass=$_POST["phones"];
         
         //$sql="select * from tbl_registration,tbl_guide_registration where tbl_registration.emails='$uname' and tbl_registration.phone='$pass' OR tbl_guide_registration.emails='$uname' and tbl_guide_registration.emails='$pass';";

         $sql="SELECT tbl_registration.* from tbl_registration  WHERE emails ='$uname' and phone ='$pass' UNION SELECT tbl_guide_registration.* from tbl_guide_registration  WHERE emails ='$uname' and phone ='$pass'";
         $result=mysqli_query($con,$sql);
         $count=mysqli_num_rows($result);
       
          while($row=mysqli_fetch_array($result))
           {
         
           $userids=$row['login_id'];
         
           }
         
         
         if($count>0)
         {  
            $_SESSION['login_id'] = $userids;
            header("location:resetpassword.php");
            
         }
         else
         {
            ?>
            <script>
            alert("invalid email or phone");
            </script>
            <?php 
            
         }
         
         mysqli_close($con);

         
   
   }
