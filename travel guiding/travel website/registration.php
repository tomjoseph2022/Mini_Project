
<?php
include 'connection.php';
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;

		}
		body{
			background-image: url('images/home-bg-2.jpg');
			background-position: center;
			background-size: cover;
			font-family: sans-serif;
			margin-top: 40px;
			}
		.regform{
			width: 800px;
			background-color: rgb(0, 0, 0,0.5);
			margin: auto;
			color: #FFFFFF;
			padding: 10px 0px 10px 0px;
			text-align: center;
			border-radius: 15px 15px 0px 0px;
			font-size: 20px;
		}
		.main{
			background-color: rgb(0, 0, 0,0.4);
			width: 800px;
			margin: auto;

		}

		form{
			padding: 10px;
		}	
	#name{
		width: 100%;
		height: 100px;
		}
	.name{
		margin-left:25px;
		margin-top: 30px;
		width: 125px;
		color: white;
		font-size: 18px;
		font-weight:700; 

	}
	.firstname{
		position: relative;
		left: 150px;
		top: -37px;
		line-height: 40px;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 16px ;

	}
	.lastname{
		position: relative;
		left: 417px;
		top: -80px;
		width: 210px;
		line-height: 40px;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 16px ;
		color: #555;

	}
	.firstlabel{
		position: relative;
		color: #E5E5E5;
		text-transform: capitalize;
		font-size:14px;
		left: 203px;
		top:-45px; 
	}
	.lastlabel{
		position: relative;
		color: #E5E5E5;
		text-transform: capitalize;
		font-size:14px;
		left: 175px;
		top:-45px;    
	} 
	.dob{
		position: relative;
		left: 150px;
		top: -35px;
		line-height: 40px;
		border-radius: 6px;
		padding: 0 22px;
		width: 190px;
		font-size: 16px ;
		color: #555;
	}
	.password{
		position: relative;
		left: 405px;
		top: -82px;
		width: 190px;
		line-height: 40px;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 16px ;
		color: #555;
	}
	.conpassword{
		position: relative;
		left: 150px;
		top: -37px;
		line-height: 40px;
		width: 550px;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 16px ;
		color: #555;
	}
	.username{
		position: relative;
		left: 150px;
		top: -37px;
		width: 190px;
		line-height: 40px;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 16px ;
	}
	.phonenewpostion{
		position: relative;
		left: 435px;
		top: -80px;
		line-height: 40px;
		border-radius: 6px;
		padding: 0 22px;
		width: 190px;
		font-size: 16px ;
		color: #555;
	}
	.pincodenewpostion1{
		position: relative;
		left: 180px;
		top: -33px;
		line-height: 40px;
		border-radius: 6px;
		padding: 0 22px;
		width: 190px;
		font-size: 16px ;
		color: #555;
	}
	.usernamelabel{
		position: relative;
		color: #E5E5E5;
		text-transform: capitalize;
		left: 410px;
		top:-80px;  
		color: white;
		font-size: 18px;
		font-weight:700; 
	}
	.phonelabel{
		position: relative;
		color: #E5E5E5;
		text-transform: capitalize;
		left: 410px;
		top:-80px;  
		color: white;
		font-size: 18px;
		font-weight:700; 
	}
	.picodelabel{
		position: relative;
		color: #E5E5E5;
		text-transform: capitalize;
		left: 170px;
		top:-35px;  
		color: white;
		font-size: 18px;
		font-weight:700; 
	}
	.addresslabel{
		position: relative;
		color: #E5E5E5;
		text-transform: capitalize;
		left: -140px;
		top:70px;  
		color: white;
		font-size: 18px;
		font-weight:700; 
	}
	.passwordlabel{
		position: relative;
		color: #E5E5E5;
		text-transform: capitalize;
		left: 410px;
		top:70px;  
		color: white;
		font-size: 18px;
		font-weight:700;
	}
	.address{
		position: relative;
		left: 150px;
		top: -37px;
		line-height: 40px;
		width: 550px;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 16px ;
		color: #555;
	}
	.texte{
		position: relative;
		left: 150px;
		top: 35px;
		line-height: 40px;
		width: 550px;
		height: 120px;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 16px ;
		color: #555;
	}
	.email{
		position: relative;
		left: 150px;
		top: -37px;
		line-height: 40px;
		width: 550px;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 16px ;
		color: #555;
	}
	.phonenumber{
		position: relative;
		left: 150px;
		top: -37px;
		line-height: 40px;
		width: 190px;
		border-radius: 6px;
		padding: 0 22px;
		font-size: 16px ;
		color: #555; 
	}
	
	
	
	
	.genderlabel{
		position: relative;
		color: white;
		text-transform: capitalize;
		left: 20px;
		top:19px;  
		font-size: 18px;
		font-weight:700; 
		
	}
	
	
	.linker{
		margin-left: 340px;
		margin-top:70px;
		margin-bottom: 37px;
		font-weight: 15px;
		font-size: 19px;
								
	}

	a:hover {
  		color: aqua;
	}	
	.radio{
		display: inline-block;
		font-size: 20px;
		color: white;
		position: relative;
		color: #E5E5E5;
		text-transform: capitalize;
		left: 200px;
		top:-7px;  
		font-size: 18px;
		font-weight:700; 
	}
	.radio input{
		width: 20px;
		height: 20px;
		border-radius:50%;
		cursor: pointer;
		outline: none;
		 

	}
	button{
		background-color: #3BAF9F;
		display: block;
		font-size: 20px;
		margin: 20px 0px 0px 20px;
		text-align: center;
		border-radius: 12px;
		border: 2px solid #366473;
		padding: 14px 110px;
		outline: none;
		color: white;
		cursor: pointer;
		transition: 0.25px;



	}
	button:hover{
		background-color: #5390F5;
	}
	.button1{
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		background-color: #3333ff;
		border-radius: 12px;

	}


	</style>
	<script type = "text/javascript">
   
      function validate() {
      	var password1=document.myForm.pass.value;  
      	var password2=document.myForm.conpassword.value;  
      	var phones=document.myForm.phone.value;
      	var firname=document.myForm.firstname.value;
      	var lasname=document.myForm.lastname.value;
      	var ema=document.myForm.emails.value;
      	var st=document.myForm.state.value;
      	var pin=document.myForm.pincode.value;
      	var user=document.myForm.username.value;
      	var gen=document.myForm.gender.value;
      	var addre=document.myForm.addresses.value;

      	

      	var pwd_expression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
         var letters = /^[A-Za-z]+$/;
         var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
         var phoneno = /^\d{10}$/;
         var a = /(^\d{6}$)/;  

      
        if(firname=='')
        {
            alert('Please enter your name');
            return false;
        }
        else if(!letters.test(firname))
        {
            alert('FirstName field required only alphabet characters');
            return false;
        }
        else if(lasname=='')
        {
            alert('Please enter your lastname');
             return false;
        }
        else if(!letters.test(lasname))
        {
            alert('LastName field required only alphabet characters');
            return false;
        }
        
        else if(ema=='')
        {
            alert('Please enter your user email id');
            return false;
        }
        
        else if (!filter.test(ema))
        {
            alert('Invalid email');
            return false;
        }
         else if(st=='')
        {
            alert('Please enter your user State');
            return false;
        }
        else if(pin=='')
        {
            alert('Please enter your user Pincode');
            return false;
        }
        else if(!a.test(pin))
        {
            alert('Please enter your Correct pincode');
            return false;
        }
         else if(phones=='')
        {
            alert('Please enter the Phone.');
            return false;
        }
        else if(!phoneno.test(phones))
        {
            alert('Invalid Phoneno');
            return false;
        }
        else if(user=='')
        {
            alert('Please enter the username.');
            return false;
        }
       
        else if(password1=='')
        {
            alert('Please enter Password');
            return false;
        }
        else if(!pwd_expression.test(password1))
        {
            alert ('7 to 15 characters which contain at least one numeric digit and a special character  are required in Password filed');
            return false;
        }
        else if(password2=='')
        {
            alert('Enter Confirm Password');
            return false;
        }

        else if(password1 != password2)
        {
            alert ('Password not Matched');
            return false;
        }
       
        else if(gen=='')
        {
            alert('Please enter the gender');
            return false;
        }
        else if(addre=='')
        {
            alert('Please enter your address');
             return false;
        }
        
        else{
        	alert('Registration Sucessfully');
        }
          
               
       return( true );

      }


	  function getAge() {
		var dateString=document.myForm.dobs.value;
		//var dateString = document.getElementById("date").value;
		if(dateString !="")
		{
		    var today = new Date();
		    var birthDate = new Date(dateString);
		    var age = today.getFullYear() - birthDate.getFullYear();
		    var m = today.getMonth() - birthDate.getMonth();
		    var da = today.getDate() - birthDate.getDate();
		    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
		        age--;
		    }
		    if(m<0){
		        m +=12;
		    }
		    if(da<0){
		        da +=30;
		    }
		    
		  if(age < 18 || age > 100)
		{
		alert("Age "+age+" is restrict Allowed only for more than 18 years old");
		document.myForm.dobs.value='';

		} else {

		alert("Age "+age+" is allowed");
		}
		} else {
		//alert("please provide your date of birth");
		}
		}


