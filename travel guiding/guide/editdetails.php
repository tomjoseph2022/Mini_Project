<?php

include 'connection.php';
session_start();
	if(empty($_SESSION['login_id']))
	{
		header("location:../travel website/login.php");
	}
?>

		
 <!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Sidebar Dashboard Template With Sub Menu</title>
		<link rel="stylesheet" href="css/profilecss.css"> 
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	
			<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
		<script type="text/javascript">
		    function Checkfiles()
		    {
		       
		        var fup = document.getElementById('filenamess');
		        var fileName = fup.value;
		        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

		    if(ext =="JPG" || ext=="jpg")
		    {
		        return true;
		    }
		    else
		    {
		        alert("Upload JPG Images only");
		        document.getElementById('filenamess').value = '';
		        return false;

		    }
		    }
		     function Checkfiles1()
		    {
		       
		        var fup1 = document.getElementById('uploadfilenamess');
		        var fileName1 = fup1.value;
		        var ext = fileName1.substring(fileName1.lastIndexOf('.') + 1);

		    if(ext =="JPG" || ext=="jpg")
		    {
		        return true;
		    }
		    else
		    {
		        alert("Upload JPG Images only");
		        document.getElementById('uploadfilenamess').value = '';
		        return false;

		    }
		    }
	</script>
	</head>
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
			
			<!--sidebar start-->

			<?php

			//$id = $_GET['id'];
          	 $uname=$_SESSION['login_id'];
                  
            $query="select * from tbl_guide_registration where login_id='$uname'";
                  //$query = “select * from tbl_login";
            $result = mysqli_query($con ,$query);
            $data=mysqli_fetch_array($result);
            $first=$data['firstname'];
            $last=$data['lastname'];
            
           	
			?>
			<!--header menu end-->
			<?php
 			$uname=$_SESSION['login_id'];
			$sql="select * from tbl_regpics where login_id='$uname'";
            $res =mysqli_query($con ,$sql);
            $row=mysqli_fetch_array($res);
            $imageURL='image/'.$row["prof_img"];
		?>
			<div class="sidebar">
				<div class="sidebar-menu">
					<center class="profile">
						<img src="<?php echo $imageURL; ?>" alt="">
						<p>
							<?php
							 echo "$first $last"
							?>
						
						</p>
					</center>
					<li class="item">
						<a href="index.php" class="menu-btn">
							<i class="fas fa-desktop"></i><span>Dashboard</span>
						</a>
					</li>
					<li class="item" id="profile">
						<a href="profile.php" class="menu-btn">
							<i class="fas fa-user-circle"></i><span>Profile</span>
						</a>
						
					</li>
					<li class="item" id="messages">
						<a href="addplaces.php" class="menu-btn">
							<i class="fas fa-shipping-fast"></i><span>Add Places</span>
						</a>
						
					</li>
					<li class="item" id="messages">
						<a href="#messages" class="menu-btn">
							<i class="fas fa-shipping-fast"></i><span>Requests</span>
						</a>
						
					</li>
					<li class="item" id="contact">
						<a href="bookhistory.php" class="menu-btn">
							<i class="fa fa-history"></i></i><span>Bookings</i></span>
						</a>
						
					</li>
					<li class="item">
						<a href="guidingdetails.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>Guiding details</span>
						</a>
					</li>
					<li class="item">
						<a href="feedback.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>Feedback</span>
						</a>
					</li>
					
					<li class="item">
						<a href="adventurepackage.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>About</span>
						</a>
					</li>
					
					
				</div>
			</div>
			<!--sidebar end-->
			<!--main container start-->
			<div class="main-container">
				<div class="card">
					<form class="contact100-form validate-form" action="editdetails.php" enctype="multipart/form-data" method="POST">
						<span class="contact100-form-title">
							<?php echo "$first"; ?>'s Profile
						</span>
						 <div class="wrap-input100 ">
						 <img src="<?php echo $imageURL; ?>" class="img-circle" style=" border-radius: 50%;" width="17%">
                          	<input type="file"  name="uploadfile" id="filenamess" class="contact200-form-btn" onblur="Checkfiles()">
                           <span class="focus-input100"></span>
                       </div>


                      <label class="label-input100" for="first-name">Your Name *</label>
                       <div class="wrap-input100 rs1 validate-input">
                          <input id="first-name" class="input100" type="text"  name="first-name" value="<?php echo $data['firstname'] ?>" readonly>
                          <span class="focus-input100"></span>
                      </div>
                       <div class="wrap-input100 rs1 validate-input">
                           <input class="input100" type="text" name="last-name" value="<?php echo $data['lastname'] ?>">
                           <span class="focus-input100"></span>
                       </div>
                       <label class="label-input100" for="message">Address *</label>
                       		<div class="wrap-input100 validate-input">
                             	<input id="adress" class="input100" type="text" name="addresses" value="<?php echo $data['address'] ?>" >
                             	<span class="focus-input100"></span>
                        	</div>

                        	 <label class="label-input100" for="email">Email Address *</label>
                       <div class="wrap-input100 validate-input">
                             <input id="email" class="input100" type="text" name="email" value="<?php echo $data['emails'] ?>" readonly>
                             <span class="focus-input100"></span>
                        </div>

                          <label class="label-input100" for="first-name">DOB *</label>
                       <div class="wrap-input100 rs1 validate-input">
                          <input id="dob" class="input100" type="text"  name="dob" value="<?php echo $data['dobs'] ?>" readonly>
                          <span class="focus-input100"></span>
                      </div>
                      <!-- <div class="wrap-input100 rs1 validate-input">
                           <input class="input100" type="text" name="last-name" placeholder="Department" value="">
                           <span class="focus-input100"></span>
                       </div> -->
                       <div class="wrap-input100 rs1 validate-input">
                       		<select class="input100" name="prooftype" style="height: 50px;" required>  
							  <option value="">Select ID-Proof</option>  
							  <option value="Passport">PASSPORT</option>  
							  <option value="Aadhaar">AADHAAR</option>  
							  <option value="Election_id-card">ELECTION ID-CARD</option>  
							  <option value="Driving_licence">DRIVING LICENCE</option>  
							  <option value="Pancard">PANCARD</option>  
							</select> 
							<span class="focus-input100"></span>
					   </div>	
                       <label class="label-input1001" for="first-name">TYPE OF ID PROOF *</label>
                                               
                      

                        <label class="label-input100" for="first-name">PHONE *</label>
                       <div class="wrap-input100 rs1 validate-input">
                          <input id="phoneno" class="input100" type="text"  name="phoneno" value="<?php echo $data['phone'] ?>">
                          <span class="focus-input100"></span>
                      </div>
                      <div class="wrap-input100 rs1 validate-input">
                           <input class="input100" type="file" name="updateproof" id="uploadfilenamess" style="color: green;"  onblur="Checkfiles1()">
                           <span class="focus-input100"></span>
                       </div>
                       <label class="label-input1001" for="first-name">UPLOAD ID PROOF *</label>
                                           
						<div class="container-contact100-form-btn">
							<input type="submit" class="contact100-form-btn" value="update" name="update">
								<span>
									
									<i class="zmdi zmdi-arrow-right m-l-8"></i>
								</span>
							</button>
						</div>
					</form>
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
<?php
   if(isset($_POST["update"])){
 
     $filename = $_FILES["uploadfile"]["name"]; 
     $tempname = $_FILES["uploadfile"]["tmp_name"];     
     $folder = "image/".$filename; 
     $proofname = $_FILES["updateproof"]["name"]; 
     $tempname1 = $_FILES["updateproof"]["tmp_name"];     
     $folder1 = "proof/".$proofname;
     $nameproof=$_POST["prooftype"];
     $addre=$_POST["addresses"];
     $pho=$_POST["phoneno"];

     

	  //$sqll="INSERT INTO tbl_regpics(prof_img,pro_proof,login_id) VALUES('$filename','$proofname','$uname')";
	 $sqll="update tbl_regpics set prof_img='$filename',pro_proof='$proofname',proof_type='$nameproof' where login_id='$uname'";
	 $sqlll="update tbl_guide_registration set address='$addre',phone='$pho' where login_id='$uname' ";

    mysqli_query($con, $sqll); 
          
        // Now let's move the uploaded image into the folder: image 
        move_uploaded_file($tempname, $folder);
        move_uploaded_file($tempname1, $folder1);
     mysqli_query($con, $sqlll);     
         
  } 
?>
<?php 
if(isset($_POST['update']))
{

echo "<meta http-equiv='refresh' content='0'>";
}
?>
//update the website