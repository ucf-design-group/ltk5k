<?php
include_once( 'functions.php' );
get_header();

// Includes the page navigation
include_once('partials/nav-static.php');

/**
 * Registration complete page
 *
 * This will be displayed once someone has been registered for the
 * event. This will be the confirmation page for registrants.
 */

?> <header class="form-registration registration-msg-header"></header> <?php

include( // Include registration form error partial
	'partials/registration-complete.php' );

get_footer(); ?>
