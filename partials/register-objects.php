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
class Registrar extends Emergency{

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

	/* Gender */
	var $gender_label = "Gender";
	var $gender_male_label = "Male";
	var $gender_female_label = "Female";
	var $gender;
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

class Volunteer extends Registrar{
	/* Role */
	var $role = "Volunteer";
}

class Runner extends Registrar{
	/* Role */
	var $role = "Runner";
}
?>