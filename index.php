<?php    include('includes/header.php'); ?>
<section class="sec1">
		<div class="header">
			
			<!--
				<div id="loader">
					
						<img src="load.gif" width="30%">

				</div>-->
				
				<div class="navbar">
					<a href="index.php" class="channel" ><img class="logo" src="img/mainlogo.png" ></a>
					<ul>
						<li><a href="index.php" class="active">Home</a></li>
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
		<?php display_message(); ?>

		<!------------------------------This is to display in homw top pic-------------------------------------->
		<!-- <?php //if(!logged_in()): ?> --><!-- displays only if logged in -->
              
			<!-- <div class="innerabout">
				<p class="heading" align="center"> <b>Choose Your Account Type</b></p>
			<a href="signupp.php" id="provider">
				<div class="txtoverimg" style="background-image: url(img/aboutp.png);"  data-text="A provider
				 is a person that can prvide multiple jobs and a room in rent. He cannot apply for jobs and cannot rent rooms. Click here to create Provider's Account. Being a provider you can recruit newcomers and renters with your own rule.">
				</div></a>

			<a href="signup.php" id="seeker">
				<div class="txtoverimg" style="background-image: url(img/abouts.png);"  data-text="A seeker 
				is a person that seeks for a job and renta room. He cannot provide jobs or room. Click here to create Seeker's Account. As a seeker you yourself can choose your carrer and place to live.">
				</div></a> -->
			
			<!-- </div> -->
		<!-- <?php// endif; ?> -->
		
	
<center>
		<div class="innerabout">
		<br><br><br><br><br><br>
		<div style="font-size: 600%; color: white;" class="in1">
			
				Kaam Kotha
			</div>
			<hr width="70%" >
			<div style="font-size: 300%; color: white;" class="in2">
				Because You Deserve Better.
			</div>
			
		</div>
</center>
		</section>
		<section class="sec2">
			<h1>Jobs</h1>
			<p>A job, or occupation, is a person's role in society. More specifically, a job is an activity, often regular and often performed in exchange for payment ("for a living"). Many people have multiple jobs (e.g., parent, homemaker, and employee). A person can begin a job by becoming an employee, volunteering, starting a business, or becoming a parent. The duration of a job may range from temporary (e.g., hourly odd jobs) to a lifetime (e.g., judges).

			An activity that requires a person's mental or physical effort is work (as in "a day's work"). If a person is trained for a certain type of job, they may have a profession. Typically, a job would be a subset of someone's career. The two may differ in that one usually retires from their career, versus resignation or termination from a job.<br><br>Most people spend up to forty or more hours each week in paid employment. Some exceptions are children, retirees, and people with disabilities; However, within these groups, many will work part-time, volunteer, or work as a homemaker. From the age of 5 or so, many children's primary role in society (and therefore their 'job') is to learn and study as a student.The expression day job is often used for a job one works in order to make ends meet while performing low-paying (or non-paying) work in their preferred vocation. Archetypal examples of this are the woman who works as a waitress (her day job) while she tries to become an actress, and the professional athlete who works as a laborer in the off season because he is currently only able to make the roster of a semi-professional team.

			While many people do hold a full-time occupation, "day job" specifically refers to those who hold the position solely to pay living expenses so they can pursue, through low paying entry work, the job they really want (which may also be during the day). The phrase strongly implies that the day job would be quit, if only the real vocation paid a living wage.</p>
		</section>
		<section class="sec3"></section>
		<section class="sec2">
			<h1>Rent a Room</h1>
			<p>Renting, also known as hiring or letting, is an agreement where a payment is made for the temporary use of a good, service or property owned by another. A gross lease is when the tenant pays a flat rental amount and the landlord pays for all property charges regularly incurred by the ownership.<br><br>Short-term rental of all sorts of products (excluding real estate and holiday apartments) already represents an estimated €108 billion ($160 billion) annual market in Europe and is expected to grow further as the internet makes it easier to find specific items available for rent.[2] According to a poll by YouGov, 76% of people looking to rent would go to the internet first to find what they need; rising to 88% for those aged 25–34.[3]

			It has been widely reported that the financial crisis of 2007–2010 may have contributed to the rapid growth of online rental marketplaces, such as erento, as consumers are more likely to consider renting instead of buying in times of financial hardship.[4] Environmental concerns, fast depreciation of goods, and a more transient workforce also mean that consumers are increasingly searching for rentals online.[2]

			A 2010 US survey found 27% of renters plan to never buy a home.</p>
		</section>
		<section class="sec4">
			
				<br><br><br><br><br><br><br>
			<?php if(!logged_in()): ?><!-- displays only if logged in -->
              
			<div class="innerabout">
				<p class="heading" align="center"> <b>Choose Your Account Type</b></p>
			<a href="signupp.php" id="provider">
				<div class="txtoverimg" style="background-image: url(img/aboutp.png);"  data-text="A provider
				 is a person that can prvide multiple jobs and a room in rent. He cannot apply for jobs and cannot rent rooms. Click here to create Provider's Account. Being a provider you can recruit newcomers and renters with your own rule.">
				</div></a>

			<a href="signup.php" id="seeker">
				<div class="txtoverimg" style="background-image: url(img/abouts.png);"  data-text="A seeker 
				is a person that seeks for a job and renta room. He cannot provide jobs or room. Click here to create Seeker's Account. As a seeker you yourself can choose your carrer and place to live.">
				</div></a>
			
			</div>
		<?php endif; ?>


		</section>
		
	
<?php    include('includes/footer.php'); ?>
