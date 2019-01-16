<?php    include('includes/header.php'); ?>
<section class="sec1" style="background-image: url(img/roomadv.jpg);">
	

	<div class="header">
			
			<!--
				<div id="loader">
					
						<img src="load.gif" width="30%">

				</div>-->
				<div class="navbar">
					<a href="index.php" class="channel" ><img class="logo" src="img/mainlogo.png"  ></a>
					<ul>
						<li><a href="index.php" >Home</a></li>
						<li><a href="about.php" class="active" >About</a></li>
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
		<br>
	

<hr width="90%">
		<center>
			<a href="#" id="provider">
				<div class="txtoverimg" style="background-image: url(img/provi.jpg);"  data-text="A provider
				 is a person that can prvide multiple jobs and a room in rent. He cannot apply for jobs and cannot rent rooms. Click here to create Provider's Account. Being a provider you can recruit newcomers and renters with your own rule.">
				</div></a>

			<a href="#" id="seeker">
				<div class="txtoverimg" style="background-image: url(img/seeki.jpg);"  data-text="A seeker 
				is a person that seeks for a job and renta room. He cannot provide jobs or room. Click here to create Seeker's Account. As a seeker you yourself can choose your carrer and place to live.">
				</div></a>
			
			</center>
		

</section>

			<?php include('includes/footer.php') ?>