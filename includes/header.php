<?php include("functions/init.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrp.css">



<!-- 
	
	 <link href="css/bootstrap.min.css" rel="stylesheet">

    Custom CSS
    <link href="css/shop-homepage.css" rel="stylesheet">


 -->



	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
		<script type="text/javascript">
			var zero=0;
			$(document).ready(function(){
				$(window).on('scroll',function(){
					$('.navbar').toggleClass('hide',$(window).scrollTop()>zero);
					zero=$(window).scrollTop();
				})
			})
			/*var loader=document.getElementById('loader');

			window.addEventListener("load",function(){
				loader.style.height="100px";
				loader.style.width="100px";
				loader.style.borderRadius="50%";
				loader.style.visibility="hidden";
			})*/
		</script>

</head>
<body>
<div id="loader">
			<img src="img.gif" width="30%"/>
		</div>
	
		