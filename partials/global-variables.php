<?php 

/**
 * GLOBAL VARIABLES
 *
 * These variables represent commently used variables throughout
 * the site. They are here for access convenience, much like a
 * interface in real programming. Essentialy, that's what this
 * has become. In essence, making variables global rather than
 * using getters/setters is much more convenient.
 *
 * This 'interface' will also unconventionally contain functionality
 * to calculate variables, also. Although this is not typical, because
 * it's back-end mathematics, its cleaner practice to include this here
 * rather than write in-line php on a page or simply add these functions
 * to the functions.php page which should really be functions pertaining
 * more to the front-end side of the website rather than the back-end 
 * side of things.
 */


/* Site constants */
define('MAX_RUNNERS', 700);
define('MAX_VOLUNTEERS', 205);
define('REGISTRATION_DEADLINE', strtotime("April 2, 2015 11:59pm"));


/* Server related variables */
$servername = 'localhost';
$database	= 'cab-ltk5k';
$user 		= 'osi-admin';
$pass 		= 'Design&Dev';
$conn 		= new mysqli($servername, $user, $pass, $database);

/**
 * Count variables
 *
 * Note that these variables might not hold true to the number of actual
 * registered members because the action is called only once when the
 * page is loaded. Therefore, the page must be loaded every time an
 * accurate count of registered members is requested.
 */

$numRunners 			= runnersCount();
$numVolunteers 			= volunteersCount();
$remainingRunners 		= MAX_RUNNERS - $numRunners;
$remainingVolunteers	= MAX_VOLUNTEERS - $numVolunteers


/* Getters for count information */

// Returns the number of registered runners
function runnersCount(){
	return $conn->query("SELECT COUNT(*) FROM RUNNERS");
}

// Returns the number of registered volunteers.
function volunteersCount(){
	return $conn->query("SELECT COUNT(*) FROM VOLUNTEERS")
}

?>