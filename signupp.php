<?php    include('includes/header.php'); ?>
<section class="signsec">
	<div class="header">
			
			<!--
				<div id="loader">
					
						<img src="load.gif" width="30%">

				</div>-->
				<div class="navbar">
					<a href="index.php" class="channel" ><img class="logo" src="img/mainlogo.png"  ></a>
					<ul>
						<li><a href="index.php" >Home</a></li>
						<li><a href="about.php" >About</a></li>
						<li><a href="job.php" >Job</a></li>
						<li><a href="room.php" >Room</a></li>
						<?php if(!logged_in()): ?>
						<li><a href="Login.php" >Log In</a></li>
						<?php endif; ?>
						<?php if(logged_in()): ?>
						<li><a href="logout.php" >Log Out</a></li>
						<?php endif; ?>
					</ul>
				</div>
			

		</div>
	<?php  validate_user_registration_provider(); ?>
	<div class="midsection">

		<div class="Signupform">
		
		<form method="POST" class="Signup">
			
           <!-- <center><h1>Provider Signup</h1></center><br>-->
       		
		<br>
			<center><h1>Provider Signup</h1></center>

			<hr width="90%">
			<br>
			<input type="text" name="Name" required minlength="10" class="textarea" placeholder="Name"><br>
			<input type="text" name="Address" required minlength="5" class="textarea" placeholder="Address"><br>
			<input type="text" name="Phone" required minlength="7" class="textarea" placeholder="Phone no."><br>
			<input type="text" name="Age" required class="textarea" placeholder="Age"><br>
			<input type="text" name="email" required minlength="10" class="textarea" placeholder="Email"><br>
			<input type="password" name="password" required minlength="8" class="textarea" placeholder="Password"><br>
			<input type="password" name="cpassword" required minlength="8" class="textarea" placeholder="Confirm password">
				<br>
			<center><a href="signup.php"><input type="button" name="reset" class="warnbtn" value="reset"></a>
					<input type="submit" name="Register Now" class="confbtn" value="Register Now"><br>
			<a href="login.php" class="unclink"><strong>Already have an account? Login</strong></a>
			
		</center>
		</form>
	</div>

	</div><bR><br>
</section>
	

<?php    include('includes/footer.php'); ?>