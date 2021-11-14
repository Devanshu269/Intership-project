<?php
	session_start();
	require_once('dbconfig/config.php');
if(isset($_POST["submit_btn"]))
  {
$errors = array();
@$fullname = trim($_POST["full_name"]);
@$emailid = trim($_POST["email_id"]);
@$subject =  htmlspecialchars(trim($_POST["email_subject"]));
if(!empty($fullname) && !empty($emailid) && !empty($subject)){
	if(strlen($fullname) < 5 || strlen($fullname) > 30 || !ctype_alpha(str_replace(' ', '', $fullname))){
		$errors['fullname'] = 'Please enter the Full name';
	}
	if(!filter_var($emailid, FILTER_VALIDATE_EMAIL)){
		$errors['emailid'] = 'Please enter a valid email.';
	}
	
	if(strlen($subject) < 5 || strlen($subject) > 100){
		$errors['subject'] = 'Enter min 5 to max 100 character in Opinion.';
  }	
  			
	if(empty($errors)){
    $sql_query="insert into users values('$fullname','$emailid', '$subject');";
}
}
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Form</title>
  <link rel="stylesheet" href="ostyle.css">
</head>

<body>
  <header class="bar">
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
          <li><a href="../home.php">Home</a></li>
          <li><a href="../Games/product.php">Games</a></li>
          <li><a href="https://www.gamespot.com/news/">News</a></li>
          <li><a href="../../contact-form/contact.php">Contact</a></li>
        </ul>
      </nav>
      <a>                            </a>
      <a>                            </a>
    </div>
  </header>
  <div class="container">
    <header class="tm">
      <h1>Your opinion</h1>
      <p>Give your opinion its matter</p>
    </header>
    <div class="content group">
      <div class="main-area">
        <header class='tm'>
          <h2>What you think about Gaming</h2>
        </header>
        <p>A PC game, also known as a computer game or personal computer game, is a type of video game played on a
          personal computer rather than a video game console or arcade machine. Its defining characteristics include:
          more diverse and user-determined gaming hardware and software; and generally greater capacity in input,
          processing, video and audio output. The uncoordinated nature of the PC game market, and now its lack of
          physical media, make precisely assessing its size difficult</p>

        <div>
          <form method="post" class="needs-validation">
					<div class="mb-3">
						<label for="Full_name"></label>
						<input type="text" value="<?php if(isset($fullname)){ echo $fullname; } ?>" name="full_name" id="full_name"
							class="form-control <?php if(isset($errors) && !empty($errors['fullname'])) { echo 'is-invalid'; } ?>"
							placeholder="FullName" required autofocus>
						<div class="invalid-feedback">
							<?php if(isset($errors) && !empty($errors['fullname'])) { echo $errors['fullname']; } ?></div>
					</div>
          <br></br>
					<div class="mb-3">
						<label for="email_id"></label>
						<input type="email" value="<?php if(isset($emailid)){ echo $emailid; } ?>" name="email_id" id="email_id"
							class="form-control <?php if(isset($errors) && !empty($errors['emailid'])) { echo 'is-invalid'; } ?>"
							placeholder="Email address" required autofocus>
						<div class="invalid-feedback">
							<?php if(isset($errors) && !empty($errors['emailid'])) { echo $errors['emailid']; } ?></div>
					</div>
          <br></br>
					<div class="mb-3">
						<label for="email_subject"></label>
						<input type="text" value="<?php if(isset($subject)){ echo $subject; } ?>" name="email_subject" id="email_subject"
							class="form-control <?php if(isset($errors) && !empty($errors['subject'])) { echo 'is-invalid'; } ?>"
							placeholder="Subject" required autofocus>
						<div class="invalid-feedback">
							<?php if(isset($errors) && !empty($errors['subject'])) { echo $errors['subject']; } ?></div>
          </div>
          <br></br>
            <p></p>
            <input id="term" type="checkbox"><label for="term" <p class="term">I agree with all the terms</p>
            </label>
            <p></p>
            <button type="submit" name="submit_btn" class="form-submit-button" value="Submit">Submit</button>
          </form>
        </div>
        <p>PC gaming is considered synonymous (by Newzoo and others) with IBM Personal Computer compatible systems;
          while mobile computers – smartphones and tablets, such as those running Android or iOS – are also personal
          computers in the general sense. The APAC region was estimated to generate $46.6 billion in 2016, or 47% of
          total global video game revenues . China alone accounts for half of APAC's revenues
          (at $24.4 billion), cementing its place as the largest video game market in the world, ahead of the US's
          anticipated market size of $23.5 billion. China is expected to have 53% of its video game revenues come from
          mobile gaming in 2017 (46% in 2016).
        </p>
      </div>
      <div>
        <aside class="side-area">
          <p>
            Home computer games became popular following the video game crash of 1983, leading to the era of the
            "bedroom
            coder". In the 1990s, PC games lost mass-market traction to console games, before enjoying a resurgence in
            the
            mid-2000s through digital distribution.
          </p>
        </aside>
      </div>
    </div>
    <footer><b>
        <small>Copyright &copy; 2020 All rights reserved <span>| Devanshu Shekhar</span></small>
        <br></br>
        <small><a href="#">About us</a></small></b>

    </footer>
  </div>

</body>

</html>
