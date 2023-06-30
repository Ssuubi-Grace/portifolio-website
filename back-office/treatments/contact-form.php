<?php 

	if(!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message']) && !empty($_POST['phone']))
	{
			
			$fullname=htmlspecialchars($_POST['fullname']);
			$email=htmlspecialchars($_POST['email']);
			$get_subject=htmlspecialchars($_POST['subject']);
			$get_message=htmlspecialchars($_POST['message']);
			$phone=htmlspecialchars($_POST['phone']);

			//Establish the connection to the database
			include_once("../database/dbconnect.php");

			//insertion of data into database
			include_once("../database/insert/contact-form.php");

			//
			include_once("./send-email-contact-form.php");
			//display message to user
			echo'<div style="text-align: center;"><h5>Your message has been successfully sent </h5> <br/> <a href="../../index.html">Back to Homepage</a>
			 </div>';

	}
	else
	{
		header('location:index.php');
	}
?>