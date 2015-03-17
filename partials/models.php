<?php
/**
 * In an effort to make the html markup cleaner and make the
 * functionality of the site more object oriented, these objects define
 * the fields that will be used to register users for the race.
 *
 * This is not a required form of programming, but this is more
 * modular and is better coding practice.
 */


/* Superclass Registrar contains base fields for all registrants fields */
class Registrant extends Emergency{

	/* First name */
	var $fname_label = "First Name";
	var $fname; 
	
	/* Last name */
	var $lname_label = "Last Name";
	var $lname; 
	
	/* Email */
	var $email_label = "Email";
	var $email;

	/* Phone */
	var $phone_label = "Phone Number (1234567890)";
	var $phone;

	/* Role */
	var $role = "Runner";
	
	/* Shirt Size*/
	var $shirt_size;
}

/**
 * Just for orginization of code, Emergency is its own object. This represents
 * the emergency contact which is seperate from the registrar.
 */

class Emergency{

	/* Emergency Contact Name*/
	var $emergency_name_label = "Emergency Contact Name";
	var $emergency_name;

	/* Emergency Contact Phone */
	var $emergency_phone_label = "Emergency Contact Phone";
	var $emergency_phone;

	/* Emergency Contact Relation */
	var $emergency_relation_label = "Emergency Contact Relation";
	var $emergency_relation;
}

class DJ extends Registrant{
	
	/*First Name*/
	
	/*Last Name*/

	/*DJ Name*/
	var $dj_name_label = "DJ Name";
	var $dj_name;

	/*Audition Time First Choice*/
	var $time_first_label = "Audition Time First Choice";
	var $time_first;

	/*Audition Time Second Choice*/
	var $time_second_label = "Audition Time Second Choice";
	var $time_second;

	/*Number of Years DJing*/
	var $num_years_label = "DJing Experience";
	var $nuym_years;

	/*Music Hosting Services (optional)*/
	var $mus_host_serv_label = "Music Hosting Service (Optional)";
	var $mus_host_serv;
}
?>