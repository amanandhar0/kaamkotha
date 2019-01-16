<?php    include('includes/header.php'); ?>
<section class="sec1" style="background-image: url(img/roomadv.jpg);">
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
						<li><a href="room.php" class="active" >Room</a></li>
						<?php if (permission()):?>
						<li><a href="adr.php" >Advert Room</a></li>
						<?php endif; ?>
						<?php if(!logged_in()): ?>
						<li><a href="Login.php" >Log In</a></li>
						<?php endif; ?>
						<?php if(logged_in()): ?>
						<li><a href="logout.php" >Log Out</a></li>
						<?php endif; ?>
					</ul>
				</div>
			<!-- <?php //if(logged_in()): ?>
                <li><a href="logout.php">Log Out</a></li>
            <?php //endif; ?> -->

		</div>

</section>
	<br>
		<div class="jobdisp">

			<?php get_rooms() ?>

		
		</div>
		<?php    include('includes/footer.php'); ?>