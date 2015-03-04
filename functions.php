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


// Redirects to the error page and passes the error in the header
// which is then parsed for in the page.
function generateFormError($error){
	header("Location: http://osi.ucf.edu/ltk5k/registration-error?" .
	http_build_query(array('error' => $error)));
}


/** Page Partial Functions **/

function get_header(){
	include('partials/html-header.php');
}


function get_footer(){
	include('partials/footer.php');
}