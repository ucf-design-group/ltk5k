<?php

include("functions.php");

if (time() > CLOSE_TIME) {
	header("HTTP/1.1 406 Unacceptable");
	die("Sorry, registration has closed!");
}
if (!isset($_POST['zk5k-form-fname']) || $_POST['zk5k-form-fname'] == "") {
	header("HTTP/1.1 406 Unacceptable");
	die("Please provide your first name.");
}
if (!isset($_POST['zk5k-form-lname']) || $_POST['zk5k-form-lname'] == "") {
	header("HTTP/1.1 406 Unacceptable");
	die("Please provide your last name.");
}
if (!isset($_POST['zk5k-form-email']) || $_POST['zk5k-form-email'] == "") {
	header("HTTP/1.1 406 Unacceptable");
	die("Please provide your e-mail.");
}
if (!filter_var($_POST['zk5k-form-email'], FILTER_VALIDATE_EMAIL)) {
	header("HTTP/1.1 406 Unacceptable");
	die("Please provide a valid e-mail address.");
}
// if (!strpos($_POST['zk5k-form-email'], "ucf.edu")) {
// 	header("HTTP/1.1 406 Unacceptable");
// 	die("Please provide your Knights e-mail");
// }
if (!isset($_POST['zk5k-form-phone']) || $_POST['zk5k-form-phone'] == "") {
	header("HTTP/1.1 406 Unacceptable");
	die("Please provide your phone number.");
}
// if (!isset($_POST['zk5k-form-shirt']) || $_POST['zk5k-form-shirt'] == "") {
// 	header("HTTP/1.1 406 Unacceptable");
// 	die("Please provide your shirt size");
// }
if (!isset($_POST['zk5k-form-ec-name']) || $_POST['zk5k-form-ec-name'] == "") {
	header("HTTP/1.1 406 Unacceptable");
	die("Please provide an emergency contact.");
}
if (!isset($_POST['zk5k-form-ec-phone']) || $_POST['zk5k-form-ec-phone'] == "") {
	header("HTTP/1.1 406 Unacceptable");
	die("Please provide a phone number for your emergency contact.");
}
if (!isset($_POST['zk5k-form-ec-relation']) || $_POST['zk5k-form-ec-relation'] == "") {
	header("HTTP/1.1 406 Unacceptable");
	die("Please provide how your emergency contact is related to you.");
}
// if (!isset($_POST['zk5k-form-gender']) || $_POST['zk5k-form-gender'] == "") {
// 	header("HTTP/1.1 406 Unacceptable");
// 	die("Please Provide your gender.");
// }
if (!isset($_POST['zk5k-form-role']) || $_POST['zk5k-form-role'] == "") {
	header("HTTP/1.1 406 Unacceptable");
	die("Please provide your desired role.");
}
if (!isset($_POST['zk5k-form-placement']) || $_POST['zk5k-form-placement'] == "") {
	header("HTTP/1.1 406 Unacceptable");
	die("Please provide your desired placement.");
}

$mysqli = new mysqli('localhost', 'osi-admin', 'Design&Dev', 'cab-zk5k');

$first_name = $mysqli->real_escape_string($_POST['zk5k-form-fname']);
$last_name = $mysqli->real_escape_string($_POST['zk5k-form-lname']);
$email = $mysqli->real_escape_string($_POST['zk5k-form-email']);
$phone = $mysqli->real_escape_string($_POST['zk5k-form-phone']);
// $shirt = $mysqli->real_escape_string($_POST['zk5k-form-shirt']);
$gender = $mysqli->real_escape_string($_POST['zk5k-form-gender']);
$role = $mysqli->real_escape_string($_POST['zk5k-form-role']);
$placement = intval($mysqli->real_escape_string($_POST['zk5k-form-placement']));
$em_contact = $mysqli->real_escape_string($_POST['zk5k-form-ec-name'] . " | " .
				$_POST['zk5k-form-ec-phone'] . " | " . $_POST['zk5k-form-ec-relation']);


$count = get_role_count();
$placement_count = get_placement_count();
$emailcheck = mysqli_query($mysqli,"SELECT * FROM runners WHERE email='".$email."'");




switch ($role) {

	case 'Runner':

		$role = "runners";

		if ($count['runners'] >= NUM_RUNNERS) {
			header("HTTP/1.1 406 Unaccepatable");
			die("Sorry, all of the runner spots are taken.");
		}

		if ($placement_count['runners'][$placement] <= 0) {
			header("HTTP/1.1 406 Unaccepatable");
			die("Sorry, that group is full.");
		}

		break;
	
	case 'Zombie':

		$role = "zombies";

		if ($count['zombies'] >= NUM_ZOMBIES) {
			header("HTTP/1.1 406 Unacceptable");
			die("Sorry, all of the zombie spots are taken.");
		}

		if ($placement_count['zombies'][$placement] <= 0) {
			header("HTTP/1.1 406 Unacceptable");
			die("Sorry, that zone is full.");
		}

		break;
	
	case 'Volunteer':

		$role = "volunteers";

		if ($count['volunteers'] >= NUM_VOLUNTEERS) {
			header("HTTP/1.1 406 Unacceptable");
			die("Sorry, all of the volunteer spots are taken.");
		}

		if ($placement_count['volunteers'][$placement] <= 0) {
			header("HTTP/1.1 406 Unacceptable");
			die("Sorry, that zone is full.");
		}



		break;
	
	default:
		header("HTTP/1.1 406 Unacceptable");
		die("Sorry, that isn't a valid role.");
}

if(mysqli_num_rows($emailcheck) > 0 ){
	header("HTTP/1.1 406 Unaccepatable");
	die("This email address has already been used. Please email cabevent@ucf.edu to change your information.");
}


if ($mysqli->query("INSERT INTO " . $role . " VALUES (NULL, '" . $first_name . "', '" .
				$last_name . "', '" . $email . "', '" . $phone . "', " . $placement .
				", '" . $em_contact . "', '" . $gender . "')")) {

	$_POST = null;
	echo "Thank you!  Your registration is complete.";
}

else
	die("We're sorry, there was an error.  Please let CAB know about this.");

?>