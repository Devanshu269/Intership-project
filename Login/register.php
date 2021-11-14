<?php
	session_start();
	require_once('dbconfig/config.php');
			if(isset($_POST['sign_btn']))
			{
				@$fullname=$_POST['fullname'];
				@$username=$_POST['username'];
				@$gender=$_POST['gender'];
				@$email=$_POST['email'];
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from user where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into user values('$fullname','$username','$gender','$email','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: ../project/homeL.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
		?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Sign In Page</title>
  <link rel="stylesheet" href="Lstyle.css">
</head>
<body>
<form  method="post" class="needs-validation">
  <div class="login-box">
    <h1>Sign In</h1>
    <div class="textbox">
      <label for="fullname">Fullname</label>
      <i class="fas fa-user"></i>
      <input type="text" placeholder="Fullname" name="fullname" required>
    </div>

    <div class="textbox">
      <label for="username">Username</label>
      <i class="fas fa-user"></i>
      <input type="text" placeholder="Username" name="username" required>
    </div>
    
		<div class="textboxs">
      <label for="gender">Gender</label>
      <i class="fas fa-user"></i>
      <input type="radio" placeholder="Gender" name="gender" value="Male" required>Male
			<input type="radio" placeholder="Gender" name="gender" value="Female" required>Female
    </div>
    
		<div class="textbox">
      <label for="email">Email</label>
      <i class="fas fa-user"></i>
      <input type="email" placeholder="Email" name="email" required>
    </div>
    
		<div class="textbox">
      <label for="password">Password</label>
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Password" name="password">
    </div>
    <div class="textbox">
      <label for="cpassword">Confirm Password</label>
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Confirm Password" name="cpassword">
    </div>
    <button type="submit" name="sign_btn" class="sign-btn">Sign In</button>
    <a href="login.php"><button type="button" class="sign-btn">Back to Login</button></a>
  </div>
</form>
</body>
</html>