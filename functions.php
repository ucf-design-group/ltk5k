<?php


include_once( // Include global variables 
	'global-variables.php' );


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

// Redirects to the error page and passes the error in the header
// which is then parsed for in the page.
function generateFormError($error){

	// Start a new session.
	session_start();

	// Create a new variable 'error' which contains the error string
	// to be displayed on the error page.
	$_SESSION['error'] = $error;

	/**
	 *  Redirect user to error page within the current session.
	 *
	 *  Note that because we started a new session that all variables
	 *  associated with the session will be passed to other pages that 
	 *  enable the session passed to it.
	 *
	 * For more information on sessions, look here:
	 * http://php.net/manual/en/book.session.php
	 */
	header("Location: http://osi.ucf.edu/ltk5k/registration-error");
}

// Redirects the user to registration confirmation page
function confirmRegistration(){
	// Redirect to registration confirmation page.
	header("Location: http://osi.ucf.edu/ltk5k/registration-complete");
}

/** Page Partial Functions **/

function get_header(){
	include('partials/html-header.php');
}


function get_footer(){
	include('partials/footer.php');
}