<?php
include_once( 'functions.php' );
get_header(); 

/**
 * Registration Error Page
 *
 * This page will be displayed if there was an error with the form submission, 
 * i.e. if the user forgot to complete the entire for or if there was an error
 * communicating with the server. generateFormError() in `functions.php` will
 * compile the page, pass the error, and handle its displayment.
 */ 

// Continue session from functions.php
session_start();

include( // Include registration form error partial
	'partials/registration-error.php' );

/** 
 * Reset the session variable 'count' to null.
 * 
 * Do NOT unset the whole $_SESSION with unset($_SESSION) as this will disable
 * the registering of session variables through the $_SESSION superglobal.  
 */
unset($_SESSION['count']);

get_footer(); ?>