<!DOCTYPE html>
<html>
<head>

	<title>Welcome to Facebook</title>
</head>

	<link rel="stylesheet" type="text/css" href="style.css">

<body>

	<form method="POST">
		
	<div class="top">

		<table align="left">
			<tr>
				<td>	
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;facebook</p> 
				</td>
			</tr>
		</table>

		<form method="POST" action="facebook.php">
		

		<table class="emailpass" align="right" cellspacing="15px;">
			<tr>
				<td>
					<b>Email or Phone</b>	
				<br>

			<input type="Text" name="emailadd">
				</td>

					<td>
						<b>Password</b>
					<br>

			<input type="Password" name="pd">
				<br>
	
					</td>
				
						<td>
					<br>

			<input class="login" type="Submit" name="login" value="Log In">
					</td>
		</table>

		</div>


		<div class="connect">
			<br><b>Connect with friends and the world<br> around you on Facebook.</b>
			<br>
			<br>
			<br>
			
				<img src="p1.png"> 
				<font size="4"> <b> See photos and updates</b> from friends in News Feed. </font>
			<br>
			<br>
			<br>

				<img src="p2.png"> 
				<font size="4"> <b> Share what's new </b> in your life on your Timeline. </font>
			<br>
			<br>
			<br>

				<img src="p3.png"> 
				<font size="4"> <b>Find more </b> of what you're looking for with Facebook Search. </font>
		</div>


		<div class="signup">
			<h1>Sign Up</h1>It's quick and easy. <br><br>

			<input type="text" name="fname" placeholder="First name"> &nbsp;&nbsp;&nbsp;
																	
			<input type="text" name="lname" placeholder="Last name">
			<br><br>

			<div class="signup1">

			<input type="text" name="email" placeholder="Mobile number or email">
			<br><br>

			<input type="text" name="password" placeholder="New password">

			</div>
			<br>

			<b style="color: #777b7e;">Birthday</b>
			<input type="date" id="namebox" name="birthday">

				  <br><br>

				  <div class="birthgen">
			<b> Gender </b> 
			</div>
			<br>
			<input type="Radio" name="gender" value="Female">Female
			<input type="Radio" name="gender" value="Male">Male
			<input type="Radio" name="gender" value="Custom">Custom
			<br><br>

			<font size="2px"> By clicking Sign Up, you agree to our Terms, 
				<font color="#483d8b"> Data Policy </font> and <font color="#483d8b">Cookies Policy. </font> You may receive SMS Notifications from us and can opt out any time.</font> <br><br>
	
			<div class="button">
			<input type="Submit" class="btn btn-success" name="sign" value="Sign Up" >
			</div>

					
		</div>
	</form>	


	<?php

		$servername="localhost";
		$username="root";
		$password="";
		$databasename="dbfacebook";


		$connect= mysqli_connect($servername, $username, $password, $databasename);
	?>


	<?php
		if (isset($_POST ['sign'])){
			$firstname = $_POST['fname'];
			$lastname = $_POST['lname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$birthday = $_POST['birthday'];
			$gender = $_POST['gender'];

			

			$insert = "INSERT INTO tblFacebook (fname,lname,email,password,birthday,gender ) VALUES ('$firstname','$lastname','$email', '$password','$birthday','$gender')";

			$query = mysqli_query($connect,$insert);
			if ($query==True )
			{
					echo "<b>Record added </b>";
					header("location: facebook.php");
				}
				else {
					echo "<b>Record not added </b>";
				}
			}
			
		?>


	<?php



		$servername="localhost";
		$username="root";
		$password="";
		$databasename="dbfacebook";


		$connect= mysqli_connect($servername, $username, $password, $databasename);

		if (isset($_POST ['login'])){

		$e = $_POST['emailadd'];
		$p = $_POST['pd'];


			$query= "SELECT * FROM tblfacebook WHERE email = '$e' AND password = '$p'";
			$result = mysqli_query($connect, $query);
			$count= mysqli_num_rows($result);

			if ($count>0)
			{
				header("location: login.php");
			}
			else {
				echo "<h3><b>Username/Password is Incorrect</b></h3>";
			}
		}

	?>


</tr>
</table>
</div>
</form>
</body>
</html>
