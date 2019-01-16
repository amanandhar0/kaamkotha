<?php    include('includes/header.php'); ?>
<section class="sec1" style="background-image: url(img/reset.jpg);">
		<div class="header">
			
			<!--
				<div id="loader">
					
						<img src="load.gif" width="30%">

				</div>-->
				
				<div class="navbar">
					<a href="index.php" class="channel" ><img class="logo" src="img/mainlogo.png"  ></a>
					<ul>
						<li><a href="index.php">Home</a></li>
						<!-- <li><a href="about.php" >About</a></li> -->
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
		<BR><br><br><br><br>
		<form class="reset" method="POST">
			
			<center><h1>Reset Password</h1></center>
            <br><br>

			<hr align="90%">
            <br><br>

			<input type="Password" name="Password" class="textarea" placeholder="Password">
			<br>
			<input type="Password" name="CPassword" class="textarea" placeholder="Confirm Password">

		</form>
        <br><br><br><br><br>

<?php    include('includes/footer.php'); ?>