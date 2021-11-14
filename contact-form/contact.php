<?php
$connection=mysqli_connect('localhost','root','nixiscool','contact');
if(isset($_POST["submit_btn"])){
$errors = array();
$fullname = trim($_POST["full_name"]);
$emailid = trim($_POST["email_id"]);
$subject = strip_tags(trim($_POST["email_subject"]));
$message = htmlspecialchars(trim($_POST["email_message"]));
$message_info = 'Hi ' . $fullname . ' we recieved your request we will be shortly with you';
if(!empty($fullname) && !empty($emailid) && !empty($subject) && !empty($message)){
	if(strlen($fullname) < 5 || strlen($fullname) > 30 || !ctype_alpha(str_replace(' ', '', $fullname))){
		$errors['fullname'] = 'Please enter the Full name';
	}
	if(!filter_var($emailid, FILTER_VALIDATE_EMAIL)){
		$errors['emailid'] = 'Please enter a valid email.';
	}
	
	if(strlen($subject) < 5 || strlen($subject) > 100){
		$errors['subject'] = 'Enter min 5 to max 100 character in subject.';
	}
	
	if(strlen($message) < 5 || strlen($message) > 10000){
		$errors['message'] = 'Enter min 5 to max 10000 character in message.';
	}
	
	if(empty($errors)){
		if(mail($emailid, $subject, $message_info)){
				$success = 'Hi ' . $fullname . ' your form is successfully submitted and you will recieve a email shortly.';
				$sql_query="insert into users(uname, uemail, uopinion ) values('$fullname','$emailid', '$subject');";
				$run_query=mysqli_query($connection,$sql_query);
				if(!$run_query){

				echo 'table creation failed<br>'.mysqli_error($connection)."<br>";
				}
		}else{
		    	$errors['main'] = 'Error while sending the mail please try again later.';
		}
	}else{
	$errors['main'] = 'Error while validating the form.';
	}

	
}else{
	$errors['main'] = 'All fields are required to submit the form.';
}

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/product/">

    <!-- Bootstrap core CSS -->
<link href="bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="cstyle.css" rel="stylesheet">
  </head>

<body>
<header>
        <div class="flex">
            <div class="logo">
                <a href="#"><img src="https://onclickwebdesign.com/wp-content/uploads/game_warrior_logo.png"
                        alt="Game Warrior Logo" /></a>
            </div>
            <nav>
                <button id="nav-toggle" class="hamburger-menu">
                    <span class="strip"></span>
                    <span class="strip"></span>
                    <span class="strip"></span>
                </button>
                <ul id="nav-menu-container">
					<li><a href="../project/homeL.php">Home</a></li>
					<li><a href="../project/Games/product.php">Games</a></li>
                    <li><a href="https://www.gamespot.com/news/">News</a></li>
                    <li><a href="../project/opinion/opinion.php">Opinion</a></li>
                </ul>
						</nav>
						<a>                            </a>
            <a>                            </a>
        </div>
    </header>

	<div class="container">
		<!-- Top heading and description -->
		<div class="py-3 text-center">
			<h2>Contact Us</h2>
			<p class="lead">If you have any questions regarding to any GAME feel free to contact us by using following contact
				form.<br />We will reply you back within one working day. (All fields are required)</p>
		</div>

		<!-- Form row start -->
		<div class="row">
			<div class="col-md-8">
				<h4 class="mb-3"><b>Contact form</b></h4>
				<?php if(isset($success)){ ?>
				<div class="alert alert-success" role="alert"><?php echo $success; ?></div>
				<?php } ?>
				<?php if(isset($errors) && !empty($errors['main'])) { ?>
				<div class="alert alert-danger" role="alert"><?php echo $errors['main']; ?></div>
				<?php } ?>
				<form action="/contact-form/" method="post" class="needs-validation">

					<div class="mb-3">
						<label for="Full_name"></label>
						<input type="text" value="<?php if(isset($fullname)){ echo $fullname; } ?>" name="full_name" id="full_name"
							class="form-control <?php if(isset($errors) && !empty($errors['fullname'])) { echo 'is-invalid'; } ?>"
							placeholder="FullName" required autofocus>
						<div class="invalid-feedback">
							<?php if(isset($errors) && !empty($errors['fullname'])) { echo $errors['fullname']; } ?></div>
					</div>

					<div class="mb-3">
						<label for="email_id"></label>
						<input type="email" value="<?php if(isset($emailid)){ echo $emailid; } ?>" name="email_id" id="email_id"
							class="form-control <?php if(isset($errors) && !empty($errors['emailid'])) { echo 'is-invalid'; } ?>"
							placeholder="Email address" required autofocus>
						<div class="invalid-feedback">
							<?php if(isset($errors) && !empty($errors['emailid'])) { echo $errors['emailid']; } ?></div>
					</div>

					<div class="mb-3">
						<label for="email_subject"></label>
						<input type="text" value="<?php if(isset($subject)){ echo $subject; } ?>" name="email_subject" id="email_subject"
							class="form-control <?php if(isset($errors) && !empty($errors['subject'])) { echo 'is-invalid'; } ?>"
							placeholder="Subject" required autofocus>
						<div class="invalid-feedback">
							<?php if(isset($errors) && !empty($errors['subject'])) { echo $errors['subject']; } ?></div>
					</div>

					<div class="mb-3">
						<label for="email_message"></label>
						<textarea value="<?php if(isset($message)){ echo $message; } ?>" name="email_message" id="email_message"
							class="form-control <?php if(isset($errors) && !empty($errors['message'])) { echo 'is-invalid'; } ?>"
							placeholder="Message" required autofocus></textarea>
						<div class="invalid-feedback">
							<?php if(isset($errors) && !empty($errors['message'])) { echo $errors['message']; } ?></div>
					</div>

					<hr class="mb-3">
					<button type="submit" name="submit_btn" class="btn btn-primary btn-lg btn-block">Submit</button>

				</form>
			</div>
		</div> <!-- Form row end -->

		<!-- Page footer -->
    <footer>
        <small>Copyright &copy; 2020 All rights reserved <span>| Devanshu Shekhar</span></small>
        <br></br>
    </footer>

	</div> <!-- Page container end -->
</body>

</html>
