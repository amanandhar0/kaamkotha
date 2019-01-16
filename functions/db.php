<?php
		$con=mysqli_connect('localhost','root','','kamkotha');

		function escape($string){
			global $con;
			return mysqli_real_escape_string($con, $string);
		}

		function row_count($result){
			return mysqli_num_rows($result); 
		}

		function query($query){

			global $con;

			return mysqli_query($con,$query);

			confirm($result);

		}


		function confirm($result){
			global $con;

			if (!$result) {
				die("Queru failed". mysqli_error($con));
			}

		}

		function fetch_array($result){

			global $con;

			return mysqli_fetch_array($result);

		}
?>