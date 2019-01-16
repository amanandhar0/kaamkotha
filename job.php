<?php    include('includes/header.php'); ?>
<section class="sec1" style="background-image: url(img/jobpage.jpg);">
<div class="header">
			
			<!--
				<div id="loader">
					
						<img src="load.gif" width="30%">

				</div>-->
				
				<div class="navbar">
					<a href="index.php" class="channel" ><img class="logo" src="img/mainlogo.png"  ></a>
					<ul>
						<li><a href="index.php" >Home</a></li>
						<li><a href="job.php" class="active" >job</a></li>

						<?php if (permission()):?>
													
							<li><a href="postj.php" >Post Job</a></li>
							
						<?php endif; ?>
						
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
			<br><br><br><br>
<form method="POST" class="searchjob"> <br><br>

	<p style="font-size: 200%; color:#fff; text-align: center;">Search Jobs</p>
	<input type="text" name="title" placeholder="Job title / Organizations" class="textarea">
	<br>

	<center><input type="submit" name="search" value="search" class="confbtn"></center>
</form>


			</section>
			<br>
		<div class="jobdisp">

			<?php get_jobs() ?>

		
		</div>
<?php    include('includes/footer.php'); ?>