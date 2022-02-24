<?php
	include("connection.php");
?>
<html>
	<head>
		<title>SignIn</title>
	
		<style>
			.center {
					margin: auto;
					position: absolute;
					top: 30%;
					left: 40%;
					border: 3px solid green;
					width:300px;
					height:200px;
					}
					input[type="text"] {
										  width: 200px;
										  height:30px;
										}
					input[type="password"] {
										  width: 200px;
										  height:30px;
										}
		</style>
	</head>
	<body>
		<div class="center">
			<form action="#" method="POST">
				<table width="100px">
			
					<tr>
						<td>Username</td>
						<td><input type="text" name="uname" required/></td>
					</tr>
					
					<tr>
						<td>Password</td>
						<td><input type="password" name="pword" required/></td>
					</tr>
					<tr>
						<td colspan="2"><center><input type="submit" name="Click" value="SignIn"/></center></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>

<?php
	if(isset($_POST["Click"])){
	
			$user=$_POST["uname"];
			$pwd=$_POST["pword"];
			$sql="insert into tbl_login(username,password)values('$user','$pwd')";
			
			if(mysqli_query($con,$sql))
			{
				//$last_id = mysqli_insert_id($con);
				//echo $last_id;
				//$sqll="insert into tbl_reg(login_id,name,email)values($last_id,'$name','$email')";
				//if(mysqli_query($con,$sqll)){
				?>
				<script>
				//alert("sucessfully inserted");
				</script>
				<?php
				
			}
			$query="select * from tbl_login where username='$user' ";
			//$query = “select * from tbl_login";
			$result = mysqli_query($con ,$query);

			echo "<table border=‘1’>";
			echo "<tr>";
			echo "<th>Name</th><th>Number</th>";
			echo "<tr>";
			while($row=mysqli_fetch_array($result))
			{
			echo "<td>", $row['username'];
			$user=$row['username'];
			echo "$user";

			?>


			<?php
			echo "</tr>";
			}
			echo "</table>";
			mysqli_close($con);

			
	
	}
?>