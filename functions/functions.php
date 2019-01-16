<?php


/*************************Helper Functions****************************/

function clean($string){
	return htmlentities($string);
}

function redirect($location){
	return header("location:{$location}");  
}

function set_message($message){
	if (!empty($message)) {
		$_SESSION['message']=$message;
	}else{
		$message=" ";
	}
}

function display_message(){
	if (isset($_SESSION['message'])) {
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

function token_generator(){
	$token=$_SESSION['token']=md5(uniqid(mt_rand(),true));
	return $token;
}

function validation_errors($error_message){

$error_message= <<<DELIMITER
			<strong>Warning!
				$error_message
				
DELIMITER;

				return $error_message;

}

function email_exists($email){

	$sql="(SELECT * FROM seeker WHERE s_email='$email') UNION (SELECT * FROM provider WHERE p_email='$email')";

	$result=query($sql);

	if (row_count($result)==1) {
		return true;
	}else{
		return false;
	}

}

function send_email($email, $subject, $msg, $headers){

	return mail($email, $subject, $msg, $headers);
		
	

}



function logged_in(){

	if (isset($_SESSION['email'])||isset($_COOKIE['email'])) {

		return true;

	}else{

		return false;

	}
}


/*********************************************validate user registration seeker user********************************************************/



function validate_user_registration_seeker(){
	$errors=[];
	if ($_SERVER['REQUEST_METHOD']=='POST') {

		$name				=clean($_POST['Name']);
		$address			=clean($_POST['Address']);
		$phone				=clean($_POST['Phone']);
		$age 				=clean($_POST['Age']);
		$password			=clean($_POST['password']);
		$confirm_password	=clean($_POST['cpassword']);
		$email				=clean($_POST['email']);
		$s_acc_type			="client";
		if ($password!=$confirm_password) {
			$errors[]="Your password field donot match";
		}
		 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	        
	        $error="Invalid format! Not valid email";
	    }

		if (!empty($errors)) {
	 		foreach ($errors  as $error) {
	 			
	 			echo validation_errors($error);
			}
		}
		else{

			if (register_seeker($name,$address,$phone,$age,$email,$password,$s_acc_type)) {
				set_message("<p class='success'>Please check your email for an activation link</p>");
				
				redirect("index.php");
			}else{
				set_message("<p class='danger'>Sorry! the email you provided is already used .</p>");
				
				redirect("index.php");
			}

		}

	}
}
/*********************************************Register user********************************************************/
function register_seeker($name,$address,$phone,$age,$email,$password){

		$name				=escape($name);
		$address			=escape($address);
		$phone				=escape($phone);
		$age 				=escape($age);
		$email				=escape($email);
		$password			=escape($password);
		$s_acc_type			="client";
		if (email_exists($email)) {

			return false;

		}else{
			$password 	=md5( $password );
			$validation_code =md5( $name + microtime());

			$sql="INSERT INTO seeker(s_name,s_address,s_phone,s_age,s_email,s_password,s_acc_type,S_valid_code,s_active)
			VALUES('$name','$address','$phone','$age','$email','$password','$s_acc_type','$validation_code','0')";

		$result=query($sql);
		confirm($result);


		$subject="Activate Accout";
		$msg="Dear Client,
					Please click the activation link below to successfully register your account
					http://localhost:8080/k/activate.php?email=$email&code=$validation_code";

		$header="From: noreply@yourwebsite.com";

		send_email($email, $subject, $msg, $headers);

		return true;

		}


}




/*********************************************validate user registration provider user********************************************************/



function validate_user_registration_provider(){
	$errors=[];
	if ($_SERVER['REQUEST_METHOD']=='POST') {

		$name				=clean($_POST['Name']);
		$address			=clean($_POST['Address']);
		$phone				=clean($_POST['Phone']);
		$age 				=clean($_POST['Age']);
		$password			=clean($_POST['password']);
		$confirm_password	=clean($_POST['cpassword']);
		$email				=clean($_POST['email']);
		$p_acc_type			="admin";
		if ($password!=$confirm_password) {
			$errors[]="Your password field donot match";
		}
		 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	        echo "Invalid format! Not valid email";
	        $f=0;
	    }

		if (!empty($errors)) {
	 		foreach ($errors  as $error) {
	 			
	 			echo validation_errors($error);
			}
		}
		else{

			if (register_provider($name,$address,$phone,$age,$email,$password,$p_acc_type)) {
				set_message("<p class='success'>Please check your email for an activation link</p>");
				
				redirect("index.php");
			}else{
				set_message("<p class='danger'>Sorry! the email you provided is already used .</p>");
				
				redirect("index.php");
			}

		}

	}
}
/*********************************************Register user********************************************************/
function register_provider($name,$address,$phone,$age,$email,$password){

		$name				=escape($name);
		$address			=escape($address);
		$phone				=escape($phone);
		$age 				=escape($age);
		$email				=escape($email);
		$password			=escape($password);
		$p_acc_type			="admin";
		if (email_exists($email)) {

			return false;

		}else{
			$password 	=md5( $password );
			$validation_code =md5( $username + microtime());

			$sql="INSERT INTO provider(p_name,p_address,p_phone,p_age,p_email,p_acc_type,p_password,p_valid_code,p_active) 
			VALUES('$name','$address','$phone','$age','$email','$p_acc_type','$password','$validation_code','0')";

		$result=query($sql);
		confirm($result);


		$subject="Activate Accout";
		$msg="Dear Client,
					Please click the activation link below to successfully register your account
					http://localhost:8080/kaamkotha/activatep.php?email=$email&code=$validation_code";

		$header="From: noreply@yourwebsite.com";

		send_email($email, $subject, $msg, $headers);

		return true;

		}


}

