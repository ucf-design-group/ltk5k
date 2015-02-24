<?php

// Numerical Costants - Check These

define('NUM_RUNNERS', 700);
define('NUM_ZOMBIES', 205);
define('NUM_VOLUNTEERS', 150);

define('CLOSE_TIME', strtotime("November 9, 2014 11:59pm"));


// Check for Form Submission

$message = "Register as a Runner, Zombie, or Volunteer";

if (isset($_POST['zk5k-form-submit']))
	$message = form_submission();


// Grab the Current Counts

$count = get_role_count();
$placement_count = get_placement_count();
$slots_left = display_slots_remaining();


// Check if the form needs to be disabled

if (NUM_RUNNERS - $count['runner'] <= 0 &&
	NUM_ZOMBIES - $count['zombie'] <= 0 &&
	NUM_VOLUNTEERS - $count['volunteers'] <= 0)

	$full = true;

else
	$full = false;


// If we are calling this file via AJAX, print out the Spots Left.

if (isset($_GET['verbose']) && $_GET['verbose'] === "true")
	echo $slots_left;


// Display Current Slots Remaining

function display_slots_remaining () {

	$count = get_role_count();

	if (time() > strtotime("November 9, 2014 11:59pm"))
		return "Registration has closed";

	switch (isset($_GET['p']) ? $_GET['p'] : "") {
		case "zombies":
			$slots = NUM_ZOMBIES - $count['zombies'];
			$role = "Zombie";
			break;
		case "volunteers":
			$slots = NUM_VOLUNTEERS - $count['volunteers'];
			$role = "Volunteer";
			break;
		default:
			$slots = NUM_RUNNERS - $count['runners'];
			$role = "Runner";
	}

	return "<span>" . $slots . "</span> " . $role . " " . ($slots != 1 ? "Spots" : "Spot") . ($slots != 1 ? " Remain" : " Remains");
}


// Find Current Numbers  BROKEN;lkajsdf;klasj fl;kasdj f;klaj;kf jdakl;fj alk;sdf j;akls

function get_role_count () {

	$mysqli = new mysqli('localhost', 'osi-admin', 'Design&Dev', 'cab-zk5k');

	$runners = $mysqli->query("SELECT COUNT(*) FROM runners");
	$zombies = $mysqli->query("SELECT COUNT(*) FROM zombies");
	$volunteers = $mysqli->query("SELECT COUNT(*) FROM volunteers");

	$count = array();

	$runners = $runners->fetch_row();
	$zombies = $zombies->fetch_row();
	$volunteers = $volunteers->fetch_row();

	$count['runners'] = $runners[0];
	$count['zombies'] = $zombies[0];
	$count['volunteers'] = $volunteers[0];

	return $count;
}


// Find Group / Zone Count

function get_placement_count () {

	// Apparently, consistency is overrated.

	$runner_limits = array(
		1 => 700
	);

	$zombie_limits = array(
		1 => 10,		2 => 15,
		3 => 25,		
		5 => 30,		
		9 => 25,		10 => 25,
		11 => 25,		12 => 25,
		13 => 25
	);

	$volunteer_limits = array(
		1 => 10,		2 => 10,
		3 => 10,		4 => 10,
		5 => 10,		6 => 10,
		7 => 10,		8 => 10,
		9 => 10,		10 => 10,
		11 => 10,		12 => 10,
		13 => 10,       14 => 20
	);

	$mysqli = new mysqli('localhost', 'osi-admin', 'Design&Dev', 'cab-zk5k');
	$count = array();

	foreach ($runner_limits as $index => $limit) {

		$query = $mysqli->query("SELECT COUNT(*) FROM runners WHERE placement = '" . $index . "'");
		$row = $query->fetch_row();
		$count['runners'][$index] = $runner_limits[$index] - intval($row[0]);
	}

	foreach ($zombie_limits as $index => $limit) {

		$query = $mysqli->query("SELECT COUNT(*) FROM zombies WHERE placement = '" . $index . "'");
		$row = $query->fetch_row();
		$count['zombies'][$index] = $zombie_limits[$index] - intval($row[0]);
	}

	foreach ($volunteer_limits as $index => $limit) {

		$query = $mysqli->query("SELECT COUNT(*) FROM volunteers WHERE placement = '" . $index . "'");
		$row = $query->fetch_row();
		$count['volunteers'][$index] = $volunteer_limits[$index] - intval($row[0]);
	}

	return $count;
}



/** Page Partial Functions **/

function get_header(){
	include_once('partials/html-header.php');
}


function get_footer(){
	include_once('partials/footer.php');
}

/** Necessary Inclusions **/

// Include registration objects for both runners and volunteers
include_once('partials/register-objects.php');
