<?php
	 include 'connection.php';
     
//<<<<<<<<<<<<<=================== tourist verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
		     if(isset($_GET["login_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["login_id"];
					 $data=1;

		 
	      $sqlll="update tbl_login set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:touristlist.php");
						
			}
			//<<<<<<<<<<<<<=================== tourist verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["login_rdid"])){
					 $condition=$_GET["login_rdid"];
					 $data=2;


		 
	      $sqlll="update tbl_login set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:touristlist.php");
						
			}
			//<<<<<<<<<<<<<=================== guide verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["glogin_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["glogin_id"];
					 $data=1;

		 
	      $sqlll="update tbl_login set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:guidelist.php");
						
			}
			//<<<<<<<<<<<<<=================== guide verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["glogin_rdid"])){
					 $condition=$_GET["glogin_rdid"];
					 $data=2;


		 
	      $sqlll="update tbl_login set status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:guidelist.php");
						
			}

			//<<<<<<<<<<<<<=================== contact verification=====================>>>>>>>>>>>>>>>>>>>>>>>>>>

			if(isset($_GET["contact_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["contact_id"];
					 $data=1;

		 
	      $sqlll="update tbl_contact set contact_status='$data' where contact_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:contactlist.php");
						
			}
			//<<<<<<<<<<<<<=================== tourist verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["contact_rdid"])){
					 $condition=$_GET["contact_rdid"];
					 $data=2;


		 
	      $sqlll="update tbl_contact set contact_status='$data' where contact_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:contactlist.php");
						
			}
			//<<<<<<<<<<<<<=================== tourist booking verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>


			
			if(isset($_GET["loginb_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["loginb_id"];
					 $data=1;

		 
	      $query="update tbl_booking set status='$data' where login_id='$condition' ";

          mysqli_query($con, $query);
          header("location:bookinglist.php");
						
			}
			//<<<<<<<<<<<<<=================== tourist verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["loginb_rdid"])){
					 $condition=$_GET["loginb_rdid"];
					 $data=2;


		 
	      $query1="update tbl_booking set status='$data' where login_id='$condition' ";

          mysqli_query($con, $query1);
          header("location:bookinglist.php");
						
			}


//<<<<<<<<<<<<<=================== tourist feedback verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
		     if(isset($_GET["felog_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["felog_id"];
					 $data=1;

		 
	      $sqlll="update tbl_feedback set feed_status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:touristfeedback.php");
						
			}
			//<<<<<<<<<<<<<=================== tourist feedback verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["felog_rdid"])){
					 $condition=$_GET["felog_rdid"];
					 $data=2;


		 
	      $sqlll="update tbl_feedback set feed_status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:touristfeedback.php");
						
			}

			//<<<<<<<<<<<<<=================== tourist verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["loginb_rdid"])){
					 $condition=$_GET["loginb_rdid"];
					 $data=2;


		 
	      $query1="update tbl_booking set status='$data' where login_id='$condition' ";

          mysqli_query($con, $query1);
          header("location:bookinglist.php");
						
			}


//<<<<<<<<<<<<<=================== guide feedback verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
		     if(isset($_GET["fegulog_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["fegulog_id"];
					 $data=1;

		 
	      $sqlll="update tbl_feedback set feed_status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:guidefeedback.php");
						
			}
			//<<<<<<<<<<<<<=================== guide feedback verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["fegulog_rdid"])){
					 $condition=$_GET["fegulog_rdid"];
					 $data=2;


		 
	      $sqlll="update tbl_feedback set feed_status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:guidefeedback.php");
						
			}

			//<<<<<<<<<<<<<=================== conatct verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
		     if(isset($_GET["contact_id"])){
					 //$condition=$_GET;
					 $condition=$_GET["contact_id"];
					 $data=1;

		 
	      $sqlll="update tbl_feedback set feed_status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:contactview.php");
						
			}
			//<<<<<<<<<<<<<=================== contact verifiaction=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["contact_rdid"])){
					 $condition=$_GET["contact_rdid"];
					 $data=2;


		 
	      $sqlll="update tbl_feedback set feed_status='$data' where login_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:contactview.php");
						
			}
			//<<<<<<<<<<<<<=================== package  drop=====================>>>>>>>>>>>>>>>>>>>>>>>>>>
			if(isset($_GET["pack_id"])){
					 $condition=$_GET["pack_id"];
					 $data=1;
					 

	      $sqlll="update tbl_package set package_status='$data' where package_id='$condition' ";

          mysqli_query($con, $sqlll);
          header("location:packagelist.php");
						
			}

?>
