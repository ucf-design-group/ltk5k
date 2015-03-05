<?php


include_once( // Include global variables 
<<<<<<< HEAD
	'global-variables.php' );
=======
	'partials/global-variables.php' );
>>>>>>> 0ce53a4188795adc7227afb3c50446202eec36d2


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
<<<<<<< HEAD
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

// Redirects the user to
function confirmRegistration(){
	// Redirect to registration confirmation page.
	header("Location: http://osi.ucf.edu/ltk5k/registration-complete");
}

=======

}


// Redirects to the error page and passes the error in the header
// which is then parsed for in the page.
function generateFormError($error){
	header("Location: http://osi.ucf.edu/ltk5k/registration-error?" .
	http_build_query(array('error' => $error)));
}


>>>>>>> 0ce53a4188795adc7227afb3c50446202eec36d2
/** Page Partial Functions **/

function get_header(){
	include('partials/html-header.php');
}


function get_footer(){
	include('partials/footer.php');
}