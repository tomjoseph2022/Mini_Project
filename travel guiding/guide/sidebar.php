<?php


           $uname=$_SESSION['login_id'];
                  
            $query="select * from tbl_guide_registration where login_id='$uname'";
                  //$query = “select * from tbl_login";
            $result = mysqli_query($con ,$query);
             while($row=mysqli_fetch_array($result))
           	{
         
           $userids=$row['login_id'];
           //$user=$row['username'];
           $first=$row['firstname'];
           $last=$row['lastname'];
         
           	}
?>

<?php
 			$uname=$_SESSION['login_id'];
			$sql="select * from tbl_regpics where login_id='$uname'";
	            $res =mysqli_query($con ,$sql);
	            $row=mysqli_fetch_array($res);
	            $imageURL='image/'.$row["prof_img"];
			?>
			<!--sidebar start-->
			<div class="sidebar" style="background:#2F323A;">
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