/*****************************Activate function****************************/


function activate_seeker(){


	if ($_SERVER['REQUEST_METHOD']=='GET') {

		if (isset($_GET['email'])) {

			$email=clean($_GET['email']);
			$validation_code=clean($_GET['code']);

			$sql="SELECT * FROM seeker WHERE s_email='".escape($_GET['email'])."'AND S_valid_code='".escape($_GET['code'])."'";
			$result=query($sql);
			confirm($result);


			if (row_count($result)==1) {
			$sql2="UPDATE seeker SET s_active=1, s_valid_code =0 WHERE s_email='".escape($email)."'AND S_valid_code ='".escape($validation_code)."'";
			$result2=query($sql2);
			confirm($result2);
		 	set_message("<p class='success'> Your account has been activated successfully. 
		  								</p>");

		 	redirect("login.php");
			}else{
				set_message("<p class='danger'> Your account could not be activated.</p>");

		 	redirect("login.php");
			}
		
		}
		
	}

}

function activate_provider(){


	if ($_SERVER['REQUEST_METHOD']=='GET') {

		if (isset($_GET['email'])) {

			$email=clean($_GET['email']);
			$validation_code=clean($_GET['code']);

			$sql="SELECT * FROM provider WHERE p_email='".escape($_GET['email'])."'AND p_valid_code='".escape($_GET['code'])."'";
			$result=query($sql);
			confirm($result);


			if (row_count($result)==1) {
			$sql2="UPDATE provider SET p_active=1, p_valid_code =0 WHERE p_email='".escape($email)."'AND p_valid_code ='".escape($validation_code)."'";
			$result2=query($sql2);
			confirm($result2);
		 	set_message("<p class='success'> Your account has been activated successfully. 
		  								</p>");

		 	redirect("login.php");
			}else{
				set_message("<p class='danger'> Your account could not be activated.</p>");

		 	redirect("login.php");
			}
		
		}
		
	}

}

/*****************************Validate user login function****************************/


function validate_user_login(){

	if ($_SERVER['REQUEST_METHOD']=="POST") {
		
		$email		=clean($_POST['email']);
		$password	=clean($_POST['Password']);
		$remember	=isset($_POST['remember']);
		$q=99999999;
		$a=md5($q);
		
		if (!empty($errors)) {
			foreach ($errors as $error) {
				echo validation_errors($error);
			}
		}else{
			if (login_user($email,$password,$remember)) {
				set_message("<p class='success'> Loggedin successfully.</p>");
				redirect("index.php");
			}else{
				echo validation_errors("Your credentials doesn't match our data $a ");
			}
		}

	}

}
/*****************************User login function****************************/
function login_user($email, $password,$RememberMe){
	
	$sql="(SELECT * FROM provider WHERE p_email='".$email."' AND p_active=1)UNION(SELECT * FROM seeker WHERE s_email='".$email."' AND s_active=1)";
	$result=query($sql);

	if (row_count($result)==1) {
		
		$row 			=	fetch_array($result);
		$db_password	=	$row['p_password'];
		$actype 		= 	$row['p_acc_type'];
		$id 			=	$row['p_id'];
		// $actypep		=	$row['p_acc_type'];


		if (md5($password)==$db_password) {///password milyo

			if ($RememberMe=="on") {
				setcookie('email',$email,time()+86400);//time() returns time in second from when the user is logged in
				//+60 is timein seconds when the coockie expires i.e. 1 minute
			}

			$_SESSION['email']=$email;
			// if (isset($actype)) {
			$_SESSION['actype']=$actype;

			$_SESSION['id']=$id;
			// }
			// else if (isset($actypep)) {
			// 	$_SESSION['actype']=$_actypep;
			// }
			return true;
		}else{
			return false;
		}

		return true;
	}else{

		return false;
	}
}

/*****************************Recover Password****************************/

function recover_password(){

	if ($_SERVER['REQUEST_METHOD']=="POST") { 
		if (isset($_SESSION['token']) && $_POST['token']===$_SESSION['token']) {
			//echo "it works";

			$email=clean($_POST['email']);
			if (email_exists($email)) {

					$validation_code=md5($email+microtime());

					setcookie('temp_access_code', $validation_code,time()+60);//only time of one minute

					$sql="UPDATE seeker SET s_valid_code='".escape($validation_code)."'WHERE s_email='".escape($email)."'";

					$result=query($sql);
					confirm($result);
				
					$subject="Please reset your password";
					$message="
						Here is your reset password code. {$validation_code}


						click here to reset your password
						http://localhost/login/code.php?email=$email&code=$validation_code

					";

					//http://localhost:8080/login/code.php?email=amanandhar0@gmail.com&code=

					$headers="From: noreply@yourwebsite.com";




					if(!send_email($email,$subject,$message,$headers)){
						echo validation_errors("Email couldnot be  sent");
					}

					set_message("<p class='bg-success'>Please! Check Your email for password reset code</p>");
					 redirect("index.php");

			}else{
				echo validation_errors("This email doesnt exists");
			}
		}else{
			redirect("index.php");
		}

		if (isset($_POST['cancel_submit'])) {
			redirect("login.php");
		}

	}

}



/**************************************************POST JOB******************************************/
function post_job(){
	
	
	
		
			if ($_SERVER['REQUEST_METHOD']=='POST') {
				if (isset($_SESSION['actype'])&&$_SESSION['actype']=='admin') {
				$errors=[];
				

				$title			=clean($_POST['title']);
				$type 			=clean($_POST['type']);
				$date			=clean($_POST['deadline']);
				$salary			=clean($_POST['salary']);
				$noap			=clean($_POST['noap']);
				$qualification	=clean($_POST['qualification']);
				$min_exp		=clean($_POST['min_exp']);
				$description 	=clean($_POST['description']); 
				$id 			=$_SESSION['id'];

					if (logged_in()) {
						$sql2="INSERT INTO job (j_title,j_type,deadline,salary,no_of_applicant,qualification,min_experience,Description)
					 	VALUES('$title','$type','$date','$salary','$noap','$qualification','$min_exp','$description')";
						 $result=query($sql2);


						 				 redirect("job.php");

						 	$sql3="INSERT INTO provides(p_id,j_id) VALUES('$id','$j_id')";
					}

				}
			}else if(!permission()){
				redirect("index.php");
			}
	
}
/***********************************get jobs*************************************************/
function get_jobs(){
	$query=query("Select * from job");
	confirm($query);

	while ($row = fetch_array($query)) {



$job=<<<DELIMITER


<div class="col-sm-4 col-lg-4 col-md-4" ">
    <div class="thumbnail">
        <a href="job.php?j_id={$row['j_id']}"><img src="{$row['job_img']}" alt="" height="150px" width="320px"></a>
        <div class="caption">
            <h4 class="pull-right">&#36;{$row['salary']}</h4>
            <h4><a href="job.php?j_id={$row['j_id']}">{$row['j_title']}</a>
            </h4>
            <p></p>

             <a class="btn btn-primary" target="_blank" href="job.php?j_id={$row['j_id']}" class="confbtn">Apply</a>
        </div>
        


    </div>
</div>
DELIMITER;


echo $job;
	


	}

}

/****************************************Post Room************************************************/
function post_room(){
	$errors=[];
	if ($_SERVER['REQUEST_METHOD']=='POST') {
			if (isset($_SESSION['actype'])&&$_SESSION['actype']=="admin") {

		$address			=clean($_POST['address']);
		$size 				=clean($_POST['size']);
		$details			=clean($_POST['details']);
		$status				=clean($_POST['Status']);
		$ro_amt 			=clean($_POST['ro_amt']);
			

		if (isset($_SESSION['email'])) {
						$sql2="INSERT INTO room (ro_address,ro_size,ro_details,ro_stat,ro_amt)
			 	VALUES('$address','$size','$details','$status','$ro_amt')";
				 $result=query($sql2);
				 redirect("room.php");
		}

	}
	}else if(!permission()){
		redirect("index.php");
	}
}
/************************************Get rooms********************************************/

function get_rooms(){
	$query=query("Select * from room");
	confirm($query);

	while ($row = fetch_array($query)) {



$room=<<<DELIMITER


<a href="room.php?ro_num={$row['ro_num']}" class="roomimg"><img src="{$row['ro_img']}"  height="150px" width="200px"></a><br>
<a href="room.php?ro_num={$row['ro_num']}">{$row['ro_address']}</a><br>
			<strong>&#36;{$row['ro_amt']}</strong><br>
			<p>{$row['ro_details']}</p>

DELIMITER;


echo $room;
	


	}

}


function permission(){
	if (logged_in()) {
		if ($_SESSION['actype']=='admin') {
			return true;
		}
	}else{
		return false;
	}
}
?>