</script>
<!-- <input type="text" id="date" value="1987/08/31" onblur="getAge()"> -->

   


</head>
<body> 

	<div class="regform"><a href="index.php"><img src="images/2.png" style="margin-bottom: -49px;border-radius: 50% ;margin-left: -410px;"  
          class="img-circle"  width="40"; ></a><h1>Registration Form</h1></div>
	<div class="main">
		<form name = "myForm" action="registration.php" onsubmit = "return(validate());" method="POST"  enctype="multipart/form-data">
			<div id="name">
				<h2 class="name">Name</h2>
				<input class="firstname" type="text" name="firstname"><br>
				<label class="firstlabel">first name</label>
				<input class="lastname" type="text" name="lastname">
				<label class="lastlabel">last name</label>
			</div>
					
			<h2 class="name">Email</h2>
			<input class="email"  type="email" name="emails">

			<div id="name">
				<h2 class="name">State</h2>
				
				<select class="dob" name="state" style="height: 43px;width: 237px;">  
					<option value="">Select State</option>  
					<option value="kerala">Kerala</option>  
					<option value="tamilnadu">Tamil Nadu</option>  
					<option value="goa">Goa</option>  
					<option value="karnataka">Karnataka</option>  
					<option value="andrapradesh">Andra Pradesh</option>  
				</select> 
				<label class="picodelabel">Pincode :</label>
				<input class="pincodenewpostion1" type="text" name="pincode" placeholder="Pincode...">
			</div>
			<div id="name">
				<h2 class="name">Dob</h2>
				<input class="dob" type="date" name="dobs" onblur="getAge()"><br>
				<label class="phonelabel">Moblie :</label>
				<input class="phonenewpostion" type="text" name="phone" placeholder="Mobile...">
			</div>
			<div id="name">
				<h2 class="name">Username</h2>
				<input class="username" type="text" name="username"><br>
				<label class="phonelabel">Password :</label>
				<input class="password" type="password" name="pass" placeholder="Enter password">
			</div>
			<h2 class="name">Con.Pass</h2>
			<input class="conpassword" type="password" name="conpassword" placeholder="confirm password">
		
								
			<h2 class="genderlabel">Your Gender?</h2>
			<label class="radio">
				<input type="radio" name="gender" value="male" selected> Male
				<input type="radio" name="gender"  class="radio2" value="female"> Female

			</label>
			<label class="addresslabel">Address :</label>
			<input type="text" name="addresses" class="texte">  
			
			<h2 class="linker" ><a href="login.php"  style="text-decoration: none;">Already Login...?</a></h2>
			<center><button type="submit" name="click">Register</button></center>
			<center><a href="index.php"><input type="button" name="Home" class="button1" value="Home" style="margin: 20px 600px 0px 40px;"></center></a>
	</div>

