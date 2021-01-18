<?php 
	error_reporting(0);
	// Personal Information
	$firstname  = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$dob_month = $_POST['month'];
	$dob_day = $_POST['day'];
	$dob_year = $_POST['year'];
	$gender = $_POST['gender'];

	//Account Information
	$email = $_POST['email'];
	$password = $_POST['password'];
	$security_que = $_POST['security_que'];
	$securityqueans = $_POST['securityqueans'];

	//Contact Information
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$contactnum = $_POST['contactnum'];
	$contact_num_type = $_POST['contact_num_type'];
	

	echo "Firstname : ".$firstname.
		"<br>Lastname :".$lastname.
		"<br>Day of BirthDate :".$dob_day.
		"<br>Month of BirthDate :".$dob_month.
		"<br>Year of BirthDate :".$dob_year.
		"<br>Gender :".$gender.
		"<br>Email :".$email.
		"<br>Password :".$password.
		"<br>Security Question :".$security_que.
		"<br>Security Question Answer :".$securityqueans.
		"<br>Address :".$address.
		"<br>City :".$city.
		"<br>State :".$state.
		"<br>Zipcode :".$zipcode.
		"<br>Contact Number :".$contactnum.
		"<br>Contact Number Type :".$contact_num_type;

?>