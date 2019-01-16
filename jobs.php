<?php    include('includes/header.php'); ?>
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
						<li><a href="adr.php" >Advert Room</a></li>
						<?php if(!logged_in()): ?>
                        <li><a href="Login.php" >Log In</a></li>
                        <?php endif; ?>
                        <?php if(logged_in()): ?>
                        <li><a href="logout.php" >Log Out</a></li>
                        <?php endif; ?>
					</ul>
				</div>



				<!--row starts here-->
                <div class="row">

                    <?php get_jobs();?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="product.html">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                   <!------------------------------------------------------------------>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div><!--row ends here-->
<?php    include('includes/footer.php'); ?>