</body>
</html>

<?php

   if(isset($_POST["click"]))

   {
 
      $fname=$_POST["firstname"];
  
      $lname=$_POST["lastname"];
      $add=$_POST["addresses"];
      $eml=$_POST["emails"];
      $statt=$_POST["state"];
      $pincodes=$_POST["pincode"];
      $dob=$_POST["dobs"];
      $user=$_POST["username"];
      $pass=$_POST["pass"];
      $phone=$_POST["phone"];
      $gend=$_POST["gender"];
      $roll="tourist";

      $sql = "Select * from tbl_login where username='$user'";
    
     $result12 = mysqli_query($con, $sql);
    
     $num = mysqli_num_rows($result12); 
    
     if($num == 0) {



      $req = "insert into tbl_login(username,password,role) values ('$user','$pass','$roll')";
      
      mysqli_query($con,$req);
      
      		$query="select * from tbl_login where username='$user' ";
			//$query = “select * from tbl_login";
			$result = mysqli_query($con ,$query);

			$row=mysqli_fetch_array($result);
			
			
			$usern=$row['login_id'];

		    
			

      		$sql = "INSERT INTO tbl_registration(firstname,lastname,address,emails,state,pincode,dobs,phone,gender,login_id) VALUES ('$fname',' $lname','$add','$eml','$statt','$pincodes','$dob','$phone','$gend',
      					'$usern')"; 
      
      		mysqli_query($con,$sql); 
       		$sqll="INSERT INTO tbl_regpics(prof_img,pro_proof,proof_type,login_id) VALUES ('personicon.jpg','Not Uploaded','Not Uploaded','$usern')";
       		mysqli_query($con, $sqll); 

       		header('location:index.php');


		     }else
		     {
		     	echo "<script>alert('username not available')</script>";
		     }
		     ob_end_flush();





    } 

 ?>

