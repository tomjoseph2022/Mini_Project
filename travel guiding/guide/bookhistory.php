<?php

include 'connection.php';
session_start();
	if(empty($_SESSION['login_id']))
	{
		header("location:../travel website/login.php");
	}
?>
<?php


           $uname=$_SESSION['login_id'];
                  
            $query="select * from tbl_registration where login_id='$uname'";
                  //$query = “select * from tbl_login";
            $result = mysqli_query($con ,$query);
             while($row=mysqli_fetch_array($result))
           	{
         
           $userids=$row['login_id'];
           $user=$row['username'];
           $first=$row['firstname'];
           $last=$row['lastname'];
         
           	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Smart Tourist Guiding System</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<style>
		td,th {
			border: 1px solid #dddddd;
			text-align: center;
			padding: 8px;
		}

		.button3 {
		  background-color: #4CAF50; 
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		}
		.button4 {
		  background-color: #f44336; 
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		}
	</style>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header">
			<div class="header-menu">
				<div class="title">Tourist <span>Home</span></div>
				<img src="images/2.png" alt="" style=" border-radius: 50%;margin-left: 100px;" width="2.9%">
				<div class="title" style="margin-left: -210px;">Smart Tourist Guiding System</div>
					<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div>
					<ul>
						<li><a href="#"><i class="fas fa-search"></i></a></li>
						<li><a href="#"><i class="fas fa-bell"></i></a></li>
						<li><a href="logout.php"><i class="fas fa-power-off"></i></a></li>
					</ul>
				</div>
			</div>
			<!--header menu end-->
			<?php include 'sidebar.php'?>
			<!--sidebar end-->
			

    

                  

			<!--main container start-->
			<div class="main-container">
				<div class="card">
					<?php
					$uname=$_SESSION['login_id'] ;
            		 
             ?>
					<p><center><h1 style="color:lightskyblue;">Welcome To Smart Tourist Guiding System</h1></center></p>
				</div>
				<div class="card">
					<h2>Booking History</h2>
					
					 
					
				</div>
				<div class="card">
					
					 <table style="font-family: arial,sans-serif;border-collapse: collapse;width: 100%;"> 

                                         <tr style="border:2px solid black;">

	                                         <th><center> Tourist Name</center></th>
	           
					                         <th><center> Booked Guide Name</center></th>
	                                         <th><center> Tourist Email</center></th>
	                                         <th><center> Guide Email</center></th>
	                                         <th><center> book_date_start</center></th>
	                                         <th><center>book_date_end</center></th>
	                     
	                                         <th><center>Request Status</center></th>
                                         

                                        </tr>

                                         <?php
                                            $a=0;
                                            $b=1;
                                            $c=2;
                                            $query="select * from tbl_guide_booking where guide_id ='$uname' ";                                   
                                             $result = mysqli_query($con,$query);

                                            while($data =$result->fetch_assoc())

                                           {
                                             $stat=$data['status'];
                                            ?>

                                                <tr>

                                                 
                                                  <td><?php echo $data['gb_tourist'];?></td>


                                                  <td><?php echo $data['gb_guide'];?></td>

                                                  <td><?php echo $data['gb_email'];?></td>

                                                  <td><?php echo $data['gb_guide_email'];?></td>

                                                  <td><?php echo $data['gb_datef'];?></td>

                                                  <td><?php echo $data['gb_datee'];?></td>

                                                  

                                                  

                                                  <td><center> <?php if ($a==$stat)
                                                                 {echo"Not Checked";}
                                                                 else if ($b==$stat)
                                                                 {echo"Accepted";}
                                                                 else{echo"Rejected";}?>
                                       
                                                                 </center>
                                                  </td>
                                                   <td>
                                                       <a href="databasefun.php?login_id=<?php echo $data['login_id'];?>">
                                                       	<button class="button3">Accept</button></a>
                                                        
                                                      <a href="databasefun.php?login_rdid=<?php echo $data['login_id'];?>">
                                                       <button class="button4">Reject</button></a>

                                                    </td>
                                                 




                                                                   

                                                   
                                              <?php  
                                            }
                                          ?>
				</div>
			</div>
			<!--main container end-->
		</div>
		<!--wrapper end-->

		<script type="text/javascript">
		$(document).ready(function(){
			$(".sidebar-btn").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
		</script>

	</body>
</html>
