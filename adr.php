<?php    include('includes/header.php'); ?>
<section class="sec1" style="background-image: url(img/postroom.jpg);">
<?php post_room() ?>

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
						<li><a href="room.php" " >Room</a></li>
						<li><a href="adr.php" class="active">Advert Room</a></li>
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


		<form class="adroom" method="POST">

			<center><h1>Advertise Room</h1></center>
			
			<input type="text" placeholder="Address" name="address" class="textarea"><br>
			<input type="text" placeholder="Size" name="size" class="textarea"><br>
			<select placeholder="Status" name="Status" class="textarea">
				<option value="new and furnished">New and furnished</option>
				<option value="old and furnished">Old and furnished</option>
				<option value="semi furnished">Semi-furnished</option>
				<option value="unfurnished">Unfurnished</option>
			</select><br>
			<input type="textarea" class="textarea" name="details" rows="4" placeholder="Add extra details"><br>
			<input type="text" class="textarea" name="ro_amt" placeholder="Rent amount in Rs."><br>
			<center><input type="submit" name="Confirm Post" value="Confirm Post" class="confbtn"></center>

		</form>
</section>
		<?php    include('includes/footer.php'); ?>