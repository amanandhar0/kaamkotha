<?php    include('includes/header.php'); ?>
<section class="sec1"  style="background-image: url(img/qwe.jpg);  height=80%">

<!-- <?php //post_job() ?> -->
<div class="header">
			
			<!--
				<div id="loader">
					
						<img src="load.gif" width="30%">

				</div>-->
				
				<div class="navbar">
					<a href="index.php" class="channel" ><img class="logo" src="img/mainlogo.png"></a>
					<ul>
						<li><a href="index.php" >Home</a></li>
						<!-- <li><a href="about.php" >About</a></li> -->
						<li><a href="job.php" >Job</a></li>
						<li><a href="postj.php" class="active">Post Job</a></li>
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

		<form class="postjob" method="POST" action="<?php post_job() ?>">
			<center><h1>Post Job Vacancy</h1></center><br>
						<hr width="90%"><br>
			<input type="text" name="title" placeholder="Job Title" class="textarea"><br>
			<input type="text" name="type" placeholder="Job Type / Field" class="textarea"><br>
			<input type="date" name="deadline" class="textarea" placeholder="Application Deadline"><br>
			<input type="text" name="salary" class="textarea" placeholder="Salary"><br>
			<input type="text" name="noap" class="textarea" placeholder="No of Applicant"><br>
			<input type="text" name="qualification" class="textarea" placeholder="Qualification"><br>
			<input type="text" name="min_exp" class="textarea" placeholder="Minimum Experience"><br>
			<input type="text" name="description" class="textarea" placeholder="description"><br>
			
			<center><a href="job.php"><input type="button" value="Cancel" class="warnbtn"></a>
			<input type="submit" value="Post" class="confbtn"></center>
			<br><br><br>

 
		</form>

</section>
<br><br><br>
<?php    include('includes/footer.php'); ?>