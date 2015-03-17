<?php 

// include_once( 'functions.php' ); 

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
define('FILTER_KNIGHT_EMAIL', 'knights.ucf.edu');


/* Server related variables */
$servername = 'localhost';
$database	= 'cab-ltk5k';
$user_name 	= "osi-admin";
$pass 		= 'Design&Dev';
// $conn 		= mysql_connect($servername, "osi-admin", "Design&Dev");

/**
 * Count variables
 *
 * Note that these variables might not hold true to the number of actual
 * registered members because the action is called only once when the
 * page is loaded. Therefore, the page must be loaded every time an
 * accurate count of registered members is requested.
 */

$numRunners 			= numRows('Runners');
$numVolunteers 			= numRows('Volunteers');
$remainingRunners 		= MAX_RUNNERS - $numRunners;
$remainingVolunteers	= MAX_VOLUNTEERS - $numVolunteers;


/* Getters for count information */

// Returns the number of registered individuals.
// function numRows($tableName){

// 	// Connect to the database
// 	$conn = mysqli_connect($servername, 'osi-admin', 'Design&Dev', $database);

// 	// Check for connection error.
// 	if (!$conn){
// 		generateFormError('Could not connect: ' . mysql_error());
// 		exit();
// 	}

// 	// Get the elements form the specified table
// 	$result = mysql_query("SELECT (*) FROM " . $tableName);
// 	$num_rows = mysqli_num_rows($result);

// 	// Always close the connection after connecting.
// 	mysql_close($conn);

// 	return $num_rows;
// }


function numRows($tablename, $database = false) {

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

    return mysql_num_rows(mysql_result($res, 0));
}

?>