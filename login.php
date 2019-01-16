<?php    include('includes/header.php'); ?>
<section class="loginn">
		<div class="header">
			
			<!--
				<div id="loader">
					
						<img src="load.gif" width="30%">

				</div>-->
				<div class="navbar">
					<a href="index.php" class="channel" ><img class="logo" src="img/mainlogo.png" ></a>
					<ul>
						<li><a href="index.php" >Home</a></li>
						<!-- <li><a href="about.php" >About</a></li> -->
						<li><a href="job.php" >Job</a></li>
						<li><a href="room.php" >Room</a></li>
						<?php if(!logged_in()): ?>
						<li><a href="Login.php" class="active">Log In</a></li>
						<?php endif; ?>
						<?php if(logged_in()): ?>
						<li><a href="logout.php" >Log Out</a></li>
						<?php endif; ?>
					</ul>
				</div>
			

		</div>
		<?php display_message(); ?>
		<?php validate_user_login(); ?>
		
	



		
			<center>
				<form class="login" method="POST">
					<br>
					<h1>Log In</h1>
					<hr width="90%"><br>
					
					<input type="text" name="email" class="textarea" required minlength="10" placeholder="Email"><br>
					<input type="Password" class="textarea" name="Password" required minlength="8" placeholder="Password"><br>
					<input type="checkbox" name="remember">Remember Me<br><br>

					<input type="Submit" name="Login" value="Login" class="logbtn"><br><br>
					<a href="recover.php" class="unclink">Forgot Password?</a>
				</form>			

			</center>
		

</section>

		<div class="footer">
			

		</div><!--End of div footer-->
<?php include('includes/footer.php') ?>