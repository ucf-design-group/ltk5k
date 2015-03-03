<?php


include_once( // Include global variables 
	'partials/global-variables.php' );


function table_exists($tablename, $database = false) {

    if(!$database) {
        $res = mysql_query("SELECT DATABASE()");
        $database = mysql_result($res, 0);
    }

    $res = mysql_query("
        SELECT COUNT(*) AS count 
        FROM information_schema.tables 
        WHERE table_schema = '$database' 
        AND table_name = '$tablename'
    ");

    return mysql_result($res, 0) == 1;

}

// Check for Form Submission

// if (isset($_POST['zk5k-form-submit']))
// 	$message = form_submission();



// If we are calling this file via AJAX, print out the Spots Left.

// if (isset($_GET['verbose']) && $_GET['verbose'] === "true")
// 	echo $slots_left;


// Display Current Slots Remaining

// function display_slots_remaining () {

// 	$count = get_role_count();

// 	if (time() > strtotime("November 9, 201"))
// 		return "Registration has closed";

// 	switch (isset($_GET['p']) ? $_GET['p'] : "") {
// 		case "zombies":
// 			$slots = NUM_ZOMBIES - $count['zombies'];
// 			$role = "Zombie";
// 			break;
// 		case "volunteers":
// 			$slots = NUM_VOLUNTEERS - $count['volunteers'];
// 			$role = "Volunteer";
// 			break;
// 		default:
// 			$slots = NUM_RUNNERS - $count['runners'];
// 			$role = "Runner";
// 	}

// 	return "<span>" . $slots . "</span> " . $role . " " . ($slots != 1 ? "Spots" : "Spot") . ($slots != 1 ? " Remain" : " Remains");
// }


// Find Current Numbers  BROKEN;lkajsdf;klasj fl;kasdj f;klaj;kf jdakl;fj alk;sdf j;akls

// Get 
// function get_role_count () {


// 	$zombies = $conn->query("SELECT COUNT(*) FROM zombies");
// 	$volunteers = $conn->query("SELECT COUNT(*) FROM volunteers");

// 	$count = array();

// 	$runners = $runners->fetch_row();
// 	$zombies = $zombies->fetch_row();
// 	$volunteers = $volunteers->fetch_row();

// 	$count['runners'] = $runners[0];
// 	$count['zombies'] = $zombies[0];
// 	$count['volunteers'] = $volunteers[0];

// 	return $count;
// }


// Find Group / Zone Count

// function get_placement_count() {

// 	// Apparently, consistency is overrated.

// 	$runner_limits = array(
// 		1 => 700
// 	);

// 	$zombie_limits = array(
// 		1 => 10,		2 => 15,
// 		3 => 25,		
// 		5 => 30,		
// 		9 => 25,		10 => 25,
// 		11 => 25,		12 => 25,
// 		13 => 25
// 	);

// 	$volunteer_limits = array(
// 		1 => 10,		2 => 10,
// 		3 => 10,		4 => 10,
// 		5 => 10,		6 => 10,
// 		7 => 10,		8 => 10,
// 		9 => 10,		10 => 10,
// 		11 => 10,		12 => 10,
// 		13 => 10,       14 => 20
// 	);

// 	/**
// 	 * This connects to the cab-ltk5k table in the local database (localhost) 
// 	 * with the user/pass creds (osi-admin/Design&Dev). 
// 	 */
// 	$conn = new mysqli($servername, $user, $pass, $database);
// 	$count = array();


// 	foreach ($runner_limits as $index => $limit) {

// 		$query = $conn->query("SELECT COUNT(*) FROM runners WHERE placement = '" . $index . "'");
// 		$row = $query->fetch_row();
// 		$count['runners'][$index] = $runner_limits[$index] - intval($row[0]);
// 	}

// 	foreach ($zombie_limits as $index => $limit) {

// 		$query = $conn->query("SELECT COUNT(*) FROM zombies WHERE placement = '" . $index . "'");
// 		$row = $query->fetch_row();
// 		$count['zombies'][$index] = $zombie_limits[$index] - intval($row[0]);
// 	}

// 	foreach ($volunteer_limits as $index => $limit) {

// 		$query = $conn->query("SELECT COUNT(*) FROM volunteers WHERE placement = '" . $index . "'");
// 		$row = $query->fetch_row();
// 		$count['volunteers'][$index] = $volunteer_limits[$index] - intval($row[0]);
// 	}

// 	return $count;
// }



/** Page Partial Functions **/

function get_header(){
	include('partials/html-header.php');
}


function get_footer(){
	include('partials/footer.php');
}