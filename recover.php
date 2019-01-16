<?php include('includes/header.php') ?>
<section class="sec1" style="background-image: url(img/recov.jpg);">
		
	<div class="header">
			
			<!--
				<div id="loader">
					
						<img src="load.gif" width="30%">

				</div>-->
				<div class="navbar">
					<a href="index.php" class="channel" ><img class="logo" src="img/mainlogo.png"  ></a>
					<ul>
						<li><a href="index.php" >Home</a></li>
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
	



			
				<form class="recov" method="POST">
					<center><h1>Recover Password</h1></center>
					<br><hr width="90%"><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address</strong><br>
					<input type="text" name="email" class="textarea" ><br>
					<a href="index.php"><input type="button" name="cancel" class="warnbtn" value="cancel"></a>
					<a href="#"><input type="button" name="Send_Verification_code" class="confbtn" value="Send Verification code"></a>

				</form>			
				
			

</section>

		


<?php include('includes/footer.php') ?>