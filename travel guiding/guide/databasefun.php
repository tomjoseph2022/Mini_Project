<?php
	 include 'connection.php';
     
//<<<<<<<<<<<<<=================== tourist Guide verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
		     if(isset($_GET["login_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["login_id"];
					 $data=1;

		 
	      $sqlll="update tbl_guide_booking set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:bookhistory.php");
						
			}
			//<<<<<<<<<<<<<=================== tourist  Guide verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["login_rdid"])){
					 $condition=$_GET["login_rdid"];
					 $data=2;


		 
	      $sqlll="update tbl_guide_booking set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:bookhistory.php");
						
			}
			

?>
